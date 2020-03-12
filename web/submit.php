<?php
  session_start();  
  if(!isset($_SESSION['price'])){
    header('location:index');
    exit();
  }
  $title = "Get your website price just in 2 minutes | Playtech";
  require_once "./template/header.php";
?>   
    <div id="getprice"></div>
    <div class="main">
      <div class="container tim-container">
        <div style="padding-top: 90px;">
          <center><h5 class="tim-title">Congratulations! You have Just got Best Price in Industry</h5><h1>Rs. <?php echo $_SESSION['price']; ?>/-</h1></center>
        </div>
        <?php
          if(!$_GET['msg']){
        ?>
        <br>
        <div id="inputs">
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <form name="fomr1" action="./functions/process.php" method="POST">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" required="" name="name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="email"  class="form-control" placeholder="Email" required="" name="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Mobile" name="mob">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Please provide additional information or feature you want to add in your website" required="" name="note" rows="6"></textarea>
                    </div>
                  </div>
                </div> 
                <br>
                <center>
                  
                  <button type="submit" id="data-submitGetQuote" name="contactSubmit" class="cta btn btn-success">Get Quotation</button>

                  <div class="tim-title">Note: Taxation is applicable on given price.<br> Detailed information will be sent on your email.</div>
                </center>
                <div class="space"></div>
              </form>
            </div>
          </div>
        </div>
        <?php
          }
          if($_GET['msg'] == 7822377){
            session_destroy();
        ?>
            <center>
              <h5 class="tim-title">Thank You! You will receive Quotation on your email within 2 hours from PLAYTECH.</h5>
              <a id="data-webVisit" href="https://playtech.in/" class="btn btn-success">Visit Website</a>
              <div class="tim-title">Note: Taxation is applicable on given price.<br> Detailed information will be sent on your email.</div>
            </center>
            <br>
        <?php
          }
        ?>
      </div>
    </div>
<?php
  require_once "./template/footer.php";
?>
    

  