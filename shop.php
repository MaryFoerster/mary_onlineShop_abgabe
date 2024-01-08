<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>shop</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="css/shop.css">
</head>

<body>

    <header>
        <?php include 'menu.php'; ?>
    </header>

    <main>

        <?php include 'artikel.php'; ?>

            <div class="container">
             <div class="container_h1">
               <h1>shop</h1>
             </div>
            </div>
                <div class="container">
                    <div class="shop__container_list">
                      <div class="shop__item_list">
                        <p>Produkt</p>
                      </div>
                      <div class="shop__item_list">
                        <p>Preis</p>
                      </div>
                      <div class="shop__item_list">
                        <p>Menge</p>
                      </div>
                      <div class="shop__item_list">
                        <p>Gesamtpreis</p>
                      </div>
                    </div>
                </div>

            <div class="container">
            <form id="bestellformular">
                <?php for ($i = 0; $i < count($artikel); $i++) { ?>


                    <div class="shop__container">
               

                        <div class="shop__item">
                           <img src="<?php echo $images[$i]; ?>" />
                        </div>


                        <div class="shop__item">
                            <h3><?php echo $artikel[$i]; ?></h3>
                        </div>
                        <div class="shop__item">
                            <h5 id='<?php echo 'artikelpreis_' . $i; ?>' data-preis='<?php echo $preis[$i]; ?>'>
                                <?php echo number_format($preis[$i], 2); ?>
                            </h5>
                        </div>
                        <div class="shop__item">
                            <input id='<?php echo 'artikelanzahl_' . $i; ?>' type="number" value='0' min='0'>
                        </div>
                        <div class="shop__item">
                            <p id='<?php echo 'artikelsumme_' . $i; ?>'></p>
                        </div>
                    </div>

                <?php } ?>


                <div class="shop__container2container">

                    <div class="shop__container2">
                        <div class="shop__item3">
                            <label for="option1"><p>Im Geschäft Abholen</p></label>
                        </div>
                        <div class="shop__item4">
                            <input id="option1" type="radio" name="option" value="Option 1">
                        </div>
                        <div class="shop__item3">
                        <label for="option1"><p>Lieferung 5,90€ <br>
                            *Lieferung ab 100€ einkaufspreis Gratis</p></label>
                        </div>
                        <div class="shop__item4">
                            <input id="option1" type="radio" name="option" value="Option 2">
                        </div>
                    </div>



                    <div class="shop__container2">
                        <div class="shop__item2">
                            <p>nettosumme</p>
                            <p id="nettosumme">0.00</p>
                        </div>
                        <div class="shop__item2">
                            <p>mehrwertsteuer</p>
                            <p id="mwstsumme">0.00</p>
                        </div>
                        <div class="shop__item2">
                            <p>Gesamtsumme</p>
                            <p id="bruttosumme">0.00</p>
                        </div>

                        <div class="shop__item2">
                            <button type="submit" class="button" onclick="Absenden()">
                                bestellen
                            </button>
                        </div>
                    </div>

                </div> 

                <input id="submit" value='<?php echo count($artikel); ?>' hidden>

            </form>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script>
        
        let anzahlArtikel = <?php echo count($artikel); ?>;


for (let i = 0; i < anzahlArtikel; i++) {
    updateArtikelpreis(i);
    addEventHandler(i);
}

function addEventHandler(index) {
    let inputElem = document.querySelector('#artikelanzahl_' + index);

    inputElem.addEventListener('input', (event) => {
        updateArtikelpreis(index);
    });
}

function updateArtikelpreis(index) {
    let preis = parseFloat(document.querySelector('#artikelpreis_' + index).getAttribute('data-preis'));
    let menge = parseFloat(document.querySelector('#artikelanzahl_' + index).value);
    let ergebnis = preis * menge;


    document.querySelector('#artikelpreis_' + index).innerHTML = formatCurrency(preis);
    

    document.querySelector('#artikelsumme_' + index).innerHTML = formatCurrency(ergebnis);

    berechneSumme();
}

function formatCurrency(amount) {
    return amount.toLocaleString('de-DE', { style: 'currency', currency: 'EUR' });
}

function berechneSumme() {
    let nettoSumme = 0.00;

    for (let i = 0; i < anzahlArtikel; i++) {
        let artikelsumme = parseFloat(document.querySelector('#artikelsumme_' + i).innerHTML.replace(',', '.'));


        if (!isNaN(artikelsumme)) {
            nettoSumme += artikelsumme;
        }
    }


    let mwStSatz = 0.19;


    let mwStBetrag = nettoSumme * mwStSatz;


    let bruttoSumme = nettoSumme + mwStBetrag;


    let optionElement = document.querySelector('input[name="option"]:checked');
    if (optionElement && bruttoSumme < 100 && optionElement.value === "Option 2") {
        bruttoSumme += 5.90; 
    }

    document.querySelector('#nettosumme').innerHTML = formatCurrency(nettoSumme);
    document.querySelector('#mwstsumme').innerHTML = formatCurrency(mwStBetrag);
    document.querySelector('#bruttosumme').innerHTML = formatCurrency(bruttoSumme);
}

    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
