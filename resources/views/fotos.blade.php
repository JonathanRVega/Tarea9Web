@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Fotos</h1>
@stop

@section('content')
    <p>Fotos View.</p>
    @include('footer')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Estas en la vista de fotos!"); </script>
@stop