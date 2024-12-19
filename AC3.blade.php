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
          <!--<i class="fas fa-bullhorn"></i>
          <span id="marqueeText"><i class="fas fa-bullhorn"></i> </span>-->
        </marquee>
      </div>
    </div>
  </nav>

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
        <!-- Department filter -->
        <form method="GET">
          <label for="dept">Select Department:</label>
          <select name="dept" id="dept">
            <option value="">All Departments</option>
            @foreach($departments as $department)
            <option value="{{ $department }}" {{ request('dept') == $department ? 'selected' : '' }}>
              {{ $department }}
            </option>
            @endforeach
          </select>
          <button type="submit">Filter</button>
        </form><br>
        <!-- Button to show all uploaded files -->
        <a href="{{ route('AC3.index') }}" class="v">All uploaded files</a>
        <br><br>
        <!-- Uploaded files table here -->
        <h2 style="margin: 5px 0px 20px 0px;">Uploaded Files</h2>

        @if($files->isEmpty())
        <p>No files uploaded yet.</p>
        @else
        <table>
          <thead>
            <tr>
              <th>Department name</th>
              <th>File Path</th>
              <th>View</th>
              <th>Download</th>
              <th>Delete</th> <!-- New column for delete button -->
            </tr>
          </thead>
          <tbody>
            @foreach($files as $file)
            <tr>
              <td>{{ $file->dept_name }}</td>
              <td>{{ $file->file_path }}</td>
              <td><a href="{{ route('AC3.view', ['id' => $file->id]) }}" class="v">View</a></td>
              <td><a href="{{ route('AC3.download', ['id' => $file->id]) }}" class="v">Download</a></td>
              <td>
                <form action="{{ route('AC3.delete', ['id' => $file->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @endif
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
          <h2>Location</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15754.267321330986!2d77.83426!3d9.193488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06b1870536a46b%3A0xfd95ca5c7b0bf602!2sGVN%20COLLEGE%2C%20KOVILPATTI!5e0!3m2!1sen!2sus!4v1707229458654!5m2!1sen!2sus" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="details">
          <h2 class="address">Contact Us</h2>
          <p>
            <b>Address :</b> Near New Appaneri<br>
            Kovilpatti-628502.<br>
            Tamil Nadu-620005.
          </p>
          <p><a href="#"><b>Email :</b>  gvncollegeoffice@gvncollege.edu.in</a></p>
          <p><a href="#"><b>Phone Number :</b> 91 04632 - 225389</a></p><br>
        </div>
        <div class="services">
          <h2 class="address">Our Campus Life</h2>
          <div class="vdo"><iframe width="360" height="215" src="https://www.youtube.com/embed/8QTgBxewZA8?si=_xQWXLFJ9lViL6TP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
        </div>
      </div>
      <div class="last"> <hr /><marquee direction="left"><h4>Developed by : R.Mano janani,S.Abirami (M.Sc(CS)-2025) under the guidance of Dr.S.Suganthi(Assistant Professor(Department of Computer Science)).</h4></marquee></div>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
  </footer>
</body>
</html>