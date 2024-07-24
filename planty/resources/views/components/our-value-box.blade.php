@props(['value_img', 'value_name', 'value_desc'])

<div class="col px-4 our-value-box">
    <div class="card our-values-item-container">
        <div class="d-flex flex-row flex-wrap justify-content-center column-gap-5 align-items-center card-img-top">
            <img src="{{ $value_img }}" class="img-fluid">
            <h4 class="planty-heading-4 card-title">{{ $value_name }}</h4>
        </div>
        <div class="row planty-text-content card-body">
            <p class="col card-text">{{ $value_desc }}</p>
        </div>
    </div>
</div>
