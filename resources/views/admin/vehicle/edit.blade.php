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
          <h4 class="card-title"> Vehicle</h4>
        </div>
        <div class="card-body mt-4">
            <form action="{{ route('admin.vehicle-update',[$data->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Model *</label> <br>
                <input type="text" name="model" placeholder="Car Model" value="{{ $data->model }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Image *</label> <br>
                <input type="file" name="image" placeholder="logo" value="{{ $data->image }}" class="form-control">
                <br><br>
                <img src="{{ asset($data->image) }}" width="200px" height="200px" alt="" class="img-fluid">
            </div>
            <div class="form-group">
                <label>Icon *</label> <br>
                <input type="file" name="icon" placeholder="Icon" value="{{ $data->icon }}" class="form-control">
                <br><br>
                <img src="{{ asset($data->icon) }}" width="200px" height="200px" alt="" class="img-fluid">
            </div>
            <div class="form-group">
                <label>Hourly Rate (Inside M25) *</label> <br>
                <input type="text" name="hourly_rate" placeholder="Hourly Rate" value="{{ $data->hourly_rate }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Hourly Rate (Outside M25) *</label> <br>
                <input type="text" name="hourly_outside_rate" placeholder="Hourly Rate (Outside M25)" value="{{ $data->hourly_outside_rate }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Minimum Rate *</label> <br>
                <input type="text" name="minimum_rate" placeholder="Minimumm Rate" value="{{ $data->minimum_rate }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Daily Rate *</label> <br>
                <input type="text" name="daily_rate" placeholder="Daily Rate" value="{{ $data->daily_rate }}" class="form-control" required>
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

