<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Certificate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreate;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Mail\userPasswordEmail;


class UserController extends Controller
{
    public function userIndex()
    {
        return view('admin.users.index');
    }
    public function UserData()
    {
        $users = User::latest()->get();
        $json_data["data"] = $users;
        return json_encode($json_data);
    }
    public function userCreate(UserCreate $request)
    {
        try {
            $user = new User($request->only(['name', 'email', 'is_active','address','phone','dob','licence_type']));
            // $generatedPassword = Str::random($request->password);
            $user->password = Hash::make($request->password);
            $user->code = $request->password;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/assets/images/users'), $filename);
                $user->image = 'public/admin/assets/images/users/' . $filename;
            }
            $user->save();
            // Mail::to($request->email)->send(new userPasswordEmail($request->password));
            return response()->json(['alert' => 'success', 'message' => 'User Created Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'message' => 'An error occurred while Creating User!' . $e->getMessage()], 500);
        }
    }

    public function showUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['alert' => 'error', 'message' => 'User Not Found'], 500);
        }
        return response()->json($user);
    }
    public function updateUser(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->fill($request->only(['name', 'email', 'is_active','address','phone','dob','licence_type']));
            // $generatedPassword = Str::random($request->password);
            $user->password = Hash::make($request->password);
            $user->code = $request->password;
            if ($request->hasFile('image')) {
                $oldImagePath =   $user->image;
                if ($user->image &&  File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/assets/images/users'), $filename);
                $user->image = 'public/admin/assets/images/users/' . $filename;
            }
            $user->save();
            Mail::to($request->email)->send(new userPasswordEmail($request->password));
            return response()->json(['alert' => 'success', 'message' => 'User Updated Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'message' => 'An error occurred while updating Sub Admin' . $e->getMessage()], 500);
        }
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $oldImagePath =   $user->image;
        if ($user->image &&  File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }
        $user->delete();
        return response()->json(['alert' => 'success', 'message' => 'User Deleted SuccessFully!']);
    }
    public function updateUserStatus(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            if ($user->is_active == '0') {
                $user->is_active = '1';
                $message = 'User Active Successfully';
            } else if ($user->is_active == '1') {
                $user->is_active = '0';
                $message = 'User In Active Successfully';
            } else {
                return response()->json(['alert' => 'info', 'error' => 'User status is already updated or cannot be updated.']);
            }
            $user->save();
            return response()->json(['alert' => 'success', 'message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'error' => 'An error occurred while updating user status.']);
        }
    }

    public function userCertificates($id){
        $user_files = Certificate::with('user')->where('user_id',$id)->orderBy('created_at','desc')->get();
        return view('admin.users.files.index',compact('user_files','id'));
    }

    public function certificateCretePage($id){
        return view('admin.users.files.create',compact('id'));
    }
}
