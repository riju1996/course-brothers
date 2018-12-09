<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets\images\favicon.png" type="image/png" />

  <!-- NORMALIZE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">

  <!-- FONTAWESOME -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

  <!-- jQuery Plugins -->

  <!-- TOOLTIPSTER -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-shadow.min.css' />

  <!-- CUSTOM CSS -->
  <link rel='stylesheet' href='./styles/style.css' />

  <title>CourseBrothers | One Stop Destination for Learning</title>
</head>
<body>
  
  <!-- MAIN CONTAINER -->
  <div class="main-container">

    <!-- HEADER -->
    <div class='header'>

      <!-- HEADER_CONTACT -->
      <div class='header__contact'>
        <div class="header__contact__container">
          
          <div class="contact">
            <div class="contact__num">
              <span>
                <img src='assets\svg\Icons\white\phone-book.svg' />
                <span>+91 7044356122</span>
              </span>
            </div>
            <div class="contact__email">
              <span>
                <a class='tooltip' title='Click to open in your default email application' href='mailto:shyam.d@gmail.com'>
                  <img src='assets\svg\Icons\white\mail-black-envelope-symbol.svg' />
                </a>
                <span>shyam.d@gmail.com</span>
              </span>
            </div>
          </div>

          <div class="features">
            <div 
                class="feature tooltip" 
                title='For formal education courses, check the status of the listed universities on the UGC DEB website. https://www.ugc.ac.in/deb/'>
              <span>
                <span class='feature__text'>
                  <span>CREDIBLE</span>
                  <span>INSTITUTES</span>
                </span>
                <img src='assets\svg\Icons\white\apartments.svg' />
              </span>
            </div>
            <div 
              class="feature tooltip" 
              title='CourseBrothers.com is not a study center and has no role in admission decisions, 
                    examinations and / or awarding any degree or diploma.'>
              <span>
                <span class='feature__text'>
                  <span>TRANSPARENT</span>
                  <span>INFORMATION</span>
                </span>
                <img src='assets\svg\Icons\white\information.svg' />
              </span>
            </div>
            <div 
              class="feature tooltip" 
              title='CourseBrothers.com charges no extra fee. No discount is offered by the course provider of any of the courses listed.'>
              <span>
                <span class='feature__text'>
                  <span>GENUINE</span>
                  <span>FEE STRUCTURE</span>
                </span>
                <img src='assets\svg\Icons\white\give-money.svg' />
              </span>
            </div>
            <div 
              class="feature tooltip" 
              title='Get expert and dedicated counselling support to make an informed education decision.'>
              <span>
                <span class='feature__text'>
                  <span>COUNSELLING</span>
                  <span>SUPPORT</span>
                </span>
                <img src='assets\svg\Icons\white\phone-receiver.svg' />
              </span>
            </div>
            <div 
              class="feature tooltip" 
              title='Study material is provided by the respective course providers.'>
              <span>
                <span class='feature__text'>
                  <span>STUDY</span>
                  <span>MATERIAL</span>
                </span>
                <img src='assets\svg\Icons\white\books-stack-of-three.svg' />
              </span>
            </div>
          </div>

        </div>
      </div>
      <!-- /HEADER_CONTACT -->

      <!-- MAIN_HEADER -->
      <div class="header__main">

        <!-- HEADER_CONTAINER -->
        <div class="header__container">

          <div class="header__logo">
            <a href='index.php'><img src='assets\svg\cb-logo.svg' /></a>
          </div>

          <div class="header__content">
            <h1 class='header__title'>Which course are you looking for?</h1>

            <div class="header__form">
              <div class="header__browse">
                <input type='text' placeholder='SEARCH FOR COURSES                              MBA, BBA etc' />
              </div>
              <h1>OR</h1>
              <div class="header__search">
                <input type='text' placeholder='BROWSE ALL CATEGORIES' />
              </div>
              <button class='header__submit'>&nbsp;SEARCH</button>
            </div>

            <div class="header__caret">
              <i class="fa fa-angle-down"></i>
            </div>

          </div>

        </div>
        <!-- /HEADER_CONTAINER -->

      </div>
      <!-- /MAIN_HEADER -->

    </div>
    <!-- /HEADER -->


    <!-- FEATURED_COURSES -->
    <div class="featured_courses">
      
      <h1 class='featured_courses__title'>FEATURED COURSES</h1>

      <div class="featured_courses__container">
        <div class="featured_courses__list">
          <ul>
            <li>PGD MBA</li>
            <li>PG COURSES</li>
            <li>UG COURSES</li>
            <li>DIPLOMA</li>
            <li>CERTIFICATES</li>
          <ul>
        </div>
        <!-- TODO: Add the courses carousel with AJAX -->
      </div>

    </div>
    <!-- /FEATURED_COURSES -->

    
    <!-- INSTITUTIONS_UNIVERSITIES -->
    <div class="ins_uni">

      <h1 class="ins_uni__title">INSTITUTIONS & UNIVERSITIES</h1>
      <div class="ins_uni__gallery">
        <img src="./assets/images/universities_institute_img/aims1.jpg" alt="">
        <img src="./assets/images/universities_institute_img/iamai3.png" alt="">
        <img src="./assets/images/universities_institute_img/InternShala2.png" alt="">
        <img src="./assets/images/universities_institute_img/MeritNation.com_1.png" alt="">
        <img src="./assets/images/universities_institute_img/NMIMS.png" alt="">
        <img src="./assets/images/universities_institute_img/Norwich1.png" alt="">
        <img src="./assets/images/universities_institute_img/whizlabs2.png" alt="">
        <img src="./assets/images/universities_institute_img/Toppr1.png" alt="">
      </div>

    </div>
    <!-- /INSTITUTIONS_UNIVERSITIES -->


    <!-- FEATURES -->
    <div class="site_features">
      <h1 class='site_features__title'>OUR FEATURES</h1>
      <h3 class='site_features__subtitle'><span>CourseBrothers.com</span> is your one-stop destination for course exploration & making an informed education decision</h3>
      <div class="site_features__container">

        <div class="site_features__section">
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/library.svg' /></span></div>
          <div class="section_text">
            <h3>COURSES FOR EVERYONE</h3>
            <p>A student can make an informed career decision by choosing from a bouquet of degree, diploma & certificate courses.</p>
          </div>
        </div>
        <div class="site_features__section">
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/online.svg' /></span></div>
          <div class="section_text">
            <h3>TOP COURSES BY PROVIDERS</h3>
            <p>A student gets access to more than 100 Indian & International course providers, who offer high quality, credible and industry acceptable education.</p>
          </div>
        </div>
        <div class="site_features__section">
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/group.svg' /></span></div>
          <div class="section_text">
            <h3>STRONG STUDENT COMMUNITY</h3>
            <p>We have a strong network of students across geographies. Be a part of this ever-growing student base and benefit from diverse experience and knowledge.</p>
          </div>
        </div>
        <div class="site_features__section">
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/work.svg' /></span></div>
          <div class="section_text">
            <h3>GREAT LEARNING EXPERIENCE</h3>
            <p>A student benefits from additional services like networking opportunities, placement assistance through our Job Portal and expert counselling.</p>
          </div>
        </div>

      </div>
    </div>
    <!-- /FEATURES -->


    <!-- TOP_COURSES -->
    <div class="top_courses">
      <h1 class='top_courses__title'>TOP COURSES</h1>
      <div class="top_courses__container">

        <div class="top_courses__section">
          <div class="section_header">
            <span><img src='./assets/svg/Icons/red/graduate-student-avatar.svg' /></span>
            <h3>GRADUATE & <br> POST-GRADUATE</h3>
          </div>
          <div class="section_links">
            <a href="#">MBA</a>, 
            <a href="#">Executive MBA</a>, 
            <a href="#">MA</a>, 
            <a href="#">MCOM</a>, 
            <a href="#">MCA</a>, 
            <a href="#">MSc</a>, <br>
            <a href="#">LLM</a>, 
            <a href="#">BBA</a>, 
            <a href="#">BA</a>, 
            <a href="#">BCom</a>, 
            <a href="#">BCA</a>, 
            <a href="#">BSc</a>
          </div>
        </div>
        <div class="top_courses__section">
          <div class="section_header">
            <span><img src='./assets/svg/Icons/red/mirror.svg' /></span>
            <h3>SPECIALISATION</h3>
          </div>
          <div class="section_links">
            <a href="#">Information Technology</a>, 
            <a href="#">HR</a>, 
            <a href="#">Marketing</a>, 
            <a href="#">Retail</a>, <br>
            <a href="#">Operations</a>, 
            <a href="#">Aviation</a>, 
            <a href="#">Oil & Gas</a>, 
            <a href="#">Journalism</a>  
          </div>
        </div>
        <div class="top_courses__section">
          <div class="section_header">
            <span><img src='./assets/svg/Icons/red/old-school.svg' /></span>
            <h3>UNIVERSITIES & <br> INSTITUTES</h3>
          </div>
          <div class="section_links">
            <a href="#">NMIMS</a>,
            <a href="#">Annamalai University</a>, <br>
            <a href="#">Bharati Vidyapeeth</a>, 
            <a href="#">UPES</a>, 
            <a href="#">ADTU</a>
          </div>
        </div>
        <div class="top_courses__section">
          <div class="section_header">
            <span><img src='./assets/svg/Icons/red/graduate-diploma.svg' /></span>
            <h3>DIPLOMA & <br> PG DIPLOMA</h3>
          </div>
          <div class="section_links">
            <a href="#">Finance</a>, 
            <a href="#">HR</a>, 
            <a href="#">Banking</a>, 
            <a href="#">Marketing</a>, 
            <a href="#">IT</a>, <br>
            <a href="#">Operations</a>, 
            <a href="#">Supply Chain</a>, 
            <a href="#">Retail</a>, 
          </div>
        </div>

      </div>
    </div>
    <!-- /TOP_COURSES -->


    <!-- FOOTER -->
    <div class="footer">
      <div class="footer__container">

        <div class="footer__get_in_touch">
          <h3>GET IN TOUCH</h3>
          <div class="touch_contact">
            <div class="contact_phone">
              <h4>PHONE</h4>
              <span>+91 7044356122</span>
            </div>
            <div class="contact_email">
              <h4>EMAIL</h4>
              <span>shyam.d@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="footer__quick_links">
          <h3>QUICK LINKS</h3>
          <div class="links">
            <a href="#">HOME</a>
            <a href="#">CONTACT US</a>
            <a href="#">COURSES</a>
            <a href="#">SERVICES</a>
          </div>
        </div>
        <div class="footer__newsletter">
          <h3>SUBSCRIBE TO NEWSLETTER</h3>
          <div class="newsletter_form">
            <form>
              <input type='text' placeholder='YOUR NAME' />
              <br />
              <input type='email' placeholder='YOUR EMAIL' />
              <br />
              <input type='submit' value='SUBSCRIBE' />
            </form>
          </div>
        </div>

      </div>
    </div>
    <!-- /FOOTER -->


  </div>
  <!-- /MAIN CONTAINER -->


  <!-- jQuery -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
  <!-- TweenMax -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <!-- ToolTipster -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js'>
  </script>
  <!-- CUSTOM JS -->
  <script src='./js/custom.js'></script>

</body>
</html>