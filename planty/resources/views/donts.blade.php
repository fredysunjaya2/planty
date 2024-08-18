<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Donts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/donts.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/utils.css">
</head>
<body>
    {{-- navbar-start --}}
    <x-navbar></x-navbar>
    {{-- navbar-ending --}}
    <div class="page-container container-fluid p-0 d-flex row m-0 p-0">
        <a href="{{route('plant-care')}}" class="back">
            <img src="../assets/Vector.svg" alt="">
        </a>
        {{-- jumbotron-start --}}
        <div class="jumbotron jumbotron-fluid">
            <div class="jumbotron-container container text-center text-white justify-content-between d-flex flex-column" style="height: 60%">
              <h1 class="planty-heading-1 display-4" style="color: white; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Don'ts</h1>
              <div class="mistakes">
                  <p class="planty-heading-3 m-2" style="color: white;">Avoid these common mistakes</p>'
                  {{-- START CARD COMPONENT! --}}
                    <div class="mistake-container col d-flex justify-content-evenly align-items-center p-0 m-0">
                        <x-mistake-card mistakeLogo="../assets/donts/neglectingIngredients.png" href="neglecting-ingredients">Neglecting ingredients</x-mistake-card>
                        <x-mistake-card mistakeLogo="../assets/donts/overwateringPlants.png" href="overwatering-plants">Overwatering plants</x-mistake-card>
                        <x-mistake-card mistakeLogo="../assets/donts/ignoringLightRequirement.png" href="ignoring-light-requirements">Ignoring light requirement</x-mistake-card>
                    </div>
                  {{-- END START COMPONENT --}}
              </div>
            </div>
        </div>
        {{-- jumbotron-ending --}}

        {{-- START CONTENT COMPONENT --}}
        <div class="content-container" style="height: 100%">
            <div id="neglecting-ingredients" class="div-content row d-flex flex-row justify-content-center align-items-center my-5 py-5 gap-5">
                @component('components.mistake-detail', ['mistakeTitle' => 'Neglecting Ingredients', 'mistakePic' => '../assets/donts/neglectingIngredientsDetail.jpg'])
                    This refers to overlooking proper nutrition and soil composition. Plants need balanced nutrients to thrive. Neglecting fertilization or using the wrong type can result in poor growth and increased vulnerability to pests and diseases. Similarly, using inappropriate soil or failing to replenish soil nutrients over time can hinder plant health. Regular fertilization and occasional repotting with fresh, nutrient-rich soil help ensure your plants have all they need for healthy growth.
                @endcomponent
            </div>

            <div id="overwatering-plants" class="div-content row d-flex flex-row-reverse justify-content-center align-items-center my-5 py-5 gap-5">
                @component('components.mistake-detail', ['mistakeTitle' => 'Overwatering Plants', 'mistakePic' => '../assets/donts/overwateringPlantsDetail.webp'])
                    Overwatering is a common mistake that can suffocate roots and lead to root rot. Many plants prefer soil that dries slightly between waterings. Signs of overwatering include yellowing leaves and wilting despite wet soil. To avoid this, always check soil moisture before watering and ensure proper drainage for your plants.
                @endcomponent
            </div>
            <div id="ignoring-light-requirements" class="div-content row d-flex flex-row justify-content-center align-items-center my-5 py-5 gap-5">
                @component('components.mistake-detail', ['mistakeTitle' => 'Ignoring Light Requirements', 'mistakePic' => '../assets/donts/IgnoringLightRequirementsDetail.jpg'])
                    Different plants have varying light needs. Placing a shade-loving plant in direct sunlight can cause leaf burn, while putting a sun-loving plant in a dark corner leads to weak, leggy growth. Research each plant's light requirements and adjust their positions accordingly. Remember that light conditions change with seasons, so you may need to move plants throughout the year.
                @endcomponent
            </div>
            <div class="blank" style="height: 10rem"></div>
        </div>
        {{-- END CONTENT COMPONENT --}}
    </div>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script>
        function scrollToElement(id) {
            document.getElementById(id).scrollIntoView({
                behavior: 'smooth',
                block: 'center' // Mengatur posisi elemen di tengah layar saat scroll
            });
        }
    </script>
</body>
</html>
