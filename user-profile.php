<?php
require 'dbconnection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Daipsi / Consultancy Page</title>
</head>

<body>

    <!-- Navbar Start -->

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
        <li><a href="index.php">Home <i class="fa menu-logo fa-home"></i></a></li>
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
        <li><a href="contact us.html">Contact Us <i class="fas menu-logo fa-phone-alt"></i></a></li>
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
                  <form action="user-profile.html">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                </div>
                <div class="modal-footer">
                  <a href="#" class="forget-pass">forgot Password?</a>
                  <button type="submit">Submit</button>
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
                  <form action="user-profile.html">
                    <div class="mb-3">
                      <label for="first-name" class="col-form-label">First Name:</label>
                      <input type="text" class="form-control" id="first-name">
                      <label for="last-name" class="col-form-label">Last Name:</label>
                      <input type="text" class="form-control" id="full-name">
                      <label for="about" class="col-form-label">About:</label>
                      <input type="text" class="form-control" id="location">
                      <label for="designation" class="col-form-label">Designation:</label>
                      <input type="text" class="form-control" id="designation">
                      <label for="qualification" class="col-form-label">Qualification:</label>
                      <input type="text" class="form-control" id="experiance">
                      <label for="skills" class="col-form-label">Skills:</label>
                      <input type="text" class="form-control" id="skills">
                      <label for="email" class="col-form-label">Email Address:</label>
                      <input type="email" class="form-control" id="email">
                      <label for="password" class="col-form-label">Password:</label>
                      <input type="text" class="form-control" id="password">
                      <label for="file-name" class="col-form-label">Upload Image</label>
                      <input type="file" class="form-control" id="file-name">
                      <label for="choose-field" class="col-form-label">Choose Your Field</label><br><br>
                      <input type="radio" name="login-radio" value="Engineering"> Engineering
                      <input type="radio" name="login-radio" value="Medical"> Medical
                      <input type="radio" name="login-radio" value="Commerce"> Commerce
                      <input type="radio" name="login-radio" value="Government Exams"> Government Exams
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit">Submit</button>
                  </form>
                  <button data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Open first dialog -->
          <a class="btn Login-signup" data-bs-toggle="modal" href="#modal" role="button">Login / SignUp <i class="fas menu-logo fa-user-circle"></i></a>
        </li>
      </ul>
    </div>
  </nav>


    <div class="second-nav">
        <nav class="navbar">
            <div class="container-fluid">
                <span>Updated Earth</span>
                <form class="search-bar">
                    <input type="radio" id="engineering" class="radio" name="course-name" value="engineering" required>
                    <label for="engineering"> Engineering </label>
                    <input type="radio" id="medical" class="radio" name="course-name" value="medical">
                    <label for="medical"> Medical </label>
                    <input type="radio" id="commerce" class="radio" name="course-name" value="commerce">
                    <label for="commerce"> Commerce </label>
                    <input type="radio" id="government-exams" class="radio" name="course-name" value="government-exams">
                    <label for="government-exams"> Government Exams </label> <br>
                    <input type="search" class=" form-control me-2 search-engine" placeholder="Get Your Answer Quickly"
                        aria-label="Search" required>
                    <button class="btn" type="submit">Search</button>
                </form>
                <a href="index.html"><img src="images/logo.png"></a>
            </div>
        </nav>
    </div>

    <!-- Navbar End -->

    <!-- User Profile Start -->

    <div class="user-profile">
        <div class="user-profile-direction">
            <h1>Profile</h1>
            <span>Daipsi <i class="fas fa-caret-right"></i> Profile</span>
        </div>
        <div class="user-profile-common-details">
            <div class="user-img">
                <img src="<?php echo $_SESSION['photo'];?>" alt="">
              

                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload-image"
                data-bs-whatever="@mdo"><i class="fas fa-camera"></i></button>
            <div class="modal fade" id="upload-image" tabindex="-1" aria-labelledby="upload-image"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="upload-image">Upload Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                          <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="file-name" class="col-form-label">Upload Image</label>
                                    <input type="file" class="form-control" id="file-name" name="file">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button6">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-name">
                <span><?php echo $_SESSION['name'];?></span>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload-name"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="upload-name" tabindex="-1" aria-labelledby="upload-name"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="upload-name">Update Name</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                <!-- updatename form -->
                        <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="update-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="update-name" name="name" value="<?php echo $_SESSION['name'];?>">
                                </div>                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button3">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-about">
                <span>About</span><br>
                <div class="about-content">
                    <p><?php echo $_SESSION['about'];?></p>
                </div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-about"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="edit-about" tabindex="-1" aria-labelledby="edit-about"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-about">Edit About</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <!-- user about form -->
                        <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit-about" class="col-form-label">Edit About:</label>
                                    <textarea class="form-control" id="edit-about" name="about" value="<?php echo $_SESSION['about'];?>"></textarea>
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button4">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="change-password">
                <button type="button" class="btn textcolor_white_textSize_up" data-bs-toggle="modal" data-bs-target="#change-password"
                    data-bs-whatever="@mdo">Change Password</button>
                <div class="modal fade" id="change-password" tabindex="-1" aria-labelledby="change-password"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="change-password">Update Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- password form -->
                            <form action="studentprofile.php" method="POST">
                            <div class="modal-body">                               
                                    <div class="mb-3">
                                        <label for="change-password" class="col-form-label">Current Password:</label>
                                        <input type="text" class="form-control" id="change-password" name="current">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new-password" class="col-form-label">New Password:</label>
                                        <input type="text" class="form-control" id="new-password" name="newpass">
                                    </div>
                                    <div class="mb-3">
                                        <label for="check-password" class="col-form-label">Confirm New Password:</label>
                                        <input type="text" class="form-control" id="check-password" name="cnewpass">
                                    </div>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="button5">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <a href="logout.php" class="textcolor_white_textSize_up">Logout</a>
        </div>
        <div class="user-profile-main-details">
            <div class="user-personal-information">
                <div class="main-heading">
                    <h1>Personal Information</h1>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-Personal-info"
                    data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
                <div class="modal fade" id="edit-Personal-info" tabindex="-1" aria-labelledby="edit-Personal-info"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edit-Personal-info">Edit Personal Info</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
            <!-- personalinfromation form -->
                            <form action="studentprofile.php" method="POST">
                            <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="first-name" class="col-form-label">First Name:</label>
                                        <input type="text" class="form-control" id="first-name" name="fname" value="<?php echo $_SESSION['firstname'];?>">
                                        <label for="last-name" class="col-form-label">Last Name:</label>
                                        <input type="text" class="form-control" id="last-name" name="lname" value="<?php echo $_SESSION['lastname'];?>">
                                    </div>                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="button1">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
                <div class="user-line"></div>
                <div class="user-personal-data">
                  <div class="user-personal-content">
                      <h2>firstname</h2>
                      <div class="content-line"></div>
                      <h2 class="content-left"><?php echo $_SESSION['firstname'];?></h2>
                  </div>
                  <div class="user-personal-content">
                    <h2>Last Name</h2>
                    <div class="content-line"></div>
                    <h2><?php echo $_SESSION['lastname'];?></h2>
                </div>
                <div class="user-personal-content">
                    <h2>Email Address</h2>
                    <div class="content-line"></div>
                    <h2><?php echo $_SESSION['email'];?></h2>
                </div>
            </div>
        </div>
        <div class="user-personal-information">
            <div class="main-heading">
                <h1>Professional Information</h1>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-professional-info"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="edit-professional-info" tabindex="-1" aria-labelledby="edit-professional-info"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-professional-info">Edit Professional Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

            <!-- Professional Information form -->

                        <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="skills" class="col-form-label">Skills:</label>
                                    <input type="text" class="form-control" id="skills" name="skill" value="<?php echo $_SESSION['skill'];?>">
                                    <label for="qualification" class="col-form-label">Qualification:</label>
                                    <input type="text" class="form-control" id="qualification" name="qua" value="<?php echo $_SESSION['qua'];?>">
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button2">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-line"></div>
            <div class="user-personal-data">
              <div class="user-personal-content">
                  <h2>Designation</h2>
                  <div class="content-line"></div>
                  <h2>Student</h2>
              </div>
              <div class="user-personal-content">
                <h2>Skills</h2>
                <div class="content-line"></div>
                
                <h2><?php echo $_SESSION['skill'];?></h2>
                
                
            </div>
            <div class="user-personal-content">
                <h2>Qualification</h2>
                <div class="content-line"></div>
                <h2><?php echo $_SESSION['qua'];?></h2>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- User Profile End -->

    <!-- My Courses Start -->

    <div class="common">
        <div class="common-heading">
            <span>My Courses</span>
        </div>
        <div class="common-content">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
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

    <!-- My Courses End -->

    <!-- Top Running Courses Start -->

    <div class="common top-running-courses-container">
        <div class="common-heading top-running-courses-name">
            <span>Top Running Courses</span>
        </div>
        <section class="common-slider top-running-courses">
            <div class="slide">
                <div class="course-name">
                    <span class="same">JEE</span>
                </div>
                <img src="images/jee course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="jee.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span>NEET</span>
                </div>
                <img src="images/neet course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="neet.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span>UPSC</span>
                </div>
                <img src="images/upsc course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="upsc.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span class="same">CA</span>
                </div>
                <img src="images/ca course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="ca.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span class="same">CS</span>
                </div>
                <img src="images/cs course.png" class="cs-img">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="cs.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span>NEET</span>
                </div>
                <img src="images/neet course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="neet.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span class="same">JEE</span>
                </div>
                <img src="images/jee course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="jee.html"><span>BuY NoW</span></a>
                </div>
            </div>
        </section>
    </div>

    <!-- Top Running Courses End -->

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