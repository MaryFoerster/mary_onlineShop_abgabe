<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
    <?php include 'head.php'; ?>
</head>

<body>

<header>
    <?php include 'menu.php'; ?>
</header>


            <div class="home__header">
             <img src="images/frühling.jpg" alt="Bild des aktuellen Monats"> 
            </div>



                <h1>Eco Style</h1>

                <div class="home__container">
                    <div class="home__item">
                        <p>Willkommen bei EcoStyle, wo unsere Vision zu einer Bewegung für bewussten Konsum wurde, die Individualität und Umweltschutz in den Fokus rückt. Jedes maßgeschneiderte Produkt in unserem Online-Shop erzählt die Geschichte einer nachhaltigen Entscheidung und unterstützt lokale Handwerker und Designer. Tauchen Sie ein in unsere Welt, wo Ihre Individualität im Mittelpunkt steht und die Umwelt geschätzt wird. <br>Hier finden Sie nicht nur Mode, sondern eine Ode an die Schönheit der Natur und die Kunst der nachhaltigen Gestaltung. Genießen Sie eine einzigartige Shopping-Erfahrung, die nicht nur Ihren persönlichen Stil unterstreicht, sondern auch einen positiven Beitrag zu unserer Welt leistet.</p>
                    </div>
                    <div class="home__item2">
                        <img src="img/logoBlack.gif" alt="Animation: Logo dreht sich" titel="Logo">
                        <a href="shop.php"><button>shop</button></a>
                    </div>
                </div>


<?php include 'footer.php'; ?>


<script>

const datum = new Date();
const monat = datum.getMonth();
let images = "";
switch (monat) {
  case 0: images = "winter.jpg"; break;
  case 1: images = "winter.jpg"; break;
  case 2: images = "fruehling.jpg"; break;
  case 3: images = "fruehling.jpg"; break;
  case 4: images = "fruehling.jpg"; break;
  case 5: images = "sommer.jpg"; break;
  case 6: images = "sommer.jpg"; break;
  case 7: images = "sommer.jpg"; break;
  case 8: images = "herbst.jpg"; break;
  case 9: images = "herbst.jpg"; break;
  case 10: images = "herbst.jpg"; break;
  case 11: images = "winter.jpg"; break;
}

let imgElement = document.querySelector(".home__header img");
imgElement.src = "images/" + images;

</script>


<script src="js/bootstrap.min.js"></script>
</body>

</html>