
@extends('admin.layouts.header')

@section('content')
<!-- MAIN -->
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Teachers</h3>
                <button><a href={{route('Tcreate')}}>Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Occupation</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Telegram</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->name}}</p></td>
                        <td><p>{{$item->occupation}}</p></td>
                        <td><p>{{ $item->status == 1 ? 'Dean' : 'Teacher' }}</p></td>
                        <td><p>{{$item->photo}}</p></td>
                        <td><p>{{$item->telegram}}</p></td>
                        <td><p>{{$item->facebook}}</p></td>
                        <td><p>{{$item->instagram}}</p></td>

                        <td style="display: flex">

                            <button style="background-color: green;"><a class="btn btn-succes" href="/admin/teachers/show/{{$item->id}}"> <ion-icon name = "eye-outline"></ion-icon></a></button>
                            <button><a class="btn btn-primary" href="/admin/teachers/edit/{{$item->id}}"> <ion-icon name = "create-outline"></ion-icon></a></button>
                            <form action="/admin/teachers/delete/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: #DA0C81;"><a class="btn btn-danger" href="/admin/teachers/delete{{$item->id}}"> <ion-icon name = "trash-outline"></ion-icon></a></button>
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
