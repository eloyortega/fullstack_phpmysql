<!doctype html>
<html>
<head>
	<title>MYSQL Play</title>
</head>
<body>
	<h1>All Entries</h1>
	<table border=1>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>password</th>
		</tr>

		<?php 
			$cnt = mysqli_connect('localhost', 'root', 'root', 'sqltest2');
			$qry = "select * from regusers";
			$results = mysqli_query($cnt, $qry);
			//print_r($results);

			foreach($results as $v){
				echo'
					<tr>
						<td>'.$v['uid'].'</td>
						<td>'.$v['name'].'</td>
						<td>'.$v['email'].'</td>
						<td>'.$v['pw'].'</td>
					</tr>
				';
			};
			mysqli_close($cnt);
		?>

	</table>
</body>
</html>