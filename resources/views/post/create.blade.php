@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Posts</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Create Post</li>
      </ol>
    </div>
    <div class="col-md-7 align-self-center">
      <a href="{{ route('post.index') }}" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Back</a>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
          </div>
          @endif
          @if(session()->has('status'))
          <div class="alert alert-success">
            {{ session()->get('status') }}
          </div>
          @endif
          <h5>Add Post</h5>
          <form action="{{route('post.store')}}" method="POST"
            role="form" enctype="multipart/form-data"
            class="p-2 p-md-5">
            @csrf
            <div class="form-group">
              <label class="col">Title</label>
              <div class="col">
                <input type="text" name="title" value="" class="form-control form-control-line">
              </div>
            </div>
            <div class="form-group">
              <label class="col">Sub Title</label>
              <div class="col">
                <input type="text" name="subtitle" value="" class="form-control form-control-line">
              </div>
            </div>
            <div class="form-group">
              <label class="col">Content</label>
              <div class="col">
                <textarea rows="5" name="content" class="form-control form-control-line"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col">Picture</label>
              <div class="col">
                <input type="file" name="postImage" class="form-control form-control-line">
              </div>
            </div>
            <div class="form-group">
              <label class="col">Select Category</label>
              <div class="col">
                <select name="category_id" class="form-control form-control-line">
                  <option value="" selected>Please select...</option>
                  @forelse ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @empty
                  @endforelse
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button class="btn btn-success">Upload Post</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection