<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css"> 

    <title>Siivouspalvelu Turbokliini</title>
</head>
<body>

    <header class="sivu-header">
        <div class="logo-alue">
            <a href="index.php">
            <img src="Logo/LogoPieni.png" alt="Turbokliin-logo">
            </a>
            <span class="verkkosivun-otsikko">TURBOKLIIN</span>
            </div>

       

            <nav class="paa-nav">
                <ul>
                    <li><a href="index.php">Etusivu</a></li>
                    <li><a href="tietoameista.php">Tietoa meistä</a></li>
                    <li><a href="palvelut.php">Palvelut</a></li>
                    <li><a href="yhteystiedot.php">Yhteystiedot</a></li>
                    <li><a href="tilaussivu.php" class="tilaus-painike">Tilaa siivous</a></li>
                </ul>
            </nav>
        </header>

    <main>
        <section class="hero-taustakuva">
        <h1>Haluaisitko tietää paljonko kotisi siivous maksaisi?</h1>
        <p>Laske hinta-arvio sekunneissa!</p>
        <p>Kotisiivouksen tyyppi</p>

        <div class="valinta-rivi">
        <button class="valinta-painike">Säännöllisesti jatkuvalla sopimuksella</button>
        <button class="valinta-painike">Kerran, yksittäisenä kertakäyntinä</button>
        </div>

        <p>Valitse neliöiden määrä</p>

        <div class="slider-kontti">
            <span class="neliot" id="neliot">65 m²</span>
            <input type="range" min="0" max="300" value="65" class="neliot-slider" id="neliot-slider">
        </div>

       <div class="hero-content">
        <a href="tilaussivu.php" class="seuraava-painike">Seuraava</a></button>

        
            <div class="info-rivi">
                <div class="info-vasen">
                    <img src="Kotisiivous.png" alt="Keittiön siivous"class="info-kuva-pysty">
                </div>

                <div class="info-oikea">
                    <h2>“Puhdas koti, siistimpi arki!”</h2>
                    <p class="info-oikea-teksti">
                    Koti on paikka, jossa kuuluu voida rentoutua. Me huolehdimme, että kotisi on puhdas, raikas ja viihtyisä - säännöllisesti tai silloin kun sinä tarvitset apua. Siivoamme huolellisesti, luotettavasti ja sinun toiveitasi kuunnellen.
                    </p>
                    <img src="PuhdasKoti.png" alt="Puhdas olohuone" class="info-kuva-vaaka">
                </div>
            </div>
        </div>
        
    </main> 

    <footer>
        <nav>
            <strong>Meistä</strong>
            <a href="index.php">Etusivu</a>
            <a href="palvelut.php">Palvelut</a>
            <a href="yhteystiedot.php">Yhteystiedot</a>
        </nav>
        <nav>
            <strong>Saavutettavuus</strong>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="yhteystiedot.php">Ota yhteyttä</a>
            <div class="some-kuvat">
            <img src="fb.png" alt="Facebook logo">
            <img src="ig.png" alt="Instagram logo">
            <img src="X_icon.png" alt="X logo">
            </div>
        </nav>
        <nav>
            <strong>Yritystoiminta</strong>
            <a href="#">Palaute</a>
            <a href="#">Tietosuojaseloste</a>
            <a href="#">Saavutettavuus</a>
            <a href="#">Evästeet</a>
        </nav>

    </footer>

    <script>    /*sliderin toiminnallisuus*/
        document.addEventListener("DOMContentLoaded", function(){
            const slider = document.getElementById("neliot-slider");
            const label = document.getElementById("neliot");
            label.textContent = slider.value + " m²";
            slider.addEventListener("input", function() {
                label.textContent = slider.value + " m²";
            });

        });
    </script>
    
</body>
</html>

