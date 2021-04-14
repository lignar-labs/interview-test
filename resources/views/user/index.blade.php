@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>

                    <div class="card-body">
                        @foreach ($users as $user)
                            <table class="table table-transparent">
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn" role="button"
                                aria-disabled="true">Update Detail</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
