<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php'; ?>

<body>

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">

            <?php include_once 'nav.php'; ?>

            <div id="content" class="col d-flex flex-column h-sm-100">
                <main class="row overflow-auto">
                    <div class="col-12 col-xxl-9 pt-4">
                        <div class="container">
                            <h1 data-toc-skip>Passwort vergessen</h1>
                            <p class="lead">
                                Dein Passwort für ChurchTools kannst du jederzeit zurücksetzten. Nachfolgend findest du Hilfestellung und mehrere Möglichkeiten
                                ein neues Passwort zu erstellen.
                            </p>

                            <h2>Zuruecksetzten ueber die ChurchTools-Webseite</h2>
                            <div class="container ttext-center">
                                <div class="row row-cols-auto">
                                    <div class="col-sm-6">
                                        <i class="bi bi-1-circle"></i> Öffne dich ChurchTools-Webseite der EfG Haigerseelbach:
                                        <a href="https://efghaigerseelbach.church.tools">https://efghaigerseelbach.church.tools</a>. 
                                        <i class="bi bi-2-circle"></i> Klicke auf den Link <span style="font-style: italic;">Passwort vergessen?</span> im unteren
                                        Bereich.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/passwort vergessen - webseite 1.jpg" style="margin: 0.5em; width: 100%; max-width: 400px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="bi bi-3-circle"></i> Gib deine E-Mailadresse ein, die du in ChurchTools hinterlegt hast. Hast du mehrere E-Mailadressen?
                                        Dann achte darauf die Korrekte zu verwenden. <i class="bi bi-4-circle"></i> Klicke auf <span style="font-style: italic;">Passwort anfordern</span>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/passwort vergessen - webseite 2.jpg" style="margin: 0.5em; width: 100%; max-width: 400px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Du erhältst einen Hinweis, dass eine E-Mail zum Zurücksetzen des Passworts an die von dir angegebene E-Mailadresse verschickt wurde.
                                        <strong>⚠️ Wichtig!</strong> Hast du keine E-Mail erhalten (sollte nicht länger als 2 Minuten dauern), so hast du entweder nicht die korrekte
                                        E-Mailadresse angegeben oder du hast noch kein Benutzerkonto (siehe <a href="/erstanmeldung.php">Erstanmeldung</a>).
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/passwort vergessen - webseite 3.jpg" style="margin: 0.5em; width: 100%; max-width: 400px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Öffne die E-Mail in deinem E-Mailpostfach. <strong>⚠️ Wichtig!</strong> Vergewissere dich, dass es sich nicht um eine betrügerische E-Mail handelt: Der Absender ist <span style="font-family: monospace;">noreply@churchtools.de</span>.
                                        Du wirst mit korrektem Namen angesprochen. Die in der E-Mail enthaltenen Links verweisen auf <span style="font-family: monospace;">https://efghaigerseelbach.church.tools/...</span>.
                                        <i class="bi bi-5-circle"></i> Klick auf <span style="font-style: italic;">Neues Passwort setzen</span>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/passwort vergessen - webseite 4.jpg" style="margin: 0.5em; width: 100%; max-width: 600px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Der Browser öffnet sich. <i class="bi bi-6-circle"></i> Gibt ein (neues) Passwort ein. Es muss den genannten Kriterien entsprechen (mindestens 8 Zeichen, mindestens 1 Ziffer, ...). 
                                        <i class="bi bi-7-circle"></i> Wiederhole das eingegebene Passwort. <i class="bi bi-8-circle"></i> Klicke auf <span style="font-style: italic;">Passwort ändern</span>.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/passwort vergessen - webseite 5.jpg" style="margin: 0.5em; width: 100%; max-width: 500px; height: auto;">
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        Du erhältst eine Erfolgsmeldung. Anschließend wirst du zur Anmeldseite weitergeleitet. Nun kannst du dich mit deinem neuen Passwort anmelden.
                                        <br>
                                        <figure class="figure">
                                            <img src="/resources/passwort vergessen - webseite 6.jpg" style="margin: 0.5em; width: 100%; max-width: 500px; height: auto;">
                                        </figure>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>

                    <!-- Table of Content -->
                    <?php include_once 'toc.php'; ?>

                </main>
            </div>
        </div>
    </div>
</body>

</html>