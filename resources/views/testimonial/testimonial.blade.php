<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                   
                    <h2>{!! $str4 !!}</h2>
                   
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonial->take(-6) as $i)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{ $i->texte }}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="{{ asset("/img/avatar/$i->image") }}" alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{ $i->prenom }}</h2>
                                <p>{{ $i->fonction }}</p>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->