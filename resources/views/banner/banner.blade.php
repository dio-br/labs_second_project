<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logo as $i)
            <img class="logo2" src="{{ asset("/img/$i->logo") }}" alt="">
                
            @endforeach
    @foreach ($banner as $i)
            <p>{{ $i->slogan }}</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="{{ asset("/img/$i->image1") }}"></div>
        <div class="item  hero-item" data-bg="{{ asset("/img/$i->image2") }}"></div>
    </div>
        
    @endforeach
</div>
<!-- Intro Section -->