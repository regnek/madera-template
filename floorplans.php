<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Floorplans | Clear Fork Trail Apartment Homes';
    $description = 'Example description';
    include 'php-modules/head.php';
  ?>

  <body class="cp1 elegant internal floorplans-page">

    <?php include 'php-modules/navigation.php' ?>

    <header class="header">
      <div class="hero">
        <div class="internal-hero-img parallax"></div>
        <h1 class="h1"><span class="number-of-floorplans">3</span> Floorplans</h1>
        <p class="sub-headline">To suit your needs</p>
      </div>
    </header>

    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-2">
           <img src="img/floorplans-intro-img.jpg" alt="Image of beautiful apartment interior">
          </div>
          
          <div class="col-2 bordered parallax">
            <p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur.</p>
          </div>
        </div>
      </div>

      <div class="floorplans">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="floorplan">
              <div class="floorplan_info">
                <span class="floorplan_number">A1</span>
                <div class="floorplan_size">
                  <p class="floorplan_rooms">
                    <span class="number-of-bedrooms">1</span> bed |
                    <span class="number-of-bathrooms">1</span> bath
                  </p>
                  <p class="floorplan_dimensions">
                    <span class="square-feet">650</span> sq. ft.
                  </p>
                </div>
              </div>
              <img class="floorplan_image" src="img/floorplans-floorplan1.jpg" alt="A1 floorplan">
              <div class="floorplan_pricing">
                <p>Starting at</p>
                <p class="floorplan_price">$<span class="price">750</span>/<span class="month">mo</span></p>
              </div>
            </div>
          </div>
          <div class="col-3">
          <div class="floorplan">
              <div class="floorplan_info">
                <span class="floorplan_number">A2</span>
                <div class="floorplan_size">
                  <p class="floorplan_rooms">
                    <span class="number-of-bedrooms">1</span> bed |
                    <span class="number-of-bathrooms">1</span> bath
                  </p>
                  <p class="floorplan_dimensions">
                    <span class="square-feet">791</span> sq. ft.
                  </p>
                </div>
              </div>
              <p class="floorplan_limited">Only <span class="number-of-units">3</span> units available</p>
              <img class="floorplan_image" src="img/floorplans-floorplan2.jpg" alt="A1 floorplan">
              <div class="floorplan_pricing">
                <p>Starting at</p>
                <p class="floorplan_price">$<span class="price">815</span>/<span class="month">mo</span></p>
              </div>
            </div>
          </div>
          <div class="col-3">
          <div class="floorplan">
              <div class="floorplan_info">
                <span class="floorplan_number">B2</span>
                <div class="floorplan_size">
                  <p class="floorplan_rooms">
                    <span class="number-of-bedrooms">2</span> bed |
                    <span class="number-of-bathrooms">1</span> bath
                  </p>
                  <p class="floorplan_dimensions">
                    <span class="square-feet">893</span> sq. ft.
                  </p>
                </div>
              </div>
              <img class="floorplan_image" src="img/floorplans-floorplan3.jpg" alt="A1 floorplan">
              <div class="floorplan_pricing">
                <p>Starting at</p>
                <p class="floorplan_price">$<span class="price">925</span>/<span class="month">mo</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <?php 
      include 'php-modules/photo-gallery-launchpad.php';
      include 'php-modules/footer.php';  
    ?>