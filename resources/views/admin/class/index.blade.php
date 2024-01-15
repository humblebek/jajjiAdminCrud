
@extends('admin.layouts.header')

@section('content')
<!-- MAIN -->
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Book Class</h3>
                {{-- <button><a href={{route('Ccreate')}}>Add</a></button> --}}
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Class</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($class as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->name}}</p></td>
                        <td><p>{{$item->phoneNum}}</p></td>
                        <td><p>{{ $item->class == 1 ? "Bo'g'irsoq" : "Alpomish" }}</p></td>

                        <td style="display: flex">

                            <button style="background-color: green;"><a class="btn btn-succes" href="/admin/class/show/{{$item->id}}"> <ion-icon name = "eye-outline"></ion-icon></a></button>
                            <form action="/admin/class/delete/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: #DA0C81;"><a class="btn btn-danger" href="/admin/class/delete{{$item->id}}"> <ion-icon name = "trash-outline"></ion-icon></a></button>
                            </form>



                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>

<!-- MAIN -->

@endsection
