@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url(https://cdn.pixabay.com/photo/2015/09/18/11/36/plantation-945400_960_720.jpg);
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->


<!-- Sidebar on small screens when clicking the menu icon -->


<!-- Header with full-height image -->
<div class="banner w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Nanotecnología aplicada al Agro</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Empoderamos a los productores mediante el ahorro de activos</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Aprendé más sobre nosotros</a></p>
  </div> 
</div>

<!-- About Section -->
<div class="bannerDos w3-text-white" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ACERCA DE LA EMPRESA</h3>
  <p class="w3-center w3-large">Caracteristicas principales</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsables</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Nature Friendly</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Innovadores</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Soporte</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Sabemos lo que hacemos.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> Nuestros ensayos a campo</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://cdn.pixabay.com/photo/2016/12/19/20/24/agricultural-machine-1919021_960_720.jpg" alt="Buildings" width="600" height="150">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="bannerDos w3-text-white" style="padding:128px 16px" id="team">
  <h3 class="w3-center">NUESTRO EQUIPO</h3>
  <p class="w3-center w3-large">Los que componen la empresa</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img class="w3-round-large" src="https://wallpaperaccess.com/full/2760066.jpg" alt="John" width="250" height="250">
        <div class="w3-container">
          <h3>Juan Roman Riquelme</h3>
          <p class="w3-opacity">Idolo del club</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contactar</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img class="w3-round-large" src="https://www.entremediosweb.com/v2/wp-content/uploads/2019/09/Martin-Palermo-Boca-2.jpg" alt="Jane" width="250" height="250">
        <div class="w3-container">
          <h3>Martin Palermo</h3>
          <p class="w3-opacity">Goleador del club</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contactar</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img class="w3-round-large" src="https://images.daznservices.com/di/library/CONMEBOL_Image_Storage/55/18/afp-carlos-tevez-boca-juniors-copa-libertadores_1r8kms1u1je0y19jkosqhx0hm2.jpg?t=2687092" alt="Mike" width="250" height="250">
        <div class="w3-container">
          <h3>Carlos Tevez</h3>
          <p class="w3-opacity">Goleador actual</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contactar</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img class="w3-round-large" src="data:image/jpeg;base64,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" alt="Dan" width="250" height="250">
        <div class="w3-container">
          <h3>Pato Abbondanzieri</h3>
          <p class="w3-opacity">Idolo en el arco</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contactar</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Socios
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Testeos a campo
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Clientes contentos
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Hectareas probadas
  </div>
</div>

<!-- Work Section -->
{{-- <div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div> --}}

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Nuestras Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>I+D</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>In house Testing</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Field-Testing</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
@endsection