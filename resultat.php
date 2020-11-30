<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta property="og:image" content="images/bilka-logo.png">
  <link data-n-head="ssr" rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
  <link rel="stylesheet" href="bilka-syle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Bilka</title>
</head>

<body>
  <header>
    <nav>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <p class="menu">Menu</p>
      </div>

      </ul>
      <img class="logo" src="images/bilka-logo.png" alt="Bilka logo">
      <div class="logo-ikon">
        <img class="search" src="images/icon-search.png" alt="Søg ikon til at søge efter bilkas varer">
        <img class="heart" src="images/icon-heart.png" alt="Ønskeliste">
        <img class="profil" src="images/icon-person.png" alt="Din bilka profil">
        <img class="kurv" src="images/icon-cart.png" alt="Din indkøbskurv">
      </div>
      <ul class="nav-links">
        <li><a href="#">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">work</a></li>
        <li><a href="#">project</a></li>
      </ul>
    </nav>

    <ul class="breadcrumb">
      <li><a href="#">Forside</a></li>
      <li><a href="#">Elektronik</a></li>
      <li><a href="#">Computere</a></li>
      <li><a href="#">Bærbar Computer</a></li>
      <li>Bilka Guide</li>
    </ul>

  </header>
  <div class="luk-tab">
    <a href="bilka-guide.html">&times;</a>
  </div>

  <h3 class="b-guidetitel">DETTE PASSER TIL DIG</h3>
  <h3 class="b-guideoverskrift">RESULTAT AF GUIDE</h3>

  <p class="b-guidetext">Du valgte disse specifikationer, som passer bedst til dine behov. Din processor kan klare det meste, især med 8GB RAM som håndterer de fleste opgaver. Med en stabil mængde lagring og SSD, har du opnået en computer til basal forbrug, som kan mange opgaver.</p>
  <div id="harddisktype2">
  <span>{{retext}}</span>
    <span class="span-resultat">{{cpu}} · {{harddisk}} · {{ram}} · {{grafikkort}} </span>
  </div>

<div class="res-undertext">
  <p class="res-text1">Følgende bærbare computere passer på kravene</p>
  <p class="res-text2">(Resultat sorteres efter mest populære modeller)</p>
</div>

  <div class="computere">
    <div class="pc1">
      <?php  ?>
    </div>
    <div class="pc2">
      <?php  ?>
    </div>
  </div>

<div class="flere">
  <div class="flere-btn">VIS FLERE</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


  <script type="text/javascript">
    /*
		function updateSuggestion(){
	  		localStorage.suggestion = "Processortype: " + localStorage.cpu
	  	}
*/

    const Processortype = new Vue({
      el: '#harddisktype2',
      data: {
        name: '',
        retext: '',
        harddisk: '',
        cpu: '',
        ram:'',
        grafikkort:'',
        suggestion: 'N/A'
      },

      mounted() {

        for (var i = 0; i < localStorage.length; i++) {
          this[localStorage.key(i)] = localStorage.getItem(localStorage.key(i));
        }

      },
      watch: {
        name(newname) {
          localStorage.name = newname;
          //updateSuggestion()
        },
        harddisk(newharddisk) {
          localStorage.harddisk = newharddisk;
          //updateSuggestion()
        },
        gb256(new256) {
          localStorage.gb256 = new256;
          //updateSuggestion()
        },
        gb512(new512) {
          localStorage.gb512 = new512;
          //updateSuggestion()
        },

        /*
				suggestion(newsuggestion){
		    	localStorage.suggestion = newsuggestion;
		    } */
      }

    });
  </script>
  <script type="text/javascript" defer src="bilkascript.js"></script>
</body>

</html>
