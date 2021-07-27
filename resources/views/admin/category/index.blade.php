@extends('layouts.admin.app')
@section('admin_content')

 @if (Session::has('danger'))
        <div class="alert alert-danger">
            {{ Session::get('danger') }}
            @php
                Session::forget('danger');
            @endphp
            <p id="close" class=" float-right btn btn-sm btn-danger">X</p>
        </div>

    @endif



<div class="card">
    <div class="card-header">
      <h3 class="card-title">All Category List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>index</th>
          <th>Icon Image</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $item)
        <tr>
          <td>{{$loop->index + 1}}</td>
          <td> <img src="/images/{{$item->icon_image}}" alt=""></td>
          <td>{{$item->name}}</td>
          <td>
              <a class="btn btn-sm btn-rounded btn-primary" href=""><i class="fas fa-eye"></i></a>
              <a class="btn btn-sm btn-rounded btn-success" href=""> <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-sm btn-rounded btn-danger" href="{{ url('admin/category/destroy/'.$item->id) }}"> <i class="fas fa-trash"></i></a>
          </td>

        </tr>
        @endforeach


        </tbody>
        <tfoot>
        <tr>
          <th>index</th>
          <th>Icon Image</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
</div>

@section('js')
<!-- DataTables -->
<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap4.js"></script>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
@endsection
    <!-- /.card-body -->

    {{-- @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
            <p id="close" class=" float-right btn btn-sm btn-danger">X</p>
        </div>

    @endif

    <form method="post" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">


            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Upload Image</button>
            </div>
        </div>
        @csrf
    </form>



    @foreach ($categories as $category)
        <img src="/images/{{ $category->icon_image }}" alt="">
    @endforeach

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script>
        $('#close').click(function() {
            $('.alert').hide(4000);
        })
    </script> --}}


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
            <script>
                $('#close').click(function() {
                    $('.alert').hide(2000);
                })
            </script>

@endsection
