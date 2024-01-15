

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href={{route('Tindex')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><b>{{$teachers->name}}</b></td>
                </tr>
                <tr>
                    <th>Occupation:</th>
                    <td><b>{{$teachers->occupation}}</b></td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td><b>{{ $teachers->status == 1 ? 'Dean' : 'Teacher' }}</b></td>
                </tr>

                <tr>
                    <th>Photo:</th>
                    <td><b>{{$teachers->photo}}</b></td>
                </tr>
                <tr>
                    <th>Telegram:</th>
                    <td><b>{{$teachers->telegram}}</b></td>
                </tr>
                <tr>
                    <th>Facebook:</th>
                    <td><b>{{$teachers->facebook}}</b></td>
                </tr>
                <tr>
                    <th>Instagram:</th>
                    <td><b>{{$teachers->instagram}}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
