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
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="title" placeholder="Subject">
								<textarea name="text" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->