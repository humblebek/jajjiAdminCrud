
@extends('layouts.header')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bizning sinflarimiz</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="/jajji/home">Bosh sahifa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Sinflar</p>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Ommabop darslar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun darslar</h1>
            </div>
@include('sections.class')
@include('sections.class')

    </div>
</div>
    <!-- Class End -->



   <!-- Registration Start -->
   @include('sections.register')
<!-- Registration End -->


@endsection
