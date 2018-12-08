<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
                <a href='mailto:shyam.d@gmail.com'>
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
                <input type='text' placeholder='BROWSE ALL CATEGORIES' />
              </div>
              <h1>OR</h1>
              <div class="header__search">
                <input type='text' placeholder='SEARCH FOR COURSES                                MBA, BBA etc' />
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