




<?php if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)

{

$fileName = $_FILES['userfile']['name'];

$tmpName  = $_FILES['userfile']['tmp_name'];

$fileSize = $_FILES['userfile']['size'];

$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');

$content = fread($fp, filesize($tmpName));

$content = addslashes($content);
$regno = $_POST['regno'];
$supervisorID = $_POST['supervisorID'];

fclose($fp);

if(!get_magic_quotes_gpc())

{

$fileName = addslashes($fileName);

}

mysql_connect("localhost","root","");

mysql_select_db("adminpanel");

$query = "INSERT INTO files (name, size, type, content,regno,username) ".

"VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$regno', '$supervisorID')";

mysql_query($query) or die('Error, query failed');

echo "
 $fileName is Successfully uploaded
";

echo '<script>alert("Content  is successfuly uploaded")</script>';
echo '<script>windows: location="studentUpload.php"</script>';

}

?>

