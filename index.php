<?php
require 'dbconnection.php';
$query = "SELECT * FROM teachers LIMIT 20";
$result = mysqli_query($conn, $query);
$student="SELECT purchases.course_name, users.name,users.profilephoto FROM purchases 
INNER JOIN users ON purchases.users_email=users.email ORDER BY purchases.id DESC LIMIT 20";
$result1=mysqli_query($conn, $student);
?>

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Daipsi / Home Page</title>

    <!-- Script for live search -->
    <script>
        $(document).ready(function(){
            $('.search-bar input[type="search"]').on("keyup input", function(){
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("backend-search.php", {term: inputVal}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            
            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-bar").find('input[type="search"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
    <script>
        function showSuggestions() {
          document.getElementById("suggestions").style.display = "block";
        }
        function hideSuggestions(){
          document.getElementById("suggestions").style.display = "none";
        }
    </script>
  </head>
  <body onscroll="hideSuggestions()">

  <!-- Header Part Start -->

  <nav>
    <div class="menu-header">
      <div class="top-brand-name">
        <a class="navbar-brand" href="index.html">DAIPSI</a>
      </div>
      <i class="fas fa-bars"></i>
    </div>
    <div class="menu-content">
      <ul>
        <li>
          <div class="top-brand-name">
            <a class="navbar-brand" href="index.html">DAIPSI</a>
          </div>
        </li>
        <li><a href="index.html" class="active">Home <i class="fa menu-logo fa-home"></i></a></li>
        <li><a href="about us.html">About Us <i class="fa menu-logo fa-users"></i></a></li>
        <li><a href="courses.html">Courses</a><i class="course-direction-icon fas fa-chevron-down dropbtn"></i>
          <ul class="dropdown">
            <li><a href="courses/ca.html">CA <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-1"></i>
              <ul class="dropdown-2">
                <li><a href="courses/ca foundation.html">CA Foundation</a></li>
                <li><a href="courses/ca intermediate.html">CA Intermediate</a></li>
                <li><a href="#" class="dropbtn-2">CA Intermediate Subject wise <i
                      class="fas fa-chevron-right right"></i> <i class="fas fa-chevron-down down"></i></a>
                  <ul class="dropdown-3">
                    <li><a href="courses/group 1 ca intermediate.html" class="dropbtn-3">Groups:-1</a>
                    </li>
                    <li><a href="courses/group 2 ca intermediate.html" class="dropbtn-3">Groups:-2</a>
                    </li>
                  </ul>
                </li>
                <li><a href="https://daipsi.com/blogs/category/commerce/">Important Updates For CA</a></li>
              </ul>
            </li>
            <li><a href="courses/cs.html">CS <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-1"></i>
              <ul class="dropdown-2">
                <li><a href="courses/cseet.html">CSEET</a></li>
                <li><a href="courses/cs executive.html">CS Executive</a></li>
                <li><a href="#" class="dropbtn-2">CS Executive Subject wise <i class="fas fa-chevron-right right"></i>
                    <i class="fas fa-chevron-down down"></i></a>
                  <ul class="dropdown-3">
                    <li><a href="courses/group 1 cs executive.html">Groups:-1</a>
                    </li>
                    <li><a href="courses/group 2 cs executive.html">Groups:-2</a>
                    </li>
                  </ul>
                </li>
                <li><a href="https://daipsi.com/blogs/category/commerce/">Important Updates For CS</a></li>
              </ul>
            </li>
            <li><a href="courses/jee.html">JEE <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-1"></i>
              <ul class="dropdown-2">
                <li><a href="courses/jee advanced.html">JEE Advanced</a></li>
                <li><a href="courses/jee mains.html">JEE Mains</a></li>
                <li><a href="https://daipsi.com/blogs/category/engineering/">Important Updates For JEE</a></li>
              </ul>
            </li>
            <li><a href="courses/neet.html">NEET <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-1"></i>
              <ul class="dropdown-2">
                <li><a href="courses/neet.html">NEET</a></li>
                <li><a href="https://daipsi.com/blogs/category/medical/">Important Updates For NEET</a></li>
              </ul>
            </li>
            <li><a href="courses/upsc.html">UPSC <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-1"></i>
              <ul class="dropdown-2">
                <li><a href="courses/prelims.html">Prelims <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-2"></i>
                  <ul class="dropdown-3">
                    <li><a href="courses/general studies paper I prelims.html">General Studies Paper-I</a></li>
                    <li><a href="courses/general studies paper II prelims.html">General Studies Paper-II</a></li>
                  </ul>
                </li>
                <li><a href="courses/mains.html">Mains <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-2"></i>
                  <ul class="dropdown-3 expand-1">
                    <li><a href="courses/one of the languages selected by condidates mains.html">One of the languages selected by candidates</a></li>
                    <li><a href="courses/general studies I mains.html">General studies-I</a></li>
                    <li><a href="courses/general studies II mains.html">General studies-II</a></li>
                    <li><a href="courses/general studies III mains.html">General studies-III</a></li>
                    <li><a href="courses/general studies IV mains.html">General studies-IV</a></li>
                    <li><a href="courses/english mains.html">English</a></li>
                    <li><a href="courses/essays mains.html">Essays</a></li>
                  </ul>
                </li>
                <li><a href="#">Optional <i class="fas fa-chevron-right right"></i></a> <i class="fas fa-chevron-down down white-color dropbtn-2"></i>
                  <ul class="dropdown-3 expand-1">
                    <li><a href="courses/optional subject paper I geography.html">Optional subject-Paper-I (Geography)</a></li>
                    <li><a href="courses/optional subject paper II hindi.html">Optional subject-Paper-II (Hindi)</a></li>
                  </ul>
                </li>
                <li><a href="https://daipsi.com/blogs/category/medical/">Important Updates For UPSC</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="consultancy.html">Consultancy <i class="fas menu-logo fa-chalkboard-teacher"></i></a></li>
        <li><a href="personal mentorship.html">Personal Mentorship <i class="fas menu-logo fa-people-arrows"></i> </a></li>
        <li><a href="contact us.html">Contact Us <i class="fas menu-logo fa-phone-alt"></i></a>
        <?php   if (isset($_SESSION['email'])) 
                    {  
                        ?>
                  <a class="nav-link" href="logout.php">logout</a>
                  <?php } else{?>
                    <a class="nav-link"></a>
                    <?php }?>
                    </li>
        <li>
          <!-- First modal dialog -->
          <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="stulogin.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email"  name ="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                    </div>
                </div>
                <div class="modal-footer">
                  <a href="#" class="forget-pass">forgot Password?</a>
                  <button type="submit" name="login">Submit</button>
                  </form>
                  <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Register</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registration Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="sturegister.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="first-name" class="col-form-label">First Name:</label>
                      <input type="text" class="form-control" id="first-name"  name="fname"required> 
                      <label for="last-name" class="col-form-label">Last Name:</label>
                      <input type="text" class="form-control" id="full-name" name="lname">
                      <label for="designation" class="col-form-label">designation:</label>
                      <input type="text" class="form-control" id="designation" name="designation">
                      <label for="qualification" class="col-form-label">Qualification:</label>
                      <input type="text" class="form-control" id="experiance"  name="qualification"required>
                      
                      <label for="email" class="col-form-label">Email Address:</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                      <label for="password" class="col-form-label">Password:</label>
                      <input type="password" class="form-control" id="password"  name="pass"required>
                      <label for="password" class="col-form-label"> Contact Number:</label>
                      <input type="text" class="form-control" id="phone" name="contact" required>
                      <label for="file-name" class="col-form-label" enctype="multipart/form-data">Upload Image</label>
                      <input type="file" class="form-control" id="file-name" name="profilePhoto" required>
                      <label for="choose-field" class="col-form-label">Choose Your Field</label><br><br>
                      <input type="radio" name="loginradio" value="Engineering" required> Engineering
                      <input type="radio" name="loginradio" value="Medical" required> Medical
                      <input type="radio" name="loginradio" value="Commerce" required> Commerce
                      <input type="radio" name="loginradio" value="Government Exams" required> Government Exams
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="register">Submit</button>
                  </form>
                  <button data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Open first dialog -->
          <?php   if (isset($_SESSION['email'])) 
                    {  
                        ?>
                <a>welcome <?php echo $_SESSION['k'];?></a>
                        <?php }else{?>
          <a class="btn Login-signup" data-bs-toggle="modal" href="#modal" role="button">Login / SignUp <i class="fas menu-logo fa-user-circle"></i></a>
          <?php }?>
        </li>
      </ul>
    </div>
  </nav>


  <div class="second-nav">
    <nav class="navbar">
      <div class="container-fluid">
        <span class="brand-logo">Updated Earth</span>
        <form class="search-bar" action="search result.php" method="GET" class="search-bar">
              <input type="radio" id="engineering" class="radio" name="course" value="jee" required>
              <label for="engineering"> Engineering </label>
              <input type="radio" id="medical" class="radio" name="course" value="neet" required>
              <label for="medical"> Medical </label>
              <input type="radio" id="commerce" class="radio" name="course" value="commerce" required>
              <label for="commerce"> Commerce </label>
              <input type="radio" id="government-exams" class="radio" name="course" value="upsc" required>
              <label for="government-exams"> Government Exams </label> <br>
              <input name="search" type="search" class=" form-control me-2 search-engine" placeholder="Get Your Answer Quickly" aria-label="Search" oninput="showSuggestions()" required>
              <button class="btn" type="submit">Search</button>  
              <div id="suggestions" class="result" style="color:white; font-size:20px; z-index:100; position: fixed; background-color: rebeccapurple;
              height: auto;
              padding: 2rem;
              background: #45338b;
              border-radius: 3rem;
              margin: auto;
              width: 53%;
              display: none;"></div>     
          </form>
       
        <a href="index.html"><img src="images/logo.png"></a>
      </div>
    </nav>
  </div>

  <!-- Header Part End -->

  <!-- Main Slider Start -->

  <div class="main-slider">
    <div class="welcome">
      <span>Welcome to<br>DAIPSI</span>
    </div>
    <section class="main-slider-img">
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
      <div class="slides">
        <img src="images/slider-img.png">
      </div>
    </section>
  </div>

  <!-- Main Slider End -->

  <!-- Most Popular Courses Start -->

  <div class="common">
    <div class="common-heading">
      <span>Most Popular Courses</span>
    </div>
    <div class="common-content">
      <p>Students from average category to exceptional, dream to crack these exams like UPSC, CA, CS, NEET, JEE, and we
        provide best courses to clear these exams.</p>
    </div>
    <section class="common-slider most-popular-courses">
      <div class="slide">
        <img src="images/jee.jpg">
        <h1>JEE</h1>
        <h2>Mohd Moin</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="jee.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/neet.jpg">
        <h1>NEET</h1>
        <h2>Mohd Adil</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="neet.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/upsc.jpg">
        <h1>UPSC</h1>
        <h2>Dilip Jadaun</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="upsc.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/ca.jpg">
        <h1>CA</h1>
        <h2>Mansi Prajapati</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="ca.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/cs.jpg">
        <h1>CS</h1>
        <h2>Ravina Gupta</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="cs.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/jee.jpg">
        <h1>JEE</h1>
        <h2>Mohd Moin</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="jee.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/neet.jpg">
        <h1>NEET</h1>
        <h2>Mohd Adil</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="neet.html">More</a></button>
      </div>
      <div class="slide">
        <img src="images/upsc.jpg">
        <h1>UPSC</h1>
        <h2>Dilip Jadaun</h2>
        <h3>B.Tech, Diploma</h3>
        <h4>Rating <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h4>
        <button><a href="upsc.html">More</a></button>
      </div>
    </section>
  </div>

  <!-- Most Popular Courses End -->

  <!-- Most Popular Videos Start -->

  <div class="common">
    <div class="common-heading">
      <span>Most Popular Videos</span>
    </div>
    <div class="common-content">
      <p>Our professionals present you these video lectures in such a great fluency even a long-run video won't bore you
        for a second.</p>
    </div>
    <section class="common-slider most-popular-videos">
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/jee video.png"></a>
        <h2>Launch of JEE Mains<br>Study Course</h2>
        <h2>Mohd Moin</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/neet video.png"></a>
        <h2>Launch of NEET<br>Study Course</h2>
        <h2>Mohd Adil</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/ca video.png"></a>
        <h2>Launch of CA<br>Study Course</h2>
        <h2>Dilip Jadaun</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/cs video.png"></a>
        <h2>Launch of CS<br>Study Course</h2>
        <h2>Mansi Prajapati</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/upsc video.png"></a>
        <h2>Launch of UPSC<br>Study Course</h2>
        <h2>Ravina Gupta</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/jee video.png"></a>
        <h2>Launch of JEE Mains<br>Study Course</h2>
        <h2>Mohd Moin</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/neet video.png"></a>
        <h2>Launch of NEET<br>Study Course</h2>
        <h2>Mohd Adil</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
      <div class="slide">
        <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/ca video.png"></a>
        <h2>Launch of CA<br>Study Course</h2>
        <h2>Dilip Jadaun</h2>
        <h3>B.Tech, Diploma</h3>
        <h4><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h4>
      </div>
    </section>
  </div>

  <!-- Most Popular Videos End -->

  <!-- Commonly Asked Doubts Start -->

  <div class="common commonly-asked-doubts-container">
    <div class="common-heading">
      <span>Commonly Asked Doubts</span>
    </div>
    <div class="common-content">
      <p>These questions are frequently asked by students:
        How much mentorship matters for these exams like UPSC,NEET, JEE,CA, CS?
        What is a search engine?</p>
    </div>
    <section class="common-slider commonly-asked-doubts">
      <div class="slide">
        <img src="images/student (1).png" class="student">
        <i class="fas fa-user-check"></i>
        <h1>Dilip Jadaun</h1>
        <h2>Student</h2>
        <h3>Question: What is helium made of?</h3>
        <h4>Answer: Helium is composed of two electrons in atomic orbitals surrounding a nucleus containing two protons
          and (usually) two neutrons.</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
      <div class="slide">
        <img src="images/student (2).png" class="student">
        <i class="fas fa-user-check"></i>
        <h1>Ravina Gupta</h1>
        <h2>Student</h2>
        <h3>Question: What is UPSC?</h3>
        <h4>Answer: he UPSC Civil Services Examination(CSE) is one of the examinations conducted by the Union Public
          Service Commission to recruit suitable candidates into civil services of India including IAS, IPS, IFS, and
          other allied services.</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
      <div class="slide">
        <img src="images/student (3).png">
        <i class="fas fa-user-check"></i>
        <h1>Mohd Moin</h1>
        <h2>Student</h2>
        <h3>Question: What is use of JEE exam?</h3>
        <h4>Answer: The JEE-Main, which replaces AIEEE, is for admission to the National Institutes of Technology
          (NITs), Indian Institutes of Information Technology (IIITs), and some other colleges designated as "centrally
          funded technical institutes" (CFTIs).</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
      <div class="slide">
        <img src="images/student (4).png">
        <i class="fas fa-user-check"></i>
        <h1>Mansi Prajapati</h1>
        <h2>Student</h2>
        <h3>Question: What is meant by NEET exam?</h3>
        <h4>Answer: The National Eligibility Entrance Test (NEET), formerly the All India Pre-Medical Test (AIPMT), is
          the qualifying test for MBBS and BDS programmes in Indian medical and dental colleges. It is conducted by the
          National Testing Agency (NTA).</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
      <div class="slide">
        <img src="images/student (5).png">
        <i class="fas fa-user-check"></i>
        <h1>Mohd Adil</h1>
        <h2>Student</h2>
        <h3>Question: How long is CS course?</h3>
        <h4>Answer: The CS (Company Secretary) is a 3 years professional course equivalent to the UG degree. The CS
          course is conducted by the ICSE (Institute of Company Secretaries of India). The CS course is divided into
          three levels as the following: Foundation Course–8months.</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
      <div class="slide">
        <img src="images/student (6).png" class="student">
        <i class="fas fa-user-check"></i>
        <h1>Abhishek kumar</h1>
        <h2>Student</h2>
        <h3>Question: Who is eligible for CS exam?</h3>
        <h4>Answer: After Class 12: Students applying for the Company Secretary Course after 10+2 will have to register
          for the Foundation Programme to start with. Students of science, commerce as well as arts can apply for the
          course.</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
      <div class="slide">
        <img src="images/student (7).png">
        <i class="fas fa-user-check"></i>
        <h1>Kartikey Pandey</h1>
        <h2>Student</h2>
        <h3>Question: what is ca exam?</h3>
        <h4>Answer: The ICAI exam, also known as CA exams, is conducted by the Institute of Chartered Accountants of
          India (ICAI) for aspirants of Chartered Accountancy profession in India. The exam is conducted at different
          levels as per the CA courses.</h4>
        <h5><i class="far fa-thumbs-up"></i>
          <span>1.4k</span>
          <i class="far fa-thumbs-down"></i>
          <span>0</span>
          <a href="#"><i class="far fa-share-square"></i></a>
        </h5>
      </div>
    </section>
  </div>

  <!-- Commonly Asked Doubts End -->

  <!-- Recently Joined Students Start -->

  <div class="common">
    <div class="common-heading">
      <span>Recently Joined Students</span>
    </div>
    <div class="common-content">
      <p>The long line of our students tells us about the existence of Daipsi. Come and join our community and let's go
        together to achieve our goals.</p>
    </div>
    <section class="common-slider recently-joined-students">
    <?php while($rows = mysqli_fetch_assoc($result1))
                {
             ?>
      <div class="slide">
        <img src="<?php echo $rows["profilephoto"];?>">
        <h1><?php echo $rows["name"];?></h1>
        <h2>Student</h2>
        <h3>Crash Course<?php echo $rows["course_name"];?></h3>
        <h4>All India Rank-08</h4>
      </div>
      <?php }?>
      <!-- <div class="slide">
        <img src="images/review 1.jpg">
        <h1>Mansi Prajapati</h1>
        <h2>Student</h2>
        <h3>Crash Course JEE</h3>
        <h4>All India Rank-08</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (2).png">
        <h1>Mohd Moin</h1>
        <h2>Student</h2>
        <h3>Crash Course NEET</h3>
        <h4>All India Rank-18</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (3).png">
        <h1>Mohd Adil</h1>
        <h2>Student</h2>
        <h3>Crash Course CA</h3>
        <h4>All India Rank-02</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (4).png">
        <h1>Dilip Jadaun</h1>
        <h2>Student</h2>
        <h3>Crash Course CS</h3>
        <h4>All India Rank-16</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (5).png">
        <h1>Ravina Gupta</h1>
        <h2>Student</h2>
        <h3>Crash Course UPSC</h3>
        <h4>All India Rank-10</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (6).png">
        <h1>Mani Gupta</h1>
        <h2>Student</h2>
        <h3>Crash Course JEE</h3>
        <h4>All India Rank-21</h4>
      </div> -->
    </section>
  </div>

  <!-- Recently Joined Students End -->

  <!-- Our Teachers Start -->

  <div class="common">
    <div class="common-heading">
      <span>Our Teachers</span>
    </div>
    <div class="common-content">
      <p>Nothing is easy in itself but how to present anything makes everything easy. Hold the hands of our experienced
        and highly qualified teachers and reach to your destinies.</p>
    </div>
    <section class="common-slider our-teachers">
    <?php while($rows = mysqli_fetch_assoc($result))
                {
             ?>
    <div class="slide">
      <img src="<?php echo $rows["profile_photo"];?>">
        <h1><?php echo $rows["full_name"];?></h1>
        <h2>Teachers</h2>
        <h3><?php echo $rows["designation"];?></h3>
        <h4>All India Rank-08</h4>
    </div>
    <?php }?>
    <div class="slide">
      <img src="images/teacher (1).png">
      <h1>Mukesh Kumar</h1>
      <h2>Teachers</h2>
      <h3>Crash Course NEET</h3>
      <h4>All India Rank-18</h4>
    </div>
      <!-- <div class="slide">
        <img src="images/teacher (2).png">
        <h1>Mansi Prajapati</h1>
        <h2>Teachers</h2>
        <h3>Crash Course JEE</h3>
        <h4>All India Rank-08</h4>
      </div>
      <div class="slide">
        <img src="images/teacher (1).png">
        <h1>Mukesh Kumar</h1>
        <h2>Teachers</h2>
        <h3>Crash Course NEET</h3>
        <h4>All India Rank-18</h4>
      </div>
      <div class="slide">
        <img src="images/teacher (2).png">
        <h1>Manisha Gupta</h1>
        <h2>Teachers</h2>
        <h3>Crash Course JEE</h3>
        <h4>All India Rank-21</h4>
      </div>
      <div class="slide">
        <img src="images/teacher (1).png">
        <h1>Mohd Zakir</h1>
        <h2>Teachers</h2>
        <h3>Crash Course CA</h3>
        <h4>All India Rank-02</h4>
      </div>
      <div class="slide">
        <img src="images/teacher (2).png">
        <h1>Renu Gupta</h1>
        <h2>Teachers</h2>
        <h3>Crash Course UPSC</h3>
        <h4>All India Rank-10</h4>
      </div>
      <div class="slide">
        <img src="images/teacher (1).png">
        <h1>Dilip Thakur</h1>
        <h2>Teachers</h2>
        <h3>Crash Course CS</h3>
        <h4>All India Rank-16</h4>
      </div> -->
    </section>
  </div>

  <!-- Our Teachers End -->

  <!-- Our Ratings Start -->

  <div class="common">
    <div class="common-heading">
      <span>Our Ratings</span>
    </div>
    <div class="common-content">
      <p>We don't say anything about ourselves our aspirants makes us so high.</p>
    </div>
    <section class="common-slider our-ratings">
      <div class="slide">
        <img src="images/review 1.jpg">
        <h1>Mansi Prajapati</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
      <div class="slide">
        <img src="images/review 2.jpg">
        <h1>Ravina Gupta</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
      <div class="slide">
        <img src="images/review 3.jpg">
        <h1>Mohd Moin</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
      <div class="slide">
        <img src="images/review 4.jpg">
        <h1>Mohd Adil</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
      <div class="slide">
        <img src="images/review 5.jpg">
        <h1>Dilip Jadaun</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
      <div class="slide">
        <img src="images/review 6.jpg">
        <h1>Abhishek kumar</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
      <div class="slide">
        <img src="images/review 7.jpg">
        <h1>Kartikey Pandey</h1>
        <h4>Education is something which can change someone’s life
          and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
      </div>
    </section>
  </div>

  <!-- Our Ratings End -->

 <!-- Footer Part Start -->

 <div class="our-partners">
  <div class="partners">
    <span>Our Partners</span>
  </div>
  <div class="partners-img slider">
    <div class="slide1">
      <img src="images/bhim-upi.png">
    </div>
    <div class="slide2">
      <img src="images/amzon-pay.png">
    </div>
    <div class="slide3">
      <img src="images/mdd.png">
    </div>
    <div class="slide4">
      <img src="images/digital-hain.png">
    </div>
    <div class="slide">
      <img src="images/phonepe.png">
    </div>
    <div class="slide">
      <img src="images/google-pay.png">
    </div>
    <div class="slide">
      <img src="images/paytm-pay.png">
    </div>
  </div>
</div>

<div class="main-footer">
  <div class="first-part">
    <a href="index.html"><img src="images/logo.png"></a>
    <h2>About Us</h2>
    <p>Daipsi is an educational platform where we provide you top demanding courses like UPSC, CA, CS, NEET, JEE. We
      provide search engine to our aspirants to get answers instantly. We give you personal mentorship that is
      completely free and 24×7 consultancy for proper and end to end guidance.
    </p>
  </div>
  <div class="secound-main-footer">
    <div class="secound-part">
      <h2>Useful Links</h2>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="contact us.html">Contact Us</a></li>
        <li><a href="consultancy.html">Consultancy</a></li>
        <li><a href="personal mentorship.html">Personal Mentorship</a></li>
        <li><a href="#">Term & Condition</a></li>
      </ul>
    </div>
    <div class="third-part">
      <h2>Courses</h2>
      <ul>
        <li><a href="courses/ca.html">CA</a></li>
        <li><a href="courses/cs.html">CS</a></li>
        <li><a href="courses/jee.html">JEE</a></li>
        <li><a href="courses/neet.html">NEET</a></li>
        <li><a href="courses/upsc.html">UPSC</a></li>
      </ul>
    </div>
    <div class="forth-part">
      <h2>Updates</h2>
      <ul>
        <li><a href="https://daipsi.com/blogs/category/commerce/">CA Updates</a></li>
        <li><a href="https://daipsi.com/blogs/category/commerce/">CS Updates</a></li>
        <li><a href="https://daipsi.com/blogs/category/engineering/">JEE Updates</a></li>
        <li><a href="https://daipsi.com/blogs/category/medical/">NEET Updates</a></li>
        <li><a href="https://daipsi.com/blogs/category/u-p-s-c/">UPSC Updates</a></li>
      </ul>
    </div>
    <div class="fivth-part">
      <h2>Find Us</h2>
      <ul>
        <li><a href="https://www.facebook.com/Daipsi-Private-Limited-108148468116064/" target="_blank" rel="noreferrer"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://instagram.com/daipsis?utm_medium=copy_link" target="_blank" rel="noreferrer"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/DaipsiS?s=08" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/in/daipsi-slides-902b74213/" target="_blank" rel="noreferrer"><i class="fab fa-linkedin-in"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="hori-line">
  <hr size="4" width="100%" class="line">
</div>
<div class="secound-footer">
  <div class="first-part">
    <a href="#"><img src="images/paypal.png"></a>
    <a href="#"><img src="images/Rupay.png"></a>
    <a href="#"><img src="images/Mastercard.png"></a>
    <a href="#"><img src="images/American Express.png"></a>
    <a href="#"><img src="images/Visa.png"></a>
  </div>
  <div class="secound-part">
    <div class="first">
      <a href="index.html"><img src="images/copyright.png"> 2021, Daipsi. All rights reserved.</a>
    </div>
    <div class="first">
      <a href="https://digitalhain.com"><img src="images/poweredby.png"> Powered By Digitalhain.</a>
    </div>
  </div>
  <div class="third-part">
    <a href="#"><img src="images/Paytm.png"></a>
    <a href="#"><img src="images/rbl.png"></a>
    <a href="#"><img src="images/bhim-upi.png"></a>
  </div>

</div>
<!-- Footer Part End -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
  crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>