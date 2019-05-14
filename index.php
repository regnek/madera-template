<!DOCTYPE html>
<html lang="en">

  <?php
    $title = 'Clear Fork Trail Apartment Homes';
    $description = 'Example description';
    include 'php-modules/head.php';
  ?>

  <body class="cp1 elegant">

    <?php include 'php-modules/navigation.php' ?>

    <style>
      .modifier {
        width: 600px;
        left: calc(50% - 300px);
        position: fixed;
        top: 90px;
        background: #fff;
        z-index: 9999;
        padding: 3rem;
        border-radius: .25rem;
        height: 80vh;
        overflow: auto;
        display: none;
      }

      .modifier.open {
        display: block;
      }

      .modifier .palette {
        display: inline-block;
        margin-right: 1rem;
        border-radius: .25rem;
        padding: .25rem .25rem 0;
      }

      .modifier .palette.selected {
        background: #f4f7ff;
        border: 1px solid #f0f4ff;
      }

      .modifier .palette .dark,
      .modifier .palette .light {
        width: 20px;
        height: 20px;
        display: inline-block;
        margin: 0;
      }

      .modifier .palette.cp1 .dark {
        background: #1F1C29;
      }
      .modifier .palette.cp1 .light {
        background: #C3B193;
      }

      .modifier .palette.cp2 .dark {
        background: #272d2d;
      }
      .modifier .palette.cp2 .light {
        background: #9AC2C5;
      }

      .modifier .palette.cp3 .dark {
        background: #182C26;
      }
      .modifier .palette.cp3 .light {
        background: #a8bcc2;
      }

      .modifier .palette.cp4 .dark {
        background: #0E1428;
      }
      .modifier .palette.cp4 .light {
        background: #A5D8FF;
      }

      .modifier .palette.cp5 .dark {
        background: #36393B;
      }
      .modifier .palette.cp5 .light {
        background: #A68BA5;
      }

      .modifier .palette.cp6 .dark {
        background: #093824;
      }
      .modifier .palette.cp6 .light {
        background: #ddfff7;
      }

      .modifier .row {
        margin: 3rem 0;
      }

      .modifier .h4 {
        font-size: 1.25rem;
        text-decoration: underline;
      }

      .modifier button {
        background: royalblue;
        color: #fff;
        padding: 1rem;
        border: 0;
        text-transform: uppercase;
        letter-spacing: .125rem;
        display: block;
        width: 100%;
      }

      @media (max-width: 768px) {
        .modifier {
          width: 90%;
          left: 5%;
        }

        .modifier .row {
          margin: 0;
        }

        .modifier .h3 {
          margin-top: 5rem !important;
        }

        .modifier > .h3:first-of-type {
          margin-top: 0 !important;
        }

        .modifier .col-2 {
          margin-top: 2rem;
        }
      }
    </style>
    <div class="modifier">
      <p class="h3">Theme</p>
      <div class="row">
        <div class="col-2">
          <p class="h4">Colors</p>
          <div class="palette cp1 selected" data-palette="cp1">
            <div class="dark"></div>
            <div class="light"></div>
          </div>
          <div class="palette cp2" data-palette="cp2">
            <div class="dark"></div>
            <div class="light"></div>
          </div>
          <div class="palette cp3" data-palette="cp3">
            <div class="dark"></div>
            <div class="light"></div>
          </div>
          <div class="palette cp4" data-palette="cp4">
            <div class="dark"></div>
            <div class="light"></div>
          </div>
          <div class="palette cp5" data-palette="cp5">
            <div class="dark"></div>
            <div class="light"></div>
          </div>
          <div class="palette cp6" data-palette="cp6">
            <div class="dark"></div>
            <div class="light"></div>
          </div>
        </div>
        <div class="col-2">
          <p class="h4">Font style</p>
          <input type="radio" name="font" class="font-radio" value="modern"> Modern
          <input type="radio" name="font" class="font-radio" value="elegant" checked="checked"> Elegant
        </div>
      </div>

      <p class="h3">Carousel</p>
      <div class="row">
        <div class="col-2">
          <p class="h4">Type</p>
          <input type="radio" name="slider-type" class="slider-type" value="true" checked="checked"> Fading
          <input type="radio" name="slider-type" class="slider-type" value="false"> Sliding
        </div>
        <div class="col-2">
        <p class="h4">Content</p>
          <input type="radio" name="slider-content" class="slider-content" value="static"> Single
          <input type="radio" name="slider-content" class="slider-content" value="true" checked="checked"> Multiple
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <p class="h4">Arrows</p>
          <input type="radio" name="slider-arrows" class="slider-arrows" value="true"> On
          <input type="radio" name="slider-arrows" class="slider-arrows" value="false" checked="checked"> Off
        </div>
        <div class="col-2">
        <p class="h4">Navigation dots</p>
          <input type="radio" name="slider-dots" class="slider-dots" value="true" checked="checked"> On
          <input type="radio" name="slider-dots" class="slider-dots" value="false"> Off
        </div>
      </div>
      <div class="row">
        <div class="col-1">
          <p class="h4">Auto Timer</p>
          <input type="radio" name="slider-timer" class="slider-timer" value="true" checked="checked"> On
          <input type="text" class="slider-timer-amount" placeholder="6"> seconds &nbsp; &nbsp;
          <input type="radio" name="slider-timer" class="slider-timer" value="false"> Off
        </div>
      </div>

      <div class="row">
        <div class="col-1">
          <p class="h3">Images</p>
          <input type="radio" name="images" class="image-radio" value="" checked="checked"> Images
          <input type="radio" name="images" class="image-radio" value="no-img"> No Images
        </div>
      </div>

      <div class="row">
        <div class="col-1">
          <p class="h3">Intro headline</p>
          <input type="text" name="first-word" class="first-word" placeholder="Elegance">
          <span>&amp;</span>
          <input type="text" name="second-word" class="second-word" placeholder="Style">
        </div>
      </div>

      <button>Submit</button>
    </div>






    <!-- header containing nav and hero (with slider) -->
    <header class="header">
      <div class="hero">
        <div class="slider-container">
          <div class="slider homepage-slider">
            <div class="arrow arrow--left" data-direction="-1">
              <i class="fa fa-angle-left"></i>
            </div>
            <div class="arrow arrow--right" data-direction="1">
              <i class="fa fa-angle-right"></i>
            </div>
            <div class="content-container">
              <div class="slider-content active-content parallax" data-slide="1">
                <h1 class="h1">Up To 3 Months Free</h1>
                <p class="sub-headline">Call for details on this special offer</p>
                <div class="ctas">
                  <a href="" class="button">Schedule a Tour</a>
                  <a href="" class="button"><i class="fa fa-play"></i> &nbsp; Watch Video</a>
                </div>
              </div>
              <div class="slider-content parallax" data-slide="2">
                <h1 class="h1">Beautiful Amenities</h1>
                <p class="sub-headline">Click below to see what we offer</p>
                <div class="ctas">
                  <a href="" class="button">See Amenities</a>
                </div>
              </div>
              <div class="slider-content parallax" data-slide="3">
                <h1 class="h1">Some other thing</h1>
                <p class="sub-headline">With another subhealdine</p>
                <div class="ctas">
                  <a href="" class="button">And another button</a>
                </div>
              </div>
            </div>
            <div class="slider-navigation parallax"></div>
            <div class="hero-overlay"></div>
            <div class="slides">
              <div class="slide slide-1 active-slide" data-slide="1" style="background-image: url('img/homepage_hero-slide1.jpg')"></div>
              <div class="slide slide-2" data-slide="2" style="background-image: url('img/homepage_hero-slide2.jpg')"></div>
              <div class="slide slide-3" data-slide="3" style="background-image: url('img/homepage_hero-slide3.jpg')"></div>
            </div>
          </div>
        </div>
        <div class="scroll-down">
          <p>scroll down</p>
          <p class="fa fa-angle-down"></p>
          <p class="fa fa-angle-down"></p>
          <p class="fa fa-angle-down"></p>
        </div>
      </div>
    </header>

    <!-- intro section -->
    <section class="section intro">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <!-- info box -->
            <div class="intro-info parallax">
              <p>We’ve developed floor plans with your best interest at heart. Whether you prefer a private patio or balcony, wood burning fireplaces, large living areas, or spending your free time at the swimming pool, your preferences come standard at Clear Fork Trail.</p>
              <p>Pair that with a location that makes all of Fort Worth accessible and you’ve found your next home.</p>
            </div>
            <!-- "elegance and style" -->
            <div class="fancy-type parallax">
              <p class="first-word">Elegance</p>
              <p class="emphasis">&amp;</p>
              <p class="second-word">Style</p>
            </div>
          </div>
          <div class="col-2">
            <div class="row">
              <div class="column">
                <div class="angle-img angle-img1"></div>
              </div>
              <div class="column">
                <div class="view-floor-plans">
                  <a href="">View Floor Plans</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="column">
                <div class="angle-img angle-img2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- thumbnails -->
    <section class="section thumbnails">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="thumbnail thumbnail-1" data-trigger="interior-gallery"></div>
          </div>
          <div class="col-3">
            <div class="thumbnail thumbnail-2" data-trigger="interior-gallery"></div>
          </div>
          <div class="col-3">
            <div class="thumbnail thumbnail-3" data-trigger="interior-gallery"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- asmartment -->
    <section class="section asmartment">
      <div class="container">
        <div class="asmartment-img">
          <img src="img/asmartment-logo.png" alt="Asmartment">
        </div>
        <div class="asmartment-info parallax">
          <h2 class="h3">What is Asmartment?</h2>
          <p>Wouldn’t it be great if your apartment offered things like discounted TV and high-speed internet, simple payment options, and even a 30-day satisfaction guarantee?</p>
          <p>We thought so too. At Madera Residential, we believe that where you live can change how you live. That’s why we designed Asmartment — a huge collection of services and benefits to make our residents’ lives easier.</p>
          <a class="read-link">Keep Reading <span class="right-arrow"></span></a>
        </div>
      </div>
    </section>

    <!-- photo gallery launchpad -->
    <?php include 'php-modules/photo-gallery-launchpad.php' ?>

    <!-- footer -->
    <?php include 'php-modules/footer.php' ?>