<?php

?>
<!-- Links for CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/current.css">
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">

<?php include '../view/header.php'; ?>

<!-- wrapper that will wrap all of the code on the page -->
<div id='wrapper'>

  <!-- Header Code -->
  <header class='title_banner'>
    <div class='title_banner_div'>
      <h1 class='font'>Hi! I'm Mike Cuddy</h1>
      <hr>
      <h3 class='font'>Full Stack Web Artisan / Data Lover</h3>
    </div>
  </header>

  <!-- Main Section Code -->
  <main>

    <!-- About Me Section Code -->
    <section class='about_section'>

      <div class='about_one'>
        <img alt='image of Mike Cuddy' src="../assets/images/Cuddy.JPG">
      </div>
      <div class='about_two'>
        <h3 class='center about_heading font'>The Current Me</h3>
        <p class='about_paragraph font'>
          Here you'll see a lot of my projects that I've built over the
          years on Github. Sometime, around three or four years ago, I got the idea
          that after every project I built, I'd make a YouTube Video of it and
          put the link to that video in the readme page on github. Here, I've
          collected a lot of those links and brought them into this page. I truly
          believe that as you look at the projects, the most recent are first, that you'll
          see a lot of growth over time. You'll also see that a large portion of
          my projects are focused on data projects. Finally, at the bottom of this page,
          I've included all my Treehouse Badges that I've earned. A long time ago,
          that was one of the first API's that I worked with in a real project!
          I hope you enjoy seeing my work!
        </p>
      </div>
    </section>
    <!-- End of About me section -->

    <hr>

    <!-- Current Work Section Code -->
    <div class='currentWorkSection'>

      <?php foreach ($projects as $project): ?>
      <div class='sub_section_one'>

          <div>
            <iframe width="250" height="141" src="<?php echo $project->getVideoLink(); ?>" frameborder="0" allowfullscreen></iframe>
          </div>

          <div>
              <h3 class='center font'><?php echo $project->getTitle(); ?></h3>
              <a href="<?php echo $project->getGitHubURL(); ?>" class='center font'>Project on Github</a>
          </div>
      </div>
      <?php endforeach; ?>

    </div>
    <!-- End of Current Work Section Code -->

    <hr>

    <section class='noticeArea'>
      <h5 class='center font'>Badges do not display on a mobile device</h5>
    </section>

    <section class='treehouse_badges'>
      <h1 class='center font'>Treehouse Badges</h1>
      <div id='badge_main_container'>
      </div>
    </section>

  </main>

</div>

<script type="text/javascript" src='../assets/scripts/index.js'></script>
<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
