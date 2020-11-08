<!DOCTYPE html>
 <html>
    <head>
        <title>Cours Complet Bootstrap 4</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

     </head>
     <body>
         <div class="container">
             <h1 style="text-align: center;">Formulaire</h1>
             <form action="reponse.php" method="POST" onsubmit="return validated()">
               <fieldset>
             
                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" onkeyup="testNom()">
                   <div class="erreur-txt" id="nom_error">il ne faut pas ecrire que les Lettres ici</div>
                 </div>

                 <div class="form-group">
                   <label for="nom">Entrez votre Prenom</label>
                   <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom" onkeyup="testPrenom()">
                   <div class="erreur-txt" id="prenom_error">il ne faut pas ecrire que les Lettres ici</div>
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" id="email" placeholder="Email" name="email" onkeyup="testEmail()">
                   <div class="erreur-txt" id="email_error">Le syntaxe de email est non valide</div>

                 </div>
                 	
                 <div class="form-group">
                   <label for="selection">Choisir votre Pays de résidence</label>
                   <select id="selection" class="form-control" name="selectOption">
                    <optgroup label="Selectionner votre pays de residence">
                       <option value="Tunisie">Tunisie</option>
                       <option value="Maroc">Maroc</option>
                       <option value="Algerie">Algerie</option>
                     </optgroup>
                   </select>
                 </div>

                 <div class="form-group">
                    <label>Sexe</label><br>
                    <label><input type="radio" name="radio" value="Homme" id="radio_1">Homme</label><br>
                    <label><input type="radio" name="radio" value="Femme" id="radio_2">Femme</label>
                 </div>

                  
                  <div class="form-group">
                    <label>Domaine</label><br>
                  	<label><input type="checkbox" name="domaine[]" value="Web">Web</label><br>
                  	<label><input type="checkbox" name="domaine[]" value="Mobile">Mobile</label><br>
                  	<label><input type="checkbox" name="domaine[]" value="Intelligence artificielle">Marketing</label>
                  </div>

                 <input type="submit" value="Envoyer" class="btn btn-success" style="width: 100%;" name="submit" >

               </fieldset>

             </form>
         </div>
         <script type="text/javascript" src="scriptt.js"></script>
         <script type="text/javascript">
         </script>
    </body>
</html>