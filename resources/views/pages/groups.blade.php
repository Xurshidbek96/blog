@extends('layouts.main')

@section('content')

<!-- Header Start -->
<x-header name1="Bizning guruhlar" name2="Guruhlar"></x-header>
<!-- Header End -->


<!-- Class Start -->
@include('sections.groups')
<!-- Class End -->


<!-- Order Start -->
@include('sections.order')
<!-- Order End -->

@endsection
