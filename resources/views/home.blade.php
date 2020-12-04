@extends('layouts.app')

@section('content')    
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">
            <div class="fill" style="background-image:url('{{ asset('img/banner-slide-3.jpg') }}')"></div>
            <div class="carousel-caption slide-up">
                <h1 class="banner_heading">Providing Lots of <span>Accelerators</span></h1>
                <p class="banner_txt"></p>
                <div class="slider_btn">
                    <button onclick="location.href ='/acc'" type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="fill" style="background-image:url('{{ asset('img/banner-slide-1.jpg') }}')"></div>
            <div class="carousel-caption slide-up">
                <h1 class="banner_heading">Providing Lots of <span>Resources</span></h1>
                <p class="banner_txt"></p>
                <div class="slider_btn">
                    <button onclick="location.href ='/res'" type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="fill" style="background-image:url('{{ asset('img/banner-slide-2.jpg') }}')"></div>
            <div class="carousel-caption slide-up">
                <h1 class="banner_heading">Providing a <span>Discussion </span>Forum</h1>
                <p class="banner_txt"></p>
                <div class="slider_btn">
                    <button onclick="location.href ='/forums'" type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="features" class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12 block">
            <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
            <div class="col-md-10 col-xs-10">
                <h4>100% Responsive</h4>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 block">
            <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
            <div class="col-md-10 col-xs-10">
                <h4>Updated data</h4>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 block">
            <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
            <div class="col-md-10 col-xs-10">
                <h4>Lots of data</h4>
            </div>
        </div>
    </div>
</div>


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


<div id="res" class="container">
    <h1 class="text-center">Resources</h1> 
    @foreach($resources as $resource)
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="card-deck">
            <div class="card border-secondary"> 
                <div class="image"><a class="portfolio-link" href="{{$resource->Link}}"><img alt="" src="Resources/{{$resource->Img}}"></a>
                </div>                      
                <div class="card-inner">
                    <span class="Type">{{$resource->Type}}</span>
                    <div class="header">
                        <h5><a class="portfolio-link" href="{{$resource->Link}}">{{$resource->ResourceName}}</h5>
                    </div></a>
                    <div><p>{{$resource->MoreInfo}}</p></div> 
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<div class="container" id="acc">
    <h1 class="text-center">Accelerators</h1> 
    @foreach($accelerators as $accelerator)
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card-deck">
                <div style="height: 470px" class="card border-secondary">   
                    <div class="image"><a class="portfolio-link" href="{{$accelerator->Link}}"><img alt="" src="Accelerators/{{$accelerator->Logo}}"></a>
                    </div>                      
                    <div class="card-inner">
                        <span class="Category">{{$accelerator->Category}}</span>
                        <div class="header">
                            <h5><a class="portfolio-link" href="{{$accelerator->Link}}">{{$accelerator->AcceleratorName}}</a></h5>
                        </div>
                        <div><p>{{$accelerator->MoreInfo}}</p></div> 
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="container" id="testimonial">
    <div class="section-heading text-center">
        <div class="col-md-12 col-xs-12">
            <h1>Who <span>we are?</span></h1>
            <!-- <p class="subheading"></p>-->
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-10">

        <div class="card-deck">
            <div class="col-md-4">
                <div class="card">
                    <div class="card border-secondary">   
                        <div class="image"><img alt="" src="img/gehad.jpg">
                        </div>                      
                        <div class="card-inner">
                            <span>Web developer</span>
                            <div class="header">
                                <h5>Gehad Salem</h5>
                                <p style="color:black">Responsible for the technical part of the project.</p>
                            </div>
                            <div></div> 
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="card-deck">
            <div class="col-md-4">
                <div class="card">
                    <div class="card border-secondary">   
                        <div class="image"><img alt="" src="img/Yasmeen.jpg">
                        </div>
                        <div class="card-inner">
                            <span>System Analysist</span>
                            <div class="header">
                                <h5>Yasmeen Sameh</h5>
                                <p style="color:black">Responsible for the analysis user's data to give them their needs.</p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        
        <div class="card-deck">
            <div class="col-md-4">
                <div class="card">
                    <div class="card border-secondary">   
                        <div class="image"><img alt="" src="img/habiba.jpg">
                        </div>                      
                        <div class="card-inner">
                            <span>Designer</span>
                            <div class="header">
                                <h5>Habiba Amr</h5>
                                <p style="color:black">Responsible for the design of the different part of the project.</p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
