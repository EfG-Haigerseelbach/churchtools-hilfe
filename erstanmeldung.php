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
                            <h1>Erstanmeldung</h1>
                            <p class="lead">
                                Die Erstanmeldung muss einmalig von dir durchgeführt werden. Hattest du dich in der Vergangenheit bereits schon einmal angemeldet, findest du in den
                                anderen Abschnitten weitere Hilfe.
                            </p>
                            <p>
                                Die Erstanmeldung umfasst 5 Schritte:
                            <ol>
                                <li><a href="#erstanmeldung-1">Einladung per Email erhalten</a></li>
                                <li><a href="#erstanmeldung-2">Link um ChurchTools-Zugang einzurichten aufrufen</a></li>
                                <li><a href="#erstanmeldung-3">Persönliches Passwort angeben ...</a></li>
                                <li><a href="#erstanmeldung-4">... und speichern</a></li>
                                <li><a href="#erstanmeldung-5">Einwilligung zur Speicherung und Nutzung deiner Daten abgeben</a></li>
                            </ol>
                            Nachfolgend findest du eine ausführliche Anleitung.
                            </p>

                            <h2>Einladungsemail</h2>
                            <p>
                                Schön, dass du dich für Infos und Gruppen der Gemeinde interessierst. Um Zugang zu ChurchTools der EfG Haigerseelbach zu erhalten,
                                musst du eine <a id="erstanmeldung-1"><strong><i class="bi bi-1-circle"></i> Einladung per Email erhalten</strong></a> haben. Du kannst dir einen Benutzer nicht selbstständig anlegen. Bist du dir unsicher, ob du eine Einladung erhalten hast?
                                Bitte schau in deinem Email-Postfach nach. Absender der Einladungsemail ist <span style="font-family: monospace;">noreply@churchtools.de</span>.
                                Hast du keine Einladungsemail erhalten, dann wende dich bitte an <a href="mailto:churchtools@efghaigerseelbach.de?subject=Benutzerkonto%20erstellen&body=Hallo%2C%0D%0A%0D%0ABitte%20erstellt%20mir%20ein%20Benutzerkonto.%20Meine%20Daten%3A%0D%0A%0D%0AVorname%3A%20%3Cbitte%20ausf%C3%BCllen%3E%0D%0ANachname%3A%20%3Cbitte%20ausf%C3%BCllen%3E%0D%0AGeburtsdatum%3A%20%3Cbitte%20ausf%C3%BCllen%3E%0D%0AEmailadresse%3A%20%3Cbitte%20ausf%C3%BCllen%3E%0D%0A%0D%0AViele%20Gr%C3%BCsse%2C%0D%0A%3Cdein%20Name%3E">churchtools@efghaigerseelbach.de</a>
                                oder sprich einen Mitarbeiter nach einer unserer Veranstaltungen persönlich an.
                            </p>
                            <p>
                                Nachfolgend ist exemplarisch eine Einladungsemail gezeigt. <a id="erstanmeldung-2"><strong><i class="bi bi-2-circle"></i> Klicke auf den blau hinterlegten Link
                                        <span style="font-style: italic;">ChurchTools-Zugang einrichten</span></strong></a>. Bitte beachte, dass der Link eine begrenzte Gültigkeit hat und zeitnah verwendet
                                werden muss. Ist die Gültigkeit abgelaufen, musst du erneut eingeladen werden.
                                <br>
                            <figure class="figure">
                                <img src="/resources/erstanmeldung 1_.jpg" style="margin: 0.5em; width: 100%; max-width: 600px; height: auto;">
                            </figure>

                            <br>
                            Du wirst zu ChurchTools weitergeleitet und es wird der Dialog Passwort einrichten angezeigt. <a id="erstanmeldung-3"><strong><i class="bi bi-3-circle"></i> Trage dein persönliches Passwort ein</strong></a>. Es muss den genannten
                            Kriterien entsprechen (mindestens 8 Zeichen, mindestens 1 Ziffer, ...). Wiederhole die Passworteingabe im darunterliegenden Feld. <a id="erstanmeldung-4"><strong><i class="bi bi-4-circle"></i> Klicke dann auf Passwort ändern</strong></a>. Speichere dein Passwort an einem sicheren Ort.
                            <br>
                            <img src="/resources/erstanmeldung 2_.jpg" style="margin: 0.5em; width: 100%; max-width: 600px; height: auto;">
                            </p>
                            <h2>Einwilligung</h2>
                            <p>
                                Sobald du dich zum ersten Mal angemeldet hast, bitten wir dich, die <a id="erstanmeldung-5"><strong><i class="bi bi-5-circle"></i> Einwilligung zur Speicherung und Nutzung deiner Daten zu geben</strong></a>. Datenschutz und
                                Transparenz sind uns wichtig. Insofern dürfen wir deine Daten ohne deine Zustimmung für Aufgaben und Tätigkeiten in der Gemeinde nicht nutzen.
                                Weitere Hilfe zur Abgabe deiner Einwilligung findest du <a href="/einwilligung.php">hier</a>.
                            </p>
                            <h2>ChurchTools Webseite und App</h2>
                            <p class="mb-5">
                                ChurchTools kann über einen Browser oder die ChurchTools-App bedient werden. Für die Verwendung über einen Browser öffne einfach die Seite
                                <a href="https://efghaigerseelbach.church.tools">efghaigerseelbach.church.tools</a>. Für den alltäglichen Gebrauch und den erhalt von
                                (Chat-) Benachrichtigungen ist allerdings die Verwendung der ChurchTools-App hilfreich. Diese kannst du dir gerne ebenfalls installieren.
                                Du findest sie im Play-/App-Store. Weitere Hilfe für die Einrichtung der App findest du <a href="/app.php">hier</a>.
                            </p>

                            <h2 data-toc-skip>QR-Code zu dieser Seite</h2>
                            <div class="container mb-5">
                                <img src="/resources/qr-code erstanmeldung.svg" alt="Logo" height="300" width="300" style="object-fit: contain;">
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