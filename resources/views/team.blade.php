@extends('layouts.site')
@section('title')
Bizning jamoa
@endsection

@section('content')

<div class="main-banner" id="top">
    <h1 style="text-align: center; color: #fff">Bizning Jamoa</h1>
    <p style="text-align: center; color: #fff">Bizning jamoamiz a'zolari o'z ishini ustalari, va katta tajribaga ega o'qituvchilar</p>
</div>

@include('sections.team')

@endsection
