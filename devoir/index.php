
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body>
<form method="POST" action="./operation.php">
    <div class="item-form">
        <h2>Informaiton de l'Eleve</h2>
        <div class="item">
            <label for="nom">Nom :</label>
            <input  type="text" id="nom" name="nom">
        </div>
        <div class="item">
            <label for="prenom">Prenom :</label>
            <input  type="text" id="prenom" name="prenom">
        </div>
        <div class="item">
            <label for="age">Age :</label>
            <input  type="number" max="20" min="0"  id="age" name='age'>
        </div>
    </div>
    <div class="item-form">
        <h2>Les notes de Devoir</h2>
        <div class='item'>
            <label for="algo_devoir">Note devoir ALGO :</label>
            <input  type="number" max="20" min="0" id="algo_devoir" name="algo_devoir">
        </div>

        <div class='item'>
            <label for="merise_devoir">Note devoir MERISE :</label>
            <input  type="number" max="20" min="0" id="merise_devoir" name="merise_devoir">
        </div>

        <div class='item'>
            <label for="fbd_devoir">Note devoir FBD :</label>
            <input  type="number" max="20" min="0" id="fbd_devoir" name="fbd_devoir">
        </div>

    </div>
    <div class="item-form">
        <h2>Les notes de Partiel</h2>
        <div class='item'>
            <label for="algo_partiel">Note partiel ALGO :</label>
            <input  type="number" max="20" min="0" id="algo_partiel" name="algo_partiel">
        </div>
        <div class='item'>
            <label for="merise_partiel">Note partiel MERISE :</label>
            <input  type="number" max="20" min="0" id="merise_partiel" name="merise_partiel">
        </div>
        <div class='item'>
            <label for="fbd_partiel">Note partiel FBD :</label>
            <input  type="number" max="20" min="0" id="fbd_partiel" name="fbd_partiel">
        </div>
    </div>
    <div class="item-form">
        <input  type="submit" value="calcule" name='send' class="btn">
    </div>
</form>
</body>
</html>