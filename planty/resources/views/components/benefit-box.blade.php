@props([
    'value_emot',
    'value_itle',
    'value_desc',
])

<div class="col-3 benefit-item-container justify-content-center align-items-center d-flex" style="width: 18rem;">
  <div class="card-body">
    <h5 class="benefit-emot">{{ $value_emot }}</h5>
    <h6 class="planty-heading-4 benefit-title mb-2 ">{{ $value_title}}</h6>
    <p class="benefit-desc planty-text-sentence">{{ $value_desc}} </p>
  </div>
</div>

{{-- <div class="col-3 our-values-item-container">
    <div class="row align-items-center">
        <img src="{{ $value_img }}" class="col-3 img-fluid">
        <h4 class="planty-heading-4 col">{{ $value_name }}</h4>
    </div>
    <div class="row planty-text-content">
        <p class="col">{{ $value_desc }}</p>
    </div>
</div> --}}
