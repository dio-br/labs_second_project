<!-- services card section-->
<div class="services-card-section spad" id="serviceCard">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($blocRapid->take(-3) as $i)
            <div class="gg col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img class="lolo" src="{{ asset("/img/$i->image") }}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{ $i->titre }}</h2>
                        <p>{{ $i->texte }}</p>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->