<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mainstyle2.css">
<script src="ajax1.js"></script>
<script src="bootstrap1.js"></script>  
<link rel="stylesheet" href="">
<title>
University Survey Data
</title>
</head>
<body>
<div class="col-md-offset-4 col-md-8">
<h1>University Student Satisfaction Survey</h1>
<br>
<br>
</div>
<?php
$con =  mysqli_connect('sql6.freemysqlhosting.net','sql6112842','d5w2TkFiFQ','sql6112842');
$sql = "SELECT * FROM allsurvey";
$result = mysqli_query($con,$sql);
echo "<table border=5 style=margin:50px>
<tr>
<th>Email</th>
<th>Country</th>
<th>Q1</th>
<th>Q2</th>
<th>Q3</th>
<th>Q4</th>
<th>Q5</th>
<th>Q6</th>
<th>Q7</th>
<th>Q8</th>
<th>Q9</th>
<th>Q10</th>
</tr>";
if(mysqli_num_rows($result)>0)
{
while($record = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$record['email']. "</td>";
echo "<td>". $record['country']. "</td>";
echo "<td>".$record['q1']."</td>";
echo "<td>".$record['q2']."</td>";
echo "<td>".$record['q3']."</td>";
echo "<td>".$record['q4']."</td>";
echo "<td>".$record['q5']."</td>";
echo "<td>".$record['q6']."</td>";
echo "<td>".$record['q7']."</td>";
echo "<td>".$record['q8']."</td>";
echo "<td>".$record['q9']."</td>";
echo "<td>".$record['q10']."</td>";
echo "</tr>";
}
}
else
{
echo "0 results";
}
echo "</table>";
mysqli_close($con);
?>	
<div class="col-md-offset-1 col-md-offset-5">
<p>Q1. How effective is the teaching within your major at this university?</p>
<p>Q2. How effective is the teaching outside your major at this university?</p>
<p>Q3. How well do the classrooms at this university meet the learning needs of students?</p>
<p>Q4. How helpful is your academic advisor?</p>
<p>Q5. How easy it is to register for courses at this university?</p>
<p>Q6. How safe do you feel on campus?</p>
<p>Q7. How helpful is the staff at the on-campus health center?</p>
<p>Q8. How useful are the services provided by the on-campus career center?</p>
<p>Q9. How easy it is to obtain the resources you need from the university library system?</p>
<p>Q10. Overall, are you satisfied with your experience at this university, neither satisfied nor dissatisfied with it, or dissatisfied?</p>
</div>
</body>
</html>