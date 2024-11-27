@extends('layouts.admin_layout')
@section('content')
<h1>Add New Audio</h1>
<form action="" method="POST" style="max-width: 500px;">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label>File Name</label>
        <input type="text" name="file_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>File Path</label>
        <input type="text" name="file_path" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Content ID</label>
        <input type="number" name="contentID" class="form-control" required>
    </div>
    <div style="margin: 20px;">
    <button type="submit" class="btn btn-success">Lưu</button>
    <button type="#" class="btn btn-success">Tạo audio</button>
    </div>
</form>
@endsection
