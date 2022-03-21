<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation bar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>


@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background-color: #353836;
  color: white;
  font-family: "Poppins", sans-serif;
  text-align: center;
}

header a {
  text-decoration: none;
  
}

header {
  padding: 0 20px;
  background-color: #1d1f1d;
  height: 50px;
  display: flex;
  justify-content: space-between;
  
}

#brand {
  font-weight: bold;
  font-size: 18px;
  display: flex;
  align-items: center;
}

#brand a {
  color: #ffffff;
}

ul {
  list-style: none;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

ul a {
  color: rgb(255, 255, 255);
}

ul li {
  padding: 5px;
  margin-left: 10px;
}

ul li:hover {
  transform: scale(1.1);
  transition: 0.3s;
}




#hamburger-icon {
  margin: auto 0;
  display: none;
  cursor: pointer;
}

#hamburger-icon div {
  width: 35px;
  height: 3px;
  background-color: white;
  margin: 6px 0;
  transition: 0.4s;
}

.open .bar1 {
  -webkit-transform: rotate(-45deg) translate(-6px, 6px);
  transform: rotate(-45deg) translate(-6px, 6px);
}

.open .bar2 {
  opacity: 0;
}

.open .bar3 {
  -webkit-transform: rotate(45deg) translate(-6px, -8px);
  transform: rotate(45deg) translate(-6px, -8px);
}

.open .mobile-menu {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.mobile-menu {
  display: none;
  position: absolute;
  top: 50px;
  left: 0;
  height: calc(100vh - 50px);
  width: 100%;
}

.mobile-menu li {
  margin-bottom: 10px;
}

@media only screen and (max-width: 600px) {
  header nav {
    display: none;
  }

  #hamburger-icon {
    display: block;
  }


  img {
width: 100%


  }
}

@import url('https://fonts.googleapis.com/css?family=Exo+2');


.navigation:hover {
color: red;

}


a:hover {
    
color: #eaa6ff;
}


</style>


  </head>
  
        


<header>
    <div id="brand"><a href="Sakums">Rinalds Kristians Tulpe</a></div>
    <nav>
      <ul>
        <li><a href="#">🏠 Sākums 🏠</a></li>
        <li><a href="Prezentacijas/Android_Studio">💻 Prezentācija  💻</a></li>
        <li><a href="Izmantotie_Avoti">🛠️ Izmantotie Avoti 🛠️</a></li>
        <li><a href="Aplikacija">📱 Aplikācija 📱</a></li>
      </ul>
    </nav>
    <div style="text-align: center; " id="hamburger-icon" onclick="toggleMobileMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile-menu" style=" text-align: center; background-color: #1d1f1d;">
          <li><a href="#">🏠 Sākums  🏠</a></li>
          <li><a href="Prezentacijas/Android_Studio">💻 Prezentācija 💻</a></li>
          <li><a href="Izmantotie_Avoti">🛠️ Izmantotie Avoti 🛠️</a></li>
          <li><a href="Aplikacija">📱 Aplikācija 📱</a></li>
      </ul>
    </div>

    <script>
    
    
        function toggleMobileMenu(menu) {
            menu.classList.toggle('open');
        }
        
        
        
        </script>
    
  </header>

<body>


    <br>

    <img src="../img/SOFTWARE_DEVELOPER.png" width="500px">

    <div class="container p-5 my-5 border" style="border-radius: 30px;">
<img src="img/ANDROID_STUDIO.png" width="500px">

        <br>
        <p style="text-align: center;"> 
            <br>
            Izstrādātājs - Google
            <br><br>
            Android Studio ir android lietotņu izstrādes aplikācija
            <br><br>
            Android Studio pirmo reizi tika izlaista 2013. gada 16. maijā.
            <br><br>
            2019. gada 7. maijā Google aizstāja valodu Kotlin ar Javu, 
            <br>
            kā vēlamo valodu Android lietotņu izstrādei.
        </p>
      </div>



      <div class="container p-5 my-5 border" style="border-radius: 30px;">
        <img src="img/VISUAL_STUDIO_CODE.png" width="500px">
        <br>
        


        <p style="text-align: center;">
            <br>Izstrādātājs - Microsoft
            <br><br>
            Visual Studio Code ir teksta redaktors, 
            <br>
            kas īpaši izstrādāts datorprogrammu pirmkoda rediģēšanai,
            <br>
            ko sauc arī par avota koda reģidētāju (Source-code Editor)
            <br><br>
            Avota koda redaktoriem ir īpašības, kas īpaši izstrādātas, 
            <br>
            lai vienkāršotu un paātrinātu avota koda ievadīšanu, piemēram, sintakses izcelšanas, atkāpes, 
            <br>
            automātiskās pabeigšanas un figūriekavu atbilstības funkcionalitāte. 
            <br>
            Šie redaktori nodrošina arī ērtu veidu, kā palaist kompilatoru, tulku, atkļūdotāju vai citu programmu, 
            <br>
            kas attiecas uz programmatūras izstrādes procesu. 
            <br>
            Tātad, lai gan daudzus teksta redaktorus, piemēram, Notepad, var izmantot avota koda rediģēšanai, 
            <br>
            bet ja tie neuzlabo, neautomatizē vai neatvieglo koda rediģēšanu, tie nav pirmkoda redaktori.
        </p>
      </div>

  </body>
</html>