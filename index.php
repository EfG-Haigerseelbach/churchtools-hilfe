<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php'; ?>

<body data-bs-spy="scroll" data-bs-target="#toc">

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">

            <?php include_once 'nav.php'; ?>

            <div class="col d-flex flex-column h-sm-100">
                <main class="row overflow-auto">
                    <div class="col-12 pt-4">
                        <div class="container">
                            <h1>EfG Haigerseelbach - ChurchTools Hilfe</h1>
                            <p class="lead">
                                Aus dieser Webseite findest du Hilfestellung rund um die Verwendung von ChurchTools und der
                                ChurchTools-App. Möchtest du eigentlich die Webseite der EfG Haigerseelbach aufrufen oder unsere
                                ChurchTools-Webseite findest du nachfolgend die Links.

                            </p>
                            <div class=" text-center">
                                <a class="btn btn-dark m-2" href="https://efghaigerseelbach.de" role="button">
                                            <i class="bi bi-globe"></i> Webseite der EfG Haigerseelbach
                                        </a>
                                    
                                        <a class="btn btn-dark" href="https://efghaigerseelbach.church.tools" role="button">
                                            <img src="/resources/CT Logo Color.svg" width="16" alt="ChurchTools Logo" class="contacticon"> ChurchTools-Webseite
                                        </a>
                            </div>
                            <!--<div class="container text-center">
                                <div class="row justify-content-md-center">
                                    <div class="col col-lg-2">
                                    <a class="btn btn-dark" href="https://efghaigerseelbach.de" role="button">
                                            <i class="bi bi-globe"></i> Webseite der EfG Haigerseelbach
                                        </a>
                                    </div>
                                    <div class="col col-lg-2">
                                        <a class="btn btn-dark" href="https://efghaigerseelbach.church.tools" role="button">
                                            <img src="/resources/CT Logo Color.svg" width="16" alt="ChurchTools Logo" class="contacticon"> ChurchTools-Webseite
                                        </a>
                                    </div>
                                </div>
                            </div>-->

                            <h2>Themen</h2>
                            <p class="lead">
                                Für folgende Themen findest du auf dieser Seite Hilfestellung. Diese Themen findest du auch im Menü.
                            </p>
                            <div class="container ttext-center">
                                <div class="row row-cols-auto">

                                    <div class="col-12 col-lg-6 col-xl-4 mb-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="/resources/einladungsemail.jpg" class="card-img-top" alt="...">
                                            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                            </svg>-->
                                            <div class="card-body">
                                                <h5 class="card-title">Erstanmeldung</h5>
                                                <p class="card-text">Die Erstanmeldung muss einmalig von dir durchgeführt werden.</p>
                                                <figure>
                                                    <img src="/resources/qr-code erstanmeldung.svg" alt="Logo" height="100" width="100" style="object-fit: contain;">
                                                </figure>
                                                <a href="/erstanmeldung.php" class="btn btn-primary">Weitere Hilfe <i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="col-4">
                                        <div class="card" style="width: 18rem;">
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                            </svg>
                                            <div class="card-body">
                                                <h5 class="card-title">Login</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="/login.php" class="btn btn-primary">Weitere Hilfe</a>
                                            </div>
                                        </div>
                                    </div>-->

                                    <div class="col-12 col-lg-6 col-xl-4 mb-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="/resources/app.jpg" class="card-img-top" style="object-fit: cover; height: 100%;" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">ChurchTools-App Installation</h5>
                                                <p class="card-text">Für den alltäglichen Gebrauch und den erhalt von (Chat-) Benachrichtigungen ist die Verwendung der ChurchTools-App hilfreich.</p>
                                                <figure>
                                                    <img src="/resources/qr-code app.svg" alt="Logo" height="100" width="100" style="object-fit: contain;">
                                                </figure>
                                                <a href="/app.php" class="btn btn-primary">Weitere Hilfe <i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6 col-xl-4 mb-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="/resources/einwilligung - card.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Einwilligung</h5>
                                                <p class="card-text">Datenschutz und Transparenz sind uns wichtig. Insofern dürfen wir deine Daten ohne deine Zustimmung für Aufgaben und Tätigkeiten in der Gemeinde nicht nutzen.</p>
                                                <figure>
                                                    <img src="/resources/qr-code einwilligung.svg" alt="Logo" height="100" width="100" style="object-fit: contain;">
                                                </figure>
                                                <a href="/einwilligung.php" class="btn btn-primary">Weitere Hilfe <i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <!--<div class="col-2">
                        <div class="sticky-top" style="top: 3em;">
                            Inhalt:
                            <hr>
                            <nav id="toc" data-toggle="toc"></nav>
                        </div>
                    </div>-->

                </main>
            </div>
        </div>
    </div>
</body>

</html>