<div class="row gallery-item-container">
    <h1 class="planty-heading-1 mb-5 p-0">{{ $year }}</h1>
    <div class='col p-0'>
        <div class='row row-cols-lg-4 row-cols-md-3 row-cols-2 row-gap-5 m-0'>
            @foreach ($list as $item)
            <div class="col px-3">
                <div class='card p-0 m-0 gallery-item'>
                    <div class='mb-3 position-relative img-container'>
                        <img src="{{ asset($item->plant_img) }}" class="card-img-top">
                        <div class='position-absolute img-desc'>
                            <p>{{ $item->plant_description }}</p>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <h4 class='planty-heading-4 card-title'>{{ $item->plant_name }}</h4>
                        <p class='planty-text-paragraph card-subtitle'>{{ $item->archive_month }} - {{ $item->tier_name }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
