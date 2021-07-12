<?php

mysql_connect("localhost","root","");

mysql_select_db("adminpanel");

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT name, type, size, content FROM  letter WHERE id = $id";

$result = mysql_query($query) or die('Error, query failed');

list($name, $type, $size, $content) =

mysql_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content; exit;

}

?>













<?php

$query = "SELECT id, name FROM  files";

$result = mysql_query($query) or die('Error, query failed');

if(mysql_num_rows($result) == 0)

{

echo "Database is empty";

}

else

{

while(list($id, $name) = mysql_fetch_array($result))

{

?>


<?php

}

}

?>
