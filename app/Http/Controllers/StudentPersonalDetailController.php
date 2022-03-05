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

//        $l1=$request->get('line1');
//        $l2=$request->get('line2');
//        $l3=$request->get('line3');
//
//        if ($l2!="")
//        {
//            if ($l3!="")
//            {
//                $address=$l1.", ".$l2.", ".$l3;
//            }
//            else
//            {
//                $address=$l1.", ".$l2;
//            }
//        }
//        else
//        {
//            $address=$l1;
//        }

        session(['id'=>$request->get('student_index')]);
        session(['snic'=>$request->get('nic')]);
        session(['sdesig'=>$request->get('desig')]);
        session(['sname'=>$request->get('name')]);
        session(['sgender'=>$request->get('gender')]);
        session(['stelephone'=>$request->get('telephone')]);
        session(['semail'=>$request->get('email')]);
        session(['sbday'=>$request->get('bday')]);
        session(['sbplace'=>$request->get('bplace')]);
        session(['sbgroup'=>$request->get('bgroup')]);
        session(['sweight'=>$request->get('weight')]);
        session(['sheight'=>$request->get('height')]);
        session(['sl1'=>$request->get('line1')]);
        session(['sl2'=>$request->get('line2')]);
        session(['sl3'=>$request->get('line3')]);
        session(['scategory'=>'Normal']);
        session(['sfaculty'=>$request->get('faculty')]);

//        $student_personal_details=new StudentPersonalDetail([
//            'studentId'=>$id,
//            'nic'=>$request->get('nic'),
//            'designation'=>$request->get('desig'),
//            'name'=>$request->get('name'),
//            'contact'=>$request->get('gender'),
//            'email'=>$request->get('email'),
//            'birthday'=>$request->get('bday'),
//            'birthplace'=>$request->get('bplace'),
//            'gender'=>$request->get('gender'),
//            'blood_group'=>$request->get('bgroup'),
//            'weight'=>$request->get('weight'),
//            'height'=>$request->get('height'),
//            'address'=>$address,
//            'category'=>"Normal",
//            'faculty'=>$request->get('faculty')
//        ]);
//
//        $student_personal_details->save();

        return redirect()->action([StudentGuardianInformationController::class, 'index']);
    }
}
