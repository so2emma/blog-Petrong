@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <h2 class="text-center">Settings</h2>
        <div class="card">
            <div class="card-body text-center">
                <h5>Fill in the details below</h5>
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
                    <form action="{{ route('update.settings') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group row">
                            <label for="company_name" class="col-md-3 col-form-label text-md-left">Company Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_name" value="{{ $settings->where('name', 'company_name')->first()->value }}" required autocomplete="company_name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_phone" class="col-md-3 col-form-label text-md-left">Company Phone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_phone" value="{{ $settings->where('name', 'company_phone')->first()->value }}" required autocomplete="company_phone" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_address" class="col-md-3 col-form-label text-md-left">Company Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_address" value="{{ $settings->where('name', 'company_address')->first()->value }}" required autocomplete="company_address" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_logo" class="col-md-3 col-form-label text-md-left">Company Logo</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="company_logo" required autocomplete="company_logo" autofocus>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="show_company" class="col-md-3 col-form-label text-md-left">Show Company Name</label>
                            <div class="col-md-6 text-left">
                                <input type="checkbox" id="show_company" name="show_company_name" value="1"  style="position: unset; opacity:1"> 
                            </div>       
                        </div>
                        <div class="form-group row">
                            <label for="show_logo" class="col-md-3 col-form-label text-md-left">Show Company Logo</label>
                            <div class="col-md-6 text-left">
                                <input type="checkbox" id="show_logo" name="show_logo" value="1"  style="position: unset; opacity:1"> 
                            </div>       
                        </div>
                            
                        <div class="form-group row">
                            <label for="company_email" class="col-md-3 col-form-label text-md-left">Company E-mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="company_email" value="{{ $settings->where('name', 'company_email')->first()->value }}" required autocomplete="company_email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_about" class="col-md-3 col-form-label text-md-left">Company About</label>

                            <div class="col-md-6">
                                <textarea name="company_about" class="form-control">{{{ $settings->where('name', 'company_about')->first()->value }}}</textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company_about_image" class="col-md-3 col-form-label text-md-left">Company About Image</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="company_about_image" required autocomplete="company_about_image" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_vission_mission" class="col-md-3 col-form-label text-md-left">Company Vission And Mission</label>

                            <div class="col-md-6">
                                <textarea name="company_vission_mission" class="form-control">{{{ $settings->where('name', 'company_vission_mission')->first()->value }}}</textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company_vission_mission_image" class="col-md-3 col-form-label text-md-left">Company Vission And Mission Image</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="company_vission_mission_image" required autocomplete="company_vission_mission_image" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="enable_blog" class="col-md-3 col-form-label text-md-left">Enable Blog</label>
                            <div class="col-md-6 text-left">
                                <input type="checkbox" id="enable_blog" name="enable_blog" value="1"  style="position: unset; opacity:1"> 
                            </div>       
                        </div>

                        <h4>Socials</h4>
                        <div class="form-group row">
                            <label for="company_facebook" class="col-md-3 col-form-label text-md-left">Facebook</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_facebook" value="{{ $settings->where('name', 'company_facebook')->first()->value }}" placeholder="https://facebook.com/your username">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_twitter" class="col-md-3 col-form-label text-md-left">Twitter</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_twitter" value="{{ $settings->where('name', 'company_twitter')->first()->value }}" placeholder="https://twitter.com/your username">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_linkedin" class="col-md-3 col-form-label text-md-left">LinkedIn</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_linkedin" placeholder="https://linkedin.com/your username" value="{{ $settings->where('name', 'company_linkedin')->first()->value }}" autocomplete="company_linkedin" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_instagram" class="col-md-3 col-form-label text-md-left">Instagram</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company_instagram" placeholder="https://instagram.com/your username" value="{{ $settings->where('name', 'company_instagram')->first()->value }}" autocomplete="company_instagram" autofocus>

                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        
    </div>
@endsection