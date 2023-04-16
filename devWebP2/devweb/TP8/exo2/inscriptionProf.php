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
      <form action="enregistrerProf.php" method="POST">
      <p> Prenom : <input type="text" name="prenom"></p>
      <p> Nom : <input type="text" name="nom"></p>
      <p> Matiere : <input list="Matiere" name="matiere" id="matiere"></p>
      <datalist id="Matiere">
          <option value="Maths">
          <option value="Anglais">
          <option value="Dev Web">
          <option value="Onde">
      </datalist>
      <p> Pseudo : <input type="text" name="pseudo"></p>
      <p> Password : <input type="password" name="password"></p>
      <p><input type="submit" value="Valider" required></p>
      </form>
    </body>

</html>
