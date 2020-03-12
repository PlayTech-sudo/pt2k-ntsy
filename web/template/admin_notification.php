 <?php
 require_once './functions/dbconn.php';
 $sql="SELECT * from leads where status='Pending'";
    $data = mysqli_query($conn, $sql);
    if(!$data){
          echo "Can't retrieve data " . mysqli_error($conn);
          exit;
        }
        $data = mysqli_fetch_array($data);
        $_SESSION['pending_count']=$pending_count=mysqli_num_rows($data);
        $child1 = "backgroundOverlay('".$_SESSION['pending_count']." requests', 'are pending','users.jpg','#2CA8FF','white');";
 ?>

 <script type="text/javascript">
      var child = 1;
        setInterval(function() {
          if(child == 1){
            <?php echo $child1; ?>
 </script>