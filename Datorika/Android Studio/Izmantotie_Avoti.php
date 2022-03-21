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


a {color: #ffffff;}

a:hover{
  color: #D00011;
}
</style>


  </head>
  
        


<header>
    <div id="brand"><a href="Sakums">Rinalds Kristians Tulpe</a></div>
    <nav>
      <ul>
        <li><a href="Sakums">🏠 Sākums 🏠</a></li>
        <li><a href="Prezentacijas/Android_Studio">💻 Prezentācija  💻</a></li>
        <li><a href="#">🛠️ Izmantotie Avoti 🛠️</a></li>
        <li><a href="Aplikacija">📱 Aplikācija 📱</a></li>
      </ul>
    </nav>
    <div style="text-align: center; " id="hamburger-icon" onclick="toggleMobileMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile-menu" style=" text-align: center; background-color: #1d1f1d;">
          <li><a href="Sakums">🏠 Sākums  🏠</a></li>
          <li><a href="Prezentacijas/Android_Studio">💻 Prezentācija 💻</a></li>
          <li><a href="#">🛠️ Izmantotie Avoti 🛠️</a></li>
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

    <img src="img/IZMANTOTIE_AVOTI.png" width="500px">

    <div class="container p-5 my-5 border" style="border-radius: 30px;">
         <p style="text-align: center;"><a href="https://developer.android.com/studio" style=" text-align: center;">Android Studio Download</a></p>
      <p style="text-align: center;"><a href="https://obsproject.com/" style="text-align: center;">OBS Studio Download (Ekrāna Ierakstītājs)</a></p>
      <p style="text-align: center;"><a href="https://github.com/Genymobile/scrcpy" style="text-align: center;">ScrCpy (Telefona ekrāns datorā)</a></p>
      <p style="text-align: center;"><a href="https://gradle.org/releases/" style="text-align: center;">Gradle Download</a></p>
            <p style="text-align: center;"><a href="https://commerce.adobe.com/store/segmentation?cli=adobe_com&co=US&pa=ilst_direct_individual&mv=other" style="text-align: center;">Adobe Ilustrator Download</a></p>
          <p style="text-align: center;"><a href="https://www.000webhost.com/" style="text-align: center;">Web Hosting (000webhost.com)</a></p>
          
          
             <p style="text-align: center;"><a href="https://stackoverflow.com/" style="text-align: center;">Stackowerflow</a></p>
             
               <p style="text-align: center;"><a href="https://www.w3schools.com//" style="text-align: center;">w3schools</a></p>
               
               <p style="text-align: center;"><a href=" https://www.microsoft.com/en-us/microsoft-365/onedrive/online-cloud-storage" style="text-align: center;">OneDrive</a></p>
               
                 <p style="text-align: center;"><a href="https://www.adobe.com/lv/products/photoshop.html?mv=search&mv=search&sdid=LZ32SYVR&ef_id=Cj0KCQiAybaRBhDtARIsAIEG3kk9CdpZIXhlCPHrOuYJEhYPQO2PUQFstl89XiCzxcY-H6dMGpLfsegaArNEEALw_wcB:G:s&s_kwcid=AL!3085!3!464637914873!e!!g!!photoshop!11126299107!109350514459" style="text-align: center;">Adobe Photoshop </a></p>
                 
                 
                 
                    <p style="text-align: center;"><a href="https://www.microsoft.com/en-us/microsoft-365/powerpoint" style="text-align: center;">PowerPoint </a></p>
                 
                 <p style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Android_Studio" style="text-align: center;">Android Studio - Wikipedia </a></p>
                 
                 
                 <p style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Visual_Studio_Code" style="text-align: center;">Visual Studio Code - Wikipedia</a></p>
                 
                 
                 <p style="text-align: center;"><a href="https://www.qr-code-generator.com/free-generator/?utm_source=google_c&utm_medium=cpc&utm_campaign=en_top_kw&utm_content=qr_generator_exact&utm_term=qr%20code%20generator_e" style="text-align: center;">OR Code Generator</a></p>
                 
                 
                 <p style="text-align: center;"><a href="https://firebase.google.com/" style="text-align: center;">Firebase</a></p>
                 
               
               
               
      </div>
      
      
      
     
      
  </body>
</html>
