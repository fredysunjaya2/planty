@props([
    'team_img',
    'team_name',
    'team_desc',
])

<div class="col px-4 our-team-box">
    <div class="card our-team-item-container justify-content-center text-center">
        <img src="{{ $team_img }}" class="img-fluid card-img-top">
        <div class="card-body p-0">
            <h4 class="planty-heading-4 card-title">{{ $team_name }}</h4>
            <p class="planty-text-content card-subtitle my-1">{{ $team_nim }}</p>
        </div>
    </div>
</div>
