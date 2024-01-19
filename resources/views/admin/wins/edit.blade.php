
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('admin.wins.index')}}>Back</a></button>
        <h1>Edit wins</h1>

        <form action="{{route('admin.wins.update',$win->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Image:</p>
                <input type="text" name="imgW" value="{{$win->photo}}"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titleW" value="{{$win->title}}"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messageW" value="{{$win->message}}"><br>
            </div>
            <span><input type="submit" name="win" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



