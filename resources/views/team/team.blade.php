<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($titreTeam as $i)
                <h2>{{ $i->titre }}</h2>
            @endforeach
            
        </div>
        <div class="row">
            <!-- single member -->
            @foreach ($profilTeam->take(3) as $i)
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{ asset("/img/team/$i->image") }}" alt="">
                    <h2>{{ $i->prenom }}</h2>
                    <h3>{{ $i->fonction }}</h3>
                </div>
            </div>
                
            @endforeach
            
            
        </div>
    </div>
</div>
<!-- Team Section end-->