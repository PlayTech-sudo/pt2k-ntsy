<?php
	session_start(); 

	require_once 'dbconn.php';
	
	$edate = date("20y-m-d");
	$etime = date("h:i:s A");

	if(isset($_POST['formSubmit'])){
		$purpose = $_POST['purpose'];
		$webtype = $_POST['webtype'];
		$server = $_POST['server'];
		$domain = $_POST['domain'];
		$ssl = $_POST['ssl'];
		$security = $_POST['security'];
		$section = $_POST['section'];
		$feature = $_POST['feature'];
		$addpage = $_POST['addPage'];
		$form = $_POST['form'];

		foreach ($section as $section1){ 
	    $sec .= $section1.";";
		}

		foreach ($feature as $feature1){ 
	     $fea .= $feature1.";";
		}

		$total = 0;
		$array1 = array('static' => 6500, 'dynamic' => 7500, 'commerce' => 42000, 'onepage' => 5000, 'landing' => 8000, 'blog' => 9000);
		$server1 = array('server1' => 7000, 'server2' => 3500);
		$fet = array('social' => 500, 'content' => 2500, 'images' => 500, 'seo' => 5000, 'tracking' => 1000, 'chatbot' => 1000);

		$total += $array1[$webtype];
		$total += $server1[$server];
		$total += $domain = $domain == 'yes' ? 1000 : 0;
		$total += $ssl = $ssl == 'yes' ? 1500 : 0;
		$total += $security = $security == 'yes' ? 5000 : 0;

		foreach ($feature as $feature1){ 
	    $total += $fet[$feature1];
		}

		$sl = getsl($conn, "id", "entry");
		$sql = "INSERT INTO `entry` (`id`, `edate`, `etime`, `purpose`, `webtype`, `server`, `domain`, `ssls`, `security`, `section`, `feature`, `addpage`, `form`, `total`) VALUES ('".$sl."', '".$edate."', '".$etime."', '".$purpose."', '".$webtype."', '".$server."', '".$domain."', '".$ssl."', '".$security."', '".$sec."', '".$fea."', '".$addpage."', '".$form."', '".$total."')";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}

		$_SESSION['price'] = $total;
		$_SESSION['id'] = $sl;

		header('location:../submit#getprice');

	}

	if(isset($_POST['contactSubmit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mob = $_POST['mob'];
		$note = $_POST['note'];
		$refid = $_SESSION['id'];
		$price = $_SESSION['price'];

		$sl = getsl($conn, "id", "leads");
		$sql = "INSERT INTO `leads` (`id`, `refid`, `edate`, `etime`, `name`, `email`, `mob`, `note`, `total`, `status`) VALUES ('".$sl."', '".$refid."', '".$edate."', '".$etime."', '".$name."', '".$email."', '".$mob."', '".$note."', '".$price."', 'Pending')";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		header('location:../submit?msg=7822377#getprice');

	}

?>