@extends('layouts.admin.app')
@section('admin_content')

    <section class="container">
        <div class="">
            <h3>New Category Create</h3>
        </div><hr>
        <form action="{{url('admin/category/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-12">
                <div class="form-gorup">
                    <label for="">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{@$edit->name}}" placeholder="Type Here Category Name" id="">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4 col-12">
                <div class="form-gorup">
                    @if(@$edit)
                    <label for="">Already have Image (30 x 30)<span class="text-danger">*</span></label>
                    <img src="/images/{{@$edit->image}}" alt="">
                    @else
                    <label for="">Category Icon Image (30 x 30)<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="icon_image"  id="">
                    @if ($errors->has('icon_image'))
                    <span class="text-danger">{{ $errors->first('icon_image') }}</span>
                    @endif
                    @endif
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4 col-12">
                <div class="form-gorup">
                    @if(@$edit)
                        @if(@$edit->banner_image)
                        <label for="">Already have a Image (832 x 300) <span class="text-danger">*</span></label>
                        <img src="/images/{{@$edit->image}}" alt="">
                        @else
                        <label for="">Don't have a Image</label>
                        <input type="file" class="form-control" name="icon_image"  id="">
                        @endif
                    @else
                    <label for="">Category Banner Image (832 x 300) <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="banner_image"  id="">
                    @if ($errors->has('banner_image'))
                    <span class="text-danger">{{ $errors->first('banner_image') }}</span>
                    @endif
                    @endif
                </div>
            </div>
        </div><!-- name icon & banner image -->
        <div class="form-gorup">
            <label for="">Select Parent Category</label>
            <select name="parent_category" class="form-control" id="">
                <option value="">--Select Parent Category --</option>
                <option value="Dress">Dress</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Category Description</label>
            <textarea placeholder="Description" class="form-control" name="description" id="" cols="15" rows="5"></textarea>
        </div>
        <div class="float-right">
            <input type="submit"  class="btn btn-dark text-light" name="" value="Create New Category" id="">
        </div>

    </form>
    </section>

@endsection
