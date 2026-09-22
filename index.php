<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Curio-open-dag</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<header>
    <div class="header-wrapper">
        <div class="image-logo">
            <img class="curio-Logo" src="images/Logos/curio-02-wit-logo-rgb.png" alt="curioLogo">
        </div>
        <nav>
            <a class="open-dag-link" href="#open-dag-info">OPEN DAG INFO</a>
            <a href="#blokken">SCHOOL BLOKKEN</a>
            <a href="#huiswerk">HUISWERK </a>
            <a href="#rooster">ROOSTER </a>
            <a href="#wat-kun-je-na-deze-opleiding">NA DE OPLEIDING</a>
        </nav>
    </div>

</header>

<body>
    <div class="wrapper">
        <div class="all-containers">
            <div class="container-school-info">
                <div class="text-container">
                    <h2 id="open-dag-info">Ervaar het zelf tijdens de open dag</h2>
                    <p>Wil je weten hoe het is om hier te studeren? Dat kan dan vanaf <strong>donderdag 19
                            november</strong>, dan begint de open dag en loop je een dag mee. Hier kan je vragen aan
                        onze huidige studenten en docenten hoe het is om hier te studeren.</p>
                </div>
                <img src="images/GettyImages-539246041.jpg" alt="gettyimage">
            </div>
            <div class="container-school-blokken">
                <img class="overzicht-image" src="images/Opleidingsoverzicht3.png" alt="overzicht">
                <div class="text-container">
                    <h2 id="blokken">Hoe zitten die blokken nou in elkaar?</h2>
                    <p>Heb je twijfels over de opleiding van drie of vier jaar? Het versnelde traject van drie jaar is
                        perfect voor iemand die al bovengemiddelde kennis heeft en graag sneller leert. Je verliest
                        hierbij een groot blok. Houd er rekening mee dat het kortere traject meer inspanning vereist en
                        minder tijd nodig heeft voor de voorbereiding op je examens. Selecteer de route waarin jij het
                        meest tot je recht komt!</p>
                </div>
            </div>

            <div class="container-middle">
                <div class="middle-card">
                    <div class="img-container-huiswerk">
                        <img src="images/thorium_QPpI2ctpGV.png" alt="huiswerk">
                    </div>
                    <div class="text-container-middle">
                        <h2 id="huiswerk">Huiswerk...</h2>
                        <p>
                            Huiswerk is best overzichtelijk bij deze opleiding.
                            Je hoeft alleen te kijken wat je nog af moet maken.
                            Soms is dit niet het geval en moet je het gewoon vragen
                            aan je docent via Teams of in de klas.
                        </p>
                    </div>
                </div>

                <div class="middle-card">
                    <div class="img-container-rooster">
                        <img src="images/Rooster-eerste-leerjaar.png" alt="rooster">
                    </div>
                    <div class="text-container-middle">
                        <h2 id="rooster">Hoe zit een dag in elkaar</h2>
                        <p>
                            Dagen kunnen verschillend zijn, hier heb je een paar
                            voorbeelden van hoe het eerste leerjaar eruit ziet.
                            Sommige studenten die al verder zijn en snel hun examens
                            halen, kunnen klaar zijn met bepaalde vakken.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container-bottom">
                <h2 id="wat-kun-je-na-deze-opleiding"><span>Wat kun je doen na deze opleiding?</span></h2>
                <div class="bottom-content">
                    <div class="bottom-text-block">
                        <h3>Webdevelopment</h3>
                        <p>
                            Vind je het leuk om websites te bouwen? Dan kun je bijvoorbeeld
                            aan de slag als webdeveloper of fullstack developer. Je werkt dan
                            aan de voorkant van websites, maar ook aan systemen en databases
                            achter de website.
                        </p>
                    </div>
                    <div class="bottom-text-block">
                        <h3>Backend & software</h3>
                        <p>
                            Werk je liever met databases, gegevens en de technische kant van
                            applicaties? Dan kun je je richten op backend development. Je kunt
                            bijvoorbeeld systemen onderhouden, nieuwe functies bouwen en
                            problemen oplossen.
                        </p>
                    </div>
                    <div class="bottom-text-block">
                        <h3>Verder studeren</h3>
                        <p>
                            Je hoeft na deze opleiding niet meteen te gaan werken. Je kunt ook
                            verder studeren en je kennis uitbreiden. Uiteindelijk kun je de
                            richting kiezen die het beste past bij wat jij interessant vindt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    const navLinks = document.querySelectorAll("nav a");

    navLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();

            const id = this.getAttribute("href");
            const section = document.querySelector(id);

            section.scrollIntoView({
                behavior: "smooth",
                block: "center"
            });
        });
    });
</script>