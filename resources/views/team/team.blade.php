<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! $str8 !!}</h2>
            
        </div>
        <div class="row">
            @foreach ($profilTeam as $i)
        
                        @if ($i->fonction != 'CEO COMPANY' && $stop != 2)
        
                            <!-- single member -->
                            <div class="col-sm-4">
                                <div class="member">
                                    <img src="{{asset("img/team/$i->image")}}" alt="">
                                    <h2>{{$i->prenom}}</h2>
                                    <h3>{{$i->fonction}}</h3>
                                </div>
                            </div>
                            <div class="d-none" style="display: none">{{$stop++}}</div>
                            <div class="d-none" style="display: none">{{$id = $i->id}}</div>
        
                        @endif
             @endforeach
        
             @foreach ($profilTeam  as $i)
        
                        @if ($i->fonction == 'CEO COMPANY')
        
                            <div class="col-sm-4">
                                <div class="member">
                                    <img src="{{asset("img/team/$i->image")}}" alt="">
                                    <h2>{{$i->prenom}}</h2>
                                    <h3>{{$i->fonction}}</h3>
                                </div>
                            </div>
        
                            @endif
        
             @endforeach
        
                            <div class="d-none" style="display: none">{{$stop=1}}</div>
             @foreach ($profilTeam as $i)
        
                            @if ($i->fonction != 'CEO COMPANY' && $i->id != $id && $stop != 2)
        
                            <div class="col-sm-4">
                                <div class="member">
                                    <img src="{{asset("img/team/$i->image")}}" alt="">
                                    <h2>{{$i->prenom}}</h2>
                                    <h3>{{$i->fonction}}</h3>
                                </div>
                            </div>
        
                            <div class="d-none" style="display: none">{{$stop++}}</div>
                        @endif
        
        
             @endforeach
            
        </div>
    </div>
</div>
<!-- Team Section end-->