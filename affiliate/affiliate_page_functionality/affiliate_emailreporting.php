<?php 

error_reporting(0);

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword);

$dbhost = 'actboss.db.7060552.hostedresource.com'; 
$dbusername = 'actboss'; 
$dbpassword = 'Plkiop420!'; 
$db_name = 'actboss'; 
$tbl_name = 'users'; 

// Connect to server and select database.

mysql_connect("$dbhost", "$dbusername", "$dbpassword")or die(mysql_error()); 
mysql_select_db("$db_name") or die(mysql_error());

// Get Values from DB

$data = mysql_query("SELECT * FROM users") or die(mysql_error()); 

Print "<table>"; 
while($info = mysql_fetch_array( $data )) 
{ 
	Print "<tr>"; 
	Print "<th>ID</th> <th>Email</th> <th>Join Date</th> <th>Join Time</th>";
	Print "<tr>";
	Print "<td>".$info['id'] . "</td> <td>".$info['email'] . "</td> <td>".$info['joindate'] . "</td> <td>".$info['jointime'] . "</td> ";
} 
Print "</table>"; 
?> 

<?php 
// close connection 
mysql_close();

?>