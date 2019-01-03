<?php 
  ob_start();
  session_start();
  include 'header.php';
?>
  <div id="Mail-Heading-Text" data-scrollax="properties : {'translateY': '20%', 'opacity': '1.5'}">
    <div class="container">
      <div class="row pt-5 mt-5">
        <div class="col-sm-12 col-md-12 mt-md-5 mt-sm-5 text-white mx-auto">
          <div class="row justify-content-center wow zoomInDown">
            <h6 class="h6-responsive">Home &gt; Get in touch</h1>
          </div>
          <div class="row mb-5 justify-content-center wow zoomInDown">
            <h1 class="h1-responsive">
              <span class="Header-Text-Style">Mail Us</span>
            </h1>
          </div>
        </div>
      </div> 
      <div class="row justify-content-center wow fadeInUpBig">
        <div class="about-us-get-in-touch">	
          <a class="btn btn-outline-white btn-lg" href="#Mail">
            <i class="arrow-bounce fa fa-arrow-down"></i>
          </a>
        </div> 
      </div>
    </div>
  </div>
</header>
	
<section class="pt-5 pb-5" id="Mail">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <h2 class="h2-resposnsive">Contact Us</h2>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-5"> 
        <form class="" action="mail-action.php" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="Sender_Name" placeholder="Your Name" autocomplete="off" 
            value="<?php 
            if (isset($_POST['Sender_Name'])) {
                echo $_POST['Sender_Name'];
            } ?>">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="Sender_Email" placeholder="Your Email" autocomplete="off" 
            value="<?php 
            if (isset($_POST['Sender_Email'])) {
                echo $_POST['Sender_Email'];
            } ?>">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="Sender_Subject" placeholder="Subject" autocomplete="off" 
            value="<?php 
            if (isset($_POST['Sender_Subject'])) {
                echo $_POST['Sender_Subject'];
            } ?>">
          </div>
          <div class="form-group">
            <textarea class="form-control" type="text" name="Sender_Message" placeholder="Message"
            value="<?php 
            if (isset($_POST['Sender_Message'])) {
                echo $_POST['Sender_Message'];
            } ?>"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-outline-dark" type="submit" name="Sender_Send">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
  

  <?php
    include 'footer.php';
  ?>