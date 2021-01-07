<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! $str8 !!}</h2>
            
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