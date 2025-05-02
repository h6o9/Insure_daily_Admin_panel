<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;


class AuthController extends Controller
{ 
    public function loginpage(){
        return view('user.auth.login');
    }
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $exist = User::where('email',$request->email)->first();
        // if($exist->is_active == '1'){
        //     return redirect('/user-login')->with('message' , 'Your Account is Deactivated by Admin');
        // } 
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            // return $credentials;
            // Authentication passed...
            // return "ok";
            return redirect('user/dashboard')->with('message', 'Login Successfully');
        } else {
            return redirect('/user-login')->with('message' , 'Invalid Email or Password');
        }
    }

    public function forgetPassword(){
        return view('user.auth.forgetPassword');
    }
    public function userResetPasswordLink(Request $request)
    {
        // Validate email field
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'The provided email does not exist in our records.',
                ], 404); // HTTP 404 for not found
            }
        }
        // Check if reset link already exists
        $exists = DB::table('password_resets')->where('email', $request->email)->first();
        if ($exists) {
            return response()->json([
                'status' => 'error',
                'message' => 'A reset password link has already been sent to this email.',
            ], 400); // HTTP 400 for bad request
        } else {
            // Generate token and store it
            $token = Str::random(30);
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
            ]);

            $data['url'] = url('user-change-password', $token);
            // Uncomment the following line to send the email
            Mail::to($request->email)->send(new ResetPasswordMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'A reset password link has been sent successfully.',
            ], 200); // HTTP 200 for success
        }
    }


    public function change_password($id)
    {

        $user = DB::table('password_resets')->where('token',$id)->first();

        if(isset($user))
        {
            return view('user.auth.chnagePassword',compact('user'));
        }
    }

    public function resetPassword (Request $request)
    {
       $request->validate([
            'password' => 'required|min:8',
            'confirmed' => 'required',

        ]);
       if ($request->password !=$request->confirmed)
       {

           return back()->with(['error_message' => 'Password not matched']);
       }
        $password=bcrypt($request->password);
        $tags_data = [
            'password' => bcrypt($request->password)
        ];
        if (User::where('email',$request->email)->update($tags_data)){
            DB::table('password_resets')->where('email',$request->email)->delete();
            return redirect('user-login');
        }
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('user-login');
    }
}
