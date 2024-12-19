<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" width="10%" href="{{asset('asset\css\images\favicon.png')}}">
    <link rel="stylesheet" href="{{asset('asset/css/criteria.css')}}">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6dd2a7d089.js" crossorigin="anonymous"></script>
    <title>IQAC Portal</title>
    <style>
      /* Container styles */

.circular {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

    </style>
   </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_container">
        <div class="logo_item">
          <img src="{{asset('asset\css\images\logo2.gif')}}" alt="">
        </div>
        <div id="marqueeContainer">
          <marquee id="textMarquee" behavior="scroll" direction="right" scrollamount="5">
            </marquee>
        </div>
      </div>
    </nav>
    <br><br>
    <!--circular-->

    <!--bg img-->
    <div class="bg">
      <img src="{{asset('asset\css\images\cbg.jpg')}}" alt="">
      <div class="content">
        <h1>IQAC</h1>
        <p>Internal Quality Assurance Cell</p>
      </div>
    </div>
    <main>
      <!-- sidebar -->
     <!--start-->
     <nav class="sidebar">
        <div class="menu_content">
          <ul class="menu_items">
          <li class="item">
          <div class="menu_title menu_dahsboard">Password setting</div>
              <hr>
              <a href="{{ route('password') }}" class="nav_link">
                <span class="navlink">Password setting</span>
              </a>
            </li>
            <li class="item">
            <div class="menu_title menu_dahsboard"style="font-size: 26px;">Circular Announcement</div>
              <hr>
              <a href="{{ route('circular') }}" class="nav_link">
                <span class="navlink">Circular Announcement</span>
              </a>
            </li>
            <li class="item">
              <div class="menu_title menu_dahsboard" style="font-size: 26px;">Criteria</div>
              <hr>
              <li class="item">
            <a href="{{ route('AC1.index') }}" class="nav_link">
              <span class="navlink">Criterion 1</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ route('AC2.index') }}" class="nav_link">
              <span class="navlink">Criterion 2</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ route('AC3.index') }}" class="nav_link">
              <span class="navlink">Criterion 3</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ route('AC4.index') }}" class="nav_link">
              <span class="navlink">Criterion 4</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ route('AC5.index') }}" class="nav_link">
              <span class="navlink">Criterion 5</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ route('AC6.index') }}" class="nav_link">
              <span class="navlink">Criterion 6</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ route('AC7.index') }}" class="nav_link">
              <span class="navlink">Criterion 7</span>
            </a>
          </li>
          <!--end-->
       
      </div>
    </nav>
      
    <!--content-->
    <main-content>
    
            <div class="container">
                
    

<div class=circular>

<h2>Circular Form</h2>

<input type="text" id="textInput" placeholder="Enter text">
<h3>Note: After click "Click to Confirm" refresh the page for circulating the message</h3>
<button onclick="saveText()">Click to Confirm</button>
</div>
            </div>
        </main-content>
        
  </main>
  <footer>
  <div class="footer">
      <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></li>
      </ul>
      <div class="fcontent">
        <div class="services">
          <h4>Services</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15754.267321330986!2d77.83426!3d9.193488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06b1870536a46b%3A0xfd95ca5c7b0bf602!2sGVN%20COLLEGE%2C%20KOVILPATTI!5e0!3m2!1sen!2sus!4v1707229458654!5m2!1sen!2sus" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="details">
          <h4 class="address">Contact Us</h4>
          <p>
            <b>Address :</b> Near New Appaneri<br><br>
            Kovilpatti-628502.<br><br>
            Tamil Nadu-620005.
          </p>
          <p><a href="#"><b>Email :</b>  gvncollegeoffice@gvncollege.edu.in</a></p>
          <p><a href="#"><b>Phone Number :</b> 91 04632 - 225389</a></p>
          </div>
<div class="services">
          <h4 class="address">Our Campus Life</h4>
          <div class="vdo"><iframe width="360" height="215" src="https://www.youtube.com/embed/8QTgBxewZA8?si=_xQWXLFJ9lViL6TP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            </div>
      </div>
      <div class="last"> <hr /><marquee direction="left"><h4>Developed by : R.Mano janani,S.Abirami (M.Sc(CS)-2025) under the guidance of Dr.S.Suganthi(Assistant Professor(Department of Computer Science)).</h4></marquee></div>
       
      
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          </div>
</footer>
    <!-- JavaScript -->
    <script>
      const body = document.querySelector("body");
const sidebar = document.querySelector(".sidebar");
    </script>
   <script>
    function saveText() {
  var userInput = document.getElementById("textInput").value;
  localStorage.setItem("marqueeText", userInput);

  // Save the image source to local storage
  var logoSource = document.querySelector(".logo_item img").src;
  localStorage.setItem("logoSource", logoSource);

  // Update the marquee
  updateMarquee(userInput);
}


    function updateMarquee(text) {
      var marqueeElement = document.getElementById("textMarquee");
      marqueeElement.innerHTML = '<i class="fas fa-bullhorn"></i> ' + text;
    }

    window.onload = function() {
      var storedText = localStorage.getItem("marqueeText");
      if (storedText) {
        updateMarquee(storedText);
        document.getElementById("textInput").value = storedText;
      }
    };
  </script>
<script>
function saveText() {
  var userInput = document.getElementById("textInput").value;
  localStorage.setItem("marqueeText", userInput);

  // Start the marquee
  var marqueeElement = document.getElementById("textMarquee");
  marqueeElement.start();
}
</script>
<script>
  // Function to handle link clicks
  document.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function(event) {
      // Allow the default link behavior
      // This will prevent interference from loading overlay operations
      return true;
    });
  });
</script>
  </body>
</html>
