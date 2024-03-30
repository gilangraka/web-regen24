@extends('dashboard')

@section('content')
    <h1>Ini halaman dashboard admin</h1>

    <a href="{{ url('/dashboard/view_user') }}">Klik link</a>
@endsection