<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" />
        <title>TASSTAITIDN</title>
        <link rel="icon" type="image/png" href="../img/testlogo.png"/>
    </head>
    <body>
        <header id="Header">
            <?php include 'header.php'; ?>
        </header>
        <section id="Menu">
            <?php include 'menu.php'; ?>
        </section>
        <section id="Main">
            <section id="mainAcceuil">
                <h2>TASSTAITIDN</h2>
                
                <p>Notre site de voyages mystères tout compris vous offre l'opportunité de vivre une expérience unique en vous emmenant dans des destinations inconnues et fascinantes. Nous avons conçu ce site pour ceux qui cherchent à sortir de leur zone de confort et à découvrir de nouveaux horizons sans avoir à se soucier de la planification et de l'organisation</p>
                <p> Notre concept est simple: vous choisissez la direction que vous souhaitez prendre (nord, sud, est ou ouest), ainsi qu'une fourchette de distance (100 à 300 km, 300 à 1000 km, etc.), et nous nous occupons du reste. Nous planifions le vol, le transport terrestre, l'hébergement et les activités pour vous offrir une expérience inoubliable.</p>
                <p>Nos destinations mystères sont choisies avec soin pour vous offrir une expérience unique et authentique. Nous travaillons en étroite collaboration avec les agences de voyage locales pour vous garantir une immersion totale dans la culture et les traditions de chaque destination.</p>
                <p>De plus, nous avons à cœur de proposer des voyages tout compris pour que vous puissiez profiter pleinement de votre expérience sans avoir à vous soucier des coûts supplémentaires. Nous prenons en charge tous les frais, y compris les billets d'avion, l'hébergement, la nourriture et les activités.</p>
                <p>Enfin, notre équipe dévouée est disponible 24h/24 et 7j/7 pour répondre à toutes vos questions et vous aider à planifier votre voyage mystère en toute tranquillité d'esprit.</p>
                <p>Rejoignez-nous dès maintenant et laissez-vous surprendre par nos destinations mystères tout compris!</p>
                <p></p>
               
            </section>
        </section>
        <footer id="Footer">
        <?php include 'footer.php'; ?>
        </footer>
        <?php
            if (isset($_POST["OUT"])){
            session_destroy();
            }
        ?>
    </body>
</html>