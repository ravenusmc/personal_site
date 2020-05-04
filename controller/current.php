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
      <h1>Hi! I'm Mike Cuddy</h1>
      <hr>
      <h3>Full Stack Web Artisan / Data Lover</h3>
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
        <h3 class='center about_heading'>The Current Me</h3>
        <p class='about_paragraph'>
          On this here page, you see a lot of my projects that I've built over the
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
    <section id='current_work_section'>
      <h1 id='current_work' class='current_work_title center'>Mike Cuddy's Projects</h1>

      <div class='current_top_container'>

        <!-- Row of projects third row -->
          <div class='current_sub_section'>

            <div class='sub_section_one'>
              <?php foreach ($projects as $project): ?>
                <div>
                  <iframe width="250" height="141" src="<?php echo $project->getVideoLink(); ?>" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                    <h3><?php echo $project->getTitle(); ?></h3>
                    <p>Github link: <?php echo $project->getGitHubURL(); ?></p>
                  <?php endforeach; ?>
                </div>
            </div>

            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/3prEmoyck0Y" frameborder="0" allowfullscreen></iframe>
                </div>
                <div>
                  <h3>Murder Study</h3>
                </div>
            </div>

            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/vzkZq-EPM10" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>UFO Study</h3>
                </div>

            </div>
          </div>
          <!-- End of Third Row -->

          <div class='current_sub_section'>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/J5ucQ1v2hxk" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3 >War Data</h3>
                </div>

            </div>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/Wp49tI6zCXc" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>Titanic Project</h3>
                </div>

            </div>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/Z9piHJlSGtE" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>Inventory Project</h3>
                </div>

            </div>
          </div>
          <div class='current_sub_section'>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/d7-XMuwyPXk" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>Angular 4 Space Project</h3>
                </div>

            </div>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/IJjq8jpU2js" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>World Information Data Project</h3>
                </div>

            </div>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/LhmisDsbPXY" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>Terrorism Project With Flask</h3>
                </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section class='noticeArea'>
      <h5 class=' center'>Badges do not display on a mobile device</h5>
    </section>

    <section class='treehouse_badges'>
      <h1 class='center'>Treehouse Badges</h1>
      <div id='badge_main_container'>
      </div>
    </section>

  </main>

</div>

<script type="text/javascript" src='../assets/scripts/index.js'></script>
<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
