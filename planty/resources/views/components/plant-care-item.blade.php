@props([
    'plant_care_title',
    'plant_care_desc',
])

<div class="row plant-care-item">
    <h1 class='planty-heading-1'>{{ $plant_care_title }}</h1>
    <p class='planty-text-paragraph'>{{ $plant_care_desc }}</p>
    {{-- <a class="btn btn-primary planty-heading-4" href="#" role="button">Learn More</a> --}}
    <a href="#" >
        <x-primary-btn type="button">Learn More</x-primary-btn>
    </a>
</div>
