<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e8542fcf67.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tutorial_style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/utils.css') }}" />
</head>
<body>
<x-navbar></x-navbar>
<section class="tutorial-container container-fluid p-0">
    <section class= "jumbo">
        <div class="jumbo-text d-flex flex-column">
            <div class="jumbo-header ">
                <h2>Planting Tutorial</h2>
            </div>
            <div class="jumbo-desc d-flex flex-column">
                <h3>Choose your plant category</h3>
                <p>We've divided plants that we share into different categories, find in which category the plant you receive is from a card that is available in the kit</p>
            </div>
        </div>
    </section>
    <section class="tutor">
        <div class="tutor-scroll d-flex overflow-x-scroll">
            <x-tutor-card catName="1">Lorem Ipsum is simply dummy text of the printing and typesetting industry</x-tutor-card>
            <x-tutor-card catName="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</x-tutor-card>
            <x-tutor-card catName="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</x-tutor-card>
            <x-tutor-card catName="4">Lorem Ipsum is simply dummy text of the printing and typesetting industry</x-tutor-card>
        </div>
    </section>
    <section class="ask-us">
        <div class="row-ask d-flex">
            <div class="col-6 askus-img d-flex">
                <img src="../assets/tutorial/askus.png" alt="">
            </div>
            <div class="col-6 askus-desc d-flex flex-column">
                <h4>Don't be afraid to ask us</h4>
                <p>LAt Planty, we're passionate about helping you succeed in your plant care journey. Our team of expert horticulturists is always ready to assist with any questions or concerns you may have. Whether you're a beginner just starting out or an experienced plant parent facing a challenging situation, we're here to provide personalized advice and support. From troubleshooting plant health issues to offering tips on creating the perfect indoor garden, our knowledgeable staff is committed to ensuring your plants thrive. Reach out anytime - we're excited to help you grow!</p>
                {{-- <button type="button" class="primaryBtn">Contact Us</button> --}}
                <x-primary-btn type="button">Contact Us</x-primary-btn>
            </div>
        </div>
    </section>
  </section>

{{-- <x-modal-tutor-popup ></x-modal-tutor-popup> --}}
<div class="modal fade modal-xl" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content popup d-flex">
            <div class="popup-content d-flex flex-row">
                <div class="popup-left d-flex flex-column">
                    <div class="popup-vid">
                        <iframe src="https://www.youtube.com/embed/HPJKxAhLw5I" title="Planting 20,000,000 Trees, My Biggest Project Ever!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="popup-head d-flex flex-column">
                        <div class="popup-title d-flex flex-row">
                            <h2>Category 1</h2>
                            <img src="../assets/tutorial/popup.png" alt="#">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been </p>
                    </div>
                </div>
                <div class="popup-right d-flex flex-column">
                    <h2>Step by Step</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum h</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-xl" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content popup d-flex">
            <div class="popup-content d-flex flex-row">
                <div class="popup-left d-flex flex-column">
                    <div class="popup-vid">
                        <iframe src="https://www.youtube.com/embed/HPJKxAhLw5I" title="Planting 20,000,000 Trees, My Biggest Project Ever!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="popup-head d-flex flex-column">
                        <div class="popup-title d-flex flex-row">
                            <h2>Category 2</h2>
                            <img src="../assets/tutorial/popup.png" alt="#">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been </p>
                    </div>
                </div>
                <div class="popup-right d-flex flex-column">
                    <h2>Step by Step</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum h</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-xl" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content popup d-flex">
            <div class="popup-content d-flex flex-row">
                <div class="popup-left d-flex flex-column">
                    <div class="popup-vid">
                        <iframe src="https://www.youtube.com/embed/HPJKxAhLw5I" title="Planting 20,000,000 Trees, My Biggest Project Ever!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="popup-head d-flex flex-column">
                        <div class="popup-title d-flex flex-row">
                            <h2>Category 3</h2>
                            <img src="../assets/tutorial/popup.png" alt="#">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been </p>
                    </div>
                </div>
                <div class="popup-right d-flex flex-column">
                    <h2>Step by Step</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum h</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-xl" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content popup d-flex">
            <div class="popup-content d-flex flex-row">
                <div class="popup-left d-flex flex-column">
                    <div class="popup-vid">
                        <iframe src="https://www.youtube.com/embed/HPJKxAhLw5I" title="Planting 20,000,000 Trees, My Biggest Project Ever!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="popup-head d-flex flex-column">
                        <div class="popup-title d-flex flex-row">
                            <h2>Category 4</h2>
                            <img src="../assets/tutorial/popup.png" alt="#">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been </p>
                    </div>
                </div>
                <div class="popup-right d-flex flex-column">
                    <h2>Step by Step</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum h</p>
                </div>
            </div>
        </div>
    </div>
</div>



</section>
<x-footer>s</x-footer>
</body>
</html>
