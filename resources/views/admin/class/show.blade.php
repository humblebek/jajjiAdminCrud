

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href={{route('admin.class.index')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><b>{{$class->name}}</b></td>
                </tr>
                <tr>
                    <th>Phone Number:</th>
                    <td><b>{{$class->phoneNum}}</b></td>
                </tr>
                <tr>
                    <th>Class:</th>
                    <td><b>{{ $class->class == 1 ? "Bo'g'irsoq" : "Alpomish" }}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
