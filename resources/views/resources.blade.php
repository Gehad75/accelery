@extends('layouts.app')

@section('content') 

<div class="container">
	<h1 class="text-center">Resources</h1> 

	<div class="col-md-12">
		@foreach($resources as $resource)
			    <div class="col-sm-4 col-md-4 col-lg-4">
			        <div class="card-deck">
			        	<div class="card border-secondary">	
			                <div class="image"><a class="portfolio-link" href="{{$resource->Link}}">
			                	<img alt="" src="Resources/{{$resource->Img}}"></a>
			                </div>			            
				            <div class="card-inner">
				            	<span class="Type">{{$resource->Type}}</span>
				            	<div class="header">
					            	<h5><a class="portfolio-link" href="{{$resource->Link}}">{{$resource->ResourceName}}</a></h5>
				            	</div>
				            	<div><p>{{$resource->MoreInfo}}</p></div> 
				            </div>
			            </div>
			        </div>
			    </div>
		@endforeach
	</div>
</div>
@endsection