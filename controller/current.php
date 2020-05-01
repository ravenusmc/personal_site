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
        <h3 class='center about_heading'>Who I am</h3>
        <p class='about_paragraph'>
          In a past life, I was an intelligence officer and before that an officer
           in the Marine Corps. I spent most of the 2000's, after college, on
           deployments to the Middle East. However, before all that, in the late
           90's, when I was in high school, I loved technology. I was part of
           the U.S. FIRST Robotics team. My friends and I were known as the
           nerds of our high school class. I would spend my Friday evenings not
           partying or hanging out at a friends house. Instead, I checked out
           documentaries on physics from David Goodstein who teaches at CalTech.
           In my Senior of high school I started to do some programming and made
           a basic text based adventure. The screen changed color at certain times
           and I even had the computer beeping at specific moments! However, when
           I went to the University of California at Davis, I became a History and
           Political Science double major. I figured that I would make a career in
           the Marine Corps and a History degree would serve me well. In late 2013
           I was watching some videos on Khan Academy about history which I loved
           to do. On this particular day, the site mentioned that they had some
           computer programming videos. I decided to check them out and for some
           reason, I clicked on one about Python. I slowly started to learn about
           Python and then in the spring of 2015 took a coding boot camp at
           <a class='tech_talent_anchor' href="https://techtalentsouth.com/">
          Tech Talent South</a>. From there, my knowledge and passion for the art
          has exploded.
        </p>
      </div>
    </section>
    <!-- End of About me section -->

    <hr>

    <!-- Current Work Section Code -->
    <section id='current_work_section'>
      <h1 id='current_work' class='current_work_title center'>Recent Work</h1>

      <div class='current_top_container'>

        <!-- Row of projects third row -->
          <div class='current_sub_section'>
            <div class='sub_section_one'>
                <div>
                  <iframe width="250" height="141" src="https://www.youtube.com/embed/3csvQETVKqA" frameborder="0" allowfullscreen></iframe>
                </div>

                <div>
                  <h3>News App</h3>
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

    <section id='treehouse' class='treehouse_badges'>
      <h1 class='center'>Treehouse Badges</h1>
      <h5 class='smart_phone_notice'>Please note badges do not display on a smart phone</h5>
      <div id='badge_main_container'>
      </div>
    </section>

  </main>

</div>

<script type="text/javascript" src='../assets/scripts/index.js'></script>
<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
