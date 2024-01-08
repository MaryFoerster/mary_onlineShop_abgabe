<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Kontakt</title>
    <link rel="stylesheet" href="css/Kontakt.css">
    <?php include 'head.php'; ?>
</head>

<body>

    <header>
        <?php include 'menu.php'; ?>
    </header>


    <div class="kontakt__container">
        <div class="kontakt__containerbox_eins">
            <h1>Kontakt</h1>
            <p>EcoStyle<br>
                Maria Goller<br>
                <br>
                Tel: +43 123 1234<br>
                ecoStyle@gmail.com<br>
                <br>
                Altstadt <br>
                Herzog-Friedrich-Straße, <br>
                6020 Innsbruck<br>
            </p>
        </div>
        <div class="kontakt__containerbox_zwei">
            <h2>Maria Goller</h2>
            <img src="img/MariaGoller.jpg" alt="Bild von Maria Goller" titel="Maria Goller">
        </div>
    </div>

    <div class="kontakt__container2">
        <div class="kontakt__containerbox_zwei">
            <iframe class="maps"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.3455663900086!2d11.391368311790762!3d47.268498971040444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6bfbbf0942dd%3A0x77d4de38076e6d24!2sAltstadt%20Innsbruck!5e0!3m2!1sde!2sat!4v1702368864812!5m2!1sde!2sat"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="kontakt__containerbox_zwei">
            <h3>tritt mit uns in Kontakt</h3>
            <input class="input1" type="text" placeholder="E-mail">
            <input class="input2" type="text"placeholder="deine Nachricht">
            <button>Nachricht senden</button>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>