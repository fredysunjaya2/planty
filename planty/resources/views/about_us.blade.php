<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Planty</title>
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
        <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/about_us_style.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <x-navbar>
        </x-navbar>
        <div class="container-fluid w-100 about-us-page-content">
            <div class="row about-us">
                <div class="col position-relative">
                    <div class="about-us-image-container">
                        <img class="about-us-image img-fluid" src={{ asset("/assets/aboutus/about-us-1.png") }}>
                    </div>
                    <div class="position-absolute about-us-content col-4">
                        <h1 class="planty-heading-1">About Us</h1>
                        <p class="planty-text-paragraph">At Planty, we believe everyone has the potential to grow a
                            beautiful garden, no matter
                            their level of experience. Our mission is to bring the joy of gardening to homes
                            everywhere by providing a convenient, personalized subscription service that delivers
                            all the tools, seeds, and knowledge you need right to your doorstep.</p>
                    </div>
                </div>
            </div>
            <div class="row our-values ">
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="col-7 text-center">
                            <h1 class="planty-heading-1">Our Values</h1>
                            <p class="planty-text-paragraph">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer t
                            </p>
                        </div>
                    </div>
                    <div class="row our-values-list-container justify-content-center">
                        <div class="col-7">
                            <div class="row gy-5 column-gap-5 justify-content-center">
                                @for ($i = 0; $i < 6; $i++)
                                    @php
                                        $value_img = '/assets/aboutus/our-values-1.png';
                                    @endphp
                                    <x-our-values-box :value_img="$value_img">
                                        <x-slot:value_name>
                                            Sustainability
                                        </x-slot:value_name>
                                        <x-slot:value_desc>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy
                                        </x-slot:value_desc>
                                    </x-our-values-box>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row history-container justify-content-end align-items-center">
                <div class="col-5 offset-2 history-content">
                    <h1 class="planty-heading-1">History</h1>
                    <p class="planty-text-paragraph">Planty was founded in 2024 with the goal of making gardening
                        accessible and enjoyable for everyone. What started as a small passion project has grown into a
                        thriving community of gardening enthusiasts. Over the years, we've expanded our offerings and
                        refined our approach to provide the best possible experience for our subscribers.</p>
                </div>
                <div class="col-5 h-100 history-img">
                    <img class="w-100 h-100 object-fit-cover" src={{ asset("/assets/aboutus/history.png") }}>
                </div>
            </div>
            <div class="row our-team">
                <div class="col">
                    <div class="row text-center">
                        <h1 class="planty-heading-1">Our Team</h1>
                    </div>
                    <div class="row justify-content-center our-team-list-container">
                        <div class="col-7">
                            <div class="row justify-content-center gy-4 column-gap-5">
                                @for ($i = 0; $i < 5; $i++)
                                    @php
                                        $team_img = '/assets/aboutus/our-team-1.png';
                                    @endphp
                                    <x-our-team-box :team_img="$team_img">
                                        <x-slot:team_name>
                                            Fredy Sunjaya
                                        </x-slot:team_name>
                                        <x-slot:team_nim>
                                            NIM
                                        </x-slot:team_nim>
                                    </x-our-team-box>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer>

        </x-footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
