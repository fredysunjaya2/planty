@props([
    'team_img',
    'team_name',
    'team_desc',
])

<div class="col-3 our-team-item-container justify-content-center text-center">
    <img src="{{ $team_img }}" class="img-fluid">
    <h4 class="planty-heading-4">{{ $team_name }}</h4>
    <p class="planty-text-content">{{ $team_nim }}</p>
</div>
