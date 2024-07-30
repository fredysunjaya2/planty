<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{ asset('/css/home_style.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('/css/utils.css') }} />
  </head>
  <body>
    <x-navbar>
    </x-navbar>
    <div class="home-container container-fluid">
      <section class="jumbo">
        <div class="row-jumbo d-flex">
          <div class="col-7">
            <div class="jumbo-text">
                <h1>Grow your own garden now.</h1>
                <p>Experience the joy of fresh herbs and vegetables right at your doorstep with our guidance.</p>
            </div>
            <div class="jumbo-btn d-flex">
            <x-primary-btn type="button">Subscribe</x-primary-btn>
            <x-secondary-btn type="button">Info</x-secondary-btn>
            </div>
          </div>
          <div class="col-5">
            <img class="img-jumbo" src="{{ asset('/assets/home/jumbo-img.png') }}" alt="" class="jumbo-img">
          </div>
        </div>
      </section>
      <section class="services d-flex">
        <div class="row-services d-flex flex-column">
          <div class="row d-flex">
            <div class="col-6 service-h d-flex flex-column">
              <div class="services-title">
                <h3>Our Services</h3>
              </div>
              <div class="services-desc">
                <p>We offer a range of plant-related services to help you cultivate your own thriving indoor garden. From curated plant subscriptions to expert care advice and unique gardening experiences, we're here to support your journey in bringing nature into your home.</p>
              </div>
            </div>
            <x-service-card serviceTitle="Gift a Subscription" serviceImg="assets/home/service-icon1.png">Give the gift of growth with our monthly gardening kit subscription.</x-service-card>
          </div>
          <div class="row d-flex">
            <x-service-card serviceTitle="Unique Gardening Experience"  serviceImg="assets/home/service-icon2.png">Enjoy the thrill of cultivating your own plants with expert guidance and premium supplies.</x-service-card>
            <x-service-card serviceTitle="Free Delivery"  serviceImg="assets/home/service-icon3.png">Benefit from free delivery on all orders to start your gardening journey without any hassle.</x-service-card>
          </div>
        </div>
      </section>
      <section class="why">
        <div class="row-why">
          <div class="col-6 card-why d-flex flex-column gap-1">
            <h2>Why should you join us?</h2>
            <p>Join our community of plant enthusiasts and discover the satisfaction of growing your own greens. Whether you're a novice or an experienced gardener, our kits and resources make it easy to cultivate a thriving garden in any space</p>
            <div class="col-2">
                <x-primary-btn type="button">About Us</x-primary-btn>
            </div>
          </div>
          <div class="why-img">
            <img src="{{ asset('/assets/home/why-img.png') }}" alt="">
          </div>
        </div>
      </section>
    </div>
    <section class="testi d-flex flex-column">
        <div class="testi-text d-flex flex-column">
          <h2>Testimonials</h2>
          <p>What our customers says about our products and services</p>
        </div>
        <div class="testi-scroll d-flex overflow-x-scroll gap-3">
          <x-testi-card testiName="Sarah M" testiTier="Enthusiast">
            Planty transformed my tiny balcony into a refreshing green oasis. I'm thrilled to harvest fresh veggies daily!
          </x-testi-card>
          <x-testi-card testiName="James R." testiTier="Enthusiast">
            As a beginner, I found Planty's step-by-step guides incredibly helpful. Now I have a flourishing mini garden!
          </x-testi-card>
          <x-testi-card testiName="Emily S." testiTier="Enthusiast">
            The quality of Planty's seeds and soil is outstanding. My plants are growing fast and healthy.
          </x-testi-card>
          <x-testi-card testiName="Michael P." testiTier="Enthusiast">
            Subscribing to Planty was the best decision for my gardening hobby. I always look forward to their monthly deliveries!
          </x-testi-card>
          <x-testi-card testiName="Name" testiTier="Enthusiast">
            Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          </x-testi-card>
          <x-testi-card testiName="Name" testiTier="Enthusiast">
            Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          </x-testi-card>
          <x-testi-card testiName="Name" testiTier="Enthusiast">
            Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          </x-testi-card>
        </div>

    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
