@extends('layouts.app')
   
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Registrations</h3>
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                   
                <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>MESSAGE</th> 
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $da)
                            <tr>
                                <td>{{$da->id}}</td>
                                <td>{{$da->name}}</td>
                                <td>{{$da->email}}</td>
                                <td>{{$da->phone}}</td>
                                <td>{{$da->message}}</td>
                                <form method="post" action="{{url('users/'.$da->id)}}">
                                    @csrf
                                <th> <button type="submit" class="btn btn-danger btn-sm">Delete</button></th>
                                </form>
                            </tbody>
                        @endforeach
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script type="text/javascript">
          $(document).ready(function() {

            $('.delete-form').on('submit', function(e) {
              e.preventDefault();

              $.ajax({
                  type: 'post',
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: $(this).data('route'),
                 
                  success: function (response, textStatus, xhr) {
                    alert(response)
                    window.location='/posts'
                  }
              });
            })
          });
        </script>