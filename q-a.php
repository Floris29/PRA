<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q-A</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require_once("header.php"); ?>

    <main>
       
   
        <div class="vragen">
        <h1>Meest gestelde vragen belastingdienst algemeen</h1>
        <div class="vragen-antwoorden">
        <h3>
            1.Ik heb gesolliciteerd bij de Belastingdienst. Wanneer krijg ik meer informatie?
        </h3> 
            <p class="vraag1 hallo"> <button id="vraag1">+</button>
            <p id="text-hidden1" class="text-hidden1">Na sluitingsdatum van de vacature of stage vindt in de daaropvolgende 10 werkdagen de eerste brief- en cv-selectie plaats. Daarna kun je een reactie verwachten over (een eventueel vervolg van) de procedure.</p>
             
            </div>
            <div class="vragen-antwoorden">
        <h3>
            2.Is het mogelijk om een open sollicitatie te sturen naar de Belastingdienst?
        </h3>
            <p class="vraag2 hallo"> <button id="vraag2">+</button>
                 <p id="text-hidden2" class="text-hidden2">Nee, dat is helaas niet mogelijk. De Belastingdienst is de grootste uitvoeringsorganisatie van het Ministerie van Financiën en door haar steeds wisselende taken en werkzaamheden niet in staat om te voorspellen welke vacatures of stages er in de toekomst ontstaan. Om verwachtingen te managen en teleurstellingen te voorkomen, kan daarom uitsluitend worden gereageerd op vacatures en stages die zijn vermeld op deze website</p>
            </div>
            <div class="vragen-antwoorden">
        <h3>
            3.Waar kan ik terecht met mijn vragen over belastingen of toeslagen?
        </h3>
            <p class="vraag3 hallo"> <button id="vraag3">+</button>
            <p id="text-hidden3" class="text-hidden3">Voor vragen over belastingen of toeslagen kun je bellen naar BelastingTelefoon via 0800-0543. 
            </p>
            </div>
            <div class="vragen-antwoorden">
        <h3>
          4.Wat zijn selectiedagen waarover in sommige vacature- of stageteksten wordt gesproken?
        </h3>
             <p class="vraag4 hallo"> <button id="vraag4">+</button>
             <p id="text-hidden4" class="text-hidden4">Als je reageert op een vacature of stage waarvoor selectiedagen zijn vastgelegd, wordt verwacht dat je op die dagen beschikbaar bent om je motivatie voor de vacature of stage mondeling te kunnen toelichten.
            </p>
            </div>
            <div class="vragen-antwoorden">
        <h3>
            5.Mijn vraag staat niet in bovenstaande lijst. Wat kan ik doen? 
        </h3>
            <p class="vraag5 hallo"> <button id="vraag5">+</button>
            <p id="text-hidden5" class="text-hidden5">Er zijn verschillende manieren om contact met ons op te nemen.  Je kunt ons natuurlijk bellen via: +31 (0)88 - 155 19 00
            </p>
            </div>
            <div class="vragen-antwoorden">
         
        <h3>bron: https://werken.belastingdienst.nl/contact-vragen/veelgestelde-vragen
        </div>

    </div>

    </main>
    <script>
    document.getElementById('vraag1').addEventListener('click', function() {
                document.getElementById('text-hidden1').style.display = 'block';
            })
    document.getElementById('vraag2').addEventListener('click', function() {
                document.getElementById('text-hidden2').style.display = 'block';
            })
    document.getElementById('vraag3').addEventListener('click', function() {
                document.getElementById('text-hidden3').style.display = 'block';
            })
    document.getElementById('vraag4').addEventListener('click', function() {
                document.getElementById('text-hidden4').style.display = 'block';
            })
    document.getElementById('vraag5').addEventListener('click', function() {
                document.getElementById('text-hidden5').style.display = 'block';
            })
    c
        </script>
        </script>
   


    <?php require_once("footer.php"); ?>

</body>
</html>

