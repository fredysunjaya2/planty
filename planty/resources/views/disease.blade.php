<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseases</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/disease_style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/utils.css') }}" />
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container-fluid position-relative d-flex row m-0 p-0 pb-5" style="background-image: url('../assets/gradient-disease-background.png'); background-size: cover; object-fit:cover">
        <div class="background-container d-flex row align-items-center justify-content-center m-0 p-0" style="background-image: url('../assets/diseases-jumbotron.png'); background-size: cover; width:100%; height:100vh; object-fit:cover; background-repeat:no-repeat">
            <a href="{{route('plant-care')}}" class="back">
                <img src="../assets/Vector.svg" alt="">
            </a>
            <div class="title row text-center pb-5">
                <h1 class="text-white planty-heading-1">Plant Diseases</h1>
            </div>
            <div class="sub d-flex row">
                <div class="sub-title row text-center">
                    <p class="text-white planty-heading-3">4 of the most common plant diseases</p>
                </div>
                <div class="disease col-12 d-flex row mt-3 pb-5">
                    <div class="col-1"></div>
                    <div class="disease-list d-flex align-items-center justify-content-around col-10">
                        <x-disease-card href="disease1" number="1" hoverImage="../assets/disease/disease1.jpg">Downy Mildew</x-disease-card>
                        <x-disease-card href="disease2" number="2" hoverImage="../assets/disease/disease2.jpg">Powdery Mildew</x-disease-card>
                        <x-disease-card href="disease3" number="3" hoverImage="../assets/disease/disease3.jpg">Root <br> Rot</x-disease-card>
                        <x-disease-card href="disease4" number="4" hoverImage="../assets/disease/disease4.jpg">Leaf <br> Spot</x-disease-card>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>

        <div class="desc-card d-flex position-relative row col-12 pb-5" style="top: 10rem">
            <div class="desc-disease-card d-flex col-6">
                <div id="disease1">
                    @component('components.description-disease', ['disease' => 'Downy Mildew', 'diseasepic' => '../assets/disease/disease1.jpg'])
                        Downy mildew is a fungal disease that thrives in cool, damp conditions. It appears as yellow to white patches on leaf surfaces with a fuzzy growth underneath. This disease can quickly spread and severely damage plants if left untreated.
                    @endcomponent
                </div>
                <div id="disease2">
                    @component('components.description-disease', ['disease' => 'Powdery Mildew', 'diseasepic' => '../assets/disease/disease2.jpg'])
                        Unlike its "downy" counterpart, powdery mildew presents as a white, powdery coating on leaves and stems. It prefers warm, dry conditions and can affect a wide range of plants, from vegetables to ornamentals.
                    @endcomponent
                </div>
            </div>

            <div class="desc-disease-card d-flex col-6 pb-5">
                <div id="disease3">
                    @component('components.description-disease', ['disease' => 'Root Rot', 'diseasepic' => '../assets/disease/disease3.jpg'])
                        Root rot is a serious condition caused by overwatering or poor drainage. It leads to the decay of plant roots, often resulting in wilting, yellowing leaves, and stunted growth. Prevention involves proper watering practices and well-draining soil.
                    @endcomponent
                </div>
                <div id="disease4">
                    @component('components.description-disease', ['disease' => 'Leaf Spot', 'diseasepic' => '../assets/disease/disease4.jpg'])
                        Leaf spot diseases are caused by various fungi and bacteria. They manifest as dark, circular spots on leaves, which can eventually lead to leaf drop. Good air circulation and avoiding overhead watering can help prevent leaf spot diseases.
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script>
        function scrollToElement(id) {
            document.getElementById(id).scrollIntoView({ 
                behavior: 'smooth', 
                block: 'center'
            });
        }

        document.querySelectorAll('.card-title').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const hoverImage = card.getAttribute('data-hover-image');
                card.style.backgroundImage = `url(${hoverImage})`;
                card.classList.add('hover-background');
            });

            card.addEventListener('mouseleave', () => {
                card.style.backgroundImage = '';
                card.classList.remove('hover-background');
            });
        });
    </script>
</body>
</html>
