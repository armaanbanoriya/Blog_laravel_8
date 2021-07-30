@extends('admin.master')
@section('title','Edit Blog')

@section('content')
<form method="post" enctype="multipart/form-data" action="{{url("admin/update")}}">
    @csrf
    <div class="card-body">
      <div class="form-group">
          <input type="hidden" name="id" value="{{$data->id}}" id="">
        <label for="title">Title</label>
        <input type="text" value="{{$data->title}}" name="title" class="form-control" id="title" placeholder="Enter Title">
      </div>


      <div class="form-group">
        <label for="summernote">Blog Data</label>
        <textarea id="summernote" name="description" placeholder="Enter Your Blog Data">
        {{$data->description}}
        </textarea>
      </div>


      <div class="form-group">
        <label for="image">File input</label>
        <img src="{{url('upload/'.$data->image)}}" style="height: 160px; width: 160px;" alt="">

        <div class="input-group">
          <div class="custom-file">
            <input type="file" value="{{$data->image}}" name="image" class="custom-file-input" id="image">
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
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection
