<?php
  session_start();
  if (!isset($_SESSION['CREATED'])) {
    session_regenerate_id(true);
    $_SESSION['CREATED'] = time();
    $updateData = true;
  } else if (time() - $_SESSION['CREATED'] > 300) {
    session_destroy();
  }  
  $title = "Get your website price just in 2 minutes | Playtech";
  require_once "./template/header.php";
?>  
<?php 
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
}
?>

    <div class="main">
      <div class="container tim-container">       
        <div id="inputs">
          <center><h3 class="tim-title">Get website price just in 2 minutes</h3></center>
          <form name="fomr1" action="./functions/process.php" method="POST">
            <div class="row">
              <div class="col-sm-4">
                <div class="tim-title"><h5>PLEASE SELECT PURPOSE OF YOUR WEBSITE</h5></div>
                  <label class="radio" >
                  <input type="radio" data-toggle="radio" name="purpose"  action="/template/action.php"value="br" required=""><i></i>Bussiness Repsentation</label>
                  <label class="radio">
                  <input type="radio" data-toggle="radio"  name="purpose" value="os"><i></i>Online Selling</label>
                  <label class="radio">
                  <input type="radio" data-toggle="radio"  name="purpose" value="mr"><i></i>Marketing</label> 
                  <label class="radio">
                  <input type="radio" data-toggle="radio"  name="purpose" value="ps"><i></i>Product Showcase</label>
                  <label class="radio">
                  <input type="radio" data-toggle="radio"  name="purpose" value="pr"><i></i>Portfolio</label>
                  
              </div>
              <div class="col-sm-4">
                <div class="tim-title"><h5>WHICH TYPE OF WEBSITE YOU WANT?</h5></div>
                  <label class="radio">
                    <input type="radio" data-toggle="radio" required=""  name="webtype" value="static"><i></i>Static Multi Page
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio"  name="webtype" value="dynamic"><i></i>Dynamic
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio"  name="webtype" value="commerce"><i></i>E-Commerce
                  </label> 
                  <label class="radio">
                    <input type="radio" data-toggle="radio"  name="webtype" value="onepage"><i></i>One Page
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio"  name="webtype" value="landing"><i></i>Landing Page
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio"  name="webtype" value="blog"><i></i>Blog
                  </label>
              </div>
              <div class="col-sm-4">
                <div class="tim-title"><h5>PLEASE SELECT SERVER TYPE:</h5></div>
                  <label class="radio">
                    <input type="radio" data-toggle="radio" required=""  name="server" value="server1"><i></i><b>Dedicated Server: </b><br> 25 GB SSD Storage, 1 GB RAM, 1 TB Bandwidth, 1 CPU (Recommended)
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio"  name="server" value="server2"><i></i><b>Shared Server: </b><br> 1 GB SSD Storage, 50 GB Bandwidth, Shared CPU
                  </label>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-4">
                <div class="tim-title"><h5>DO YOU WANT DOMAIN NAME?</h5></div>
                <label class="radio">
                  <input type="radio" data-toggle="radio" required="" name="domain" value="yes"><i></i>YES
                </label>
               <label class="radio">
                  <input type="radio" data-toggle="radio" name="domain" value="no"><i></i>NO
              </div>
              <div class="col-md-3">
                <div class="tim-title"><h5>DO YOU WANT SSL?</h5></div>
                <label class="radio">
                  <input type="radio" data-toggle="radio" required="" name="ssl" value="yes"><i></i>YES
                </label>
               <label class="radio">
                  <input type="radio" data-toggle="radio" name="ssl" value="no"><i></i>NO
              </div>
              <div class="col-md-5">
                <div class="tim-title"><h5>DO YOU WANT 3 LAYERES SECURITY?</h5></div>
                <label class="radio">
                  <input type="radio" data-toggle="radio" required="" name="security" value="yes"><i></i>YES
                </label>
               <label class="radio">
                  <input type="radio" data-toggle="radio" name="security" value="no"><i></i>NO
                </label>
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-5">
                <div class="tim-title"><h5>WHICH SECTIONS YOU WANT?</h5></div>
                <div class="row">
                  <div class="col-md-4">
                   <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="home" data-toggle="checkbox">HOME
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="service" data-toggle="checkbox">SERVICES
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="gallery" data-toggle="checkbox">GALLERY
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="blog" data-toggle="checkbox">BLOG
                    </label>
                  </div>
                  <div class="col-md-8">
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="contact" data-toggle="checkbox">CONTACT US
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="portfolio" data-toggle="checkbox">PORTFOLOIO
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="team" data-toggle="checkbox">TEAM
                    </label>
                     <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="section[]" value="showcase" data-toggle="checkbox">PRODUCT SHOW CASE
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tim-title"><h5>PLEASE SELECT ADDITIONAL FEATURES?</h5></div>
                <div class="row">
                  <div class="col-md-6">
                   <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="feature[]" value="social" data-toggle="checkbox">SOCIAL MEDIA INTEGRATION
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="feature[]" value="content"  data-toggle="checkbox">CONTENT
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="feature[]" value="images"  data-toggle="checkbox">IMAGES
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="feature[]" value="tracking"  data-toggle="checkbox">TRACKING & REPORTS
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="feature[]" value="chatbot"  data-toggle="checkbox">CHAT BOT
                    </label>
                    <label class="checkbox" for="checkbox2">
                      <input type="checkbox" name="feature[]" value="seo"  data-toggle="checkbox">BASIC SEO
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="tim-title"><h5>DO YOU WANT ADDITIONAL PAGES?</h5></div>
                <label class="radio">
                  <input type="radio" data-toggle="radio" required="" name="addPage" value="yes"><i></i>YES
                </label>
                <label class="radio">
                  <input type="radio" data-toggle="radio" name="addPage" value="no"><i></i>NO
                </label>
              </div> 
              <div class="col-md-6">
                <div class="tim-title"><h5>DO YOU WANT ANY KIND OF FORM?</h5></div>
                <label class="radio">
                  <input type="radio" data-toggle="radio" required="" name="form" value="yes"><i></i>YES
                </label>
                <label class="radio">
                  <input type="radio" data-toggle="radio" name="form" value="no"><i></i>NO
                </label>         
              </div>
            </div>
            <br>
            <center>
              <button type="submit" id="data-submitGetPrice" name="formSubmit" class="cta btn btn-success">Get Price</button>
            </center>
            <div class="space"></div>
          </form>
        </div>
      </div>
    </div>

    <div id="carousel">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/img/carousel_blue.png" alt="Awesome Image">
          </div>
          <div class="item">
            <img src="assets/img/carousel_green.png" alt="Awesome Image">
          </div>
          <div class="item">
            <img src="assets/img/carousel_orange.png" alt="Awesome Image">
          </div>
          <div class="item">
            <img src="assets/img/carousel_red.png" alt="Awesome Image">
          </div>
        </div>
      </div>
    </div> 

     
    <div class="main">
      <div class="container tim-container">
        <div id="extras">
          <div class="space"></div>
          <div class="row">
            <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
              <div class="text-center">
                <img src="assets/img/logo.png"  alt="Playtech Logo" class="img-responsive">
              </div>
            </div>
            <div class="col-md-5 col-sm-12">
              <h1 class="text-center"><span id="main-text">PLAYTECH</span>
              <small class="subtitle">Get to know us</small></h1>
              <hr>
              <p>Our team is specialized in Static, Dynamic & E-Commerce Website Development. We mainly deal with Customized Web Application, ex: Institutional Management, Hospital Management, Hotel Management, Event Management etc.</p>
              <p>We provide services in digital marketing like Google AdWords, SEO, Analytics, Bing Search Engine Optimization, Google Business, Keyword Analytics, website optimization, Social Media Paid Promotions with good strategy to get online traffic for your business.</p>
              <p>We offer Native as well as Hybrid Android & IOS Applications that fulfill the objective of Digital Marketing as well as manage the workload quite well. Making application Hybrid or Native is up to the requirement.</p>
            </div>
          </div>
        </div>
      <!--     end extras -->    
      </div>
      <div class="space-30"></div>
    </div>
    <?php

      if($updateData){
        require_once './functions/dbconn.php';
        $sql = "SELECT * FROM countdata";
        $data = mysqli_query($conn, $sql);
        
        if(!$data){
          echo "Can't retrieve data " . mysqli_error($conn);
          exit;
        }
        $data = mysqli_fetch_array($data);
        $id = $data['id'];
        
        $webcount = $data['webcount'] + 1;
        
        $time1 = strtotime("12:00:00");
        $time2 = strtotime("18:00:00");
        $time3 = strtotime("23:59:00");
        $time4 = strtotime("06:00:00");
        $timenow = strtotime(now);

        if($time4 <= $timenow && $time1 > $timenow){
          $_SESSION['live'] = rand(8,15);
        }elseif($time1 <= $timenow && $time2 > $timenow){ 
          $_SESSION['live'] = rand(12,25);
        }elseif($time2 <= $timenow && $time3 > $timenow){
          $_SESSION['live'] = rand(10,18);
        }elseif($time3 <= $timenow && $time4 > $timenow){
          $_SESSION['live'] = rand(0,3);
        }

        // echo $_SESSION['live'];

  
//date_default_timezone_set('Asia/Calcutta'); - You can choose any timezone
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 



        $_SESSION['visit'] = $visit = $data['visit'] + rand(3,5);
        $_SESSION['signup'] = $signup = $data['signup'] + rand(1,3);
        
        
        $sql3= "SELECT * FROM notification where no='3'";
        $result3 = mysqli_query($conn, $sql3);
        
        
      }
    
      //$child1 = "backgroundOverlay('".$_SESSION['visit']." People', 'Visited in last 3 days','users.jpg','#2CA8FF','white');";
      //$child2 = "backgroundOverlay('".$_SESSION['live']." Users', 'Are viewing this page now','user.jpg','red','white');";
      //$child3 = "backgroundOverlay('".$_SESSION['signup']." People', 'Got their price in last 3 days','signup.jpg','green','white');";
      //  $child5="backgroundOverlay("some fields",'b','signup.jpg','red','while');"; 
      $child4 = "backgroundOverlay('".$_COOKIE['lastVisit']." you', ' last visited','signup.jpg','red','white');";
      $n = 1;
      ?>
      <?php
      require_once './functions/dbconn.php';
      $sql1 = "SELECT * FROM notification where no='1'";
      $result1 = mysqli_query($conn, $sql1);
      while($row=mysqli_fetch_array($result1)){
        $child1 = "backgroundOverlay('".$row['hours']." ', '".$row['header']."','users.jpg','#2CA8FF','white');";
        $n++;
      }
      ?>
      <?php
      require_once './functions/dbconn.php';
      $sql2 = "SELECT * FROM notification where no='2'";
      $result2 = mysqli_query($conn, $sql2);
        while($row=mysqli_fetch_array($result2)){
        $child2 = "backgroundOverlay('".$row['hours']." ', '".$row['header']."','users.jpg','#2CA8FF','white');";
        $n++;
      }
      ?>
      <?php
      require_once './functions/dbconn.php';
      $sql3= "SELECT * FROM notification where no='3'";
        $result3 = mysqli_query($conn, $sql3);
      while($row=mysqli_fetch_array($result3)){
        $child3 = "backgroundOverlay('".$row['hours']." ', '".$row['header']."','users.jpg','#2CA8FF','white');";
        $n++;
      }
      ?>
         
    
       
  
    <script type="text/javascript">
      var child = 1;
        setInterval(function() {
          if(child == 1){
            <?php echo $child1; ?>
          }else if(child == 2){
            <?php echo $child2; ?>
          }else if(child == 3){
            <?php echo $child3; ?>
          }else if(child==4)
          {
            <?php echo $child4;?>
          }
          if (child === 4) {
            child = 1;
          } else {
            child++;
          }
        }, 7000);
    </script>
<?php
  require_once "./template/footer.php";
?>
    

  