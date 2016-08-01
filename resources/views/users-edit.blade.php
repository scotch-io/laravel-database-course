@extends('layouts.main')

@section('content')

    <h2>Editing {{ $user->name }}'s Profile</h2>

    <form action="/users/{{ $user->id }}" method="POST">

        {!! csrf_field() !!}

        <input type="hidden" name="_method" value="PATCH">

        {{-- name --}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>

        {{-- email --}}
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>

        {{-- password --}}
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="******">
        </div>

        {{-- submit --}}
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">
                Update
            </button>
        </div>
        
    </form>

@endsection