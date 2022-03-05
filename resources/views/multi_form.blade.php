<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<style>
    .tab {
        display: none;
    }

</style>
<body>

<form id="regForm" action="/action_page.php">
    <div class="tab">
        <legend>Personal Information</legend>
        <legend>Personal Information</legend>
        <div class="row">
            <div class="col-md-6">
                <label for="index">Student Index Number</label>
                <input type="text" name="student_index" oninput="this.className = ''">
            </div>
            <div class="col-md-6">
                <label for="faculty">Faculty</label>
                <select name="faculty">
                    <option disabled selected>Select your faculty</option>
                    {{--                            @foreach($faculties as $faculties)--}}
                    {{--                                <option name="faculty" value="{{ $faculties->faculty }}">Faculty of {{ $faculties->faculty }}</option>--}}
                    {{--                            @endforeach--}}
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="designation">Designation</label>
                <input type="radio" name="sdesig" value="Mr" oninput="this.className = ''"> Mr.
                <input type="radio" name="sdesig" value="Miss" oninput="this.className = ''"> Miss.
                <input type="radio" name="sdesig" value="Mrs" oninput="this.className = ''"> Mrs.
                <input type="radio" name="sdesig" value="Rev" oninput="this.className = ''"> Rev.
            </div>
            <div class="col-md-8">
                <label for="name">Full Name</label>
                <input type="text" pattern="[a-zA-Z].{20,}" title="Please enter full name in english" name="sname" oninput="this.className = ''">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="gender">Gender</label>
                <input type="radio" name="sgender" value="Male" oninput="this.className = ''"> Male
                <input type="radio" name="sgender" value="Female" oninput="this.className = ''"> Female
            </div>
            <div class="col-md-4">
                <label for="telephone">Telephone</label>
                <input type="text" pattern="[0-9]{10}" title="Please enter your mobile phone number" name="stelephone" id="mobile" oninput="this.className = ''">
            </div>
            <div class="col-md-4">
                <label for="email">Email</label>
                <input type="email" name="semail" id="email" oninput="this.className = ''">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="address">Address</label>
                <input type="text" name="sline1" placeholder="Line 1" oninput="this.className = ''">
                <input type="text" name="sline2" placeholder="Line 2" oninput="this.className = ''">
                <input type="text" name="sline3" placeholder="Line 3" oninput="this.className = ''">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="nic">National ID</label>
                <input type="text" name="snic" maxlength="12" pattern="[0-9]{9}[v|V|x|X]|[0-9]{12}" title="Please enter valid National Identity Number" oninput="this.className = ''">
            </div>
            <div class="col-md-4">
                <label for="bday">Birth Day</label>
                <input type="date" name="sbday" oninput="this.className = ''">
            </div>
            <div class="col-md-4">
                <label for="bplace">Birth Place</label>
                <input type="text" name="sbplace" id="bplace" oninput="this.className = ''">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="bgroup">Blood Group</label>
                <select name="bgroup">
                    {{--                            @foreach($blood_groups as $blood_groups)--}}
                    {{--                                <option name="bgroup" value="{{ $blood_groups->blood_group }}">{{ $blood_groups->blood_group }}</option>--}}
                    {{--                            @endforeach--}}
                </select>
            </div>
            <div class="col-md-4">
                <label for="weight">Weight (KG)</label>
                <input type="number" name="sweight" id="weight" oninput="this.className = ''">
            </div>
            <div class="col-md-4">
                <label for="height">Height (CM)</label>
                <input type="number" name="sheight" id="height" oninput="this.className = ''">
            </div>
        </div>
    </div>
    <div class="tab">Contact Info:
        <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
        <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
    </div>
    <div class="tab">Birthday:
        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
        <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
    </div>
    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
    </div>
    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="p"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="z" type="password"></p>
    </div>
    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="s"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="r" type="password"></p>
    </div>
    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="y"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="m" type="password"></p>
    </div>
    <div>
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
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
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

</body>
</html>
