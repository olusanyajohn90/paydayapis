<?php

namespace App\Http\Controllers;
use App\Models\Payday;

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
        if (Payday::where('employee_number', $id)->exists()) {
            $staff = Payday::query()
            ->select(['employee_number', 'first_name', 'middle_name', 'last_name',  ])
            ->where('employee_number', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($staff, 200);
          } else {
            return response()->json([
              "message" => "staff not found"
            ], 404);
          }
      }




}
