<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formular</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <main>
            <div class="main__inner pt-large">
                <div class="container sp-large">
                    <div class="container__inner">
                        <h1>Formular</h1>

                        <section id="#form-container" class="container" data-form="true">
                            <div class="container--inner" data-form="true">

                                <form action="mail.php" method="POST" class="form">
                                    <?php
                                        $referrer = $_SERVER['HTTP_REFERER'];
                                    ?>
                                    <input type="hidden" id="referrer" name="referrer" value="<?php echo $referrer; ?>">
                                    <span class="form__close fa fa-close" data-form="true"></span>
                                    <h3 class="form__heading">Wobei können wir Dich unterstützen?</h3>
                                    <div class="form__fields">
                                        <label for="name" class="form__label">Dein Name:</label>
                                        <input id="name" type="text" class="form__input" name="name" required>
                                    </div>
                                    <div class="form__fields">
                                        <label for="mail" class="form__label">Deine E-Mail-Adresse:</label>
                                        <input id="mail" type="email" class="form__input" name="mail" required>
                                    </div>
                                    <div class="form__fields">
                                        <label for="phone" class="form__label">Deine Telefonnr. <span class="form__label-info">(optional)</span>:</label>
                                        <input id="phone" type="text" class="form__input" name="phone">
                                    </div>
                                    <div class="form__fields">
                                        <label for="message" class="form__label">Deine Nachricht:</label>
                                        <textarea id="message" class="form__input form__textarea" name="message" required></textarea>
                                    </div>

                                    <input type="submit" class="btn btn--light btn--submit" value="Anfrage abschicken"
                                        data-on="click"
                                        data-event-category="Form"
                                        data-event-action="Submit">
                                    <p class="form__text">Wir melden uns bei Dir.</p>
                                </form>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </main>



    <!-- *****************************************************************************
        SCRIPTS
    ********************************************************************************** -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/main.min.js"></script>

    </body>
</html>
