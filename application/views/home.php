<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel='stylesheet' href="<?php echo base_url(); ?>css/font-awesome.min.css" />
</head>
<body>
	
	<?php foreach ($alumnos as $row): ?>
		<h5><?php echo $row->carrera; ?></h5>
	<?php endforeach; ?>
	
</body>
</html>