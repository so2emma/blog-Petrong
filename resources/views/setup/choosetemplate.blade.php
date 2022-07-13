@extends('setup.theme')

@section('title')
Choose Template
@endsection

@section('content')

<style>
  .img-btn-submit {
    border: none;
    padding: 0px;
    border-radius: 0px;
    background: none;
    cursor: pointer;
  }
/* 
  .card-img:hover {
    background-color: red !important;
  } */
</style>

<div class="text-center py-5">
  <h2> Choose a Template </h2>
  <div class="d-flex justify-content-center">
    <div class="col-md-9">
      <p>You are almost set! Select a Template, and choose how you would love your site to look</p>
      <div class="card bg-light p-3 my-5">
        <form action="{{route('choosetemplate')}}" method="post">
          @csrf
          <div class="row">
          @forelse ($templates as $template)
          <div class="col-md-6 p-3">
            <div class="card">
              <button type="submit" class="img-btn-submit"
                name="template_id" value="{{$template->id}}">
                <img class="card-img" src="{{Storage::url('templates/'.$template->folder.'/'.$template->preview)}}" alt="{{$template->name}} Preview">
              </button>
              <div class="card-body">
                <h3>{{$template->name}}</h3>
                <a href="" class="btn btn-secondary btn-block">Preview</a>
              </div>
            </div>
          </div>
          @empty
          <div class="p-5 text-center">
            Oops... No templates found
          </div>
          @endforelse
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection