<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

  </head>
  <body>
  {{--  <x-navbar>
        </x-navbar>  --}}

     <div class="container-fluid content">
        <div class="position-absolute top-0 end-0 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background.png">
            </div>
         <div class="header-subs">
            <h1 class="planty-heading-1 ">Choose Your Plan</h1>
         </div>
        <div class="container position-relative plan-content">
            <div class="row  justify-content-center subscription-plan">
                <div class="col-4 subscription-card">
                <div class="card-body-subs">
                    <h2 class="subscription-title ">Begineer</h2>
                    <h2 class="planty-heading-4-subs subscription-price mb-2 ">Rp 39.299,00</h2>
                    <p class="benefit-desc planty-text-content">per active user, per month</p>
                    <div class="btn-plan"><button type="button" class="btn btn-success">Select Plan</button></div>
                </div>
            </div>

            <div class="col-4 subscription-card">
                <div class="card-body-subs">
                    <h2 class="subscription-title ">Enthusiast</h2>
                    <h1 class="planty-heading-4-subs subscription-price mb-2 ">Rp 79.299,00</h1>
                    <p class="benefit-desc planty-text-content">per active user, per month </p>
                    <div class="btn-plan"><button type="button" class="btn btn-success ">Select Plan</button></div>
                </div>
                </div>
            </div>
            {{-- bawah harga--}}
            <div class="row position-relative plan-information-content">

            <div class="col-5 plan-information-1">
                <div class="subs-list">
                    <div class="plan-information-title-1">
                        <p class="planty-text-content">start your plant journey with easy- <br> to-care-for plants and comprehensive guidance.</p>
                    </div>
                    <ul>
                        <li>&#10004; Monthly Plant Delivery: A beginner-friendly plant</li>
                        <li>&#10004; Plant Care Guide: Detailed instructions on how to care for the plant</li>
                        <li>&#10004; Basic Gardening Tools: small trowel, pruning shears, and a watering can</li>
                        <li>&#10004; Exclusive Online Access: Access to a library of tutorial videos</li>
                        <li>&#10004; Eco-Friendly Packaging <br><br><br></li>

                    </ul>
                </div>
            </div>

            <div class="col-5 plan-information-2">
                <div class="subs-list">
                    <div class="plan-information-title-2">
                        <p class="planty-text-content">expand your collection and knowledge with a <br> variety of plants and advanced resources.</p>
                    </div>

                    <ul>
                <li>&#10004; Monthly Plant Delivery: A beginner-friendly plant</li>
                <li>&#10004; Plant Care Guide: Detailed instructions on how to care for the plant</li>
                <li>&#10004; Basic Gardening Tools: small trowel, pruning shears, and a watering can</li>
                <li>&#10004; Exclusive Online Access: Access to a library of tutorial videos</li>
                <li>&#10004; Eco-Friendly Packaging</li>
                <li>&#10004; Seasonal Tips</li>
                <li>&#10004; Surprise Gifts: rare plant seeds, stylish plant pots, or unique accessories.</li>
                </ul>
                </div>
            </div>
            </div>

            {{-- accordion --}}
        <div class="header-accordion">
            <h1 class="planty-heading-1 ">Frequently Asked Questions</h1>
         </div>
         <div class="subs-accordion">
          <div id="accordionPanelsStayOpenExample" class="accordion">
                @foreach($accordions as $key => $accordion)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $key + 1 }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $key + 1 }}" aria-expanded="false" aria-controls="flush-collapse{{ $key + 1 }}">
                            <div class="planty-heading-4-subs">{{ $accordion['title'] }}</div>
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $key + 1 }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $key + 1 }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{ $accordion['content'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

         </div>

            </div>
         </div>

    </div>

     {{--  <x-footer>

        </x-footer>  --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/51ee64f08e.js" crossorigin="anonymous"></script>
  </body>
</html>
