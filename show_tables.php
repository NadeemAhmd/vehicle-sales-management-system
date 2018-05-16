<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="login/css/styles.css" rel="stylesheet">
<title>TABLES</title>
<a href="index.php" class="btn btn-info">HOME</a>
<h3><u>ALL TABLES IN DATABASE</u></h3>
</head>
<body style="background:papayawhip;">
<style>
        body{
            max-width: 1080px;
            width: 50%;
            margin: 20px auto;
            text-align: left;
        }
</style>

<style type="text/css">
		table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
		table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
		table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
</body>

</html>
<?php
/* connect to the db */
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
$connection = mysql_connect('localhost','root','');
mysql_select_db('vsms',$connection);

/* show tables */
$result = mysql_query('SHOW TABLES',$connection) or die('cannot show tables');
while($tableName = mysql_fetch_row($result)) {

	$table = $tableName[0];
	
	echo '<h3>',$table,'</h3>';
	$result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
	if(mysql_num_rows($result2)) {
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
		while($row2 = mysql_fetch_row($result2)) {
			echo '<tr>';
			foreach($row2 as $key=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br />';
	}
}
?>
<html>
<head>
<title>ALL TABLES</title>
</head>
<body>

<style type="text/css">
		table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
		table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
		table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
</body>
<p>&copy Project by Nadeem . All right reseved.</p>
</html>