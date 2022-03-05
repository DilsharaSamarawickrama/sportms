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
        <form method="post" action="{{ route('insert_student_educational_history_details') }}">
            @csrf
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
{{--            <div class="row">--}}
{{--                <div class="col-md-6"><?php echo $row['school']; ?></div>--}}
{{--                <div class="col-md-2"><?php echo $row['fromyear']; ?></div>--}}
{{--                <div class="col-md-2"><?php echo $row['toyear']; ?></div>--}}
{{--                <?php--}}
{{--                echo " <div class='col-md-2'><a href='' style='color: #692123; text-decoration: none; width: 40px;'>Remove</a></div>";--}}
{{--                ?>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" name="next">Next</button>
                    <button type="submit" name="prev" style="float: left;">Previous</button>
                </div>
            </div>
        </form>
    </div>
@endsection
