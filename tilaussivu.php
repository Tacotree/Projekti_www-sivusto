<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tilaussivu.css"> 

    <title>Siivouspalvelut Turbokliini</title>

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
    <article>
    <p> ipsum dolor sit amet, consectetur adipisicing elit. 
    Officiis vero hic ut repellat distinctio, asperiores laudantium nulla recusandae dolor adipisci quaerat veritatis illo molestiae et 
    harum enim atque quas natus!
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, dolores, dolor ullam ea eligendi quibusdam aliquam vitae 
    tempore accusantium aperiam aspernatur unde sunt ratione quo vero quasi itaque. Nobis, delectus!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corporis nobis ex enim, 
    in quis! Quibusdam adipisci aliquam, facilis quasi necessitatibus natus, doloribus quam officiis, asperiores beatae laudantium minus eius.
    </p>
    </article>
    
    <div class="valinta-rivi">
        <button class="valinta-painike">Säännöllisesti jatkuvalla sopimuksella</button>
        <button class="valinta-painike">Kerran, yksittäisenä kertakäyntinä</button>
        </div>

        <p class="neliot-otsikko">Valitse neliöiden määrä</p>

        <div class="slider-kontti">
            <span class="neliot" id="neliot">65 m²</span>
            <input type="range" min="0" max="300" value="65" class="neliot-slider" id="neliot-slider">
        </div>

       
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

    <div class="yhteydenotto-lomake">
        <h1>Yhteydenottolomake</h1>

        <form action="#" method="post">
            <div class="lomake-rivi">
            <label for="nimi">Etu- ja sukunimi</label>
            <input type="text" id="nimi" name="nimi" required>
            </div>

            <div class="lomake-rivi">
                <label for="puhelin">Puhelinnumero</label>
                <input type="tel" id="puhelin" name="puhelin" required>
            </div>

            <div class="lomake-rivi">
                <label for="sahkoposti">Sähköposti</label>
                <input type="email" id="sahkoposti" name="sahkoposti" required>
            </div>

            <div class="lomake-rivi">
                <label for="lisatiedot">Lisätietoja</label>
                <textarea id="lisatiedot" name="lisatiedot" rows="4"
                placeholder="Voit kertoa tarkemmin kodistasi, toivotusta ajankohdasta tai muista tarpeista."></textarea>
            </div>
            <button type="submit" class="laheta-painike">
                Lähetä Yhteydenottolomake
            </button>

        </form>
    </div>
</main>


<footer>
        <nav>
            <strong>Meistä</strong>
            <a href="index.php">Etusivu</a>
            <a href="yhteystiedot.php">Tuki</a>
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
</body>
</html>