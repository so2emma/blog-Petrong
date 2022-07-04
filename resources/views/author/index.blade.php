@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Authors</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Authors</li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center">
                <a href="{{ url('author/create') }}" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> New</a>
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
                            @if(session()->has('status'))
                                <div class="alert alert-success col-md-6">
                                    {{ session()->get('status') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Socials</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    @forelse($authors as $author)
                                        <tbody>
                                            <tr>
                                                <td><img src="{{asset('storage/' . $author->profile_photo)}}" alt="" class="img-fluid rounded-circle w-50 mb-5" style="width: 50px !important;">{{$author->name}}</td>
                                                <td>{{$author->email}}</td>
                                                <td>{{$author->phone}}</td>
                                                <td><a href="{{$author->facebook ?? ''}}"> <span class="fa fa-facebook"><a href="{{ $author->twitter ?? ''}}"> <span class="fa fa-twitter"><a href="{{$author->instagram ?? ''}}"> <span class="fa fa-instagram"></span><a href="{{$author->linkedin ?? ''}}"> <span class="fa fa-linkedin"></td>
                                                <td>
                                                    <!-- <div class="nav"> -->
                                                        <a href="{{route('author.edit', $author->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"> Edit</i></a>
                                                        <div class="pt-3 justify-right">
                                                            <form action="{{route('author.destroy')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $author->id }}">
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick ="return confirm('Are you sure?')"><i class="fa fa-trash-o"> Delete</i></button>
                                                            </form>
                                                        </div>
                                                    <!-- </div> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    @empty
                                        <p>No Authors have been added</p>
                                    @endforelse
                                </table>
                            </div>   

                        <div class="text-start py-4">
                            <div class="text-justify-center">
                                <nav class="text-center pt-3" aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        {!! $authors->links() !!}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/1.jpg')}}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/2.jpg')}}" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/3.jpg')}}" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/4.jpg')}}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/5.jpg')}}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/6.jpg')}}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/7.jpg')}}" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('admin/images/users/8.jpg')}}" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection