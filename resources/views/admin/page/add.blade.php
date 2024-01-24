@extends('admin.layouts.main')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection
@section('content')
<div class="content" style="margin-top: 60px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Page</h4>
        </div>
        <div class="card-body mt-4">
            <form action="{{ route('admin.page-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title *</label> <br>
                <input type="text" name="title" placeholder="Page Title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Image *</label> <br>
                <input type="file" name="image" placeholder="logo" class="form-control" required>
                <br><br>
            </div>
            <div class="form-group">
                <label>Content</label> <br>
                <textarea class="form-control" name="editor"></textarea>
            </div>
            <div class="form-group">
                <label>Menu</label> <br>
                <select name="menu" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label>Footer</label> <br>
                <select name="footer" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status</label> <br>
                <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Create" class="btn btn-success" style="width: 100%">
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
    CKEDITOR.replace('editor');

    CKEDITOR.instances['editor'].setData({!! json_encode($data->content ?? '') !!})
  </script>
@endsection

