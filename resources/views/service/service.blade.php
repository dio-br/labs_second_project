<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @foreach ($titreService as $i)
            <h2>{{ $i->titre }}</h2>
                
            @endforeach
            
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($serviceHome as $i)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{ $i->icone }}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $i->titre }}</h2>
                        <p>{{ $i->texte }}</p>
                    </div>
                </div>
            </div>
                
            @endforeach
            <div class="w-100">
                <div class="text-center">
                    {{ $serviceHome->links() }}
                </div>
            </div>
            
           
        </div>
        <div class="text-center">
            @foreach ($titreService as $i)
            <a href="{{ route("contact") }}" class="site-btn">{{ $i->boutton }}</a>
                
            @endforeach
            
        </div>
    </div>
</div>
<!-- services section end -->