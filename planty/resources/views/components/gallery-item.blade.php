<div class="row gallery-item-container">
    <h1 class="planty-heading-1 mb-5">{{ $year }}</h1>
    <div class='col'>
        <div class='row'>
            @foreach ($list as $item)
                <div class='col-3'>
                    <div class='mb-3 position-relative img-container'>
                        <img src="{{ asset($item->plant_img) }}">
                        <div class='position-absolute img-desc'>
                            <p>{{ $item->plant_description }}</p>
                        </div>
                    </div>
                    <h4 class='planty-heading-4'>{{ $item->plant_name }}</h4>
                    <p class='planty-text-paragraph'>{{ $item->archive_month }} - {{ $item->tier_name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
