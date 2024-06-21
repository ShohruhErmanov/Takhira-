@extends('layouts.site')
@section('title')
Kurslar
@endsection

@section('content')
<div class="main-banner" id="top">
    <h1 style="text-align: center; color: #fff">Kurslarimiz</h1>
</div>

@include('sections.courses')

@endsection
