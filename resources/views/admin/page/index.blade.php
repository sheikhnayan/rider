@extends('admin.layouts.main')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection
@section('content')
{{-- <div class="panel-header panel-header-sm">
</div> --}}
<div class="content" style="margin-top: 60px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 style="float:left" class="card-title"> Page</h4>
          <a style="float: right;" href="{{ route('admin.page-add') }}" class="btn btn-success">Add Page</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th>
                  Slug
                </th>
                <th>
                    Menu
                </th>
                <th>
                  Footer
                </th>
                <th>
                    Status
                </th>
                <th>
                    Action
                </th>
              </thead>
              <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            @if ($item->menu == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->footer == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.page-edit',[$item->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.page-delete',[$item->id]) }}" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>



  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"> </script>
  <script>
    $(document).ready( function () {
      $('.table').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'
          ]
      });

  } );
  </script>
@endsection
