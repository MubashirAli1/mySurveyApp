<?php?>
<!Doctype html>
<html>
<head>
<script type="text/javascript" src="data.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<link rel="stylesheet" href="mystylesheet2.css" type="text/css"/>

<title>
University Form Survey
</title>

</head>
<body>

<form name="uniform" class="col-md-offset-5 col-md-7">
<h1>Enter Your Information</h1>
<ul class="personal">
<li><label>Email:-</label><input name="email" type="text"/></li> 
<li><label>Country:-</label>
<select name="country">
<option>Pakistan</option>
<option>New zealand</option>
<option>Australia</option>
<option>South Africa</option>
</select>
</li>
</ul>
<h2>University Student Satisfaction Survey</h2>
<ul class="survey1">
<li>1. How effective is the teaching within your major at this university?</li>
<li><input name="q1" type="radio" value="extremelysatisfied" /> Extremely Satisfied</li>
<li><input name="q1" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q1" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q1" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q1" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>2. How effective is the teaching outside your major at this university?</li>
<li><input name="q2" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q2" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q2" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q2" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q2" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>3. How well do the classrooms at this university meet the learning needs of students?</li>
<li><input name="q3" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q3" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q3" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q3" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q3" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>4. How helpful is your academic advisor?</li>
<li><input name="q4" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q4" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q4" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q4" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q4" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>5. How easy it is to register for courses at this university?</li>
<li><input name="q5" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q5" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q5" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q5" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q5" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>6. How safe do you feel on campus?</li>
<li><input name="q6" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q6" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q6" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q6" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q6" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>7. How helpful is the staff at the on-campus health center?</li>
<li><input name="q7" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q7" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q7" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q7" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q7" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>8. How useful are the services provided by the on-campus career center?</li>
<li><input name="q8" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q8" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q8" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q8" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q8" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>9. How easy it is to obtain the resources you need from the university library system?</li>
<li><input name="q9" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q9" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q9" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q9" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q9" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li>10. Overall, are you satisfied with your experience at this university, neither satisfied nor dissatisfied with it, or dissatisfied?</li>
<li><input name="q10" type="radio" value="extremelysatisfied"/> Extremely Satisfied</li>
<li><input name="q10" type="radio" value="verysatisfied"/> Very Satisfied</li>
<li><input name="q10" type="radio" value="moderatesatisfied"/> Moderate Satisfied</li>
<li><input name="q10" type="radio" value="slightlysatisfied"/> Slightly Satisfied</li>
<li><input name="q10" type="radio" value="notatallsatisfied"/> Not at all Satisfied</li>
<br>
<li><input name="submit" type="submit" value="Submit" onclick="radiocheck();" id="submit1"/></li>

</ul>
</form>

</body>
</html>
