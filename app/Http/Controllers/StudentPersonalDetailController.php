<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\Faculty;
use App\Models\StudentPersonalDetail;
use Illuminate\Http\Request;

class StudentPersonalDetailController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        $blood_groups = BloodGroup::all();
        return view('student_personal_details', compact(['faculties'=> 'faculties'], ['blood_groups'=> 'blood_groups']));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'student_index'=>'required',
            'faculty'=>'required',
            'desig'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'line1'=>'required',
            'nic'=>'required',
            'bday'=>'required',
            'bplace'=>'required',
            'bgroup'=>'required',
            'weight'=>'required',
            'height'=>'required'
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

        $student_personal_details=new StudentPersonalDetail([
            'studentId'=>$request->get('student_index'),
            'nic'=>$request->get('nic'),
            'designation'=>$request->get('desig'),
            'name'=>$request->get('name'),
            'contact'=>$request->get('gender'),
            'email'=>$request->get('email'),
            'birthday'=>$request->get('bday'),
            'birthplace'=>$request->get('bplace'),
            'gender'=>$request->get('gender'),
            'blood_group'=>$request->get('bgroup'),
            'weight'=>$request->get('weight'),
            'height'=>$request->get('height'),
            'address'=>$address,
            'category'=>"Normal",
            'faculty'=>$request->get('faculty')
        ]);

        $student_personal_details->save();

        return back();
    }
}
