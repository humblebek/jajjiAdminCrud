
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('admin.groups.index')}}>Back</a></button>
        <h1>Edit Groups</h1>

        <form action="{{route('admin.groups.update',$group->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Image:</p>
                <input type="text" name="imgG" value="{{$group->photo}}" placeholder="Name of image..."><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titleG"value="{{$group->title}}" placeholder="Harry Potter"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messageG"value="{{$group->message}}" placeholder="You can write smth here..."><br>
            </div>
            <div>
                <p>Age:</p>
                <input type="text" name="AgeG" value="{{$group->age}}"placeholder="age..."><br>
            </div>
            <div>
                <p>Seat:</p>
                <input type="number" name="seatG" value="{{$group->seat}}" placeholder="seat..."><br>
            </div>
            <div>
                <p>Time:</p>
                <input type="text" name="lessonTimeG"value="{{$group->lessonTime}}" placeholder="11:00-12:00"><br>
            </div>
            <div>
                <p>Fee:</p>
                <input type="number" name="tutionFeeG" value="{{$group->tutionFee}}" placeholder="100$..."><br>
            </div>
            <span><input type="submit" name="group" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



