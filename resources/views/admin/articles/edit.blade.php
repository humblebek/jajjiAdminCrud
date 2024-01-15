
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('Aindex')}}>Back</a></button>
        <h1>Edit Articles</h1>

        <form action="/admin/articles/update/{{$articles->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Image:</p>
                <input type="text" name="imgA" value="{{$articles->photo}}" placeholder="Name of image..."><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titleA"value="{{$articles->title}}" placeholder="Harry Potter"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messageA"value="{{$articles->message}}" placeholder="You can write smth here..."><br>
            </div>
            <div>
                <p>Article Owner:</p>
                <input type="text" name="articleOwnerA" value="{{$articles->articleOwner}}"placeholder="John Doe..."><br>
            </div>
            <div>
            <span><input type="submit" name="article" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



