


@extends('admin.layouts.header')

@section('content')
<div class="jStart">
<div class="formcard">
    <button><a href={{route('admin.articles.index')}}>Back</a></button>
    <h1>Add a new articles</h1>
    <form action={{route('admin.articles.store')}} method="POST" >
        @csrf
        <div>
            <p>Photo:</p>
            <input type="text" name="imgA" placeholder="Name of image..."><br>
        </div>
        <div>
            <p>Title:</p>
            <input type="text" name="titleA" placeholder="Harry Potter"><br>
        </div>
        <div>
            <p>Message:</p>
            <input type="text" name="messageA" placeholder="You can write smth here..."><br>
        </div>
        <div>
            <p>Article owner:</p>
            <input type="text" name="articleOwnerA" placeholder="John Doe..."><br>
        </div>

        <span><input type="submit" name="article" value="SEND"></span>
    </form>
</div>
</div>

@endsection
