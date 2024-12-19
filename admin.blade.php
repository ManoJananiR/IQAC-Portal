<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" width="10%" href="{{asset('asset\css\images\favicon.png')}}">
    <link rel="stylesheet" href="{{asset('asset/css/adminStyle.css')}}">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6dd2a7d089.js" crossorigin="anonymous"></script>
    <title>IQAC Portal</title>
 
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
      <img src="{{asset('asset\css\images\bg.jpg')}}" alt="" height="650px" width="100%">
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
              <div class="menu_title menu_dahsboard" style="font-size: 26px;">Circular Announcement</div>
              <hr>
              <a href="{{ route('circular') }}" class="nav_link">
                <span class="navlink">Circular Announcement</span>
              </a>
            </li>
            <li class="item">
              <div class="menu_title menu_dahsboard" style="font-size: 26px;">Criteria</div>
              <hr>
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
          </ul>
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
        <div class="last"> <hr /><marquee direction="left"><h4>Developed by : R.Mano janani,S.Abirami (M.Sc(CS)-2025) under the guidance of Dr.S.Suganthi(Assistant Professor(Department of Computer Science)).</h4></marquee></div>
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
    </script>
    <script>
      // Retrieve the text from local storage
      var marqueeText = localStorage.getItem("marqueeText");

      // Retrieve the image source from local storage
      var logoSource = localStorage.getItem("logoSource");

      // Update the marquee text
      updateMarquee(marqueeText);

      // Update the logo image
      document.querySelector('<i class="fas fa-bullhorn"></i>').src = logoSource;
    </script>

    <script>
      // Function to display the username-password pairs
      function displayUserCredentials() {
        var userCredentials = JSON.parse(localStorage.getItem('userCredentials')) || {};
        var passwordTableBody = document.getElementById('passwordTableBody');
        passwordTableBody.innerHTML = ''; // Clear existing table body

        // Add rows for each username-password pair
        for (var username in userCredentials) {
          var row = passwordTableBody.insertRow();
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          var cell3 = row.insertCell(2);
          var cell4 = row.insertCell(3);

          cell1.innerHTML = username;
          cell2.innerHTML = userCredentials[username];

          // Edit button
          var editButton = document.createElement("button");
          editButton.innerHTML = "Edit";
          editButton.addEventListener("click", function() {
            // Fill the form with the selected username and its current password
            var rowIndex = this.parentNode.parentNode.rowIndex;
            var selectedUsername = document.getElementById('passwordTable').rows[rowIndex].cells[0].innerHTML;
            document.getElementById('selectedUsername').value = selectedUsername;
            document.getElementById('newPassword').value = userCredentials[selectedUsername];
          });
          cell3.appendChild(editButton);

          // Delete button
          var deleteButton = document.createElement("button");
          deleteButton.innerHTML = "Delete";
          deleteButton.addEventListener("click", function() {
            // Remove the username and its password from localStorage
            var rowIndex = this.parentNode.parentNode.rowIndex;
            var selectedUsername = document.getElementById('passwordTable').rows[rowIndex].cells[0].innerHTML;
            delete userCredentials[selectedUsername];
            localStorage.setItem('userCredentials', JSON.stringify(userCredentials));
            // Update the displayed username-password pairs
            displayUserCredentials();
          });
          cell4.appendChild(deleteButton);
        }
      }

      // Button click event to show the table
      document.getElementById("showTableButton").addEventListener("click", function() {
        document.getElementById("passwordTableContainer").style.display = "block";
        displayUserCredentials();
      });

      // Handle form submission to set password
      document.getElementById("adminForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        var adminUsername = document.getElementById("adminUsername").value;
        var adminPassword = document.getElementById("adminPassword").value;
        
        if (adminUsername === "admin" && adminPassword === "admin") {
          var selectedUsername = document.getElementById("selectedUsername").value;
          var newPassword = document.getElementById("newPassword").value;

          var userCredentials = JSON.parse(localStorage.getItem('userCredentials')) || {};
          userCredentials[selectedUsername] = newPassword;
          localStorage.setItem('userCredentials', JSON.stringify(userCredentials));

          alert("Password set successfully for user: " + selectedUsername);
          displayUserCredentials(); // Update displayed username-password pairs
        } else {
          alert("Invalid admin credentials!");
        }
      });

      // Function to toggle password visibility
      function togglePassword(elementId) {
        var x = document.getElementById(elementId);
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>

  </body>
</html>
