@extends('admin.master')
@section('title','View Blogs')
@section('content')
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Blog Data</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->title}}</td>
      <td>{!! Str::limit($item->description,1000) !!}</td>
      <td> <img src="{{url('upload/'.$item->image)}}" style="height: 160px; width: 160px" alt=""> </td>
      <td>
          <a href="{{'editblog/'.$item->id}}" class="btn btn-secondary">Edit</a>
          <a href="{{'delete/'.$item->id}}" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach

    </tbody>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Blog Data</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    </tfoot>
  </table>
</div>
  @endsection
