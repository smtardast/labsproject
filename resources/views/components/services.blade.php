<!-- services section -->
<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$contents->servicetitle}}</h2>
			</div>
			<div class="row">
				@foreach ($services as $item)
					
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
						<i class="{{$item->icon->code}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$item->title}}</h2>
							<p>{{$item->text}}</p>
						</div>
					</div>
				</div>
				@endforeach

				
				
			</div>
			<div class="text-center">
				<a href="{{route('servicepage.index')}}" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->