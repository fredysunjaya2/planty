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
    <link href="{{ asset('/css/about_us_style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <x-navbar>
    </x-navbar>
    <div class="container-fluid w-100 about-us-page-content">
        <div class="row about-us align-items-center justify-content-center">
            <img class="about-us-image img-fluid col-lg-6 px-0" src={{ asset('/assets/aboutus/about-us-1.png') }}>
            <div class="about-us-content col-4">
                <h1 class="planty-heading-1">About Us</h1>
                <p class="planty-text-paragraph">At Planty, we believe everyone has the potential to grow a
                    beautiful garden, no matter
                    their level of experience. Our mission is to bring the joy of gardening to homes
                    everywhere by providing a convenient, personalized subscription service that delivers
                    all the tools, seeds, and knowledge you need right to your doorstep.</p>
            </div>
        </div>
        <div class="row our-values">
            <div class="text-center our-values-desc">
                <h1 class="planty-heading-1">Our Values</h1>
                <p class="planty-text-paragraph">
                    At Planty, we're committed to nurturing both plants and people. Our core values guide everything we do, from plant care to customer service.t
                </p>
            </div>
            <div class="col our-values-list-container justify-content-center">
                <div class="row row-cols-lg-3 row-cols-2 row-gap-5 m-0 justify-content-center our-values-list">

                    @foreach ($values as $item)
                        <x-our-value-box value_img="{{ $item['img'] }}" value_name="{{ $item['name'] }}" value_desc="{{ $item['desc'] }}"></x-our-value-box>
                    @endforeach

                    {{-- @for ($i = 0; $i < 6; $i++)
                        @php
                            $values = [
                                [
                                    'name' => 'Sustainability',
                                    'desc' => 'We prioritize eco-friendly practices in all aspects of our business, from packaging to plant care.',
                                    'img' => '/assets/aboutus/our-values-1.png'
                                ],
                                [
                                    'name' => 'Education',
                                    'desc' => 'We empower our customers with knowledge to become successful, eco-conscious plant parents.',
                                    'img' => '/assets/aboutus/our-values-2.png'
                                ],
                                [
                                    'name' => 'Community',
                                    'desc' => 'We foster a supportive network of plant enthusiasts, promoting shared learning and sustainable practices.',
                                    'img' => '/assets/aboutus/our-values-3.png'
                                ],
                                [
                                    'name' => 'Innovation',
                                    'desc' => 'We continuously seek and implement cutting-edge, sustainable solutions in plant care and business operations.',
                                    'img' => '/assets/aboutus/our-values-4.png'
                                ],
                                [
                                    'name' => 'Quality',
                                    'desc' => 'We ensure the highest standards in plant health and product excellence, prioritizing long-lasting, sustainable results.',
                                    'img' => '/assets/aboutus/our-values-5.png'
                                ],
                                [
                                    'name' => 'Responsibility',
                                    'desc' => 'We commit to ethical sourcing, fair labor practices, and reducing our environmental impact at every step.',
                                    'img' => '/assets/aboutus/our-values-6.png'
                                ]
                            ];
                        @endphp
                        <x-our-value-box :value_img="$values[$i]['img']">
                            <x-slot:value_name>
                                {{ $values[$i]['name'] }}
                            </x-slot:value_name>
                            <x-slot:value_desc>
                                {{ $values[$i]['desc'] }}
                            </x-slot:value_desc>
                        </x-our-value-box>
                    @endfor --}}
                </div>
            </div>
        </div>
        <div class="row history-container justify-content-end align-items-start">
            <div class="col-5 history-content my-auto">
                <h1 class="planty-heading-1">History</h1>
                <p class="planty-text-paragraph">Planty was founded in 2024 with the goal of making gardening
                    accessible and enjoyable for everyone. What started as a small passion project has grown into a
                    thriving community of gardening enthusiasts. Over the years, we've expanded our offerings and
                    refined our approach to provide the best possible experience for our subscribers.</p>
            </div>
            <div class="col-5 h-100 history-img p-0">
                <img class="w-100 h-100 object-fit-cover" src={{ asset('/assets/aboutus/history.png') }}>
            </div>
        </div>
        <div class="row our-team">
            <div class="text-center">
                <h1 class="planty-heading-1">Our Team</h1>
            </div>
            <div class="col justify-content-center our-team-list-container">
                <div class="our-team-list row row-cols-lg-3 row-cols-2 row-gap-5 m-0 justify-content-center">
                    @foreach ($team as $member)
                        <x-our-team-box team_img="{{ $member['img'] }}" team_name="{{ $member['name'] }}" team_nim="{{ $member['nim'] }}"></x-our-team-box>
                    @endforeach
                        {{-- @php
                            $team_img = '/assets/aboutus/our-team-1.png';
                        @endphp --}}
                        {{-- <x-our-team-box :team_img="$team_img">
                            <x-slot:team_name>
                                Fredy Sunjaya
                            </x-slot:team_name>
                            <x-slot:team_nim>
                                NIM
                            </x-slot:team_nim>
                        </x-our-team-box>
                    @endfor --}}
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
