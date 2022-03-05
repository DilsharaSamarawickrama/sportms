<?php

namespace App\Http\Controllers;

use App\Models\StudentEducationHistory;
use Illuminate\Http\Request;

class StudentEducationHistoryController extends Controller
{
    public function index()
    {
        return view('student_educational_history');
    }

    public function insert(Request $request)
    {
        $id=session('id');

        if (isset($_POST['add']))
        {
            $request->validate([
                'scl'=>'required',
                'from'=>'required',
                'to'=>'required'
            ]);

            $student_education_history=new StudentEducationHistory([
                'studentId'=>$id,
                'school'=>$request->get('scl'),
                'from_year'=>$request->get('from'),
                'to_year'=>$request->get('to')
            ]);

            $student_education_history->save();

            return back();
        }
        elseif (isset($_POST['next']))
        {

        }
        elseif (isset($_POST['prev']))
        {
            
        }

    }
}
