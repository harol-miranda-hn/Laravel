@extends('layouts.principal')
@section('title', 'Inicio')
@section('navbars')
    @parent
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

@section('content2')
    Hola mundo
@endsection
