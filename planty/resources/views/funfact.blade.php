<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Planty</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
    <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/funfact.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
  <body>
  <x-navbar>
        </x-navbar>

  <div class="container-fluid content">
         <div class="position-absolute background-top-fun">
           <img src="/assets/funfact/background-top.png" class="img-fluid w-100">
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="back-icon"><a href="#"><i class="fas fa-solid fa-chevron-left fw-bold text-start top-0 start-0 planty-heading-1 text-white"></i></a></div>
            <div class="text-center row">
                <h1 class="planty-heading-1 text-white">Fun Facts</h1>
            </div>

             <div class="row content-wrapper position-relative">
                <div class="col-9 content-text mt-5 d-flex ">
                    <h1 class="planty-heading-1 fw-bold">Did you Know?</h1>
                    <p class="planty-text-paragraph">At Planty, we believe everyone has the potential to grow a
                                    beautiful garden, no matter
                                    their level of experience. Our mission is to bring the joy of gardening to homes
                                    everywhere by providing a convenient, personalized subscription service that delivers
                                    all the tools, seeds, and knowledge you need right to your doorstep.</p>
                </div>
                <img class="img-fluid col-lg-6 px-0 content-image" src="/assets/funfact/know-image.png">

            </div>
            <div class="benefit-1 justify-content-center align-items-center d-flex">
                <div class="row benefit-wrapper container d-flex flex-col">
                        <div class="col-lg-6 col-sm-12 benefit-title text-center">
                            <div class="planty-heading-1 ">6 Benefits of Indoor Plants</div>
                            <p class="planty-text-paragraph">Indoor plants do more than just beautify your space.
                                 They offer a multitude of benefits that can significantly improve your quality of life,
                                  from purifying the air you breathe to boosting your mental well-being.
                                  Discover how these green companions can
                                  transform your home and workplace into healthier, more vibrant environments. </p>
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

              <div class="benefit-2 justify-content-center align-items-center d-flex">
                <div class="row benefit-wrapper container d-flex flex-col">
                        <div class="col-lg-6 col-sm-12 benefit-title text-center">
                            <div class="planty-heading-1 ">6 Benefits of Indoor Plants</div>
                            <p class="planty-text-paragraph">Indoor plants do more than just beautify your space.
                                 They offer a multitude of benefits that can significantly improve your quality of life,
                                  from purifying the air you breathe to boosting your mental well-being.
                                  Discover how these green companions can
                                  transform your home and workplace into healthier, more vibrant environments. </p>
                        </div>
                        <div class="benefit-item">
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

            <div class="why-content mt-5  mb-5  justify-content-center align-items-center d-flex">
                <div class="why-content-wrapper container row ">
                    <div class=" col-sm-12 col-md-4 why-image"><img class="img" src="/assets/funfact/fun-why.png"></div>
                    <div class="col-md-8 col-sm-12 why-content-text p-0 mt-5">
                        <h1 class="planty-heading-1 ">Why should you start gardening?</h1>
                        <p class="planty-text-content">Gardening offers multiple benefits for your health and home.
                              It provides relaxing outdoor activity, fresh produce, and a connection to nature.
                              Tending plants reduces stress, improves mood, and adds beauty to your living space.
                              Whether you have a large yard or just a few pots, starting a garden can enrich your
                              life and environment in meaningful ways. </p>
                        <x-primary-btn type="button">Start Now</x-primary-btn>
                    </div>
                </div>
            </div>

        </div>





  </div>
 <x-footer>
        </x-footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
