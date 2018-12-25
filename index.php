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

  <!-- RESPONSIVE SLIDES -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.css" />

  <!-- TOOLTIPSTER -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-shadow.min.css' />

  <!-- ANIMATE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' />

  <!-- CUSTOM CSS -->
  <link rel='stylesheet' href='./styles/style.css' />

  <title>CourseBrother.com | One Stop Destination for Learning</title>
</head>
<body>
  
  <!-- MAIN CONTAINER -->
  <div class="main-container">


    <!-- NEWSLETTER_POPUP -->
    <?php include 'includes/newsletter-popup.php'; ?>
    <!-- NEWSLETTER_POPUP -->


    <!-- FIXED_NAVBAR -->
    <!-- <nav class="navbar--fixed">
      <div class="navbar--fixed__container">
        <div class="navbar--fixed__logo">
          <a href='index.php'><img src='assets\svg\cb-logo.svg' /></a>
        </div>
        <div class="navbar--fixed__search">
          <form>
            <input type='text' placeholder='SEARCH FOR COURSES                MBA, BBA etc..' />
            <button>SEARCH</button>
          </form>
        </div>
      </div>
    </nav> -->
    <!-- /FIXED_NAVBAR -->


    <!-- NAVBAR_MAIN -->
    <div class='navbar_main'>

      <div class="navbar_main__appendix">
        <div class="navbar_main__appendix__cart">
          <h5>cart</h5>
          <span><img src="./assets/svg/Icons/white/shopping-cart.svg" /></span>
        </div>
      </div>

      <div class="navbar_main__header">

        <div class='navbar_main__header__container'>

          <div class="navbar_main__header__logo">
            <img src="./assets/svg/cb-logo.svg" />
          </div>

          <div class="navbar_main__header__search">
            <form>
              <input type="text" placeholder='search for courses     eg: mba, bba' />
              <input type="submit" value="LET'S GO!">
            </form>
          </div>

          <div class="navbar_main__header__contact">

            <div class="navbar_main__header__contact__item">
              <h4>+91 7044356122</h4>
              <span><img src="./assets/svg/Icons/white/phone-book.svg" /></span>
            </div>

            <div class="navbar_main__header__contact__item">
              <h4>shyam.d@gmail.com</h4>
              <span class='tooltip' title='Click to open in your default email application'>
                <a href='mailto:shyam.d@gmail.com'><img src="./assets/svg/Icons/white/mail-black-envelope-symbol.svg" /></a>
              </span>
            </div>

          </div>

        </div>

      </div>

      <div class="navbar_main__courses">
        <div class="navbar_main__courses__container">

          <div class="navbar_main__courses__item">
            <h3>all colleges</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>pg courses</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>ug courses</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>diploma</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>certificate</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>
          

        </div>
      </div>

    </div>
    <!-- /NAVBAR_MAIN -->


    <!-- HEADER -->
    <div class="header">

      <div class="header__overlay">
        <div class="header__overlay__icons">

          <div class="header__overlay__icons__item">
            <h5>credible institutes</h5>
            <span class='tooltip' title='For formal education courses, check the status of the listed universities on the UGC DEB website. https://www.ugc.ac.in/deb/'>
              <img src="./assets/svg/Icons/white/apartments.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>transparent information</h5>
            <span class='tooltip' title='CourseBrother.com is not a study center and has no role in admission decisions, 
              examinations and / or awarding any degree or diploma'>
              <img src="./assets/svg/Icons/white/information.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>genuine fee</h5>
            <span class='tooltip' title='CourseBrother.com charges no extra fee. No discount is offered by the course provider of any of the courses listed'>
              <img src="./assets/svg/Icons/white/give-money.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>counselling support</h5>
            <span class='tooltip' title='Get expert and dedicated counselling support to make an informed education decision'>
              <img src="./assets/svg/Icons/white/phone-receiver.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>study material</h5>
            <span class='tooltip' title='Study material is provided by the respective course providers'>
              <img src="./assets/svg/Icons/white/books-stack-of-three.svg" />
            </span>
          </div>

        </div>
      </div>

      <div class="header__carousel">
        <div class="header__carousel__container">
          <div class="header__carousel__buttons">
            <i class="fa fa-angle-left"></i>
            <i class="fa fa-angle-right"></i>
          </div>
          <div class="siema">

            <div style='background-image: url("./assets/images/about-bg.jpg")'></div>
            <div style='background-image: url("./assets/images/about-founder-bg.jpg")'></div>
            <div style='background-image: url("./assets/images/contact-bg.jpg")'></div>
            <div style='background-image: url("./assets/images/about-founder-bg.jpg")'></div>

          </div>
        </div>
      </div>

    </div>
    <!-- /HEADER -->


    <!-- UNIVERSITIES_COLLEGES -->
    <div class="uni_and_col">

      <div class="uni_and_col__title">trusted by 10+ universities & colleges</div>
        
      <ul class="rslides">
        <li>
          <img src="./assets/images/universities_institute_img/aims1.jpg" />
          <img src="./assets/images/universities_institute_img/iamai3.png" />
          <img src="./assets/images/universities_institute_img/InternShala2.png" />
          <img src="./assets/images/universities_institute_img/NMIMS.png" />
          <img src="./assets/images/universities_institute_img/whizlabs2.png" />
        </li>
        <li>
          <img src="./assets/images/universities_institute_img/toppr2.jpg" />
          <img src="./assets/images/universities_institute_img/whizlabs2.png" />
          <img src="./assets/images/universities_institute_img/Norwich1.png" />
          <img src="./assets/images/universities_institute_img/aims1.jpg" />
          <img src="./assets/images/universities_institute_img/iamai3.png" />
        </li>
      </ul>

    </div>
    <!-- /UNIVERSITIES_COLLEGES -->


    <!-- FEATURED_COURSES -->
    <div class="featured_courses">
      
      <h1 class='featured_courses__title wow fadeIn'>FEATURED COURSES</h1>

      <div class="featured_courses__container">

        <div class="featured_courses__list wow fadeInLeft">
          <ul>
            <li>PGD MBA</li>
            <li>PG COURSES</li>
            <li>UG COURSES</li>
            <li>DIPLOMA</li>
          <ul>
        </div>

        <div class="featured_courses__carousel wow fadeInRight">
          <div class="carousel__button">
            <i class="fa fa-angle-left"></i>
            <i class="fa fa-angle-right"></i>
          </div>

          <div class="carousel__container siema">
            
            <a target='_blank' href="./pages/course-detail.php">
              <div class="carousel__item">
                <h3 class='carousel__item__uni'>UNIVERSITY OF PETROLEUM AND ENERGY STUDIES</h3>
                <div class="carousel__item__sep"></div>
                <h4 class='carousel__item__name'>MBA in supply chain</h4>
                <div class="carousel__item__info">
                  <h4 class='item__price'>Rs 35, 000</h4>
                  <h4 class='item__duration'>2 YEARS</h4>
                </div>
              </div>
            </a>
            
            <div class="carousel__item">
              <h3 class='carousel__item__uni'>UNIVERSITY OF PEWDS</h3>
              <div class="carousel__item__sep"></div>
              <h4 class='carousel__item__name'>MBA in supply chain</h4>
              <div class="carousel__item__info">
                <h4 class='item__price'>Rs 35, 000</h4>
                <h4 class='item__duration'>2 YEARS</h4>
              </div>
            </div>

            <div class="carousel__item">
              <h3 class='carousel__item__uni'>UNIVERSITY OF PEWDS</h3>
              <div class="carousel__item__sep"></div>
              <h4 class='carousel__item__name'>MBA in supply chain</h4>
              <div class="carousel__item__info">
                <h4 class='item__price'>Rs 35, 000</h4>
                <h4 class='item__duration'>2 YEARS</h4>
              </div>
            </div>

            <div class="carousel__item">
              <h3 class='carousel__item__uni'>UNIVERSITY OF PEWDS</h3>
              <div class="carousel__item__sep"></div>
              <h4 class='carousel__item__name'>MBA in supply chain</h4>
              <div class="carousel__item__info">
                <h4 class='item__price'>Rs 35, 000</h4>
                <h4 class='item__duration'>2 YEARS</h4>
              </div>
            </div>

            <div class="carousel__item">
              <h3 class='carousel__item__uni'>UNIVERSITY OF PEWDS</h3>
              <div class="carousel__item__sep"></div>
              <h4 class='carousel__item__name'>MBA in supply chain</h4>
              <div class="carousel__item__info">
                <h4 class='item__price'>Rs 35, 000</h4>
                <h4 class='item__duration'>2 YEARS</h4>
              </div>
            </div>
            
          </div>

        </div>
      </div>

    </div>
    <!-- /FEATURED_COURSES -->


    <!-- FEATURES -->
    <div class="site_features">
      <h1 class='site_features__title wow fadeIn'>OUR FEATURES</h1>
      <h3 class='site_features__subtitle'><span>CourseBrothers.com</span> is your one-stop destination for course exploration & making an informed education decision</h3>
      <div class="site_features__container">

        <div class="site_features__section wow fadeIn">
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/library.svg' /></span></div>
          <div class="section_text">
            <h3>COURSES FOR EVERYONE</h3>
            <p>A student can make an informed career decision by choosing from a bouquet of degree, diploma & certificate courses.</p>
          </div>
        </div>
        <div class="site_features__section wow fadeIn" data-wow-delay='0.2s'>
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/online.svg' /></span></div>
          <div class="section_text">
            <h3>TOP COURSES BY PROVIDERS</h3>
            <p>A student gets access to more than 100 Indian & International course providers, who offer high quality, credible and industry acceptable education.</p>
          </div>
        </div>
        <div class="site_features__section wow fadeIn" data-wow-delay='0.4s'>
          <div class="section_icon"><span><img src='./assets/svg/Icons/white/group.svg' /></span></div>
          <div class="section_text">
            <h3>STRONG STUDENT COMMUNITY</h3>
            <p>We have a strong network of students across geographies. Be a part of this ever-growing student base and benefit from diverse experience and knowledge.</p>
          </div>
        </div>
        <div class="site_features__section wow fadeIn" data-wow-delay='0.6s'>
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
      <h1 class='top_courses__title wow fadeIn'>TOP COURSES</h1>
      <div class="top_courses__container wow fadeInLeftBig">

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
    <?php include 'includes/footer.php' ?>
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
  <!-- RESPONSIVE SLIDES -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js'>
  </script>
  <!-- SIEMA CAROUSEL -->
  <script 
    src='https://cdn.jsdelivr.net/npm/siema@1.5.1/dist/siema.min.js'>
  </script>
  <!-- WOW JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
  <!-- CUSTOM JS -->
  <script src='./js/custom.js'></script>

</body>
</html>