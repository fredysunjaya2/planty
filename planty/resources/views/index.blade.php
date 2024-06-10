<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Planty</title>
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
            rel="stylesheet">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
        <link href="{{ url('/css/style.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <x-navbar>
        </x-navbar>
        <div class="container-fluid content">
            <div class="position-absolute top-0 end-0 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background.png">
            </div>
            <div class="row about-us">
                <div class="col position-relative">
                    <div class="about-us-image-container">
                        <img class="about-us-image img-fluid" src="/assets/about-us-1.png">
                    </div>
                    <div class="position-absolute about-us-content col-4">
                        <h1 class="planty-heading-1">About Us</h1>
                        <p class="planty-text-content">At Planty, we believe everyone has the potential to grow a
                            beautiful garden, no matter
                            their level of experience. Our mission is to bring the joy of gardening to homes
                            everywhere by providing a convenient, personalized subscription service that delivers
                            all the tools, seeds, and knowledge you need right to your doorstep.</p>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-50 start-0 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background-2.png">
            </div>
            <div class="row our-values">
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="col-7 text-center">
                            <h1 class="planty-heading-1">Our Values</h1>
                            <p class="planty-text-content">Lorem Ipsum is simply dummy text of the printing and
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
                                        $value_img = '/assets/our-values-1.png';
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
            <div class="position-absolute top-100 end-0 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background-3.png">
            </div>
            <div class="row history justify-content-end align-items-center">
                <div class="col offset-2 history-content">
                    <h1 class="planty-heading-1">History</h1>
                    <p class="planty-text-content">Planty was founded in 2024 with the goal of making gardening
                        accessible and enjoyable for everyone. What started as a small passion project has grown into a
                        thriving community of gardening enthusiasts. Over the years, we've expanded our offerings and
                        refined our approach to provide the best possible experience for our subscribers.</p>
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="/assets/history.png">
                </div>
            </div>
            <div class="position-absolute top-0 end-0 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background-4.png">
            </div>
            <div class="row our-team">
                <div class="col">
                    <div class="row text-center">
                        <h1 class="planty-heading-1">Our Team</h1>
                    </div>
                    <div class="row justify-content-center our-team-list-container">
                        <div class="col-7">
                            <div class="row justify-content-center gy-3 column-gap-3">
                                @for ($i = 0; $i < 5; $i++)
                                    @php
                                        $team_img = '/assets/our-team-1.png';
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
            <div class="position-absolute top-0 end-0 background-gradient">
                <img class="img-fluid" src="/assets/gradient-green-background.png">
            </div>
        </div>
        <x-footer>

        </x-footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
