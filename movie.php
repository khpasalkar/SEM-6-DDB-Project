<html>
<head>
<title>
Movie
</title>
<style>
body{
background-color:lightgrey;
}
h1{
background-color:white;
padding:20px;
}
#images{
background-color:white;
border:2px solid black;
width:1320px;
}
td,th{
text-align:center;
font-size:25px;
font-weight:bold;
padding:15px;	
}
table, td, th {
    border: 1px solid black;
}
table{
    border-collapse: separate;
}
</style>
</head>
<body>
<body>
<h1><center>THEATRE MANAGEMENT SYSTEM</center></h1>
<h2><center>MOVIE</center></h2><hr><br>
<?php
$conn=oci_connect("system","krutika","localhost/orcl");
$stid1 = oci_parse($conn,"select * from movie");
oci_execute($stid1);
echo "<table id='images' border='2'>\n";
echo "<tr><th>M_ID</th><th>M_NAME</th><th>GENRE</th><th>CBFC_RATING</th><th>RATING</th></tr>";
while ($row1 = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row1 as $item1) {
        echo "    <td>" . ($item1 !== null ? htmlentities($item1, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

//oci_free_statement($stid);
oci_close($conn);
?>



</body>
</html>


