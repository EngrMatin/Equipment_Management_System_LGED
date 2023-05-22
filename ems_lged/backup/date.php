<htkl>

<?php

date_default_timezone_set('Asia/Dhaka');
$current_date_and_time = date('Y-m-d H:i:s');
echo 'Current_Date_and_Time: '.$current_date_and_time.'<br>';

$current_date = strtotime(date('Y-m-d'));
$dob = strtotime('1976-04-12');

$age = date_diff($dob, $current_date);
// echo $age->format("%R%a days");

echo $current_date."<br>";
echo $dob."<br>";
echo $age.'<br>';

if($current_date>$dob)
{
    echo "Yes <br>";
}
else
{
    echo "No";
}



echo "Today is " . date("Y-m-d") ."<br>";
echo "Today is " . date("d-m-Y @ h:m:s") ."<br>";
echo "Today is " . date("m-d-Y") ."<br>";



$current_date = date(DATE_ATOM);
$current_date2 = date(DATE_RFC822);

echo 'Current Date = '.$current_date.'<br>';
echo 'Current Date2 = '.$current_date2.'<br>';

// $current_time = localtime('h:m:s');
// echo 'Current Time = '.$current_time.'<br>';

?>




</html>