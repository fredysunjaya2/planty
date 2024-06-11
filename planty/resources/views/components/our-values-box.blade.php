@props([
    'value_img',
    'value_name',
    'value_desc',
])

<div class="col-3 our-values-item-container">
    <div class="row align-items-center">
        <img src="{{ $value_img }}" class="col-3 img-fluid">
        <h4 class="planty-heading-4 col">{{ $value_name }}</h4>
    </div>
    <div class="row planty-text-content">
        <p class="col">{{ $value_desc }}</p>
    </div>
</div>
