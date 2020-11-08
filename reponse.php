
<!-- Get all data from formulaire -->
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$sexe = $_POST['radio'];
$domaine = $_POST['domaine'];
?>

<!-- fetch all data into table-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<table class="table">


	<tr>
		<td>Nom</td>
		<td><?php echo $nom; ?></td>
	</tr>

	<tr>
		<td>Prenom</td>
		<td><?php echo $prenom; ?></td>
	</tr>

    <tr>
		<td>Email</td>
		<td><?php echo $email; ?></td>
	</tr>
	 <tr>
		<td>Sexe</td>
		<td><?php echo $sexe; ?></td>
	</tr>

	<tr>
		<td>Domaines</td>
		<td><?php foreach ($domaine as $val){ echo $val."   ";}?></td>
	</tr>

</table>
</body>
</html>

