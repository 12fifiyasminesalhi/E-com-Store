@extends('layout.constant')
@section('content')
   < <div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Nos</span> Catégories</h3>
						<p>Explorez nos univers dédiés à votre santé et bien-être. Soins du visage, équipements médicaux, compléments alimentaires… des produits sélectionnés avec soin pour répondre à tous vos besoins au quotidien</p>
					</div>
				</div>
			</div>

			<div class="row" id="categories">
				@foreach ($parapharme as $item )
				

                <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/Products/{{$item-> id}}"><img src="{{url($item->imagepath)}}"></a>
						</div>
						<h3>{{$item -> name}}</h3>
						
					  <p >{{$item->description}}</p> 
					 </div>
				</div>
                    
               @endforeach 
				
			
			</div>
		</div>
	</div> 
    @endsection