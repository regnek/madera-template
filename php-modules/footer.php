<footer class="footer <?php echo ($schedule_page == true) ? 'schedule-page' : '' ?>">
  <div class="container">
    <div class="contact">
      <div class="row">
        <div class="col-2">
          <h2 class="h3">
            <?php
              if ($schedule_page == true) {
                echo 'Schedule a Tour';
              } else {
                echo 'Want to Know More?';
              }
            ?>
          </h2>
          <p>
            <?php
              if ($schedule_page != true) {
                echo 'One of our staff would love to tell you more about our amazing property. Please fill out the form below and we will contact you soon. You can also call us at <b class="phone-number">817-377-4442</b>.';
              }
            ?>
          </p>
          <form class="contact_form">
            <div class="row">
              <div class="form-field">
                <label for="name" class="label-for-name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
              </div>
              <div class="form-field">
                <label for="email" class="label-for-email">Email</label>
                <input type="email" id="email" name="email" placeholder="name@email.com">
              </div>
            </div>
            <div class="row">
              <div class="form-field">
                <label for="phone" class="label-for-phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="(888) 555-5555">
              </div>
              <div class="form-field">
                <label for="best-time" class="label-for-best-time">Best time to contact you</label>
                <input type="text" id="best-time" name="best-time" placeholder="2:30pm - 4:00pm">
              </div>
            </div>
            <div class="row">
              <div class="form-field">
                <label for="message" class="label-for-message">What can we do for you?</label>
                <textarea id="message" name="message"></textarea>
              </div>
            </div>
            <button class="button">Submit</button>
          </form>
        </div>
        <div class="col-2">
          <h2 class="h3">Hours &amp; Location</h2>
          <div class="row">
            <div class="col-2">
              <div class="location">
                <h4 class="h4">Clear Fork Trail</h4>
                <p>5707 Bellair Drive South<br>Benbrook, TX 76109</p>
              </div>
            </div>
            <div class="col-2">
              <div class="office-hours">
                <h4 class="h4">Office Hours</h4>
                <p>Monday – Friday: 8:30am – 5:30pm</p>
                <p>Saturday: 10:00am – 5:00pm</p>
                <p>Sunday: Closed</p>
              </div>
            </div>
          </div>
          <div class="footer_contact-info">
            <p><i class="fa fa-phone"></i><b>972-240-0170</b></p>
            <p><i class="fa fa-envelope"></i><b>clearforktrail@maderaresidential.com</b></p>
          </div>
        </div>
      </div>
    </div>
    <div class="map">
      <iframe></iframe>
    </div>
  </div>

  <div class="bottom-links">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="img/madera-logo.png" alt="Madera Residential">
          <img src="img/eho-logo.png" alt="EHO">
          <img src="img/asmartment-logo-footer.png" alt="Asmartment">
          <img src="img/30-day-logo.png" alt="30-day guarantee">
        </div>
        <div class="col-2">
          <p>Copyright &copy; 2019 | <a href="">Privacy Policy</a> | Park at Spring Creek Apartments</p>
          <p>Crafted with care by <a href="https://primitivesocial.com" target="_blank">Primitive Social</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="js/slider.js?<?php echo date('Y-m-d H:i:s') ?>"></script>
<script src="js/app.js?<?php echo date('Y-m-d H:i:s') ?>"></script>

</body>
</html>