

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Wins About</h3>
                <button><a href={{route('index')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Image:</th>
                    <td><b>{{$win->photo}}</b></td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td><b>{{$win->title}}</b></td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td><b>{{$win->message}}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
