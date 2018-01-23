<html>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
	<meta charset="utf-8">
	<link href="bootstrap-4/css/bootstrap.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/ea2878c619.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
	<body>
		<form method="post" action="insert.php" class="container-fluid">
			<div class="container">
				<label>Entrez votre : </label>
				<div class="row">
					<label class="col-6 col-offset-3">mail : </label>
					<input type="text" name="mail" value="<?php print $_GET['mail']; ?>" class="col-6">
					<label class="col-6 col-offset-3">Nom : </label>
					<input type="text" name="nom" value="<?php print $_GET['nom']; ?> " class="col-6">
					<label class="col-6 col-offset-3">Prénom : </label>
					<input type="text" name="prenom" value="<?php print $_GET['prenom']; ?>" class="col-6">
					<label class="col-6 col-offset-3">Adresse : </label>
					<input type="text" name="adresse" value="<?php print $_GET['adresse']; ?>" class="col-6">
					<label class="col-6 col-offset-3">Age : </label>
					<input type="text" name="age" value="<?php print $_GET['age']; ?>" class="col-6">
					<label class="col-6 col-offset-3">Téléphone : </label>
					<input type="text" name="telephone" value="<?php print $_GET['telephone']; ?>" class="col-6">
				</div>
				<div class="row">
					<div class="col-1 col-push-10 text-center">
						<input type="submit">
					</div>
				</div>
			</div>
		</form>
	</body>
</html>
