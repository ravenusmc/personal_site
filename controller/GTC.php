<?php

?>
<!-- Links for CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/gtc.css">
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">

<?php include '../view/header.php'; ?>

<!-- Page Header Area -->
<div id='top'>
  <header class='header-container'>

    <div class='introDiv'>
      <h1>Mike Cuddy</h1>
      <h3>GTC Courses and  Photoshop Page</h3>
    </div>

    <div class='paragraphDiv'>
      <h2>Purpose</h1>
      <p>
        The purpose of this page is to show the work that I did at Gwinnett Technical
        College (GTC). Some of it may be bad - but it was when I was getting serious. I learned
        quite a bit at GTC, attended numerous hackathons in Atlanta during this time, came in 4th and
        then 2nd nationally at the Skills USA Web Design/Development Contest. So scroll on
        down and check out some of my work. I will say that a lot of how the websites from
        here are set up is how GTC made us do it. The page that you are now on was
        originally a page that I used at GTC for my homepage. I heavily modified it
        to make this page.
      </p>
      <!-- <h2 class='center'><a href="#area_one">Current Courses</a></h2>
      <h2 class='center'><a href="#area_two">Past Courses</a></h2>
      <h2 class='center'><a href='photoshop_personal_work/pages/index.html'>Photoshop Portfolio</a></h2> -->
    </div>

  </header>
</div>
<!-- End of Page header Area -->

<!-- Current Course Area -->
<div>
  <h1 id='area_one' class='center'>GTC Courses</h1>
  <div class='courses_area'>
    <ul>
      <li><a class='change_link' href="#">CIST 1220 - Structured Query Language-SQL (no online work)</a></li><br>
      <li><a class='change_link' href="2351/index.html">CIST 2351 - PHP Programming 1</a></li><br>
      <li><a class='change_link' href="http://mcuddy12.info/wordpress">CIST 2510 - Web Technologies</a></li><br>
      <li><a class='change_link' href="2531/index.html">CIST 2531 - Web Graphics 2</a></li>
    </ul>
  </div>
</div>
<!-- End of Current Course Area -->

<!-- Pic Area -->
<div id='pic_area_one'>
</div>
<!-- End of Pic Area -->

<!-- Past Course Area -->
<div>
  <h1 id='area_two' class='center'>Past Courses</h1>
  <div class='courses_area'>

    <div class='fix_list_info'>
      <h2>Courses with work online:</h2>
      <ul>
        <li><a class='change_link' href="1510/index.html">CIST 1510 - Web Development 1</a></li><br>
        <li><a class='change_link' href="1520/index.html">CIST 1520 - Scripting Technologies</a></li><br>
        <li><a class='change_link' href="1530/index.html">CIST 1530 - Web Graphics 1</a></li>
      </ul>
    </div>

    <div class='fix_list_info'>
      <h2>Courses with non-online work:</h2>
      <ul>
        <li class='non_online_font_size_fix'>CIST 1001 - Computer Concepts</li>
        <li class='non_online_font_size_fix'>CIST 1305 - Program Design and Development</li>
        <li class='non_online_font_size_fix'>CIST 1601 - Information Security Fundamentals</li>
        <li class='non_online_font_size_fix'>CIST 2742 - Beginning Python Programming</li>
        <li class='non_online_font_size_fix'>CIST 2361 - C++ Programming 1</li>
        <li class='non_online_font_size_fix'>CIST 2740 - Intro to Game Development</li>
      </ul>
    </div>
  </div>
</div>
<!-- End of Past Course Area -->

<!-- Pic Area -->
<div id='pic_area_two'>
</div>
<!-- End of Pic Area -->


<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
