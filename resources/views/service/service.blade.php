<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            
            <h2>{!! $str6 !!}</h2>
            
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($serviceHome->take(-9) as $i)
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
            
            <a href="{{ route("service") }}#servicePrime" class="site-btn">{{ $titreService->boutton }}</a>
                
            
            
        </div>
    </div>
</div>
<!-- services section end -->