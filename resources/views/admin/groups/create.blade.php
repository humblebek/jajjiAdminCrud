


@extends('admin.layouts.header')

@section('content')
<div class="jStart">
<div class="formcard">
    <button><a href={{route('admin.groups.index')}}>Back</a></button>
    <h1>Add a new achievments</h1>
    <form action={{route('admin.groups.store')}} method="POST" >
        @csrf
        <div>
            <p>Image:</p>
            <input type="text" name="imgG" placeholder="Name of image..."><br>
        </div>
        <div>
            <p>Title:</p>
            <input type="text" name="titleG" placeholder="Harry Potter"><br>
        </div>
        <div>
            <p>Message:</p>
            <input type="text" name="messageG" placeholder="You can write smth here..."><br>
        </div>
        <div>
            <p>Age:</p>
            <input type="text" name="AgeG" placeholder="age..."><br>
        </div>
        <div>
            <p>Seat:</p>
            <input type="number" name="seatG" placeholder="seat..."><br>
        </div>
        <div>
            <p>Time:</p>
            <input type="text" name="lessonTimeG" placeholder="11:00-12:00"><br>
        </div>
        <div>
            <p>Fee:</p>
            <input type="number" name="tutionFeeG" placeholder="100$..."><br>
        </div>
        <span><input type="submit" name="group" value="SEND"></span>
    </form>
</div>
</div>

@endsection
