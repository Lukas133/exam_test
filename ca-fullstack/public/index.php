<?php

use App\Views\Navigation;

require_once '../bootloader.php';

$navigation_view = new Navigation();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taxi Service</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php print $navigation_view->render(); ?>
    <main>
        <div class="hero"></div>
        <div class="services">
            <div class="services__card">
                <div class="services__img"><img src="assets/images/taxi1.png" alt="yellow cab service picture"></div>
                <div class="services__name">LUX TAXI</div>
                <div class="services__description">Greitas Ir Patogus Taksi Iškvietimas. Skambink į eTAKSI. Taksi Visą Parą. Parsisiųskite eTAKSI Programėlę Ir Nemokėkite Už Taksi Iškvietimą. Taksi Atvykstas Per 5min. Gera Kaina Ir Kokybė. Išsikviesk greičiau. Sąžininga Kaina. Parsisiųskite eTAKSI.</div>
            </div>
            <div class="services__card">
                <div class="services__img"><img src="assets/images/taxi2.png" alt="uber service picture"></div>
                <div class="services__name">Bolt Food</div>
                <div class="services__description">Užsisakyk skanų maistą per Bolt Food programėlę Vilniuje. Greitai pristatomas maistas iš restoranų, kuriuos mylite. Keliauk pigiai ir greitai. Užsakyk keliones greičiau. Oficialus puslapis. Greita pagalba. Paslaugos: Pavežėjimas, Bolt maistas, Bolt verslui..</div>
            </div>
            <div class="services__card">
                <div class="services__img"><img src="assets/images/taxi3.png" alt="vintage cab service picture"></div>
                <div class="services__name">BOLT APP</div>
                <div class="services__description">Atsisiųskite Bolt programėlę. Atsisiųskite Bolt programėlę iš App Store Atsisiųskite Bolt programėlę iš Google Play Download Bolt app </div>
            </div>
        </div>
        <div class="iframe--block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219602278376!2d25.33569661589081!3d54.72335198029069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1sen!2slt!4v1594110097896!5m2!1sen!2slt" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </main>
    <footer>
        © 2020. Lukas Gribulis, all rights reserved.
    </footer>
</body>

</html>