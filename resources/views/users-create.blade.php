@extends('layouts.main')

@section('content')

    <form action="/users" method="POST">

        {!! csrf_field() !!}

        {{-- name --}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        {{-- email --}}
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        {{-- password --}}
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        {{-- submit --}}
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">
                Create
            </button>
        </div>
        
    </form>

@endsection