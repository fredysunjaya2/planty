<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseases</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/disease.css') }}" />
</head>
<body>
    <div class="container-fluid position-relative d-flex row m-0 p-0" style="background-image: url('../assets/gradient-disease-background.png'); background-size: cover">
        <div class="d-flex row align-items-center justify-content-center m-0 p-0" style="background-image: url('../assets/diseases-jumbotron.png'); background-size: contain; width:100%; height:100vh">
            <a href="#">
                <img src="../assets/Vector.svg" alt="" class="ps-5 pt-5">
            </a>
            <div class="title row text-center pb-5">
                <h1 class="text-white" style="font-family: Poppins, sans-serif; font-weight:700; font-size:3rem">Plant Diseases</h1>
            </div>
            <div class="d-flex row">
                <div class="sub-title row text-center">
                    <p class="text-white" style="font-family: Poppins, sans-serif; font-weight:600; font-size:2rem">4 of the most common plant diseases</p>
                </div>
                <div class="col-12 d-flex row mt-3 pb-5">
                    <div class="col-1"></div>
                    <div class="disease-card d-flex align-items-center justify-content-around col-10">
                        <a href="#disease1"><x-disease-card>1</x-disease-card></a>
                        <a href="#disease2"><x-disease-card>2</x-disease-card></a>
                        <a href="#disease3"><x-disease-card>3</x-disease-card></a>
                        <a href="#disease4"><x-disease-card>4</x-disease-card></a>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>

        <div class="desc-card d-flex position-relative row col-12" style="top: 10rem">
            <div class="desc-disease-card d-flex col-6">
                <x-description-disease id="disease1"></x-description-disease>
                <x-description-disease id="disease2"></x-description-disease>
            </div>

            <div class="desc-disease-card d-flex col-6">
                <x-description-disease id="disease3"></x-description-disease>
                <x-description-disease id="disease4"></x-description-disease>
            </div>
        </div>
    </div>
</body>
</html>