<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

  </head>
  <body>
  {{--  <x-navbar>
        </x-navbar>  --}}

  <div class="container-fluid content ">
       <div class="position-absolute background-top-fun">
            <img  src="/assets/funfact/background-top.png">
            </div>
            <div class="col funfact">
                <div class="col position-relative">

                  <div class="row header-funfact">
                    <div class="col-3 fs-1 fw-bold text-start position-absolute top-0 start-0 mt-5"><p><</p></div>
                    <div class="col-9 header-text-fun text-center" ><h1 class="planty-heading-1-white ">Fun Facts</h1></div>
                  </div>

                   <div class="col position-relative">
                    <div class="funfact-image-container">
                        <img class="about-us-image img-fluid" src="/assets/funfact/know-image.png">
                    </div>
                    <div class="position-absolute funfact-content col-4">
                        <h1 class="fun-heading-2 fw-bold">Did you Know?</h1>
                        <p class="planty-text-content">At Planty, we believe everyone has the potential to grow a
                            beautiful garden, no matter
                            their level of experience. Our mission is to bring the joy of gardening to homes
                            everywhere by providing a convenient, personalized subscription service that delivers
                            all the tools, seeds, and knowledge you need right to your doorstep.</p>
                    </div>
                </div>
                </div>
          </div>
           <div class="position-absolute top-50 start-50 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background-3.png">
          </div>

         <div class="container-xl position-relative benefit">
            <div class="col benefit-view">
              <div class="row justify-content-center  benefit-content gy-5 column-gap-5 benefit-container">
                <div class="row">
                        <div class="col-6 benefit-title ">
                            <div class="planty-heading-1 ">6 Benefits of Indoor Plants</div>
                            <p class="planty-text-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                               Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown </p>
                        </div>
                          @foreach ($benefits as $item)
                                <x-benefit-box >
                                        <x-slot:value_emot>
                                           <h1>{!! $item['emot'] !!}</h1>
                                        </x-slot:value_emot>
                                        <x-slot:value_title>
                                            {!! $item['title'] !!}
                                        </x-slot:value_title>
                                        <x-slot:value_desc>
                                            {!! $item['desc'] !!}
                                        </x-slot:value_desc>
                                    </x-benefit-box>
                          @endforeach

                          </div>
                </div>
            </div>
                    </div>
                    <div class="container fun-why">
                      <div class="row">
                        <div class="col-4"><img class="img" src="/assets/funfact/fun-why.png"></div>
                        <div class="col-8">
                            <div class="planty-heading-1 ">Why should you start gardening?</div>
                            <p class="planty-text-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown  </p>
                               <button type="button" class="btn btn-success">Start Now</button>
                        </div>
                      </div>
                    </div>


                </div>
            </div>


            </div>
         </div>
  </div>
     {{--  <x-footer>

        </x-footer>  --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
