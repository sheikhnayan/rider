
@extends('admin.layouts.main')
@section('content')
  <div class="content" style="margin-top: 60px">
    <div class="row">
      <div class="col-lg-6 col-md-6 text-center">
        <div class="card card-chart">
          <div class="card-header">
            @php
                $vehicles = DB::table('vehicles')->get();
                $pages = DB::table('pages')->get();
            @endphp
            <h5 class="card-category">Total Vehicles</h5>
            <h4 class="card-title">{{ $vehicles->count() }}</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 text-center">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Total Pages</h5>
            <h4 class="card-title">{{ $pages->count() }}</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
