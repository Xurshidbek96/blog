@extends('layouts.main')

@section('content')

<!-- Header Start -->
<x-header name1="Bizning O'qituvchilarimiz" name2="O'qituvchilar"></x-header>
<!-- Header End -->


 <!-- Team Start -->
 <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
        </div>
        @include('sections.teachers')
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
            <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
        </div>
        @include('sections.teachers')
        @include('sections.teachers')
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
@include('sections.comments')
<!-- Testimonial End -->

@endsection
