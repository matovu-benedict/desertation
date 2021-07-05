




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: darkgreen;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: black;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  
   <div class="header-right">
    <H1> STUDENTS SIDE</H1>
  </div>
</div>

<div style="padding-left:20px">
  
  
</div>

</body>
</html>








<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: darkgreen;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid black;
}

/* Set a style for the submit button */
.btn {
    background-color: darkgreen;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    border-radius: 10px;
}

.btn:hover {
    opacity: 1;
}

.back1
{
height:10px;
width: 500px;
background: -webkit-linear-gradient(-90deg, maroon,red);	
}
.back
{
height:400px;
width: 500px;
background: -webkit-linear-gradient(-90deg, maroon,red);
 border-radius: 10px;
 opacity: 5px;

}
</style>
</head>
<body>

<center><script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script></center>





<center>
<div class="back1">

</div>
<div class="back">
<form method="post" action="uploadfile.php" enctype="multipart/form-data">
<h1> Upload Internship Content</h1>
<img src="images/upload.PNG" style=" height: 100px; widith: 100px;">
<table width="350" border="0" cellspacing="1" cellpadding="1">
<tbody>
<tr>
<td width="246"><br><br><br><br>
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />

<input id="userfile" type="file" name="userfile" /><br><br><br><br>

<input id="upload" type="submit" name="upload" value="Upload " class="btn"/></td>
</tr>
</tbody>
</table>
</form>

</div>













