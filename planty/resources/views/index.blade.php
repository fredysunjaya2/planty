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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic veniam consequuntur ea ab necessitatibus c</p>
            </div>
            <div class="jumbo-btn d-flex">
            <x-primary-btn type="button">Subscribe</x-primary-btn>
            <x-secondary-btn type="button">Info</x-secondary-btn>
            </div>
          </div>
          <div class="col-5">
            <img src="{{ asset('/assets/home/jumbo-img.png') }}" alt="" class="jumbo-img">
          </div>
        </div>
      </section>
      <section class="services d-flex">
        <div class="row-services d-flex flex-column">
          <div class="row d-flex gap-4">
            <div class="col-6 service-h d-flex flex-column">
              <div class="services-title">
                <h3>Our Services</h3>
              </div>
              <div class="services-desc">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
            </div>
            <x-service-card serviceTitle="Gift a Subscription"></x-service-card>
          </div>
          <div class="row d-flex gap-4">
            <x-service-card serviceTitle="Unique Gardening Experience"></x-service-card>
            <x-service-card serviceTitle="Free Delivery"></x-service-card>
          </div>
        </div>
      </section>
      <section class="why">
        <div class="row-why">
          <div class="col-6 card-why d-flex flex-column gap-1">
            <h2>Why should you join us?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, eum optio,</p>
        </div>
        <div class="testi-scroll d-flex overflow-x-scroll gap-3">
          <x-testi-card testiName="Name" testiTier="Enthusiast">
            Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
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
