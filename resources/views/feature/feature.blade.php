
	<!-- features section -->
	<div class="team-section spad" id="servicePrime">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $str10 !!}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<!-- feature item -->
					@foreach ($iconePrime->take(3) as $i)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{ $i->titre }}</h2>
							<p>{{ $i->texte }}</p>
						</div>
						<div class="icon">
							<i class="{{ $i->icone }}"></i>
						</div>
					</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="{{ asset("/img/device.png") }}" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($iconePrime->take(-3) as $e)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{ $e->titre }}</h2>
							<p>{{ $e->texte }}</p>
						</div>
						<div class="icon">
							<i class="{{ $e->icone }}"></i>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
			<div class="text-center mt100">
				<a href="{{ route("service") }}#serviceCard" class="site-btn">{{ $servicePrime->boutton }}</a>
			</div>
		</div>
	</div>
	<!-- features section end-->
