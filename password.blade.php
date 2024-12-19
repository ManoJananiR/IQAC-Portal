<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('asset/css/criteria.css')}}">
    <link rel="shortcut icon" width="10%" href="{{asset('asset\css\images\favicon.png')}}">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6dd2a7d089.js" crossorigin="anonymous"></script>
    <title>IQAC Portal</title>
    <style>
        thead {
            background-color: black;
            color: white;
        }
        #passwordTable {
            border:none;
            width: 90%;
            text-align: center;
            margin-left: 5.5%;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            transform-origin: center left;
            transition-property: transform;
            transition-duration: 0.4s;
            transition-timing-function: ease-in-out;
        }
        button {
            color:white;
            background-color: dodgerblue;
            padding: 10px 20px;
            border: none;
            border-radius: 2px;
            font-weight:bold;
            font-size: 20px;
            margin:1px ;
        }
        button:hover {
            background-color: rgb(156, 207, 228);
        }
        .container {
            height: 100%;
            width: 100%;
            background: #fefefe;
            border-radius: 8px;
            padding: 50px;
            font-size: 20px;
        }
        .containerr {
            font-style: italic;
            padding: 30px;
            margin:15px;
            width: 70%;
            display: flex;
            font-size: 20px;
            border-radius: 3px;
            margin-left:5px;
        }
        select {
            padding: 5px;
            border-radius: 4px;
            border:1px solid gray;
        }
        label {
            font-size: 22px;
        }
        input {
            padding: 4px;
            border:1px solid gray;
            border-radius: 1px;
            font-size: 22px;
        }
        .button {
            padding:10px 47px;
            border-radius: 2px;
            font-weight: bold;
            background-color: dodgerblue;
            color: white;
            font-size: 20px;
            border: none;
        }
        img {
            left: 100%;
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
                </ul>
            </div>
        </nav>
        <!--end-->

        <!--content-->
        <main-content>
            <div class="container">
                <center><h1 style="font-style:italic;">Admin Panel to set password</h1></center>
                <div class="containerr">
                    <!-- Form to set password -->
                    <form id="adminForm">
                        <label for="adminUsername">Admin Username:</label>
                        <input type="text" id="adminUsername" name="adminUsername" required><br><br>
                        
                        <label for="adminPassword">Admin Password:</label>
                        <input type="password" id="adminPassword" name="adminPassword" required><br><br>
                        <input type="checkbox" onclick="togglePassword('adminPassword')">Show Password <br><br>

                        <label for="selectedUsername" class="dept">Select Department:</label><br><br>
                        <select id="selectedUsername" name="selectedUsername" style="font-size: 18px;">
                            <option value="" disabled selected hidden >Choose The Department</option>
                            <option value="Dept of CS">Department of Computer Science</option>
                            <option value="Dept of Elec">Department of Electronics</option>
                            <option value="Dept of BBA">Department of BBA</option>
                            <option value="Dept of CDF">Department of CDF</option>
                            <option value="Dept of IT">Department of Information Technology</option>
                            <option value="Dept of Com(sf)">Department of Commerce(self)</option>
                            <option value="Dept of Eng">Department of English</option>
                            <option value="Dept of Stat">Department of Statistics</option>
                            <option value="Dept of com(PA)">Department of Commerce(PA)</option>
                            <option value="Dept of BCA">Department of BCA</option>
                            <option value="Dept of Com(BA)">Department of Commerce(BA)</option>
                            <option value="Dept of Maths">Department of Maths</option>
                            <option value="Dept of Che">Department of Chemistry</option>
                            <option value="Dept of Com(reg)">Department of Commerce(regular)</option>
                            <option value="Dept of Physics">Department of Physics</option>
                            <option value="Dept of Bot">Department of Botany</option>
                        </select><br><br>
                        
                        <label for="newPassword" class="pass">Set Password:</label>
                        <input type="password" id="newPassword" name="newPassword" required><br><br>
                        <input type="checkbox" onclick="togglePassword('newPassword')">Show Password <br><br>

                        <input type="submit" class="button" value="Set Password"><br><br>

                    </form>

                    <img src="{{asset('asset\css\images\admin.png')}}" alt="" height="500px" width="480px">

                </div>
                <!-- Button to show the table -->
                <button id="showTableButton">Show Password Table</button><br><br>

                <!-- Display current username-password pairs -->
                <div id="passwordTableContainer" style="display: none;">
                    <table id="passwordTable" border="1">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="passwordTableBody">
                        </tbody>
                    </table>
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
