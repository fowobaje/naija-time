<!DOCTYPE html>
<html>
<head>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
	
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
	
}

</script>

</head>

<body onload="startTime()"  >



<div id="txt"  style="width:235px;height:60px;border:3px solid #000; box-sizing: border-box; left: 590px;"></div>



<style>
div{
	
position: absolute;
width: 221px;
height: 61px;
left: 500px;
top: 400px;
font-family: digital numbers;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 35px;
text-align: center;
}
body {
	background-image: url("naijaflag.png");
	background-repeat: no-repeat;
	background-size: cover;	
}
h1 {
	text-align: center;
	position: absolute;
width: 911px;
height: 116px;
left: 257px;
top: 200px;
font-family: rationale;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 85px;
text-align: center;
}
h2{
	position: absolute;
width: 436px;
height: 71px;
left: 485px;
top: 315px;
font-family: Ranga;
font-style: italic;
font-weight: normal;
line-height: normal;
font-size: 39px;
text-align: center;
}
</style>

<div id="txt"></div>

</head>
<body>
<h1>Hotels.ng Internship 4.0</h1>

<h2>Ajifowobaje Seye James</h2>

</body>
</html>