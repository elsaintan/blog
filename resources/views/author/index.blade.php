@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Username</th>
                <th>Date</th>
            </tr>
            <tr>
                @php $no = 1; @endphp
                @foreach ($data as $value)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->content }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->date }}</td>
            </tr>
            @endforeach
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection
