@extends('layouts.admin_layout')

@section('content')
<h1>Manage Audios</h1>
<a href="{{ route('audios.create') }}" class="btn btn-primary">Add New Audio</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>File Name</th>
            <th>File Path</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($audios as $audio)
        <tr>
            <td>{{ $audio->id }}</td>
            <td>{{ $audio->title }}</td>
            <td>{{ $audio->file_name }}</td>
            <td>{{ $audio->file_path }}</td>
            <td>
                <a href="{{ route('audios.edit', $audio) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('audios.destroy', $audio) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
