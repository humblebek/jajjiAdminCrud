


@extends('admin.layouts.header')

@section('content')
<div class="jStart">
<div class="formcard">
    <button><a href={{route('Tindex')}}>Back</a></button>
    <h1>Add a new teachers</h1>
    <form action={{route('Tstore')}} method="POST" >
        @csrf
        <div>
            <p>Name:</p>
            <input type="text" name="nameT" placeholder="Name..."><br>
        </div>
        <div>
            <p>Occupation:</p>
            <input type="text" name="occupationT" placeholder="Software"><br>
        </div>
        <div>
            <p>Status:</p>
            <select name="statusT">
                <option value="1">Dean</option>
                <option value="0">Teacher</option>
            </select>
        </div>
        <div>
            <p>Photo:</p>
            <input type="text" name="imgT" placeholder="photo..."><br>
        </div>
        <div>
            <p>Telegram:</p>
            <input type="text" name="telegram" placeholder="telegram..."><br>
        </div>
        <div>
            <p>Facebook:</p>
            <input type="text" name="facebook" placeholder="facebook..."><br>
        </div>
        <div>
            <p>Instagram:</p>
            <input type="text" name="instagram" placeholder="unstagram..."><br>
        </div>
        <span><input type="submit" name="teacher" value="SEND"></span>
    </form>
</div>
</div>

@endsection
