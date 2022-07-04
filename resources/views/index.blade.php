@extends('layouts.admin')
@push('styles')
<style>
    .card-counter{
        box-shadow: 2px 2px 10px #DADADA;
        margin: 5px;
        padding: 20px 10px;
        background-color: #fff;
        height: 100px !important;
        border-radius: 5px;
        transition: .3s linear all;
    }

    .card-counter:hover{
        box-shadow: 4px 4px 20px #DADADA;
        transition: .3s linear all;
    }

    .card-counter.primary{
        background-color: #007bff;
        color: #FFF;
    }

    .card-counter.danger{
        background-color: #ef5350;
        color: #FFF;
    }  

    .card-counter.success{
        background-color: #66bb6a;
        color: #FFF;
    }  

    .card-counter.info{
        background-color: #26c6da;
        color: #FFF;
    }  

    .card-counter i{
        font-size: 5em;
        opacity: 0.2;
    }

    .card-counter .count-numbers{
        position: absolute;
        right: 35px;
        top: 20px;
        font-size: 32px;
        display: block;
    }

    .card-counter .count-name{
        position: absolute;
        right: 35px;
        top: 65px;
        font-style: italic;
        text-transform: capitalize;
        display: block;
        font-size: 18px;
    }

    .shape{    
    border-style: solid; border-width: 0 40px 40px 0; float:right; height: 0px; width: 0px;
    -webkit-transform: rotate(360deg);  
    -moz-transform: rotate(360deg);  
    -o-transform: rotate(360deg);  
    transform: rotate(360deg); 
}
.shape-text{
    color:#fff; font-size:12px; font-weight:bold; position:relative; right:-22px; top:-3px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(46deg); /* Safari and Chrome */
	transform:rotate(46deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
}

.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
    .container {
        max-width: 750px;
    }
    .col-sm-6 {
        width: 50%;
    }
}
@media (min-width: 900px) {
    .container {
        max-width: 970px;
    }
    .col-md-4 {
        width: 33.33333333333333%;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1170px;
    }
    .col-lg-3 {
        width: 25%;
    }
}


</style>
@endpush
@section('content')
    <!-- <div class="container-fluid"> -->
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
        <!-- Sales Chart and browser state-->
        <!-- ============================================================== -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-counter primary">
                        <i class="fa fa-users"></i>
                        <p class="count-name">List of Authors</p>
                        <span class="count-numbers">{{$authors->count()}}</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-counter success">
                        <i class="fa fa-book"></i>
                        <span class="count-numbers">{{$posts->count()}}</span>
                        <span class="count-name">List of Posts</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-counter info">
                        <i class="fa fa-users"></i>
                        <span class="count-numbers">{{$subscribers->count()}}</span>
                        <span class="count-name">List of Subscribers</span>
                    </div>
                </div>
            </div>
            <h3 class="p-2">Posts</h3>
            <div class="row">

                @foreach($categories as $category)
                    @if($category->posts->count())
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-info">
                                <div class="shape">
                                    <div class="shape-info">
                                        <!-- top								 -->
                                    </div>
                                </div>
                                <div class="offer-content">
                                    <h3 class="lead">
                                        {{$category->name}}
                                    </h3>
                                    <p>
                                    {{$category->posts->count()}} Post(s)
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            
        </div>
@endsection
            