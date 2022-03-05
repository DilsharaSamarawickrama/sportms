<?php


namespace App\Http\Controllers;


use App\Models\BloodGroup;
use App\Models\Designation;
use App\Models\Faculty;
use App\Models\Gender;
use App\Models\StudentGuardianInformation;
use App\Models\StudentPersonalDetail;
use Illuminate\Http\Request;

class StudentRegistrationController
{
    public function index()
    {
        $faculties = Faculty::all();
        $blood_groups = BloodGroup::all();
        $genders = Gender::all();
        $designations = Designation::all();
        return view('student_registration', compact(['faculties'=> 'faculties'], ['blood_groups'=> 'blood_groups'], ['genders'=>'genders'], ['designations'=>'designations']));
    }

    public function insert(Request $request)
    {

        $l1=$request->get('sline1');
        $l2=$request->get('sline2');
        $l3=$request->get('sline3');

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

        $student_personal_details = new StudentPersonalDetail([
            'studentId'=>$request->get('student_index'),
            'nic'=>$request->get('snic'),
            'designation'=>$request->get('sdesig'),
            'name'=>$request->get('sname'),
            'contact'=>$request->get('stelephone'),
            'email'=>$request->get('semail'),
            'birthday'=>$request->get('sbday'),
            'birthplace'=>$request->get('sbplace'),
            'gender'=>$request->get('sgender'),
            'blood_group'=>$request->get('blood_group'),
            'weight'=>$request->get('sweight'),
            'height'=>$request->get('sheight'),
            'address'=>$address,
            'category'=>"Normal",
            'faculty'=>$request->get('faculty')
        ]);

        $student_personal_details->save();

        $gl1=$request->get('eline1');
        $gl2=$request->get('eline2');
        $gl3=$request->get('eline3');

        if ($gl2!="")
        {
            if ($gl3!="")
            {
                $gaddress=$gl1.", ".$gl2.", ".$gl3;
            }
            else
            {
                $gaddress=$gl1.", ".$gl2;
            }
        }
        else
        {
            $gaddress=$gl1;
        }

        $student_emergency_contact_details=new StudentGuardianInformation([
            'studentId'=>$request->get('student_index'),
            'designation'=>$request->get('edesig'),
            'name'=>$request->get('ename'),
            'contact'=>$request->get('etelephone'),
            'email'=>$request->get('eemail'),
            'address'=>$gaddress
        ]);

        $student_emergency_contact_details->save();

        return back();
    }
}
