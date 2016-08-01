@extends('layouts.main')

@section('content')
    
    <h1>{{ $user->name }} Profile</h1>
    <h3>{{ $user->email }}</h3>

@endsection