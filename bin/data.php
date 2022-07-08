<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>phone</th>
<th>address</th>
<th>linkedin</th>
<th>github</th>
<th>email</th>
<th>objective</th>
<th>work</th>
<th>academics</th>
<th>photo</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "niit");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, phone, address, linkedin, github, email, objective, work, academics, photo  FROM niit";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>". $row["phone"] . "</td><td>". $row["address"] . "</td><td>". $row["linkedin"] . "</td><td>". $row["github"] . "</td><td>". $row["email"] . "</td><td>". $row["objective"] . "</td><td>". $row["work"] . "</td><td>". $row["academics"] . "</td><td>". $row["photo"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>