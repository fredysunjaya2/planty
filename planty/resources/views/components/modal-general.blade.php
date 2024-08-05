<div class="modal fade modalgen" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content code-dialog">
                <div class="modal-header border-0">
                    <h1 class="modal-title planty-heading-2" id="staticBackdropLabel">{{$header}}</h1>
                </div>
                <div class="modal-body pt-0 pb-0">
                    <p class="planty-text-sentence m-0">{{$slot}}</p>
                </div>
                <div class="modal-footer border-0">
                    <x-primary-btn type="button" data-bs-dismiss="modal">{{$btn}}</x-primary-btn>
                </div>
            </div>
        </div>
 </div>
