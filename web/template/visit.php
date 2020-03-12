
 
<html>
<body>
<br>
<?php
//date_default_timezone_set('Asia/Calcutta'); - You can choose any timezone
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "last visit was - ". $visit;
}
else
echo "This is the first timr you are visiting our website hope you enjoy";
?>
</body>
</html>