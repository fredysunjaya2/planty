<div class="testi-card d-flex flex-column">
    <img src="{{ asset('/assets/home/testi-quote.png') }}" alt="">
    <p>{{$slot}}</p>
    <div class="testi-profile d-flex flex-row">
        <img src="{{ asset('/assets/home/testi-pp.png') }}" alt="">
        <div class="testi-profile-text">
            <p class="pp-name">{{ $testiName }}</p>
            <p class="pp-tier">{{ $testiTier }}</p>
        </div>
    </div>
</div>
