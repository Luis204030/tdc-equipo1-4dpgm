<HTML>
<HEAD>
<TITLE>JavaScript index</TITLE>

<script Language="JavaScript">

function goback(){
alert ("Good Bye");
history.go(-1);
}

fuction gettheDate(){
Todays = new Date();
TheDate = ""+(Todays.getMonth()
+1)+"/"+ Todays.getDate() +"/" + 
(Today.getYear()+1900)
document.clock.thedate.value  =
TheDate;
}

var timerID = null;
var timerRunning = false;

fuction stopclock (){
	if(timerRunning)
	clearTimeout(timerID);
	timerRunning = false;
}

fuction startclock (){
	stopclock();
	gettheDate()
	showtime();
}

fuction showtime() {
	var now = new Date();
	varhours = now.getHours();
	var minutes = now.getMinutes();
	var seconds = now.getSeconds()
	var timeValue = ""+((hours>12)?
	hours-12:hours)
	timeValue
}

timerID =
setTimeout("showtime()",1000);
 timerRunning = true;
}
</script>
</HEAD>

<BODY bgcolor="#00FFFF"
onLoad="startclock()">
<CENTER>
<h2>Esto es un reloj hecho con
JavaScript<h2>
<table border>
<tr>
 <td><form name="clock"
onSubmit="0"></td>
</tr>

<tr>
 <td colspan=2>Hoy es:<input
type="text" name="thedate" size=12
value=""></td>
<td colspan=2>La hora es:<input
type="text" name="face" size=12
value=""></td></form>
</tr>
</table>
</CENTER>

<hr>
<center>
<h3>
[<a href="javascr.htm">Volver</a>]
</h3>
</center>

</BODY>
</HTML>
