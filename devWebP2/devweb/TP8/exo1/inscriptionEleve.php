<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le maxi Eleve</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>

    </head>
    <body>
      <!-- Ca marhce aussi avec .html -->
      <h1>Le maxi Eleve</h1>
      <form action="enregistrerEleves.php" method="POST">
      <p> Prenom : <input type="text" name="prenom"></p>
      <p> Nom : <input type="text" name="nom"></p>
      <p> Date de naissance : <input type="date" name="dateDeNaissance"></p>
      <p> Maison : <input list="Maison" name="maison" id="maison"></p>
      <datalist id="Maison">
          <option value="Gryffondor">
          <option value="Serpentard">
          <option value="Serdaigle">
          <option value="Poufsouffle">
      </datalist>
      <p> Total Points : <input type="number" name="Points"></p>
      <p> Pseudo : <input type="text" name="pseudo"></p>
      <p> Password : <input type="password" name="password"></p>
      <p><input type="submit" value="Inscription" required></p>
      </form>
    </body>

</html>
