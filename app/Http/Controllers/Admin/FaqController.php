<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FaqController extends Controller
{
    public function faqData()
    {
        $faqs = FAQ::orderBy('position')->get();
        $isAdmin = true;
            $canEdit = true;
            $canDelete = true;
            if (Auth::guard('admin')->check()) {
                $isAdmin = true;
            }
                return response()->json([
                    'data' => $faqs,
                    'isAdmin' => $isAdmin,
                    'permissions' => [
                        'can_edit' => $canEdit,
                        'can_delete' => $canDelete,
                    ]
                ]);
    }

    public function faqIndex()
    {
        $isAdmin = false;
        $canView = false;
        if (Auth::guard('admin')->check()) {
            $isAdmin = true;
        }
        elseif(Auth::guard('web')->check()){
            $user = Auth::guard('web')->user();
            $canView = $user->hasPermissionForMenuComponent('FAQ`s', 'add');
        }
        $faqs = FAQ::all();
        return view('admin.faq.index', compact('faqs','isAdmin','canView'));
    }

    public function faqCreate(){
        return view('admin.faq.create');
    }
    public function faqStore(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'questions' => 'required',
                'answers' => 'required',
            ], [
                // Custom validation messages
                'questions.required' => 'The Question field is required.',
                'answers.required' => 'The Answer field is required.',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $faq = new FAQ($request->only(['questions', 'answers']));
            $faq->save();
            $faqs = FAQ::all();
            return view('admin.faq.index', compact('faqs'))->with(['alert' => 'success', 'message' => 'Faq Created Successfully!']);
            return response()->json(['alert' => 'success', 'message' => 'faq Created Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'message' => 'An error occurred while Creating faq!' . $e->getMessage()], 500);
        }
    }

    public function editFaq($id){
        $data = FAQ::find($id);
        return view('admin.faq.edit', compact('data'));
    }
    public function showfaq($id)
    {
        $faq = FAQ::find($id);
        if (!$faq) {
            return response()->json(['alert' => 'error', 'message' => 'faq Not Found'], 500);
        }
        return response()->json($faq);
    }
    
    public function updatefaq(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'questions' => 'required',
            'answers' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {
            $faq = FAQ::findOrFail($id);
            $faq->fill($request->only(['questions', 'answers']));
            $faq->save();
            $faqs = FAQ::all();
            return redirect()->route('faq.index')->with(['message' => 'Faq Updated Successfully']);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'message' => 'An error occurred while updating Faq' . $e->getMessage()], 500);
        }
    }


    public function deletefaq($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();
        return response()->json(['alert' => 'success', 'message' => 'Faq Deleted SuccessFully!']);
    }

    public function faqReorder(Request $request)
    {


        foreach ($request->order as $item) {
            FAQ::where('id', $item['id'])->update(['position' => $item['position']]);
        }
        return response()->json(['message' => 'Order updated successfully']);
    }
}
