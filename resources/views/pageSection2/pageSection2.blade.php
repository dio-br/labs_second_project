<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                        <div class="single-post">
                            <div class="post-thumbnail">
                                <img src="{{asset("img/blog/$article->image")}}" alt="">
                                <div class="post-date">
                                    <h2>{{ date("d") }}</h2>
                                    <h3>{{ date("m-Y") }} </h3>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{ $article->titre }}</h2>
                                <div class="post-meta">
                                    <a href="">{{ $article->users->name }}</a>
                                    <a href="">
                                        @foreach ($article->tags as $i)
                                            {{ $i->name }}
                                        @endforeach
                                    </a>
                                   
                                    <a href="">{{count($article->commentaires) }} Comments</a>
                                        
                                    
                                </div>
                                <p>{{ $article->texte }}</p>
                                
                        </div>
               
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img class="avatar" src="/img/{{ $article->users->photo }}">
                        </div>
                        <div class="author-info">
                            <h2>{{ $article->users->name }}, <span>{{ $article->users->roles->name}}</span></h2>
                            <p>{{ $article->description }}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    
                    <div class="comments">
                        <h2>Comments ({{ count($article->commentaires) }})</h2>

                        <ul class="comment-list">
                            @foreach ($article->commentaires as $i)
                            <li>
                                <div class="avatar">
                                    <img src="/img/{{ $i->users->photo }}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>{{ $i->users->name }} | {{ date("d") }} {{ date("M") }}, {{ date("Y") }} | Reply</h3>
                                    <p>{{ $i->texte }}</p>
                                </div>
                            </li>
                            @endforeach
                                
                            
                           
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    @if (Auth::user())
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" action="/commentaire/{{ $article->id }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="texte" placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">Post your commentary</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="d-flex">
                        <a class="btn btn-success" href="{{ route("login") }}">Login</a>
                        <a class="btn btn-primary" href="{{ route("register") }}">Register</a>
                    </div>
                    @endif
                    
                  
                        
                   

                   
                    
                    
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
                        <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
