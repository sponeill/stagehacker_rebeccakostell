<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Rebecca Kostell</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero" style="font-family: 'Playfair Display', serif;">Rebecca Kostell</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#portfolio">Photos</a></li>
          <li><a href="<cms:show resume/>" target="_blank">Resume</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" style="background: url(<cms:show main_image/>) top center;  width: 100%;
  height: 100vh; background-size: cover; position: relative;">
    <div class="hero-container">
      <!-- <h1>Rebecca Kostell</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started">Get Started</a> -->
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-1 wow fadeInUp" style="margin-top: 5%;">
            <h2 class="title" style="font-family: 'Playfair Display', serif;">Rebecca Kostell</h2>

            <cms:editable name='about_text' label="About Text" type='richtext' group="about_section" order="-45">
            <h5>
              Originally from Cleveland, Ohio, Rebecca graduated from NYU Steinhardt’s Vocal Performance Program with a
              Bachelor of Music in Music Theatre and a minor in the
              Business of Entertainment, Media, and Technology. A trained Irish Dancer, Disney Princess, and avid
              traveler, Rebecca is currently based out of Los Angeles. </h5>
            <h5>Rebecca has worked at such prestigious venues such as Radio City Music Hall, Avery Fischer at Lincoln
              Center, and Yankee Stadium. </h5>
            </cms:editable>

            <hr>

            <!-- TODO: CENTER THIS ROW -->
            <div class="icon-box wow fadeInUp col-lg-12">
              <div class="text-center" style="margin-left: auto; margin-right: auto;">
                <div class="icon"><a href="https://www.facebook.com/rebecca.kostell" target="_blank"><i
                      class="fa fa-facebook"></i></a></div>
                <div class="icon" style="margin-left: 5px;"><a href="https://www.linkedin.com/in/rebecca-kostell"
                    target="_blank"><i class="fa fa-linkedin"></i></a></div>
                <div class="icon" style="margin-left: 5px;"><a href="https://www.youtube.com/user/rkostell"
                    target="_blank"><i class="fa fa-youtube"></i></a></div>
                <div class="icon" style="margin-left: 5px;"><a href="https://www.instagram.com/rebeccakostell/"
                    target="_blank"><i class="fa fa-instagram"></i></a></div>
                <div class="icon" style="margin-left: 5px;"><a href="mailto:rebecca.kostell@gmail.com"
                    target="_blank"><i class="fa fa-envelope"></i></a></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 background order-2 wow fadeInRight" style="background: url(<cms:show about_image/>); width: 100%; background-size: cover;"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      News Section
    ============================-->
    <section id="news">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">News</h3>
          <p class="section-description">What's New?</p>
          <hr>
        </div>
        <!-- NEWS ITEM ONE -->
        <cms:if news_item_1 >
        <div id="news-items">
          <div class="row wow fadeInRight">
            <div class="col-md-4">
              <img src="<cms:show news_item_1_photo/>" width="100%">
            </div>
            <div class="col-md-8" style="padding-top: 3%;">
            <cms:editable name='news_item_1_text' label="News Item 1 Text" type='richtext' group="news_section" order="-30">
              <h4>The Christmas Queen has returned! Rebecca will heading back out on tour this holiday season, reprising
                her role as "Lucy" in the National Tour of A Charlie Brown Christmas. Specific tour stops to be
                announced. For more
                information, click <a href="https://www.acharliebrownchristmaslive.com/" target="_blank">here</a>.</h4>
            </cms:editable>
            </div>
          </div>
          <br>
          </cms:if>
          <!-- NEWS ITEM TWO -->
          <cms:if news_item_2 >
          <hr>
          <div class="row wow fadeInLeft" style="margin-top: 30px;margin-bottom: 30px;">
            <div class="col-md-4">
              <img src="<cms:show news_item_2_photo/>" width="100%">
            </div>
            <cms:editable name='news_item_2_text' label="News Item 2 Text" type='richtext' group="news_section" order="-20">
            <div class="col-md-8" style="padding-top: 3%;">
              <h4>Rebecca will be spreading cheer this holiday season with LA’s premiere caroling company <a
                  href="https://www.tinseltonecarolers.com" target="_blank">Tinseltone Carolers</a>.</h4>
                  </cms:editable>
            </div>
          </div>
          </cms:if>
          <!-- NEWS ITEM THREE -->
          <cms:if news_item_3 >
          <hr>
          <div class="row wow fadeInRight" style="margin-top: 30px;margin-bottom: 30px;">
            <div class="col-md-4">
              <img src="<cms:show news_item_3_photo/>" width="100%">
            </div>
            <div class="col-md-8" style="padding-top: 3%;">
            <cms:editable name='news_item_3_text' label="News Item 3 Text" type='richtext' group="news_section" order="-10">
              <h4>There will always be three news item blocks available for you to use. However, you will have the ability to disable each of 
                them on your admin page, so if you only have 2 pieces of news you will be able to select a checkbox and hide this block until you need it.</h4>
            </cms:editable>
            </div>
          </div>
          </cms:if>
        </div>
      </div>

    </section><!-- #news -->

    <!--==========================
      Services Section
    ============================-->
    <!-- <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-shopping-bag"></i></a></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section>#services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-12 text-center text-center">
            <h3 class="cta-title">"<cms:show review_quote_text/>"</h3>
            <p class="cta-text">-<em><cms:show review_quote_byline/></em></p>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Photos</h3>
          <p class="section-description">Click to expand an image!</p>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-headshot photo-padding">
            <a href="<cms:show photo_1/>>" class="portfolio-image-popup">
              <img src="<cms:show photo_1/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_1_caption/></h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-headshot photo-padding">
            <a href="<cms:show photo_2/>" class="portfolio-image-popup">
              <img src="<cms:show photo_2/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_2_caption/></h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-headshot photo-padding">
            <a href="<cms:show photo_3/>" class="portfolio-image-popup">
              <img src="<cms:show photo_3/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_3_caption/></h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-headshot photo-padding">
            <a href="<cms:show photo_4/>" class="portfolio-image-popup">
              <img src="<cms:show photo_4/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_4_caption/></h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-production photo-padding">
            <a href="<cms:show photo_5/>" class="portfolio-image-popup">
              <img src="<cms:show photo_5/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_5_caption/></h4>
                <!-- <span>Caption</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-production photo-padding">
            <a href="<cms:show photo_6/>" class="portfolio-image-popup">
              <img src="<cms:show photo_6/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_6_caption/></h4>
                <!-- <span>Caption</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-production photo-padding">
            <a href="<cms:show photo_7/>" class="portfolio-image-popup">
              <img src="<cms:show photo_7/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_7_caption/></h4>
                <!-- <span>Caption</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-production photo-padding">
            <a href="<cms:show photo_8/>" class="portfolio-image-popup">
              <img src="<cms:show photo_8/>" alt="" class="portfolio-image">
              <div class="details">
                <h4><cms:show photo_8_caption/></h4>
                <!-- <span>Caption</span> -->
              </div>
            </a>
          </div>
        </div>
      </div>

      <br>

      <div class="col-lg-12 text-center">
        <h3>Click <a href="https://www.youtube.com/user/rkostell" target="_blank">here</a> for performance footage!</h3>
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>#team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact Rebecca</h3>
          <!-- <p class="section-description"></p> -->
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">


          <div class="col-lg-12">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required"
                    data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>

              <div class="social-links col-lg-4 text-center"
                style="margin-left:auto; margin-right: auto; margin-top: 25px;">
                <a href="https://www.facebook.com/rebecca.kostell" target="_blank" class="facebook"><i
                    class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/rebecca-kostell" target="_blank" class="linkedin"><i
                    class="fa fa-linkedin"></i></a>
                <a href="https://www.youtube.com/user/rkostell" target="_blank" class="youtube"><i
                    class="fa fa-youtube"></i></a>
                <a href="https://www.instagram.com/rebeccakostell/" target="_blank" class="instagram"><i
                    class="fa fa-instagram"></i></a>
                <a href="mailto:rebecca.kostell@gmail.com" target="_blank" class=""><i class="fa fa-envelope"></i></a>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <!-- TODO: STAGEHACKER LINK -->
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rebecca Kostell</strong>. All Rights Reserved
      </div>
      <div>
      Built by <a href="https://www.stagehacker.com/" target="_blank">StageHacker</a>. Powered by <a href="https://www.couchcms.com/" target="_blank">Couch CMS</a>.
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- Couch CMS -->
  <div style="display:none" type="hidden">
   
    <!-- Main Image -->
    <cms:editable name='main_image'  label='Main Image' desc="Upload Your Main Image Here" type='image' order='-100' show_preview='1' preview_width='150'/> 

    <!-- About -->
     <cms:editable name='about_section' label='About' desc='Edit the About section' type='group' />
     <cms:editable name='about_image'  label='About Image' desc="Upload Your Bio Image Here" type='image' order='-50' show_preview='1' preview_width='150' group="about_section"/>
     
     <!-- News -->
     <cms:editable name='news_section' label='News' desc='Edit the News section' type='group' />
     <cms:editable type='checkbox' name='news_item_1' label="News Item 1" opt_values='Show News Item 1 = 1' group="news_section" order="-50"/>
     <cms:editable type='checkbox' name='news_item_2' label="News Item 2" opt_values='Show News Item 2 = 1' group="news_section" order="-45"/>
     <cms:editable type='checkbox' name='news_item_3' label="News Item 3" opt_values='Show News Item 3 = 1' group="news_section" order="-40"/>
     <cms:editable name='news_item_1_photo'  label='News Item 1 Photo' desc="Upload the Image for News Item 1" type='image' group="news_section" preview_width="150" order="-35" show_preview='1'/>
     <cms:editable name='news_item_2_photo'  label='News Item 2 Photo' desc="Upload the Image for News Item 2" type='image' group="news_section" preview_width="150" order="-25" show_preview='1'/>
     <cms:editable name='news_item_3_photo'  label='News Item 3 Photo' desc="Upload the Image for News Item 3" type='image' group="news_section" preview_width="150" order="-15" show_preview='1'/>

     <!-- Review Quote -->
     <cms:editable name='review_quote' label='Review Quote' desc='Edit the Review Quote' type='group' />
     <cms:editable name='review_quote_text'  label='Quote Text' desc="Enter the Quote text" type='text' group="review_quote"/>
     <cms:editable name='review_quote_byline'  label='Quote Byline' desc="Enter the Quote Byline" type='text' group="review_quote"/>

     <!-- Photos -->
     <cms:editable name='photo_section' label='Photos' desc='Edit the Photo section' type='group' />
     <cms:editable name='photo_1'  label='Photo 1' desc="Upload Photo 1 Here" type='image' order='-50' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_1_caption'  label='Photo 1 Caption' desc="Enter the Caption for Photo 1" type='text' group="photo_section" order="-45"/>
     <cms:editable name='photo_2'  label='Photo 2' desc="Upload Photo 2 Here" type='image' order='-40' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_2_caption'  label='Photo 2 Caption' desc="Enter the Caption for Photo 2" type='text' group="photo_section" order="-35"/>
     <cms:editable name='photo_3'  label='Photo 3' desc="Upload Photo 3 Here" type='image' order='-30' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_3_caption'  label='Photo 3 Caption' desc="Enter the Caption for Photo 3" type='text' group="photo_section" order="-25"/>
     <cms:editable name='photo_4'  label='Photo 4' desc="Upload Photo 4 Here" type='image' order='-20' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_4_caption'  label='Photo 4 Caption' desc="Enter the Caption for Photo 4" type='text' group="photo_section" order="-15"/>

     <cms:editable name='photo_5'  label='Photo 5' desc="Upload Photo 5 Here" type='image' order='-10' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_5_caption'  label='Photo 5 Caption' desc="Enter the Caption for Photo 5" type='text' group="photo_section" order="-5"/>
     <cms:editable name='photo_6'  label='Photo 6' desc="Upload Photo 6 Here" type='image' order='0' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_6_caption'  label='Photo =6 Caption' desc="Enter the Caption for Photo 6" type='text' group="photo_section" order="5"/>
     <cms:editable name='photo_7'  label='Photo 7' desc="Upload Photo 7 Here" type='image' order='10' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_7_caption'  label='Photo 7 Caption' desc="Enter the Caption for Photo 7" type='text' group="photo_section" order="15"/>
     <cms:editable name='photo_8'  label='Photo 8' desc="Upload Photo 8 Here" type='image' order='20' show_preview='1' preview_width='150' group="photo_section"/>
     <cms:editable name='photo_8_caption'  label='Photo 8 Caption' desc="Enter the Caption for Photo 8" type='text' group="photo_section" order="25"/>


      <!-- Resume -->
      <cms:editable name='resume_section' label='Resume' desc='Upload your Resume' type='group' />
      <cms:editable name='resume' label='Resume' desc="Upload Your Resume Here" type='file' group='resume_section'/>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <script type="text/javascript">

    $(document).ready(function () {
      $('.portfolio-image-popup').magnificPopup({ type: 'image' });
    });

  </script>

</body>

</html>
<?php COUCH::invoke(); ?>