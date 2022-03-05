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
                        <input type="text" name="student_index" id="sid" required>
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
                        @foreach($designations as $designations)
                            <input type="radio" name="sdesig" value="{{ $designations->designation }}" id="sdesig"> {{ $designations->designation }}
                        @endforeach
                    </div>
                    <div class="col-md-8">
                        <label for="name">Full Name</label>
                        <input type="text" pattern="[a-zA-Z].{20,}" title="Please enter full name in english" name="sname" id="sname">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="gender">Gender</label>
                        @foreach($genders as $genders)
                            <input type="radio" name="sgender" value="{{ $genders->gender }}" id="sgender"> {{ $genders->gender }}
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <label for="telephone">Telephone</label>
                        <input type="text" pattern="[0-9]{10}" title="Please enter your mobile phone number" name="stelephone" id="stelephone">
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email</label>
                        <input type="email" name="semail" id="semail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address">Address</label>
                        <input type="text" name="sline1" placeholder="Line 1" id="sline1">
                        <input type="text" name="sline2" placeholder="Line 2" id="sline2">
                        <input type="text" name="sline3" placeholder="Line 3" id="sline3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="nic">National ID</label>
                        <input type="text" name="snic" maxlength="12" pattern="[0-9]{9}[v|V|x|X]|[0-9]{12}" title="Please enter valid National Identity Number" id="snic">
                    </div>
                    <div class="col-md-4">
                        <label for="bday">Birth Day</label>
                        <input type="date" name="sbday" id="sbday">
                    </div>
                    <div class="col-md-4">
                        <label for="bplace">Birth Place</label>
                        <input type="text" name="sbplace" id="sbplace">
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
                        <input type="number" name="sweight" id="sweight">
                    </div>
                    <div class="col-md-4">
                        <label for="height">Height (CM)</label>
                        <input type="number" name="sheight" id="sheight">
                    </div>
                </div>
            </div>

            <div class="tab">
                <legend>Emergency Contact Information</legend>
                <div class="row">
                    <div class="col-md-4">
                        <label for="designation">Designation</label>
                        <input type="radio" name="edesig" value="Mr"> Mr.
                        <input type="radio" name="edesig" value="Miss"> Miss.
                        <input type="radio" name="edesig" value="Mrs"> Mrs.
                        <input type="radio" name="edesig" value="Rev"> Rev.
                    </div>
                    <div class="col-md-8">
                        <label for="name">Full Name</label>
                        <input type="text" name="ename">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="phone">Telephone</label>
                        <input type="tel" pattern="[0-9]{10}"  name="etelephone">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="eemail" placeholder="Email is not compulsory">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address">Address</label>
                        <input type="text" name="eline1" placeholder="Line 1">
                        <input type="text" name="eline2" placeholder="Line 2">
                        <input type="text" name="eline3" placeholder="Line 3">
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
                        <input type="number" placeholder="YYYY" name="fromy">
                    </div>
                    <div class="col-md-2">
                        <label for="to">To</label>
                        <input type="number" placeholder="YYYY" name="toy">
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button type="submit" name="add_scl">Add</button>
                    </div>
                </div>
            </div>

            <div class="tab">
                <legend>Sports Information</legend>
                <strong>Sports Participation</strong>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="scl">School</label>
                        <select name="scl">
                            <option>Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="sprt">Sport</label>
                        <select name="sprt">
                            <option>Select</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="lvl">Level</label>
                        <select name="lvl">
                            <option>Select:</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="achievement">Achievement</label>
                        <input type="text" name="ach">
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button type="submit" name="addparticipated">Add</button>
                    </div>
                </div>

                <br>
                <strong>Sports which are willing to do in university life</strong>
                <br>

                <div class="row">
                    <div class="col-md-10">
                        <select name="sport">
                            <option>Select sports as priority:</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="addsports">Add</button>
                    </div>
                </div>

                <br>
                <strong>If you have any Health Conditions, Attach your medical evedence</strong>
                <div class="row">
                    <div class="col-md-4">
                        <label for="file">Select your medical</label>
                        <input type="file"  name="fileToUpload">
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button type="submit" name="uploadFile">Upload</button>
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

            // if (n == 1 && !validateForm())
            // {
            //     document.getElementById('errmsg0').style.display ='block';
            //     return false;
            // }
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);

            // alert(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
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
