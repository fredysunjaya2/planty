<a href="javascript:void(0)" onclick="scrollToElement('{{ $href }}')" class="mistake-card p-3 m-0 d-flex justify-content-center align-items-center" style="border-radius: 0.9375rem; text-decoration: none;">
  <div class="col d-flex justify-content-center align-items-center gap-3">
      <div class="align-content-center">
          <img src="{{$mistakeLogo}}" class="img-fluid" style="width: 100% ;height: 3rem; object-fit: cover" alt="..."></img>
      </div>
      <div class="col-6 align-content-center text-wrap">
          <div class="card-body p-0 m-0 ps-3">
              <p class="planty-heading-4 card-title m-0 p-0 text-wrap text-start">{{$slot}}</p>
          </div>
      </div>
  </div>
</a>
