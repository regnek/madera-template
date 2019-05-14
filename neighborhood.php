<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Neighborhood | Clear Fork Trail Apartment Homes';
    $description = 'Example description';
    include 'php-modules/head.php';
  ?>

  <body class="cp1 elegant internal neighborhood-page">

    <?php include 'php-modules/navigation.php' ?>

    <header class="header">
      <div class="hero">
        <div class="internal-hero-img parallax"></div>
        <h1 class="h1">Neighborhood</h1>
        <p class="sub-headline">Information about <span class="location">Benbrook</span></p>
      </div>
    </header>

    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-2 bordered parallax">
            <h2 class="h3"><span class="location">Benbrook</span>: At a Glance</h2>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur.</p>
          </div>
          
          <div class="col-2">
            <iframe class="map"></iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="section thumbnails neighborhood">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="thumbnail thumbnail-1 neighborhood-thumbnail" data-trigger="neighborhood-gallery"></div>
          </div>
          <div class="col-3">
            <div class="thumbnail thumbnail-2 neighborhood-thumbnail" data-trigger="neighborhood-gallery"></div>
          </div>
          <div class="col-3">
            <div class="thumbnail thumbnail-3 neighborhood-thumbnail" data-trigger="neighborhood-gallery"></div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'php-modules/footer.php' ?>