@extends('layouts.auth')

@section('content')

<div id="about">
    <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
        <div class="background-imgholder">
            <img src="{{ asset('img/1.jpg') }}" alt="about" class="img-responsive" style="display:none;" />
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
            <div class="text-block">
                <div class="section-heading">
                    <h1>ABOUT <span>US</span></h1>
                    <p class="subheading">In this web-application, you can find:</p>
                </div>
                <ul class="aboutul">
                    <li> <i class="fa fa-check"></i>Large number of startup accelerators is provided. </li>
                    <li> <i class="fa fa-check"></i>Discussion forum where users can communicate and connect with each other.</li>
                    <li> <i class="fa fa-check"></i>Lots of resources such as course, articles and continuously updated news of the market.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection