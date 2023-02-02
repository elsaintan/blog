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
                <th>Action</th>
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
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('post.edit', $value->idpost) }}">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $value->idpost }}">Delete</a>
                </td>
            </tr>
            @endforeach
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="h2">Are you sure?</h2>
                    <p>The data will be deleted and lost forever</p>
                </div>
                <div class="modal-footer">
                    <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmToDelete(el) {
            $("#delete-button").attr("href", el.dataset.href);
            $("#confirm-dialog").modal('show');
        }
    </script>
@endsection
