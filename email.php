<?php 

//$to = "techlysesolutions@gmail.com";
$to = "gilbertmovingandstorage@gmail.com";

$fname = $_POST['element_1_1']; 
$lname = $_POST['element_1_2']; 
$email = $_POST['element_5']; 
$phone  = $_POST['element_6_1']; 
$message = $_POST['element_7'];

// pickup address  
$pick_add1 = $_POST['element_2_1'];
$pick_add2 = $_POST['element_2_2'];
$pick_add3 = $_POST['element_2_3'];
$pick_add4 = $_POST['element_2_4'];
$pick_add5 = $_POST['element_2_5'];
$pick_add6 = $_POST['element_2_6'];

// Drop Off Address address  
$drop_add1 = $_POST['element_3_1'];
$drop_add2 = $_POST['element_3_2'];
$drop_add3 = $_POST['element_3_3'];
$drop_add4 = $_POST['element_3_4'];
$drop_add5 = $_POST['element_3_5'];
$drop_add6 = $_POST['element_3_6'];

//Date
$month = $_POST['element_4_1'];
$day = $_POST['element_4_2'];
$year = $_POST['element_4_3'];
$date = $month.'/'.$day.'/'.$year;



$subject = "Contact Inquiry";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:".$email;
//$headers .= "BCC: admin@example.com";

echo $txt = '<table width="300">
				<tr><td></td><td>'.$fname.'&nbsp;'.$lname.'</td></tr>
				<tr><td></td><td>'.$email.'</td></tr>
				<tr><td></td><td>'.$phone.'</td></tr>

					<tr><td style="font-weight:bold">Pick up address</td></tr>
				<tr><td></td><td>'.$pick_add1.'</td></tr>
				<tr><td></td><td>'.$pick_add2.'</td></tr>
				<tr><td></td><td>'.$pick_add3.'</td></tr>
				<tr><td></td><td>'.$pick_add4.'</td></tr>
				<tr><td></td><td>'.$pick_add5.'</td></tr>
				<tr><td></td><td>'.$pick_add6.'</td></tr>
				
					<tr><td style="font-weight:bold">Drop off address</td></tr>
				<tr><td></td><td>'.$drop_add1.'</td></tr>
				<tr><td></td><td>'.$drop_add2.'</td></tr>
				<tr><td></td><td>'.$drop_add3.'</td></tr>
				<tr><td></td><td>'.$drop_add4.'</td></tr>
				<tr><td></td><td>'.$drop_add5.'</td></tr>
				<tr><td></td><td>'.$drop_add6.'</td></tr>

				<tr><td>Moving Date</td><td>'.$date.'</td></tr>
				<tr><td>Special Considerations / Comments</td><td>'.$message.'</td></tr>
		</table>';

mail($to,$subject,$txt,$headers);