@extends('admin.master')
@section('title','Add Blogs')

@section('content')
<form method="post" enctype="multipart/form-data" action="{{url("admin/store")}}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
      </div>


      <div class="form-group">
        <label for="summernote">Blog Data</label>
        <textarea id="summernote" name="description" placeholder="Enter Your Blog Data">

        </textarea>
      </div>


      <div class="form-group">
        <label for="image">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="image">
            <label class="custom-file-label" for="image">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer ">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
