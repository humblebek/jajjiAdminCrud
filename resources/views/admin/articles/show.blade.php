

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href={{route('admin.articles.index')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Image:</th>
                    <td><b>{{$article->photo}}</b></td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td><b>{{$article->title}}</b></td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td><b>{{$article->message}}</b></td>
                </tr>
                <tr>
                    <th>Article Owner:</th>
                    <td><b>{{$article->articleOwner}}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
