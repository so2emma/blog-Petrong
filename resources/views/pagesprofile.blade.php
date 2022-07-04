@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Profile</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center">
                <!-- <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a> -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> 
                            @if(auth()->user()->profile_photo))
                                <img src="{{asset('storage/' . auth()->user()->profile_photo)}}" class="img-circle" width="150" />
                            @else
                                
                                <img src="{{asset('storage/user.png')}}" class="img-circle" width="150" />
                            @endif
                            <h4 class="card-title m-t-10">{{auth()->user()->name}}</h4>
                            <!-- <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> -->
                            
                            <div class="row text-center justify-content-md-center">
                                <form action="{{ route('update.picture') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Change picture</label>
                                        <div class="col-md-12">
                                            <input type="file" name="profile_photo" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Picture</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </center>
                        <div class="pt-5">
                            <h5>Reset Password</h5>
                            <form action="{{ route('change.password') }}" method="POST" role="form">
                                @csrf
                                    @error('current_password')
                                        <p>
                                        {{ $message }}
                                        </p>
                                    @enderror
                                
                                <div class="form-group">
                                    <label class="col-md-12">Current Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="current_password" class="form-control form-control-line" autocomplete="current-password">
                                    </div>
                                    <div class="col-md-6">

                                        <!-- <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password"> -->

                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="new_password" class="form-control form-control-line">
                                        <!-- <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password"> -->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Confirm New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="new_confirm_password" class="form-control form-control-line">
                                        <!-- <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password"> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tab panes -->
                    <div class="card-body">
                        
                        <form action="{{ route('update.profile') }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe" name="name" value="{{ old('name', auth()->user()->name) }}" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="email" value="{{ old('email', auth()->user()->email) }}"  id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" value="{{ old('phone', auth()->user()->phone) }}" class="form-control form-control-line">
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="col-md-12">Role</label>
                                <div class="col-md-12">
                                    <input type="text" name="role" value="{{ old('role', auth()->user()->role) }}" class="form-control form-control-line">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-md-12">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="message" class="form-control form-control-line"> {{ old('message', auth()->user()->message) }} </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12">
                                    <select name="country" class="form-control form-control-line">
                                        <option @if(auth()->user()->country=="London") selected @endif >London</option>
                                        <option @if(auth()->user()->country=="India") selected @endif>India</option>
                                        <option @if(auth()->user()->country=="Usa") selected @endif>Usa</option>
                                        <option @if(auth()->user()->country=="Canada") selected @endif>Canada</option>
                                        <option @if(auth()->user()->country=="Thailand") selected @endif>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>

                            
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
@endsection