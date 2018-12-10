<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="..\assets\images\favicon.png" type="image/png" />

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

  <!-- ANIMATE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' />

  <!-- CUSTOM CSS -->
  <link rel='stylesheet' href='../styles/style.css' />

  <title>CourseBrothers | One Stop Destination for Learning</title>
</head>
<body>
  
  
  <!-- MAIN_CONTAINER -->
  <div class="main-container">


    <!-- NAVBAR_SCROLL -->
    <nav class="navbar--scroll">
      <div class="navbar--scroll__container">
        <div class="navbar--scroll__logo">
          <a href='..\index.php'><img src='..\assets\svg\cb-logo.svg' /></a>
        </div>
        <div class="navbar--scroll__menu">
          <ul>
            <li>HOME</li>
            <li>COURSES</li>
            <li>CONTACT</li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /NAVBAR_SCROLL -->


    <!-- SEARCH_BAR -->
    <div class="search_bar">
      <form>
        <input type='text' placeholder='SEARCH FOR COURSES                MBA, BBA etc..' />
        <button>SEARCH</button>
      </form>
    </div>
    <!-- /SEARCH_BAR -->



    <!-- COURSE_DETAIL -->
    <div class="course_detail">

      <!-- COURSE_DETAIL_HEADER -->
      <div class="course_detail__header">
        <div class='detail__skew'></div>
        <div class="detail__info">
          <div class="detail__info__head">
            <h2>MBA IN SUPPLY CHAIN</h2>
            <h5>ASSAM DOWNTOWN UNIVERSITY</h5>
          </div>
          <div class="detail__info__appendix">
            <h4>2 YEARS</h4>
            <h5>ONLINE LEARNING</h5>
          </div>
        </div>
        <div class="detail__img">
          <img src='../assets/images/institute_img/assam.jpg' />
        </div>
      </div>
      <!-- /COURSE_DETAIL_HEADER -->

      <!-- COURSE_DETAIL_BODY -->
      <div class="course_detail__body">

        <div class="course_detail__body__nav">
          <ul>
            <li>OVERVIEW</li>
            <li>STRUCTURE</li>
            <li>FEE</li>
            <li>ELIGIBILITY</li>
          </ul>
          <button>APPLY NOW</button>
        </div>
        <div class="course_detail__body__main">
          <div class="main_content">
            <h3 class='main_content__title'>COURSE OVERVIEW</h3>
            <p class='main_content__body'>
              MBA in supply chain management, gives students a customized, industry-centered system
              which cooperates with organizations known for store network brilliance. We give understudies
              an excellent interdisciplinary instruction that expands on basic information and joins the most
              recent in inventory network considering. The vital, cross-useful educational modules takes a
              coordinated business process perspective of supply chains, including showcasing, sourcing,
              logistics, operations, and client administration. Understudies associate with and gain from true
              inventory network pioneers and are a piece of a solid, affectionate group.
            </p>
          </div>
          <div class="lead_form">
            <div class="lead_form__header"><h5>TALK TO AN EXPERT COUNSELLOR FOR FREE</h5></div>
            <form>
              <input type="text" placeholder='NAME' />
              <input type="email" placeholder='EMAIL ADDRESS' />
              <input type="text" placeholder='PHONE' />
              <input type="text" placeholder='COURSE' />
              <input type="submit" value='ENQUIRE' />
            </form>
          </div>
        </div>

      </div>
      <!-- /COURSE_DETAIL_BODY -->


      <!-- RELATED_COURSES -->
      <div class="related_courses">

      </div>
      <!-- /RELATED_COURSES -->

    </div>
    <!-- /COURSE_DETAIL -->

    <!-- FOOTER -->
    <?php include '../includes/footer.php' ?>
    <!-- /FOOTER -->



  </div>
  <!-- /MAIN_CONTAINER -->


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
  <!-- WOW JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
  <!-- CUSTOM JS -->
  <script src='../js/courseDetail.js'></script>

</body>
</html>