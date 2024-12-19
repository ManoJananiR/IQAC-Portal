<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC Portal</title>
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="shortcut icon" width="10%" href="{{asset('asset\css\images\favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-4k+XfbvKapRsVwyt9uCBPFdX5Ib9VxMJL0XjJTJQj6vze8KgE8AxJEFfj6Va8AkpAOWkySWHda6tXqBkJp5DvA=="
        crossorigin="anonymous" />
    <style>
body {
    background-image: url('asset/css/images/bg.jpg');
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: cover;
    position: relative;
    background-color: rgba(0, 0, 0, 0.5); /* Change the background color and opacity as needed */
    display: flex;
    justify-content: center; /* Center the containers horizontally */
    align-items: center; /* Center the containers vertically */
    height: 100vh; /* Ensure full viewport height */
    margin: 0; /* Remove default body margin */
}

.login-container {
    width: 90%; /* Adjust the width of the container */
    max-width: 600px; /* Limiting max-width for better readability on larger screens */
    padding: 20px;
    background-color: #fff; /* White background for login container */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow for depth */
    margin-bottom: 20px; /* Add some space between login containers */
}

.form-group {
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button.login {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button.login:hover {
    background-color: #0056b3;
}

@media screen and (max-width: 768px) {
    .login-container {
        width: 100%; /* Adjust the width of the container for smaller screens */
    }
}


    </style>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="logo_item">

                <img src="{{asset('asset\css\images\logo2.gif')}}" alt="">
            </div>
        </nav>
    </header>
    <main>
        <div class="overlay"></div>
        <div class="login-container">
            <div class="login-heading">Admin Login</div>
            <div class="form-group">
                <label for="admindepname">Username:</label>
                <input type="text" id="admindepname" name="admindepname" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="adminPassword">Password:</label>
                <input type="password" id="adminPassword" name="adminPassword" pattern="\d{6}"
                    title="Password must be 6 digits" placeholder="Enter password" required>
            </div>
            <span style="font-size: 22px;">
                <input type="checkbox" onclick="togglePassword('adminPassword')">Show Password <br><br>
            </span>
            <div class="form-group">
                <button onclick="validateAdminLogin()">Login</button>
            </div>
            <!-- <div id="adminErrorMessage" class="error-message"></div>-->
        </div>
        <div class="login-container">
            <div class="login-heading">Staff Login</div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Department:</label>
                </div>
                <div class="form-group">
                    <select id="username" required>
                        <option value="" class="dept" disabled selected hidden>Choose The Department</option>
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
                        <!-- other options omitted for brevity -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>
                <span style="font-size: 22px;">
                    <input type="checkbox" onclick="togglePassword('password')">Show Password <br><br>
                </span>
                <div class="form-group">
                    <input type="submit" class="login" value="Login">
                </div>
            </form>
            <!--<div id="staffErrorMessage" class="error-message"></div>-->
        </div>
    </main>

    <script>
        function togglePassword(elementId) {
            var x = document.getElementById(elementId);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function validateAdminLogin() {
            var username = document.getElementById("admindepname").value;
            var password = document.getElementById("adminPassword").value;

            if (username === "admin" && password === "admin") {
                // Correct credentials, proceed with login
                window.location.href = "{{ route('admin') }}";
            } else {
                // Incorrect credentials, display error message
                alert("Incorrect username or password. Please try again.");
            }
        }

        document.getElementById("loginForm").addEventListener("submit", function (event) {
            event.preventDefault();

            var enteredUsername = document.getElementById("username").value;
            var enteredPassword = document.getElementById("password").value;

            // Retrieve user credentials from localStorage
            var userCredentials = JSON.parse(localStorage.getItem('userCredentials')) || {};

            if (userCredentials.hasOwnProperty(enteredUsername) && userCredentials[enteredUsername] === enteredPassword) {
                window.location.href = "{{ route('dep') }}";
            } else {
                alert("Invalid username or password!");
            }
        });
    </script>

</body>

</html>
