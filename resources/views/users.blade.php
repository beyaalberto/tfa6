@extends('layouts.app')

@section('title', 'User Accounts | My POS')

@section('content')
    <h2>User Accounts</h2>

    <p>Total users: {{ $users->count() }}</p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection