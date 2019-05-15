<!DOCTYPE html>
<html lang="en">

<!--  ------------------------Header Section ---------------------------- -->   
<?php include("header.php"); ?> 

<body data-spy="scroll" data-target=".bs-docs-sidebar">

  <!-- Subhead
================================================== -->
  <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Contact Us</h3>
              <p>
                A Support Service for all munnurukapu association members of TEMKA JAC round the clock. Get in touch with us for any queries or clarifications.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="index.html">Home</a><span class="divider">/</span></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <aside>
            <div class="widget">
              <h4>Get in touch with us</h4>
              <ul>
                <li><label><strong>Phone : </strong></label>
                  <p>
                    +91-7032107888, 7032117888, 9989576245
                  </p>
                </li>
                <li><label><strong>Email : </strong></label>
                  <p>
                      <a href="mailto:temkajac01@gmail.com">temkajac01@gmail.com</a>
                  </p>
                </li>
                <li><label><strong>Address : </strong></label>
                  <p>
                    TEMKA JAC, 2nd Floor, Sri Sai Sushma Complex,
                    Nallakunta Main Rd, Chitrapuri Colony, Bagh Lingampalli, Narayanguda, Hyderabad, Telangana 500027
                  </p>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h4>Social network</h4>
              <ul class="social-links">
                <li><a href="#" title="Facebook"><i class="icon-rounded icon-32 icon-facebook"></i></a></li>
                <li><a href="#" title="Google plus"><i class="icon-rounded icon-32 icon-google-plus"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="icon-rounded icon-32 icon-linkedin"></i></a></li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="span8">
          <iframe src="https://maps.google.com/maps?q=Sri%20Sai%20Sushma%20Complex%2C%20Nallakunta%20Main%20Road%2C%20Chitrapuri%20Colony%2C%20Bagh%20Lingampalli%2C%20Narayanguda%2C%20Hyderabad%2C%20Telangana&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

          <div class="spacer30"></div>

          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="span4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

              <div class="span4 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" type="submit">Send message</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

 <!-- Footer  ================================================== -->
<?php include 'footer.php';  ?> 


  <!-- JavaScript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>


</body>

</html>
