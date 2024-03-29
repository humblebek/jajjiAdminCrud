
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('admin.teachers.index')}}>Back</a></button>
        <h1>Edit Teachers</h1>

        <form action="{{route('admin.teachers.update',$teacher->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Name:</p>
                <input type="text" name="nameT" value="{{$teacher->name}}" placeholder="Name..."><br>
            </div>
            <div>
                <p>Occupation:</p>
                <input type="text" name="occupationT" value="{{$teacher->occupation}}" placeholder="Software"><br>
            </div>
            <div>
                <p>Status:</p>
                <select name="statusT">
                    <option value="1" {{ $teacher->status == 1 ? 'selected' : '' }}>Dean</option>
                    <option value="0" {{ $teacher->status == 0 ? 'selected' : '' }}>Teacher</option>
                </select>
            </div>
            <div>
                <p>Photo:</p>
                <input type="text" name="imgT" value="{{$teacher->photo}}" placeholder="photo..."><br>
            </div>
            <div>
                <p>Telegram:</p>
                <input type="text" name="telegram" value="{{$teacher->telegram}}" placeholder="telegram..."><br>
            </div>
            <div>
                <p>Facebook:</p>
                <input type="text" name="facebook" value="{{$teacher->facebook}}" placeholder="facebook..."><br>
            </div>
            <div>
                <p>Instagram:</p>
                <input type="text" name="instagram"  value="{{$teacher->instagram}}" placeholder="instagram..."><br>
            </div>
            <span><input type="submit" name="teacher" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



