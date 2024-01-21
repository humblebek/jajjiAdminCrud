

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href={{route('admin.groups.index')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Image:</th>
                    <td><b>{{$group->photo}}</b></td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td><b>{{$group->title}}</b></td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td><b>{{$group->message}}</b></td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td><b>{{$group->age}}</b></td>
                </tr>
                <tr>
                    <th>Seat:</th>
                    <td><b>{{$group->seat}}</b></td>
                </tr>
                <tr>
                    <th>Time:</th>
                    <td><b>{{$group->lessonTime}}</b></td>
                </tr>
                <tr>
                    <th>Fee:</th>
                    <td><b>{{$group->tutionFee}}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
