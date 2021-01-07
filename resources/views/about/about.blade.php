<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{ $serviceHome[$random]->icone }}"></i>
                        </div>
                        <h2>{{ $serviceHome[$random]->titre }}</h2>
                        <p>{{ $serviceHome[$random]->texte }}</p>
                    </div>
                </div>
                    
                
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{ $serviceHome[1]->icone }}"></i>
                        </div>
                        <h2>{{ $serviceHome[1]->titre }}</h2>
                        <p>{{ $serviceHome[1]->texte }}</p>
                    </div>
                </div>
                
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{ $serviceHome[$random2]->icone }}"></i>
                        </div>
                        <h2>{{ $serviceHome[$random2]->titre }}</h2>
                        <p>{{ $serviceHome[$random2]->texte }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
           @foreach ($aboutContent as $i)
           <div class="section-title">
                <h2>{{ $i->titre }}</h2>
           </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{ $i->texte1 }}</p>
                </div>
                <div class="col-md-6">
                    <p>{{ $i->texte2 }}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="{{ route("contact") }}" class="site-btn">{{ $i->boutton }}</a>
            </div>
               
           
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{ asset("/img/$i->image") }}" alt="">
                        <a href="{{ $i->video }}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- About section end -->