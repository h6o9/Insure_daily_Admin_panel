<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;


class UserCertificatesController extends Controller
{
    public function destroy($id)
    {
        Certificate::destroy($id);
        return redirect()->back()->with('message','File Deleted Successfully');
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $request->validate([
            'file' => 'required',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/images/users/'), $filename);
            $pdf = 'public/admin/assets/images/users/' . $filename;
        }
        // return $pdf;
        $new_file = Certificate::create([
            'user_id'=>$id,
            'file'=>$pdf,
        ]);
        // return $new_file;
        return redirect()->route('certificates.index',$id)->with('message','PDF Added Successfully');
    }
}
