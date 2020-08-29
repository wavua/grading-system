<?php
if (isset($_REQUEST['submit']))
 {
	# code...
	$name=$_REQUEST['initials'];
	$Enterpreneurship_Skills=$_REQUEST['Enterpreneurship'];
	$Software_Engineering=$_REQUEST['Software'];
	$ICT_Project2=$_REQUEST['ICT'];
	$Advanced_OOP=$_REQUEST['OOP'];
	$Advanced_Event_Driven_Programming=$_REQUEST['Event'];
	$Network_Design=$_REQUEST['Network'];
	$Web_Development2=$_REQUEST['Web'];
	echo "<b>Your Name is:  </b>" . $name . "<br>" ;
	echo "<b>Marks Details: </b> <br>";
	echo "Enterpreneurship Skills: " . $Enterpreneurship_Skills . "<br>";
	echo "Software Engineering: " . $Software_Engineering . "<br>";
	echo "ICT Project 2: " . $ICT_Project2 . "<br>";
	echo "Advanced OOP: " . $Advanced_OOP . "<br>";
	echo "Advanced Event Driven Programming: " . $Advanced_Event_Driven_Programming . "<br>";
	echo "Network Design: " . $Network_Design . "<br>";
	echo "Web Development 2: " . $Web_Development2 . "<br>"."<br>"."<br>";

	$total= $Enterpreneurship_Skills+ $Software_Engineering+ $ICT_Project2+$Advanced_OOP+ $Advanced_Event_Driven_Programming+ $Network_Design+$Web_Development2;
	echo "<b>Total Marks: </b>" . $total . "<br>";
	$per=$total/7;
	echo "<b>Percentage: </b>" . $per . "%<br>";

	if ($per<35) 
	{
		# code...
		echo "<b>Grade: F </b>" . "<br>";
	}
	elseif ($per>=35 && $per<=50) {
		# code...
		echo "<b>Grade:D</b>". "<br>";
	}
	elseif ($per>50 && $per<=60) {
		# code...
		echo "<b>Grade:C</b>". "<br>";
	}
	elseif ($per>60 && $per<=70) {
		# code...
		echo "<b>Grade:B</b>". "<br>";
	}
	elseif ($per>70 && $per<100) {
		# code...
		echo "<b>Grade:A</b>". "<br>";
	}
	else
	{
		echo "Wrong Credentials" . "<br>";
	}
}
else
{
echo "Enter your name and marks and then press submit button";
}
?>