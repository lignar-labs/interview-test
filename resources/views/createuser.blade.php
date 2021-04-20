@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('Create User') }}</div>

    <form method="post" action="{{route('user-create')}}">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">submit</button>
        </form>
</div>
@endsection
