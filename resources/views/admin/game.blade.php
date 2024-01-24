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
          <h4 style="float:left" class="card-title"> Tournament</h4>
          <a style="float: right;" href="#" class="btn btn-success topup-modal">Add Tournament</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                <th>
                  Streaming Link
                </th>
                {{-- <th>
                  Referral
                </th> --}}
                {{-- <th>
                  Wallet
                </th> --}}
                {{-- <th>
                  TopUp
                </th> --}}
              </thead>
              <tbody>
                @foreach ($data as $key => $item)
                <tr>
                  <td>
                    {{ $key + 1 }}
                  </td>
                  <td>
                    {{ $item->name }}
                  </td>
                  <td>
                    {{ $item->streaming_link }}
                  </td>
                  {{-- <td>
                    {{ $item->wallet }}
                  </td> --}}
                  {{-- <td>
                    @php
                        $referral = DB::table('users')->where('referral_code',$item->invitation_code)->first();
                    @endphp
                    {{ $referral->name ?? ''}}
                  </td> --}}
                  {{-- <td>
                    {{ $item->wallet }}
                    <a href="#" class="btn btn-success topup-modal" data-wallet="{{ $item->wallet }}" data-id="{{ $item->id }}">Change</a>
                  </td> --}}
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



<div class="modal topup" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      @csrf
      <div class="modal-body text-center">
          <form action="{{ route('admin.add-tournament') }}" method="post">
          @csrf
              <h5>Add Tournamentt</h5>

              <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="name" type="text" placeholder="Tournament Name" required>
            <!-- banner -->
            <input class="form-control main mt-4 mb-4" name="banner" type="file">
            <!-- Game Name -->
            <input class="form-control main mt-4 mb-4" name="game_name" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="team_type" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="team_member" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="total_player" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="registration start date" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="registration end date" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="event start date" type="text" placeholder="Tournament Name" required>
            <!-- Username -->
            <input class="form-control main mt-4 mb-4" name="event end date" type="text" placeholder="Tournament Name" required>
            <!-- Email -->
            <input class="form-control main mt-4 mb-4" name="streaming_link" type="text" placeholder="Streaming_link" required>

              <button type="submit" class="btn btn-success mt-4" style="border-radius: 5px;">Add</button>
          </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

  <script>
    $('.topup-modal').on('click', function(){
      id = $(this).data('id');

      wallet = $(this).data('wallet');

      $('#user_id').val(id);

      $('#wallet').val(wallet);

      $('.topup').modal('show');
    })

  </script>


@endsection
