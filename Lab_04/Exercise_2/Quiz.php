<html>
<body>
<?php


$A1=$_POST["Q1"];
$A2= $_POST["Q2"];
$A3=$_POST["Q3"];
$A4=$_POST["Q4"];
$A5=$_POST["Q5"];

$correct=0;
if($A1=='Benjamin Harrison'){
	$correct++;
}
if($A2=="Era quello che era"){
	$correct++;
}
if($A3=="A woodchuck would chuck as much wood as a woodchuck could chuck if a woodchuck could chuck wood"){
	$correct++;
}
if($A4=="Neil Armstrong"){
	$correct++;
}
if($A5=="11m/s"){
	$correct++;
}


?>

Question 1: who was the 23 president of the United States?<br>
You Answered: <?php echo $A1;?><br>
Correct answer: Benjamin Harrison<br>
<br>
Question 2: Que tal tu dia?<br>
You Answered: <?php echo $A2;?><br>
Correct answer: Era quello che era<br>
<br>
Question 3: How much wood would a woodchuck chuck if a woodchuck could chuck wood?<br>
You Answered: <?php echo $A3;?><br>
Correct answer: A woodchuck would chuck as much wood as a woodchuck could chuck if a woodchuck could chuck wood<br>
<br>
Question 4: Who was the first man on the moon?<br>
You Answered: <?php echo $A4;?><br>
Correct answer: Neil Armstrong<br>
<br>
Question 5: What is the airspeed velocity of an unladen swallow?<br>
You Answered: <?php echo $A5;?><br>
Correct answer: 11m/s<br>
<br>
<br>
num answered correctly: <?php echo $correct;?><br>
Percent scored: %<?php echo ($correct/5)*100;?><br>

<form action="./Quiz.html">
    <input type="submit" value="Back" />
</form>

</body>
<html>
