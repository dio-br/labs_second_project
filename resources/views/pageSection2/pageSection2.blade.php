<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                @foreach ($article->take(1) as $i)
                
                        <div class="single-post">
                            <div class="post-thumbnail">
                                <img src="{{asset("img/blog/$i->image")}}" alt="">
                                <div class="post-date">
                                    <h2>{{ $i->jour }}</h2>
                                    <h3>{{ $i->mois }} {{ $i->annee }}</h3>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{ $i->titre }}</h2>
                                <div class="post-meta">
                                    <a href="">{{ $i->users->name }}</a>
                                    <a href="">Design, Inspiration</a>
                                    @foreach ($article->take(-1) as $i)
                                    <a href="">{{ $i->id }} Comments</a>
                                        
                                    @endforeach
                                </div>
                                <p>{{ $i->texte }}</p>
                                
                        </div>
                @endforeach
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="img/{{ $i->users->photo }}">
                        </div>
                        <div class="author-info">
                            <h2>{{ $i->users->name }}, <span>{{ $i->users->roles->name}}</span></h2>
                            <p>{{ $i->description }}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        {{-- <h2>Comments ({{ $commentaire[-1]->id }})</h2> --}}
                        <ul class="comment-list">
                            @foreach ($commentaire as $i)
                            <li>
                                <div class="avatar">
                                    <img src="img/{{ $i->users->photo }}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>{{ $i->users->name }} | {{ $i->jour }} {{ $i->mois }}, {{ $i->annee }} | Reply</h3>
                                    <p>{{ $i->texte }}</p>
                                </div>
                            </li>
                                
                            @endforeach
                           
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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