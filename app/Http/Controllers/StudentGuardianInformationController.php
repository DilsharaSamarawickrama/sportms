<?php

namespace App\Http\Controllers;

use App\Models\StudentGuardianInformation;
use Illuminate\Http\Request;

class StudentGuardianInformationController extends Controller
{
    public function index()
    {
        return view('student_emergency_contact');
    }

    public function insert(Request $request)
    {
        $id=session('id');

        if (isset($_POST['next']))
        {
            $request->validate([
                'desig'=>'required',
                'name'=>'required',
                'telephone'=>'required',
                'email'=>'required',
                'line1'=>'required',
            ]);

            $l1=$request->get('line1');
            $l2=$request->get('line2');
            $l3=$request->get('line3');

            if ($l2!="")
            {
                if ($l3!="")
                {
                    $address=$l1.", ".$l2.", ".$l3;
                }
                else
                {
                    $address=$l1.", ".$l2;
                }
            }
            else
            {
                $address=$l1;
            }

            $student_emergency_contact_details=new StudentGuardianInformation([
                'studentId'=>$id,
                'designation'=>$request->get('desig'),
                'name'=>$request->get('name'),
                'contact'=>$request->get('telephone'),
                'email'=>$request->get('email'),
                'address'=>$address
            ]);

            $student_emergency_contact_details->save();

            return redirect()->action([StudentEducationHistoryController::class, 'index']);
        }
        elseif (isset($_POST['prev']))
        {
            return redirect()->action([StudentPersonalDetailController::class, 'index']);
        }
    }
}
