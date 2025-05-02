<?php

namespace App\Http\Controllers\Admin;

use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InsuranceCreate;

class InsurancesController extends Controller
{
    public function insuranceIndex(){
        return view('admin.insurance.index');
    }
    public function insuranceData()
    {
        $insuranceDatas = Insurance::latest()->get();
        $json_data["data"] = $insuranceDatas;
        return json_encode($json_data);
    }
    public function insuranceCreate(InsuranceCreate $request)
    {
        try {
            $insuranceData = new Insurance($request->only(['dln', 'registration_mark', 'status']));
            $insuranceData->save();
            return response()->json(['alert' => 'success', 'message' => 'Insurance Created Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'message' => 'An error occurred while Creating Insurance!' . $e->getMessage()], 500);
        }
    }

    public function showInsurance($id)
    {
        $insuranceData = Insurance::find($id);
        if (!$insuranceData) {
            return response()->json(['alert' => 'error', 'message' => 'Insurance Not Found'], 500);
        }
        return response()->json($insuranceData);
    }
    public function updateInsurance(InsuranceCreate $request, $id)
    {

        try {
            $insuranceData = Insurance::findOrFail($id);
            $insuranceData->fill($request->only(['dln', 'registration_mark', 'status']));
            $insuranceData->save();
            return response()->json(['alert' => 'success', 'message' => 'Insurance Updated Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'message' => 'An error occurred while updating Sub Admin' . $e->getMessage()], 500);
        }
    }

    public function deleteInsurance($id)
    {
        $insuranceData = Insurance::findOrFail($id);
        $insuranceData->delete();
        return response()->json(['alert' => 'success', 'message' => 'Insurance Deleted SuccessFully!']);
    }
    public function updateInsuranceStatus(Request $request, $id)
    {
        try {
            $insuranceData = Insurance::findOrFail($id);
            if ($insuranceData->status == '0') {
                $insuranceData->status = '1';
                $message = 'Insurance Active Successfully';
            } else if ($insuranceData->status == '1') {
                $insuranceData->status = '0';
                $message = 'Insurance In Active Successfully';
            } else {
                return response()->json(['alert' => 'info', 'error' => 'User status is already updated or cannot be updated.']);
            }
            $insuranceData->save();
            return response()->json(['alert' => 'success', 'message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['alert' => 'error', 'error' => 'An error occurred while updating user status.']);
        }
    }
}
