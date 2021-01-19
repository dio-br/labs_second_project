
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
				@foreach ($article as $i)
				 @if ($i->verifications->id ===1)
				 <div class="post-item">
					<div class="post-thumbnail">
						<img src="{{ asset("img/blog/$i->image") }}" alt="">
						<div class="post-date">
							<h2>{{ date('d')}}</h2>
							<h3>{{ date('m-Y') }}</h3>
						</div>
					</div>
					<div class="post-content">
						<h2 class="post-title">{{ $i->titre }}</h2>
						<div class="post-meta">
							<a href="">{{ $i->users->name }}</a>
							<a href="">
								@foreach ($i->tags as $e)
									{{ $e->name }}
								@endforeach
							</a>
							<a href="">{{ count($i->commentaires) }} Comments</a>
								
							
						</div>
						<p>{{ $i->texte }}</p>
						<a href="/blogpost/{{ $i->id }} class="read-more">Read More</a>
					</div>
				</div>
					 
				 @endif
					
						
				@endforeach
					
					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($category as $i)
							<li><a href="#">{{ $i->name }}</a></li>

								
							@endforeach
							
						</ul>
					</div>
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tag as $i)
							<li><a href="">{{ $i->name }}</a></li>
								
							@endforeach

							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->
