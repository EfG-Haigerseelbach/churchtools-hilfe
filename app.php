<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php'; ?>

<body data-bs-spy="scroll" data-bs-target="#toc">

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">

            <?php include_once 'nav.php'; ?>

            <div class="col d-flex flex-column h-sm-100">
                <main class="row overflow-auto">
                    <div class="col-12 col-xxl-9 pt-4">
                        <div class="container">
                            <h1>ChurchTools-App Installation & Einrichtung</h1>
                            <p class="lead">
                                Für den alltäglichen Gebrauch und den erhalt von (Chat-) Benachrichtigungen ist die Verwendung der
                                ChurchTools-App hilfreich. Sie bietet außerdem einen Überblick über anstehende Veranstaltungen sowie den Gemeindekalender
                                mit allen weiteren Terminen, Infos zu Gruppen uvm.
                            </p>
                            <div id="toc-as-collapse">
                            <p class="d-inline-flex gap-1">
                                <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#toc-collapse" aria-expanded="false" aria-controls="toc-collapse">
                                    Inhaltsverzeichnis <i class="bi bi-chevron-expand"></i>
                                </button>
                            </p>
                            <div class="collapse mb-4" id="toc-collapse" style="line-height: 21px; font-size: 14px; text-decoration-color: rgba(33, 37, 41, 0.75); padding: 1.25rem 1.25rem 1.25rem 1rem; background-color: #f8f9fa; border: 1px solid var(--bs-border-color); border-radius: var(--bs-border-radius);">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#installation">Installation</a></li>
                                    <li><a href="#anmeldung-mit-emailadresse-passwort-option-1">Anmeldung mit Emailadresse & Passwort (Option 1)</a></li>
                                    <li><a href="#alternative-anmeldung-mittels-email-passwort-option-2">Alternative Anmeldung mittels Email & Passwort (Option 2)</a></li>
                                    <li><a href="#anmeldung-mittels-qr-code-und-einem-pc">Anmeldung mittels QR-Code und einem PC</a></li>
                                    <li><a href="#anmeldung-funktioniert-nicht">Anmeldung funktioniert nicht</a></li>
                                </ul>
                            </div>
                            </div>
                            <h2>Installation <i class="bi bi-share" data-share-title="ChurchTools-App Installation" data-share-url="/app.php#installation"></i></h2>
                            <p>
                                Die ChurchTools-App kann über den Apple App-Store oder den Google Play-Store installiert werden.
                            </p>
                            <div class="container text-center">
                                <div class="row justify-content-md-center mb-4">
                                    <div class="col col-xl-2">
                                        <a class="btn btn-dark" href="https://itunes.apple.com/de/app/id1413263051" role="button">
                                            <i class="bi bi-apple"></i> ChurchTools-App im App-Store
                                        </a>
                                    </div>

                                    <div class="col col-xl-2">
                                        <a class="btn btn-dark" href="https://play.google.com/store/apps/details?id=tools.church.app" role="button">
                                            <i class="bi bi-google-play"></i> ChurchTools-App im Play-Store
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <h2 data-toc-text="Email & Passwort Option 1">Anmeldung mit Emailadresse & Passwort (Option 1)
                                <i class="bi bi-share" data-share-title="ChurchTools-App Einrichtung mit Email und Passwort" data-share-url="/app.php#anmeldung-mit-emailadresse-passwort-option-1"></i>
                            </h2>
                            <p class="lead">
                                In 7 Schritten kannst du die Anmeldung in der ChurchTools-App mittels Emailadresse und Passwort durchführen. Alles was du benötigst ist dein Smartphone.
                            </p>
                            <div class="container ttext-center">
                                <div class="row row-cols-auto">
                                    <div class="col-sm-6">
                                        <i class="bi bi-1-circle"></i> Starte die ChurchTools-App. Du hast die ChurchTools-App noch nicht installiert? Dann <a href="#installation">installiere</a> zunächst die App.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd 1_.jpg" style="margin: 0.5em; width: 100%; max-width: 200px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-2-circle"></i> Klicke im unteren Bereich auf den Text <span style="font-style: italic;">URL eingeben</span>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd 2_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-3-circle"></i> Gib die Zeichenkette <span style="font-family: monospace;">efghaigerseelbach</span> ein. <i class="bi bi-4-circle"></i> Klicke auf Weiter.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd 3_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-5-circle"></i> Gib deine E-Mailadresse ein, die du in ChurchTools hinterlegt hast. Hast du mehrere E-Mailadressen?
                                        Dann achte darauf die Korrekte zu verwenden. <i class="bi bi-6-circle"></i> Gib dein Passwort ein. Hast du dein Passwort vergessen,
                                        dann musst du dieses zunächst <a href="#">zurücksetzten</a>. <i class="bi bi-7-circle"></i> Klicke auf Einloggen. Die Startseite sollte nun angezeigt werden.<br>
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd 4_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <h2 data-toc-text="Email & Passwort Option 2">Alternative Anmeldung mittels Email & Passwort (Option 2)
                                <i class="bi bi-share" data-share-title="ChurchTools-App Einrichtung mit Email und Passwort (Option 2)" data-share-url="/app.php#alternative-anmeldung-mittels-email-passwort-option-2"></i>
                            </h2>
                            <p class="lead">
                                In 8 Schritten kannst du die Anmeldung mit einem Browser auf deinem Smartphone durchführen. Du benötigst also nur dein Smartphone. Diese Option unterscheidet sich
                                nur unwesentlich von Option 1.
                            </p>
                            <div class="container ttext-center">
                                <div class="row row-cols-auto">
                                    <div class="col-sm-6">
                                        <i class="bi bi-1-circle"></i> Öffne <strong>an deinem Smartphone</strong> mit einem Browser deiner Wahl die Webseite <a href="https://efghaigerseelbach.church.tools">https://efghaigerseelbach.church.tools</a>.
                                        <i class="bi bi-2-circle"></i> Gib deine E-Mailadresse ein, die du in ChurchTools hinterlegt hast. Hast du mehrere E-Mailadressen?
                                        Dann achte darauf die Korrekte zu verwenden. <i class="bi bi-3-circle"></i> Gib dein Passwort ein. Hast du dein Passwort vergessen,
                                        dann musst du dieses zunächst <a href="#">zurücksetzten</a>. <i class="bi bi-4-circle"></i> Klick dann auf <span style="font-style: italic;">Login</span>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd option 2 - 1_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-5-circle"></i> Klicke auf Avatar. <i class="bi bi-6-circle"></i> Klicke dann auf <span style="font-style: italic;">App</span> in dem angezeigten Menü.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd option 2 - 2_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Navigiere nach ganz unten auf der nun angezeigten Seite. <i class="bi bi-7-circle"></i> Klick auf den Link <span style="font-style: italic;">Als ... einloggen</span>.

                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd option 2 - 3_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Gegebenfalls wird nun noch ein Popup angezeigt, in dem du bestätigen musst, dass der Link in einer anderen App geöffnet wird.
                                        <i class="bi bi-8-circle"></i> Dies musst du bestätigen. Hier musst du Anschließend bist du in der App angemeldet.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - name und pwd option 2 - 4_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <h2 data-toc-text="QR-Code + PC">Anmeldung mittels QR-Code und einem PC
                                <i class="bi bi-share" data-share-title="ChurchTools-App Einrichtung mit QR-Code und PC" data-share-url="/app.php#anmeldung-mittels-qr-code-und-einem-pc"></i>
                            </h2>
                            <p class="lead">
                                In 8 Schritten kannst du die Anmeldung in der ChurchTools-App mittels QR-Code und einem PC durchführen. Du benötigst also dein Smartphone <strong>und</strong> einen PC.
                            </p>
                            <div class="container ttext-center">
                                <div class="row row-cols-auto">
                                    <div class="col-sm-6">
                                        <i class="bi bi-1-circle"></i> <strong>An einem PC</strong> meldest du dich an mit deiner Email-Adresse oder deinem Benutzernamen und deinem persönlichen Passwort auf
                                        <a href="https://efghaigerseelbach.church.tools">https://efghaigerseelbach.church.tools</a>. Gib deine E-Mailadresse ein, die du in ChurchTools hinterlegt hast.
                                        Hast du mehrere E-Mailadressen? Dann achte darauf die Korrekte zu verwenden. Gib dein Passwort ein. Hast du dein Passwort vergessen,
                                        dann musst du dieses zunächst <a href="#">zurücksetzten</a>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/einwilligung - startseite.jpg" style="margin: 0.5em; width: 100%; max-width: 600px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-2-circle"></i> Klicke auf den Menüpfeil neben deinem Avatar. <i class="bi bi-3-circle"></i> Klicke auf <span style="font-style: italic;">App</span> in dem angezeigten Menü.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - qr-code 2_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Es wird ein QR-Code angezeigt <i class="bi bi-4-circle"></i>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - qr-code 3_.jpg" style="margin: 0.5em; width: 100%; max-width: 600px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Nun geht es an deinem Smartphone weiter. <i class="bi bi-5-circle"></i> Starte die ChurchTools-App. Du hast die ChurchTools-App
                                        noch nicht installiert? Dann <a href="#installation">installiere</a> zunächst die App.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - qr-code 4_.jpg" style="margin: 0.5em; width: 100%; max-width: 200px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-6-circle"></i> Klicke auf <span style="font-style: italic;">Mit QR-Code einloggen</span>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - qr-code 5_.jpg" style="margin: 0.5em; width: 100%; max-width: 300px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-7-circle"></i> Vergewissere dich, dass die Option <span style="font-style: italic;">Computer</span> ausgewählt ist.
                                        <i class="bi bi-8-circle"></i> Scanne mit deinem Smartphone den auf dem PC angezeigten QR-Code. In der Mitter der App wird das Kamerabild angezeigt.
                                        Richte die Kamera auf den auf dem PC-Monitor angezeigten QR-Code aus. Anschließend bist du in der App angemeldet.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/app - anmeldung - qr-code 6_.jpg" style="margin: 0.5em; width: 100%; max-width: 400px; height: auto;">
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <h2>Anmeldung funktioniert nicht</h2>
                            <div class="container mb-5">
                                Hat die Anmeldung nicht geklappt? Wende dich bitte per E-Mail an <a href="mailto:churchtools@efghaigerseelbach.de?subject=Anmeldung%20in%20der%20App%20funktioniert%20nicht&body=Hallo%2C%0D%0A%0D%0ADie%20Anmeldung%20in%20der%20ChruchTools-App%20funktioniert%20nicht.%20Ich%20habe%20die%20Anmeldung%20mittels%20folgender%20Optionen%20ausprobiert%3A%0D%0A%0D%0A(unzutreffende%20Optionen%20bitte%20entfernen)%0D%0A-%20Anmeldung%20mit%20Emailadresse%20%26%20Passwort%20(Option%201)%0D%0A-%20Alternative%20Anmeldung%20mittels%20Email%20%26%20Passwort%20(Option%202)%0D%0A-%20Anmeldung%20mittels%20QR-Code%20und%20einem%20PC%0D%0A%0D%0AIn%20Schritt%20XXXX%20komme%20ich%20nicht%20weiter%20und%20ben%C3%B6tige%20Hilfe%20bei%20der%20Anmeldung.%0D%0A%0D%0AEmailadresse%3A%20%3Cbitte%20ausf%C3%BCllen%3E%0D%0A%0D%0AViele%20Gr%C3%BCsse%2C%0D%0A%3Cdein%20Name%3E">churchtools@efghaigerseelbach.de</a> 
                                oder sprich einen Mitarbeiter nach einer unserer Veranstaltungen persönlich an.
                            </div>

                            <h2 data-toc-skip>QR-Code zu dieser Seite</h2>
                            <div class="container mb-5">
                                <img src="/resources/qr-code app.svg" alt="Logo" height="300" width="300" style="object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <!-- old place -->
                    <div class="col-3" id="toc-outer">
                        <div class="sticky-top" style="top: 3em;">
                            Inhalt:
                            <hr>
                            <nav id="toc" data-toggle="toc"></nav>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>