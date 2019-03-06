	<!-- newsletter section -->
	<div class="newsletter-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="col-md-9">
                        <!-- newsletter form -->
                    <form class="nl-form" method="POST" action="{{route('newsletter.store')}}">
                        @csrf
                        @if ($errors->has('email'))
									@foreach ($errors->get('email') as $error)
							  <p class="text-danger">{{$errors->first('email')}}</p>
									@endforeach
								@endif
                            <input type="text" placeholder="Your e-mail here" name="email" class="{{$errors->has('email')?'border-danger':''}}">
                            <button class="site-btn btn-2">Newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter section end-->