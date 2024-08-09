@props(['href', 'number', 'hoverImage'])

<a href="javascript:void(0)" onclick="scrollToElement('{{ $href }}')" class="card-title p-4 m-0 d-flex justify-content-center align-items-start" style="transition: 0.5s;" data-hover-image="{{ $hoverImage }}">
    <div class="disease-card">
        <p id="disease-number">{{ $number }}</p>
        <p class="planty-heading-2">{{ $slot }}</p>
    </div>
</a>
