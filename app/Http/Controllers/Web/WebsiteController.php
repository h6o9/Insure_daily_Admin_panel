<?php

namespace App\Http\Controllers\Web;

use App\Models\Insurance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;


class WebsiteController extends Controller
{
    public function webIndex(){
        $faqs = FAQ::latest()->get();
        // return $faqs;
        return view('frontend.index',compact('faqs'));
    }
    public function searchBlade(){
        return view('website.search');
    }
    public function checkSearchData(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'dln' => 'nullable|string',
            'registration_mark' => 'required|string',
        ]);

        // Remove spaces from 'registration_mark' and 'dln'
        $inputRegistrationMark = str_replace(' ', '', $validatedData['registration_mark']);
        $inputDLN = isset($validatedData['dln']) ? str_replace(' ', '', $validatedData['dln']) : null;

        // Query the insurance data
        $query = Insurance::whereRaw("REPLACE(registration_mark, ' ', '') = ?", [$inputRegistrationMark])
            ->where('status', '1');

        if ($inputDLN) {
            $query->whereRaw("REPLACE(dln, ' ', '') = ?", [$inputDLN]);
        }

        $insuranceRecord = $query->first();

        // Return the result
        if ($insuranceRecord) {
            return response()->json([
                'success' => true,
                'data' => $insuranceRecord,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "{$validatedData['registration_mark']}",
            ]);
        }
    }
}
