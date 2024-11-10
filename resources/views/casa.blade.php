@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Casa</h1>
@stop

@section('content')
    <p>Casas view.</p>
    @include('footer')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Estas en la vista de casa"); </script>
@stop