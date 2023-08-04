<?php 
include 'C:\xampp\htdocs\login\connect.php';
session_start();
if(!isset($_SESSION['login'])|| $_SESSION['login']!=true){
    header('location:\login\login_page_\src\login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>weeducate</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="content">
    <nav>
      <ul>
        <li>
          <a href="#"><img src="#" alt="logo" /></a>
        </li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#"> About us</a></li>
        <li id="lr">
          <a href="/login/login_page_/src/login.php">another account</a><img id="navlog" src="/LOGIN/project/img/icons8-login-64.png" />
        </li>

        <!-- <li><a href="#">Register<img src="#"></a></li> -->
      </ul>
    </nav>
    <div class="con">
      <div class="con-contents">
        <h1 id="a">LEARNING MADE EASIER</h1>
        <h2 id="b"><i>Learn like never before</i></h2>
        <a href="#">
          <h2 id="c">Get started for free</h2>
        </a>
        <h3><a href="#" class="a">View all our courses>></a></h3>
      </div>
    </div>
  </div>
  <div class="hm1">
    <div id="hm1">
      <img src="/LOGIN/project/img/icon_target.png">
      <div><h3>8,000 online courses</h3>
      <p>Explore a variety of fresh topics</p>
    </div>
  </div>
    <div id="hm1">
      <img src="/LOGIN/project/img/icon_tick.png">
      <div>
        <h3>Expert intruction</h3>
      <p>Find the right instructor for you</p>
    </div>
    </div>
    <div id="hm1">
      <img src="/LOGIN/project/img/icon_time-1.png">
      <div><h3>Lifetime access</h3>
      <p>learn on your schedule</p>
    </div>
    </div>
  </div>
  <div class="second">
  <div class="bg">
    <div id="bgtext">
      <p id="pa">SELF DEVELOPMENT COURSE</p>
      <h2>
        Get Instant Access To <br />
        Expert solution
      </h2>
      <p>
        The ultimate planning solution for students who want to reach their
        personal goals.Effortless comfortable eye-catching unique detail
      </p>
      <div id="bgt1">
        <img src="/LOGIN/project/img/Easy-to-Use.png" />
        <div id="bgt2">
          <h2>Sign up in website</h2>
          <p>
            The right mentoring relationship can be a powerful tool for
            professional growth. Bark up the right tree.
          </p>
        </div>
      </div>
      <div id="bgt1">
        <img src="/LOGIN/project/img/online-classes.png" />
        <div id="bgt2">
          <h2>Enroll your course</h2>
          <p>
            The right mentoring relationship can be a powerful tool for
            professional growth. Bark up the right tree.
          </p>
        </div>
      </div>
      <div id="bgt1">
        <img src="/LOGIN/project/img/Easy-Communication.png" />
        <div id="bgt2">
          <h2>Start from now</h2>
          <p>
            The right mentoring relationship can be a powerful tool for
            professional growth. Bark up the right tree.
          </p>
        </div>
      </div>
    </div>
    <div>
      <img src="/LOGIN/project/img/about-image.jpg" id="bgimg" />
    </div>
  </div>
  <div class="bg2">
    <div class="b">
      <h3>Learn the secrets to Life Success</h3>
      <p>MAXIMIZE YOUR POTENTIAL</p>
      <p>
        The ultimate planning solution for students who want to reach their
        personal goals
      </p>
    </div>
    <div class="hv">
      <div>
        <img src="/LOGIN/project/img/Expert-Instructror.png" alt="picture" />
        <h4>Expert teacher</h4>
        <p>
          Develop skills for career of various<br />
          major including computer
        </p>
      </div>
      <div>
        <img src="/LOGIN/project/img/Easy-to-Use.png" alt="picture" />
        <h4>Self development</h4>
        <p>
          Develop skills for career of various<br />
          major including computer
        </p>
      </div>
      <div>
        <img src="/LOGIN/project/img/online-classes.png" alt="d" />
        <h4>Remote support</h4>
        <p>
          Develop skills for career of various<br />
          major including computer
        </p>
      </div>
      <div>
        <img src="/LOGIN/project/img/Easy-Communication.png" />
        <h4>Life time support</h4>
        <p>
          Develop skills for career of various<br />
          major including computer
        </p>
      </div>
    </div>
  </div>
</div>
  <div class="courses">
    <div class="coursestext">
      <h1>TRENDING COURSES</h1>
      <br />
      <p>
        Popular online courses around you<br /><br />
        Take the control of your life back and start doing things to make your
        dream come true.
      </p>
    </div>
    <div class="images">
      <a href="#" class="dc1">
        <div class="">
          <img src="/LOGIN/project/img/design-course.jpg" width="100%" id="dc1img" />
          <br />
          <div id="tlogo">
            <p>Design-course</p>
            <div>
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
            </div>
          </div>
          <div class="ctr">
            <ul id="ctrid">
              <li class="clist">Free but requires registration</li>
              <br />
              <li class="clist">Taught by the best</li>
              <br />
              <li class="clist">Exclusive videos</li>
              <br />
            </ul>
          </div>
          <!-- <p style="font-display:inline;">rating</p> -->
          <hr />
          <div id="imglogo">
            <div id="imglogo1">
              <img src="/LOGIN/project/img/icons8-books-15.png" />
              <p>5 chapters</p>
            </div>
            <div id="imglogo1">
              <img src="/LOGIN/project/img/icons8-students-15.png" />
              <p>150 students</p>
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="dc2">
        <div class="">
          <img src="/LOGIN/project/img/photography-1.jpg" width="100%">
          <br />
          <div id="tlogo">
            <p>Photography</p>
            <div>
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
            </div>
          </div>
          <div class="ctr">
            <ul id="ctrid">
              <li class="clist">Free but requires registration</li>
              <br />
              <li class="clist">Taught by the best</li>
              <br />
              <li class="clist">Exclusive videos</li>
              <br />
            </ul>
          </div>
          <hr />
          <div id="imglogo">
            <div id="imglogo1">
              <img src="/LOGIN/project/img/icons8-books-15.png" />
              <p>10 chapters</p>
            </div>
            <div id="imglogo1">
              <img src="/LOGIN/project/img/icons8-students-15.png" />
              <p>68 students</p>
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="dc3">
        <div class="">
          <img src="/LOGIN/project/img/programming-course.jpg" width="100%" />
          <br />
          <div id="tlogo">
            <p>Programming Course</p>
            <div>
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
              <img src="/LOGIN/project/img/icons8-rating-30.png" />
            </div>
          </div>
          <div class="ctr">
            <ul id="ctrid">
              <li class="clist">Free but requires registration</li>
              <br />
              <li class="clist">Taught by the best</li>
              <br />
              <li class="clist">Exclusive videos</li>
              <br />
            </ul>
          </div>
          <hr />
          <div id="imglogo">
            <div id="imglogo1">
              <img src="/LOGIN/project/img/icons8-books-15.png" />
              <p>5 chapters</p>
            </div>
            <div id="imglogo1">
              <img src="/LOGIN/project/img/icons8-students-15.png" />
              <p>150 students</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div id="imgp">
      <a href="#">
        <p>view more</p>
      </a>
    </div>
  </div>
  <div class="stdvoice">
    <h1>Our students Voice</h1>
    <div id="voice1">
      <div id="voice">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem repellat laborum excepturi optio voluptas illum,
          facere esse doloribus libero officia, vitae iure officii
        </p>
        <div id="v1">
          <img src="/LOGIN/project/img/vc1.png" id="vcimg" />
          <h3>Jessica Alba</h3>
          <br />
          <p>Managing Director</p>
        </div>
      </div>
      <div id="voice">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem repellat laborum excepturi optio voluptas illum,
          facere esse doloribus libero officia, vitae iure officiis
        </p>
        <div id="v1">
          <img src="/LOGIN/project/img/vc2.png" id="vcimg" />
          <h3>Jenny Wilson</h3>
          <br />
          <p>Designer</p>
        </div>
      </div>
      <div id="voice">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem repellat laborum excepturi optio voluptas illum,
          facere esse doloribus libero officia, vitae iure officiis
        </p>
        <div id="v1">
          <img src="/LOGIN/project/img/vc3.png" id="vcimg" />
          <h3>Wsther Howard</h3>
          <br />
          <p>Financer</p>
        </div>
      </div>
    </div>
    <div id="voice1">
      <div id="voice">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem repellat laborum excepturi optio voluptas illum,
          facere esse doloribus libero officia, vitae iure officiis
        </p>
        <div id="v1">
          <img src="/LOGIN/project/img/vc4.png" id="vcimg" />
          <h3>Darrell Steward</h3>
          <br />
          <p>Developer</p>
        </div>
      </div>
      <div id="voice">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem repellat laborum excepturi optio voluptas illum,
          facere esse doloribus libero officia, vitae iure officiis
        </p>
        <div id="v1">
          <img src="/LOGIN/project/img/vc5.png" id="vcimg" />
          <h3>Leslie Alexander</h3>
          <br />
          <p>Backend Developer</p>
        </div>
      </div>
      <div id="voice">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem repellat laborum excepturi optio voluptas illum,
          facere esse doloribus libero officia, vitae iure officiis
        </p>
        <div id="v1">
          <img src="/LOGIN/project/img/vc6.png" id="vcimg" />
          <h3>Bessie Cooper</h3>
          <p>Accountant</p>
        </div>
      </div>
    </div>
  </div>
  <div class="txtin">
    <div class="t">
      <h1>332</h1>
      <p>courses</p>
    </div>
    <div class="t">
      <h1>332</h1>
      <p>Teachers</p>
    </div>
    <div class="t">
      <h1>332</h1>
      <p>subjects</p>
    </div>
  </div>
  <footer>
    <div class="foot">
      <div id="ft1">
        <img src="#" alt="logo" />
        
        <img src="#" alt="fb logo" />
        <img src="#" alt="twitter logo" />
        <img src="#" alt="insta logo" />
      </div>
      <div id="ft2">
        <h3>Explore</h3>
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">contact us</a></li>
          <li><a href="#">LOGIN/projects</a></li>
          <li><a href="#">Terms and conditions</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>
      <div  id="ft3">
        <p>+977 866396831</p>
        <p>info@yourdomain.com</p>
        <p>balkumari lalitpur</p>
        <p>bl1011</p>
      </div>
    </div>
    <hr />
    <div class="ft3">
      <p>
        © Copyright EduHash Template All rights reserved.Crafted by Dreambuzz
      </p>
    </div>
  </footer>
  <script type="text/javascript">
    // window.addEventListener("scroll", function () {
    //   var header = document.querySelector("nav");
    //   header.classList.toggle("sticky", window.scrollY > 0);

    // })  
  </script>
</body>

</html>