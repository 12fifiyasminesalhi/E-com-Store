@extends('layout.constant')
@section ('content')
		<div class="container", style="margin-top: 50px; margin-right:90px; margin-bottom:50px;">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table", style="text-align: center;">
							<thead class="cart-table-head">
                                
								<tr class="table-head-row">
								
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
                               @foreach ($carts as $item) 
                                <tr>
									
									<td > <img src="{{Storage::url($item->product->imagepath) }}" alt="{{ $item->product->name }}" width="80"></td>
									<td>{{$item->product->name}}</td>
									<td>{{$item ->product->price}}</td>
									<td>{{$item->quantity}}</td>
									<td>
										{{$item ->price * $item -> quantity}}
									</td>
								</tr>
                                    
							     @endforeach
					
							</tbody>
						</table>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>
@endsection

	