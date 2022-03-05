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
        <form method="post" action="{{ route('insert_student_emergency_contact_details') }}">
            @csrf
            <legend>Emergency Contact Information</legend>
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
                    <input type="text" name="name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="phone">Telephone</label>
                    <input type="tel" pattern="[0-9]{10}"  name="telephone">
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email is not compulsory">
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
            <br>
            <div class="row">
                <div class="col-md-12">
                    <button name="next">Next</button>
                    <button name="prev" style="float: left;">Previous</button>
                </div>
            </div>
        </form>
    </div>
@endsection
