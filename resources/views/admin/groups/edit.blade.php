
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('Gindex')}}>Back</a></button>
        <h1>Edit Groups</h1>

        <form action="/admin/groups/update/{{$groups->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Image:</p>
                <input type="text" name="imgG" value="{{$groups->photo}}" placeholder="Name of image..."><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titleG"value="{{$groups->title}}" placeholder="Harry Potter"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messageG"value="{{$groups->message}}" placeholder="You can write smth here..."><br>
            </div>
            <div>
                <p>Age:</p>
                <input type="text" name="AgeG" value="{{$groups->age}}"placeholder="age..."><br>
            </div>
            <div>
                <p>Seat:</p>
                <input type="number" name="seatG" value="{{$groups->seat}}" placeholder="seat..."><br>
            </div>
            <div>
                <p>Time:</p>
                <input type="text" name="lessonTimeG"value="{{$groups->lessonTime}}" placeholder="11:00-12:00"><br>
            </div>
            <div>
                <p>Fee:</p>
                <input type="number" name="tutionFeeG" value="{{$groups->tutionFee}}" placeholder="100$..."><br>
            </div>
            <span><input type="submit" name="group" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



