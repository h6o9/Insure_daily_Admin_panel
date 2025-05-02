<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Certificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
      
    public function getDashboard(){
        return view('user.index');
    }
    public function getProfile(){
        $data=User::find(Auth::guard('web')->id());
        $data->date = $data->date ? $data->date->format('Y-m-d') : '';
        return view('user.auth.profile',compact('data'));
    }

    public function update_profile(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $user = User::where('email', $request->email)->first();

        $data = $request->only(['name', 'email', 'phone', 'address', 'licence_type', 'dob']);
        
        if ($request->hasFile('image')) {
            $oldImagePath = $user->image;
            
            // Delete the old image if it exists
            if ($oldImagePath && File::exists(public_path($oldImagePath))) {
                File::delete(public_path($oldImagePath));
            }
            
            // Save the new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/assets/images/users'), $filename);
            
            // Update the image path in the data array
            $data['image'] = 'public/admin/assets/images/users/' . $filename;
        }
        
        // Update user data
        $user->update($data);
        
        User::find(Auth::guard('web')->id())->update($data);
        return back()->with(['status'=>true, 'message' => 'Profile Updated Successfully']);
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('user-login');
    }
    public function userCertificates()
    {
        $user = Auth::guard('web')->user();
        $user_files = Certificate::where('user_id', $user->id)
            ->latest()
            ->get();
        return view('user.files.index', compact('user_files'));
    }

    public function downlaod($id)
    {
        // return $id;
        $path = public_path('admin/assets/images/users/' . $id);
        // return $path;
        return response()->download($path);
    }

    public function errorPage(){
        return view('user.error');
    }

    public function maketingView() {
        return view('user.maketing');
    }
}
