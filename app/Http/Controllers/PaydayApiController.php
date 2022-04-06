<?php

namespace App\Http\Controllers;
use App\Models\Payday;
use App\Models\Cleanpayday;
use DB;

use Illuminate\Http\Request;

class PaydayApiController extends Controller
{
    public function getAllStaff() {
        // logic to get all staff goes here
        $allstaffs = Payday::limit(10)->get()->toJson(JSON_PRETTY_PRINT);
        return response($allstaffs, 200);
      }


      public function getStaff($id) {
        // logic to get a staff record goes here
        if (Payday::where('employee_number', $id)->exists()) {
            $staff = Payday::where('employee_number', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($staff, 200);
          } else {
            return response()->json([
              "message" => "staff not found"
            ], 404);
          }
      }


      public function getWacsStaff($id) {


         // logic to get a staff record goes here
         if (Cleanpayday::where('employee_number', $id)->exists()) {
            $staff = Cleanpayday::query()
            ->select(['employee_number', 'first_name',  ])
            ->where('employee_number', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($staff, 200);
          } else {
            $staff = "no clean record";
          }

        // logic to get a staff record goes here
        if ($staff == "no clean record" && Payday::where('employee_number', $id)->exists()) {
            $staff1 = Payday::query()
            ->select(['employee_number', 'first_name', 'middle_name', 'last_name',  ])
            ->where('employee_number', $id)->get()->toJson(JSON_PRETTY_PRINT);
            // $staff2 = ([
            //     "message" => "staff not found"
            //   ]);
         //   $staff3 = array_merge($staff2,$staff1) ;
            return response( $staff1, 200);
          } else {
            return response()->json([
              "message" => "staff not found"
            ], 404);
          }
      }


      public function getWacsStaffLoan($id) {


        // logic to get a staff record goes here
        if (DB::table('payday_loanresults')->where('ippis_number', $id)->exists()) {
           $staff = DB::table('payday_loanresults')
           ->select(['ippis_number', 'employee_name', 'employee_mda', 'deduction_type', 'element_name', 'loan_amount','loan_start_date', 'loan_end_date',  ])
           ->where('ippis_number', $id)->get()->toJson(JSON_PRETTY_PRINT);
           return response($staff, 200);
         } else {
            return response()->json([
                "message" => "staff loan record not found"
              ], 404);
         }



}
}
