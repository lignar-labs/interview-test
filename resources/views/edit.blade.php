@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <br>
                <table class="table table-border">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    {{-- @foreach ($users as $user) --}}
                    <form method="Post" action="{{ route('user-save', $user->id)}}" >
                        @method('PUT')
                        @csrf
                        <tr>
                            <td><input class="form-control" type="text" name="name" value={{ $user->name }}/></td>
                            <td><input class="form-control" type="text" name="email" value={{ $user->email }}></td>
                            <td><button class="btn btn-success" type="submit">save</button></td>
                        </tr>
                    </form>
                    {{-- @endforeach --}}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
