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

    @elseif (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
            Session::forget('success');
        @endphp
        <p id="close" class=" float-right btn btn-sm btn-success">X</p>
    </div>

    @endif



<div class="card">

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped text-center">
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
            <button type="button" class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg{{$item->id}}"><i class="fas fa-eye"></i></button>
              <a class="btn btn-sm btn-rounded btn-success" href=""> <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-sm btn-rounded btn-danger" href="{{ url('admin/category/destroy/'.$item->id) }}"> <i class="fas fa-trash"></i></a>
          </td>
        </tr>



        <!--category view modal start here -->
        <div class="modal fade bd-example-modal-lg{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        Category Detail
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"> {{$item->name}}</h5>
                      <p class="card-text">{{$item->description}}</p>
                      <p class="cart-img">
                        <img width="100%" src="/images/{{$item->banner_image}}" alt="">
                      </p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
         <!--category view modal end here -->
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
