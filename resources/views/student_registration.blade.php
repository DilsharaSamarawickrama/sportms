@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<style>
    .tab {
        display: none;
    }
</style>

@section('content')
    <div class="alrt" id="errmsg0" style="background: rgba(255,255,255,0.7); position: fixed;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Error!</strong> Please fill all the fields.
    </div>

    <div class="container">
        <form id="regForm" action="{{ route('register_student') }}" method="post">
            @csrf
            <div class="tab">
                <legend>Personal Information</legend>
                <div class="row">
                    <div class="col-md-4">
                        <label for="index">Student Index Number</label>
                        <input type="text" name="student_index" oninput="this.className = ''" id="sid" required>
                    </div>
                    <div class="col-md-8">
                        <label for="faculty">Faculty</label>
                        <select name="faculty" id="sfac">
                            <option disabled selected value="">Select your faculty</option>
                            @foreach($faculties as $faculties)
                                <option name="faculty" value="{{ $faculties->faculty }}" id="sfac">Faculty of {{ $faculties->faculty }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="designation">Designation</label>
                        <input type="radio" name="sdesig" value="Mr" oninput="this.className = ''" id="sdesig"> Mr.
                        <input type="radio" name="sdesig" value="Miss" oninput="this.className = ''" id="sdesig"> Miss.
                        <input type="radio" name="sdesig" value="Mrs" oninput="this.className = ''" id="sdesig"> Mrs.
                        <input type="radio" name="sdesig" value="Rev" oninput="this.className = ''" id="sdesig"> Rev.
                    </div>
                    <div class="col-md-8">
                        <label for="name">Full Name</label>
                        <input type="text" pattern="[a-zA-Z].{20,}" title="Please enter full name in english" name="sname" oninput="this.className = ''" id="sname">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="gender">Gender</label>
                        <input type="radio" name="sgender" value="Male" oninput="this.className = ''" id="sgender"> Male
                        <input type="radio" name="sgender" value="Female" oninput="this.className = ''" id="sgender"> Female
                    </div>
                    <div class="col-md-4">
                        <label for="telephone">Telephone</label>
                        <input type="text" pattern="[0-9]{10}" title="Please enter your mobile phone number" name="stelephone" oninput="this.className = ''" id="stelephone">
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email</label>
                        <input type="email" name="semail" id="semail" oninput="this.className = ''">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address">Address</label>
                        <input type="text" name="sline1" placeholder="Line 1" oninput="this.className = ''" id="sline1">
                        <input type="text" name="sline2" placeholder="Line 2" oninput="this.className = ''" id="sline2">
                        <input type="text" name="sline3" placeholder="Line 3" oninput="this.className = ''" id="sline3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="nic">National ID</label>
                        <input type="text" name="snic" maxlength="12" pattern="[0-9]{9}[v|V|x|X]|[0-9]{12}" title="Please enter valid National Identity Number" oninput="this.className = ''" id="snic">
                    </div>
                    <div class="col-md-4">
                        <label for="bday">Birth Day</label>
                        <input type="date" name="sbday" oninput="this.className = ''" id="sbday">
                    </div>
                    <div class="col-md-4">
                        <label for="bplace">Birth Place</label>
                        <input type="text" name="sbplace" oninput="this.className = ''" id="sbplace">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="bgroup">Blood Group</label>
                        <select name="blood_group" id="sblood_group">
                            <option disabled selected value="">Select your blood group</option>
                            @foreach($blood_groups as $blood_groups)
                                <option name="blood_group" value="{{ $blood_groups->blood_group }}" id="sblood_group">{{ $blood_groups->blood_group }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="weight">Weight (KG)</label>
                        <input type="number" name="sweight" oninput="this.className = ''" id="sweight">
                    </div>
                    <div class="col-md-4">
                        <label for="height">Height (CM)</label>
                        <input type="number" name="sheight" oninput="this.className = ''" id="sheight">
                    </div>
                </div>
            </div>

            <div class="tab">
                <legend>Emergency Contact Information</legend>
                <div class="row">
                    <div class="col-md-4">
                        <label for="designation">Designation</label>
                        <input type="radio" name="edesig" value="Mr" oninput="this.className = ''"> Mr.
                        <input type="radio" name="edesig" value="Miss" oninput="this.className = ''"> Miss.
                        <input type="radio" name="edesig" value="Mrs" oninput="this.className = ''"> Mrs.
                        <input type="radio" name="edesig" value="Rev" oninput="this.className = ''"> Rev.
                    </div>
                    <div class="col-md-8">
                        <label for="name">Full Name</label>
                        <input type="text" name="ename" oninput="this.className = ''">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="phone">Telephone</label>
                        <input type="tel" pattern="[0-9]{10}"  name="etelephone" oninput="this.className = ''">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="eemail" placeholder="Email is not compulsory" oninput="this.className = ''">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address">Address</label>
                        <input type="text" name="eline1" placeholder="Line 1" oninput="this.className = ''">
                        <input type="text" name="eline2" placeholder="Line 2" oninput="this.className = ''">
                        <input type="text" name="eline3" placeholder="Line 3" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="tab">
                <legend>Education History</legend>
                <div class="row">
                    <div class="col-md-6">
                        <label for="scl">School</label>
                        <input type="text" name="scl">
                    </div>
                    <div class="col-md-2">
                        <label for="from">From</label>
                        <input type="number" placeholder="YYYY" name="from">
                    </div>
                    <div class="col-md-2">
                        <label for="to">To</label>
                        <input type="number" placeholder="YYYY" name="to">
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button type="submit" name="add">Add</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="float: left;">Previous</button>
                </div>
            </div>

            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>

    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");

            if (n == 1 && !validateForm())
            {
                return false;
            }
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, i, valid = false, desig="", gender="";
            x = document.getElementsByClassName("tab");

            if (currentTab == 0)
            {
                var id=document.getElementById('sid').value;
                var fac=document.getElementById('sfac').value;
                var name=document.getElementById('sname').value;
                var telephone=document.getElementById('stelephone').value;
                var email=document.getElementById('semail').value;
                var l1=document.getElementById('sline1').value;
                var nic=document.getElementById('snic').value;
                var bday=document.getElementById('sbday').value;
                var bplace=document.getElementById('sbplace').value;
                var bgroup=document.getElementById('sblood_group').value;
                var weight=document.getElementById('sweight').value;
                var height=document.getElementById('sheight').value;

                var designation=document.querySelectorAll('input[name="sdesig"]');
                for (i = 0; i < designation.length; i++)
                {
                    if (designation[i].checked)
                    {
                        desig=designation[i].value;
                    }
                }

                var sgender=document.querySelectorAll('input[name="sgender"]');
                for (i = 0; i < sgender.length; i++)
                {
                    if (sgender[i].checked)
                    {
                        gender=sgender[i].value;
                    }
                }

               if (id != "" && fac != "" && name != "" && telephone != "" && email != "" && l1 != "" && nic != "" && bday != "" && bplace != "" && bgroup != "" && weight != "" && height != "" && desig != "" && gender != "")
               {
                   valid = true;
               }
               else{
                   document.getElementById('errmsg0').style.display ='block';
               }
            }
            if(currentTab == 1)
            {
                var ename=document.getElementById('ename').value;
                var etelephone=document.getElementById('etelephone').value;
                var el1=document.getElementById('eline1').value;

                var edesignation=document.querySelectorAll('input[name="edesig"]');
                for (i = 0; i < edesignation.length; i++)
                {
                    if (edesignation[i].checked)
                    {
                        desig=edesignation[i].value;
                    }
                }

                if (ename != "" && etelephone != "" && el1 != "" && desig != "")
                {
                    valid = true;
                }
                else{
                    document.getElementById('errmsg0').style.display ='block';
                }
            }

            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>
@endsection


