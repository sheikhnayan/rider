@extends('admin.layouts.main')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection
@section('content')
{{-- <div class="panel-header panel-header-sm">
</div> --}}
<div class="content" style="margin-top: 60px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Setting</h4>
        </div>
        <div class="card-body mt-4">
            <form action="{{ route('admin.setting-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Email *</label> <br>
                <input type="email" name="email" placeholder="email" value="{{ $data->email }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Logo *</label> <br>
                <input type="file" name="logo" placeholder="logo" value="{{ $data->logo }}" class="form-control">
                <br><br>
                <img src="{{ asset($data->logo) }}" width="200px" height="200px" alt="" class="img-fluid">
            </div>
            <div class="form-group">
                <label>Phone *</label> <br>
                <input type="text" name="phone" placeholder="phone" value="{{ $data->phone }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address *</label> <br>
                <input type="text" name="address" placeholder="Address" value="{{ $data->address }}" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success" style="width: 100%">
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

