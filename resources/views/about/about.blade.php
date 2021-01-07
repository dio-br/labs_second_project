<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($serviceCard->shuffle()->slice(0,3) as $i)
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{ $i->icone }}"></i>
                        </div>
                        <h2>{{ $i->titre }}</h2>
                        <p>{{ $i->texte }}</p>
                    </div>
                </div>
                    
                @endforeach
                
                    
                
                
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
           
           <div class="section-title">
                <h2>{!! $str2 !!}</h2>
           </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{ $aboutContent->texte1 }}</p>
                </div>
                <div class="col-md-6">
                    <p>{{ $aboutContent->texte2 }}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="{{ route("contact") }}" class="site-btn">{{ $aboutContent->boutton }}</a>
            </div>
               
           
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{ asset("/img/$aboutContent->image") }}" alt="">
                        <a href="{{ $aboutContent->video }}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- About section end -->