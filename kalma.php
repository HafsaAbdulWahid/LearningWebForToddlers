<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kutuby</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-server me-3"></i>Kutuby</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="quiz.php" class="nav-item nav-link">Quiz</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="login.php" class="btn btn-secondary py-2 px-4 ms-3">Login</a>
            </div>
        </nav>


            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 pt-5">
                        <div class="col-12 text-center text-lg-start">
                            <h1 class="display-4 text-white animated slideInLeft">Testimonial</h1>
                            <nav aria-label="breadcrumb">
                                <ol
                                    class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Kalma -->
        <div class="container mt-5">
            <h1>Kalma</h1>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card kalma-card"
                        onclick="openKalma('Kalma e Tayyab', 'KalmaTayyab.mp3', 'لَا إِلٰهَ إِلَّا الله مُحَمَّدٌ رَسُولُ الله', 'There is no god but Allah, [and] Muhammad is the messenger of Allah.')">
                        <div class="card-body">
                            <h5 class="card-title">Kalma e Tayyab</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card kalma-card"
                        onclick="openKalma('Kalma e Shahada', 'KalmaShahada.mp3', 'أَشْهَدُ أنْ لا إلَٰهَ إِلَّا اللهُ وَحْدَهُ لَا شَرِيْكَ لَهُ وَأشْهَدُ أنَّ مُحَمَّدًا عَبْدُهُ وَرَسُولُهُ', 'I bear witness that (there is) no god except Allah; One is He, no partner hath He, and I bear witness that Muhammad is His Servant and Messenger.')">
                        <div class="card-body">
                            <h5 class="card-title">Kalma e Shahada</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card kalma-card"
                        onclick="openKalma('Kalma e Tamjeed', 'KalmaTamjeed.mp3' , 'سُبْحَان اللهِ وَالْحَمْدُلِلّهِ وَلا إِلهَ إِلّااللّهُ وَاللّهُ أكْبَرُ وَلا حَوْلَ وَلاَ قُوَّةَ إِلَّا بِاللّهِ الْعَلِيِّ الْعَظِيْم', 'Exalted is Allah, and praise be to Allah, and there is no deity except Allah, and Allah is the Greatest. And there is no might nor power except in Allah, the Most High, the Most Great')">
                        <div class="card-body">
                            <h5 class="card-title">Kalma e Tamjeed</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card kalma-card"
                        onclick="openKalma('Kalma e Tawheed', 'KalmaTawheed.mp3', 'لَآ اِلٰهَ اِلَّا اللهُ وَحْدَهٗ لَا شَرِيْكَ لَهٗ لَهُ الْمُلْكُ وَ لَهُ الْحَمْدُ يُحْىٖ وَ يُمِيْتُ وَ هُوَحَیٌّ لَّا يَمُوْتُ اَبَدًا اَبَدًاؕ ذُو الْجَلَالِ وَالْاِكْرَامِؕ بِيَدِهِ الْخَيْرُؕ وَهُوَ عَلٰى كُلِّ شیْ ٍٔ قَدِیْرٌؕ', '(There is) no god except Allah – One is He, no partners hath He. His is the Dominion, and His is the Praise. He gives life and causes death, and He is Living, who will not die, never. He of Majesty and Munificence. Within His Hand is (all) good. And He is, upon everything, Able (to exert His Will).')">
                        <div class="card-body">
                            <h5 class="card-title">Kalma e Tawheed</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card kalma-card"
                        onclick="openKalma('Kalma e Istighfar', 'KalmaIstighfar.mp3', 'اَسْتَغْفِرُ اللهَ رَبِّىْ مِنْ كُلِّ ذَنْۢبٍ اَذْنَبْتُهٗ عَمَدًا اَوْ خَطَا ًٔ سِرًّا اَوْ عَلَانِيَةً وَّاَتُوْبُ اِلَيْهِ مِنَ الذَّنْۢبِ الَّذِیْٓ اَعْلَمُ وَ مِنَ الذَّنْۢبِ الَّذِىْ لَآ اَعْلَمُ اِنَّكَ اَنْتَ عَلَّامُ الْغُيُوْبِ وَ سَتَّارُ الْعُيُوْبِ و َغَفَّارُ الذُّنُوْبِ وَ لَا حَوْلَ وَلَا قُوَّةَ اِلَّا بِاللهِ الْعَلِىِّ الْعَظِيْمِؕ', 'I seek forgiveness from Allah, my Lord, from every sin I committed knowingly or unknowingly, secretly or openly, and I turn towards Him from the sin that I know and from the sin that I do not know. Certainly You, You (are) the knower of the hidden things and the Concealer (of) the mistakes and the Forgiver (of) the sins. And (there is) no power and no strength except from Allah, the Most High, the Most Great.')">
                        <div class="card-body">
                            <h5 class="card-title">Kalma e Istighfar</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card kalma-card"
                        onclick="openKalma('Kalma e RaddeKufr', 'KalmaRaddeKufr.mp3', 'اَللّٰهُمَّ اِنِّیْٓ اَعُوْذُ بِكَ مِنْ اَنْ اُشْرِكَ بِكَ شَيْئًا وَّاَنَآ اَعْلَمُ بِهٖ وَ اَسْتَغْفِرُكَ لِمَا لَآ اَعْلَمُ بِهٖ تُبْتُ عَنْهُ وَ تَبَرَّأْتُ مِنَ الْكُفْرِ وَ الشِّرْكِ وَ الْكِذْبِ وَ الْغِيْبَةِ وَ الْبِدْعَةِ وَ النَّمِيْمَةِ وَ الْفَوَاحِشِ وَ الْبُهْتَانِ وَ الْمَعَاصِىْ كُلِّهَا وَ اَسْلَمْتُ وَ اَقُوْلُ لَآ اِلٰهَ اِلَّا اللهُ مُحَمَّدٌ رَّسُوْلُ اللهِؕ','O Allah! I seek protection in You from that I should not join any partner with You and I have knowledge of it. I seek Your forgiveness from that which I do not know. I repent from it (ignorance) and I reject disbelief and joining partners with You and of falsehood and slandering and innovation in religion and tell-tales and evil deeds and the blame and the disobedience, all of them. I submit to Your will and I believe and I declare: There is none worthy of worship except Allah and Muhammad is His Messenger.')">
                        <div class="card-body">
                            <h5 class="card-title">Kalma e Radde Kufr</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Kalma details -->
        <div class="modal fade" id="kalmaModal" tabindex="-1" role="dialog" aria-labelledby="kalmaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kalmaModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" onclick="stopAudio()">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="kalmaDescription"></p>
                        <!-- Separate <audio> element for each Kalma -->
                        <audio controls id="kalmaAudio"></audio>
                        <!-- Add more audio elements for each Kalma as needed -->
                    </div>
                </div>
            </div>
        </div>



        <!-- End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row gy-5 gx-4 pt-5">
                    <div class="col-12">
                        <h5 class="fw-bold text-white mb-4">Subscribe Our Newsletter</h5>
                        <div class="position-relative" style="max-width: 400px;">
                            <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">About Us</h5>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Our Services</h5>
                                <a class="btn btn-link" href="">Domain Register</a>
                                <a class="btn btn-link" href="">Shared Hosting</a>
                                <a class="btn btn-link" href="">VPS Hosting</a>
                                <a class="btn btn-link" href="">Dedicated Hosting</a>
                                <a class="btn btn-link" href="">Reseller Hosting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-lg-n5">
                        <div class="bg-light rounded" style="padding: 30px;">
                            <input type="text" class="form-control border-0 py-2 mb-2" placeholder="Name">
                            <input type="email" class="form-control border-0 py-2 mb-2" placeholder="Email">
                            <textarea class="form-control border-0 mb-2" rows="2" placeholder="Message"></textarea>
                            <button class="btn btn-primary w-100 py-2">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>