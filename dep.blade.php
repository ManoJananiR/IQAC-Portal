<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('asset/css/depstyle.css')}}">
    <link rel="shortcut icon" width="10%" href="{{asset('asset\css\images\favicon.png')}}">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6dd2a7d089.js" crossorigin="anonymous"></script>
    <title>IQAC Portal</title>
  </head>
  <body>
    <!--loading-->
    <div class="loading-overlay" id="loadingOverlay">
    <img class="loading-gif" src="{{asset('asset\css\images\loadd.gif')}}" alt="Loading">
  </div>
    <!--end-->
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_container">
        <div class="logo_item">
          <img src="{{asset('asset\css\images\logo2.gif')}}" alt="">
        </div>
        <div id="marqueeContainer">
          <marquee id="textMarquee" behavior="scroll" direction="right" scrollamount="5">
            <!--<i class="fas fa-bullhorn"></i>
            <span id="marqueeText"><i class="fas fa-bullhorn"></i> </span>-->
          </marquee>
        </div>
      </div>
    </nav>

    <!--circular-->

    <!--bg img-->
    <div class="bg">
      <img src="{{asset('asset\css\images\bg.jpg')}}" alt="" height="650px" width="100%">
      <div class="content">
        <h1>IQAC</h1>
        <p>Internal Quality Assurance Cell</p>
      </div>
    </div>
    <main>
    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <hr>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
          <div class="nav_link submenu_item" onclick="rotateIcon(this)">
    <span class="navlink_icon">
        <i class="fa-solid fa-computer"></i>
    </span>
    <span class="navlink">Dept Of Computer Science</span>
    <i class="bx bx-chevron-right arrow-left"></i>
</div>
          <ul class="menu_items submenu">
            <!-- Submenu items -->
            <li><a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a></li>
            <li><a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a></li>
            <li><a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a></li>
            <li><a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a></li>
            <li><a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a></li>
            <li><a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a></li>
            <li><a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a></li>
            <!-- Add more submenu items here -->
          </ul>
        </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-bolt"></i>
              </span>
              <span class="navlink">Dept Of Electronics</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-handshake"></i>
              </span>
              <span class="navlink">Dept Of BBA</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-wand-magic-sparkles"></i>
              </span>
              <span class="navlink">Dept Of CDF</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-microchip"></i>
              </span>
              <span class="navlink">Dept Of Information Technology</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-cart-shopping"></i>
              </span>
              <span class="navlink">Dept Of Commerce</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-language"></i>
              </span>
              <span class="navlink">Dept Of English</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-chart-simple"></i>
              </span>
              <span class="navlink">Dept Of Statistics</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-money-bill-trend-up"></i>
              </span>
              <span class="navlink">Dept Of Commerce(PA) </span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-code"></i>
              </span>
              <span class="navlink">Dept Of BCA</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-hand-holding-dollar"></i>
              </span>
              <span class="navlink">Dept Of Commerce(BA)</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          
          <!-- end -->
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
          <hr>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-calculator"></i>
              </span>
              <span class="navlink">Dept Of Maths</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-apple-whole"></i>
              </span>
              <span class="navlink">Dept Of Physics</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-flask-vial"></i>
              </span>
              <span class="navlink">Dept Of Chemistry</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-brands fa-pagelines"></i>
              </span>
              <span class="navlink">Dept Of Botany</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <li class="item">
            <div class="nav_link submenu_item" onclick="rotateIcon(this)">
              <span class="navlink_icon">
              <i class="fa-solid fa-magnifying-glass-chart"></i>
              </span>
              <span class="navlink">Dept Of Commerce</span>
              <i class="bx bx-chevron-right arrow-left" onclick="rotateIcon(this)"></i>
            </div>

            <ul class="menu_items submenu">
            <a href="{{ route('C1') }}" class="nav_link sublink">Criterion 1</a>
              <a href="{{ route('C2') }}" class="nav_link sublink">Criterion 2</a>
              <a href="{{ route('C3') }}" class="nav_link sublink">Criterion 3</a>
              <a href="{{ route('C4') }}" class="nav_link sublink">Criterion 4</a>
              <a href="{{ route('C5') }}" class="nav_link sublink">Criterion 5</a>
              <a href="{{ route('C6') }}" class="nav_link sublink">Criterion 6</a>
              <a href="{{ route('C7') }}" class="nav_link sublink">Criterion 7</a>
            </ul>
          </li>
          <!--end-->
      </div>
    </nav>
      
    <!--content-->
    <main-content>
            <div class="container">
            <center><h1>IQAC Portal</h1></center>
            <h1>Objective</h1><br>
            <p><b>" To develop a system for conscious, consistent and catalytic action to improve the academic and administrative performance of the institution "</b></p><br>
            <h1>Functions</h1><br>
            <p>➤  Development and application of the quality benchmarks/parameters for the various academic administrative activities of the institution.<br>
      ➤  Dissemination of information on the various quality parameter of higher education.<br>
      ➤  Organisation of workshops, seminars on quality related themes and promotion of the quality circles.<br>
      ➤  Documentation of the various programmes/activities leading to quality improvement.<br>
      ➤  Preparation of the Annual Quality Assurance Report (AQAR) to be submitted to NAAC based on the quality parameters.<br></p><br><br>
            <h1>Benefits</h1><br>
            <p>  ➤  To heighten the level of the clarity and focus in institutional functioning towards quality enhancement and facilitate internalization of the quality culture.<br>
      ➤  To enhance and integrate the various activities of the institution and institutionalize many good practices.<br>
      ➤  To provide a sound basis for decision making to improve institutional functioning.<br>
      ➤  To act as change agent in the institution.<br>
      ➤  To better the internal communication.<br></p>
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
     <div class="last"> <hr /><marquee direction="left"><h4>© 2024 gvncollege.</h4></marquee></div>
       
      
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          </div>
</footer>
    <!-- JavaScript -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var marqueeText = localStorage.getItem("marqueeText");
        if (marqueeText) {
            var marqueeElement = document.getElementById("textMarquee");
            marqueeElement.innerHTML = '<i class="fas fa-bullhorn"></i> ' + marqueeText;
        }
    });

    // Retrieve the text from local storage
    var marqueeText = localStorage.getItem("marqueeText");

    // Retrieve the image source from local storage
    var logoSource = localStorage.getItem("logoSource");

    // Update the marquee text
    updateMarquee(marqueeText);

    // Update the logo image
    document.querySelector('.logo_item img').src = logoSource;

    const submenuItems = document.querySelectorAll(".submenu_item");

    submenuItems.forEach(item => {
        item.addEventListener("click", () => {
            item.classList.toggle("show_submenu");
            const submenu = item.nextElementSibling;
            submenu.classList.toggle("show_submenu");
        });
    });

    const sidebarClose = document.querySelector(".collapse_sidebar");
    sidebarClose.addEventListener("click", () => {
        const submenuItems = document.querySelectorAll(".submenu_item");
        submenuItems.forEach(item => {
            item.classList.remove("show_submenu");
            const submenu = item.nextElementSibling;
            submenu.classList.remove("show_submenu");
        });
    });
   

// Add click event listener to each submenu item
submenuItems.forEach(item => {
  item.addEventListener("click", () => {
    // Toggle the 'show_submenu' class on the parent submenu item
    item.classList.toggle("show_submenu");
  });
});
</script>
<script>
     document.addEventListener("DOMContentLoaded", function () {
  // Select all submenu items
  const submenuItems = document.querySelectorAll(".submenu_item");

  // Add click event listener to each submenu item
  submenuItems.forEach(item => {
    item.addEventListener("click", () => {
      // Toggle the 'show_submenu' class on the parent submenu item
      item.classList.toggle("show_submenu");

      // Toggle the 'submenu' class on the submenu itself
      const submenu = item.nextElementSibling;
      submenu.classList.toggle("submenu");
    });
  });
});

    </script>
<script>
    function rotateIcon(div) {
        var icon = div.querySelector('.bx-chevron-right');
        if (!div.classList.contains('rotate')) {
            icon.style.transform = 'rotate(90deg)';
            div.classList.add('rotate');
        } else {
            icon.style.transform = 'rotate(0deg)';
            div.classList.remove('rotate');
        }
    }
</script>
<script>
  // Function to handle link clicks
  document.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function(event) {
      // Prevent the default link behavior
      event.preventDefault();
      
      // Show the loading overlay
      document.getElementById('loadingOverlay').classList.add('active');

      // Wait for a brief moment before navigating to the new page
      setTimeout(function() {
        window.location.href = event.target.href;
      }, 3000); // Adjust the delay as needed, here it's set to 3 seconds
    });
  });
</script>
  </body>
</html>
