function radiocheck()
{
var e=document.getElementsByName("email");
var email=e[0].value;
var c=document.getElementsByName("country");
var country=c[0].value;
var q1=document.getElementsByName("q1");
var length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a1=q1[i].value;
}
}

q1=document.getElementsByName("q2");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a2=q1[i].value;
}
}


q1=document.getElementsByName("q3");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a3=q1[i].value;
}
}


q1=document.getElementsByName("q4");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a4=q1[i].value;
}
}



q1=document.getElementsByName("q5");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a5=q1[i].value;
}
}



q1=document.getElementsByName("q6");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a6=q1[i].value;
}
}


q1=document.getElementsByName("q7");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a7=q1[i].value;
}
}


q1=document.getElementsByName("q8");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a8=q1[i].value;
}
}


q1=document.getElementsByName("q9");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a9=q1[i].value;
}
}

q1=document.getElementsByName("q10");
length=q1.length;
for(i=0;i<length;i++)
{
if(q1[i].checked)
{
var a10=q1[i].value;
}
}

var xmlhttp= new XMLHttpRequest();

xmlhttp.open('GET','phpdata.php?pemail='+email+'&pcountry='+country+'&pa1='+a1+
'&pa2='+a2+'&pa3='+a3+'&pa4='+a4+'&pa5='+a5+'&pa6='+a6+'&pa7='+a7+'&pa8='+a8+
'&pa9='+a9+'&pa10='+a10,true);
xmlhttp.send();
alert('dsdds');
}