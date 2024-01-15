


@extends('admin.layouts.header')

@section('content')
<div class="jStart">
<div class="formcard">
    <button><a href={{route('index')}}>Back</a></button>
    <h1>Add a new wins</h1>
    <form action={{route('store')}} method="POST" >
        @csrf
        <div>
            <p>Image:</p>
            <input type="text" name="imgW" placeholder="Name of image..."><br>
        </div>
        <div>
            <p>Title:</p>
            <input type="text" name="titleW" placeholder="Harry Potter"><br>
        </div>
        <div>
            <p>Message:</p>
            <input type="text" name="messageW" placeholder="You can write smth here..."><br>
        </div>
        <span><input type="submit" name="win" value="SEND"></span>
    </form>
</div>
</div>

@endsection
