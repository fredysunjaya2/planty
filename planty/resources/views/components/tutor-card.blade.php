<div id="{{$catCol}}" class="tutor-card d-flex flex-column">
    <div class="tutor-card-top d-flex flex-row">
        <img src="../assets/tutorial/line.png" alt="">
        <p class="p-0 m-0">Category {{$catId}}</p>
    </div>
    <div class="tutor-card-main d-flex flex-column">
        <div class="tutor-card-title d-flex flex-column">
            <img src="{{$catImg}}" alt="">
            <p>{{$catName}}</p>
        </div>
        <div class="tutor-card-desc">
            <p>{{$slot}}</p>
        </div>
    </div>
    <div class="learn-more d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal{{$catId}}">
        <p>Learn More</p>
        <i class="fa-solid fa-arrow-right pt-1"></i>
    </div>
</div>

{{-- <x-modal-tutor-popup catName ='{{$catName}}'></x-modal-tutor-popup> --}}
