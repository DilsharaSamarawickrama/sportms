@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<style>
    #container{
        width: 30rem;
        margin: 0 auto;
        z-index: -1;
        align-content: center;
    }
</style>

@section('content')
    <div class="container">
        <form action="{{ route('insert_student_personal_details') }}" method="post">
            @csrf
            <legend>Personal Information</legend>
            <div class="row">
                <div class="col-md-6">
                    <label for="index">Student Index Number</label>
                    <input type="text" name="student_index">
                </div>
                <div class="col-md-6">
                    <label for="faculty">Faculty</label>
                    <select name="faculty">
                        @foreach($faculties as $faculties)
                            <option name="faculty" value="{{ $faculties->faculty }}">Faculty of {{ $faculties->faculty }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="designation">Designation</label>
                    <input type="radio" name="desig" value="Mr"> Mr.
                    <input type="radio" name="desig" value="Miss"> Miss.
                    <input type="radio" name="desig" value="Mrs"> Mrs.
                    <input type="radio" name="desig" value="Rev"> Rev.
                </div>
                <div class="col-md-8">
                    <label for="name">Full Name</label>
                    <input type="text" pattern="[a-zA-Z].{20,}" title="Please enter full name in english" name="name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                </div>
                <div class="col-md-4">
                    <label for="telephone">Telephone</label>
                    <input type="text" pattern="[0-9]{10}" title="Please enter your mobile phone number" name="telephone" id="mobile">
                </div>
                <div class="col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="address">Address</label>
                    <input type="text" name="line1" placeholder="Line 1">
                    <input type="text" name="line2" placeholder="Line 2">
                    <input type="text" name="line3" placeholder="Line 3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="nic">National ID</label>
                    <input type="text" name="nic">
                </div>
                <div class="col-md-4">
                    <label for="bday">Birth Day</label>
                    <input type="date" name="bday">
                </div>
                <div class="col-md-4">
                    <label for="bplace">Birth Place</label>
                    <input type="text" name="bplace" id="bplace">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="bgroup">Blood Group</label>
                    <select name="bgroup">
                        @foreach($blood_groups as $blood_groups)
                            <option name="bgroup" value="{{ $blood_groups->blood_group }}">{{ $blood_groups->blood_group }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="weight">Weight (KG)</label>
                    <input type="number" name="weight" id="weight" min="1">
                </div>
                <div class="col-md-4">
                    <label for="height">Height (CM)</label>
                    <input type="number" name="height" id="height" min="1">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" name="next">Next</button>
                </div>
            </div>
        </form>
    </div>
@endsection
