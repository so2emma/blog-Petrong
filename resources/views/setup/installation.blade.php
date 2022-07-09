@extends('setup.theme')

@section('title')
Installation
@endsection

@section('content')
<div class="text-center py-5">
  <div class="d-flex justify-content-center">
    <div class="col-md-6">
      <h2 class="my-5">Setup</h2>
      <h5>Welcome to <strong>{{config('app.name', 'Blog')}}</strong>.</h5>
      <p>
        Get started with the installation in simple steps. <br>
        You can read up the documentation <a href="{{route('documentations')}}" target="_blank">here</a>
        <br>
      </p>
      <form method="POST" action="{{ route('installation') }}">
        @csrf
        @if ($hd_c)
        <div class="form-group py-5">
          <button type="submit" name="action" value="create_database" class="btn btn-secondary btn-block btn-lg btn-rounded waves-effect waves-light">
            Create Database
            <!-- <i class="fa fa-check-circle-o"></i> -->
          </button>
        </div>
        @endif
        @if (!$hd_c && !$hm_)
        <div class="form-group py-5">
          <button type="submit" name="action" value="migrations" class="btn btn-info btn-block btn-lg btn-rounded waves-effect waves-light">
            Run Migrations
            <!-- <i class="fa fa-check-circle-o"></i> -->
          </button>
        </div>
        @endif
        @if ($hm_)
        <div class="form-group py-5">
          <button type="submit" name="action" value="finish" class="btn btn-primary btn-block btn-lg btn-rounded waves-effect waves-light">
            Finish up
          </button>
        </div>
        @endif
      </form>
    </div>
  </div>
</div>
@endsection