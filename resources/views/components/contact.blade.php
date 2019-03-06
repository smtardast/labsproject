<!-- Contact section -->
<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contentsC->title}}</h2>
					</div>
					<p>{{$contentsC->description}} </p>
					<h3 class="mt60">{{$contentsC->office}}</h3>
					<br>
					<p class="con-item">{{$contentsC->address}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
				<form class="form-class" id="con_form" method="POST" action="{{route('contact.store')}}">

						@csrf
						<div class="row">
							<div class="col-sm-6">
									@if ($errors->has('name'))
									@foreach ($errors->get('name') as $error)
							  <p class="text-danger">{{$errors->first('name')}}</p>
									@endforeach
								@endif
								<input type="text" name="name" placeholder="Your name" class="{{$errors->has('name')?'border-danger':''}}">
							</div>
							<div class="col-sm-6">
									@if ($errors->has('email'))
									@foreach ($errors->get('email') as $error)
							  <p class="text-danger">{{$errors->first('email')}}</p>
									@endforeach
								@endif
								<input type="text" name="email" placeholder="Your email" class="{{$errors->has('email')?'border-danger':''}}" >
							</div>
							<div class="col-sm-12">
									@if ($errors->has('title'))
									@foreach ($errors->get('title') as $error)
							  <p class="text-danger">{{$errors->first('title')}}</p>
									@endforeach
								@endif
								<input type="text" name="title" placeholder="Subject" class="{{$errors->has('title')?'border-danger':''}}" >
								@if ($errors->has('text'))
									@foreach ($errors->get('text') as $error)
							  <p class="text-danger">{{$errors->first('text')}}</p>
									@endforeach
								@endif
								<textarea name="text" placeholder="Message" class="{{$errors->has('text')?'border-danger':''}}"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->