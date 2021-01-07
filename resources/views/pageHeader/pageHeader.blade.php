<!-- Page header -->
@foreach ($navbar as $i)
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>{{ $i->link2 }}</h2>
            <div class="page-links">
                <a href="{{ route("home") }}">{{ $i->link1 }}</a>
                <span>{{ $i->link2 }}</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->
@endforeach