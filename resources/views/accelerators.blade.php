@extends('layouts.app')

@section('content') 
<div class="container">
	<h1 class="text-center">Accelerators</h1> 

	<div class="col-md-12">
		@foreach($accelerators as $accelerator)
			    <div class="col-sm-4 col-md-4 col-lg-4">
			        <div class="card-deck">
			        	<div style="height: 470px" class="card border-secondary">	
			                <div class="image"><a class="portfolio-link" href="{{$accelerator->Link}}">
			                	<img alt="" src="Accelerators/{{$accelerator->Logo}}"></a>
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
</div>
@endsection