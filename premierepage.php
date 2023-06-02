
<?php  
    include 'header.php';
?>

<?php  
    include 'premierepresentation.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./premierepage.css">
    <title>premierepage</title>
</head>
<body>


<style>

.covering{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    background-image: url('./images/covering.jpg');
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 10em;
}


.textile{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    background-image: url('./images/smurboulogne.jpg');
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 10em;
}

.signaletique{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    background-image: url('./images/signalétique.jpg');
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 10em;
}

.panneau{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    background-image: url('./images/130941089_1748141352020523_5384673303095881047_n.png');
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 10em;
}


.quefaisonsnous{
    width: auto;
    height: 80vh;
    background-image: url('./images/Image\ 7.png');
}



</style>

<h4>QUE-FAISONS-NOUS?</h4>

<div class="quefaisonsnous">
</div>
<br>
<div class="textile">
    <h4 class="texte">Textile</h4>
</div>
<br>
<div class="covering">
    <h4>Covering</h4>
</div>
<br>
<div class="signaletique">
    <h4>Signalétique</h4>
</div>
<br>
<div class="panneau">
    <h4>Panneau Publicitaire</h4>
   
</div>

<div class="parent1">
    <div class="div0">
        <div class="divimg"></div>
        <div class="divdescriptif">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo temporibus culpa debitis nisi explicabo, dignissimos animi laboriosam nulla magni eligendi excepturi earum porro eveniet tenetur et aut eos nihil voluptas.</div>
    </div>
</div>

<div class="parent2">
    <div class="illustration">
        <div class="illustration2">ILLUSTRATION 100% FR</div>
    </div>
</div>

<div class="confiance">
    ILS NOUS FONT CONFIANCE...
    <img class="active" src="../lezartgrafik/images/julien.sarl.jpg" alt="">
</div>

<?php 
    include 'footer.php';
?>

<script>
    // Sélectionnez l'élément image
    var image = document.getElementById('monImage');

    // Ajoutez un gestionnaire d'événement pour l'événement mouseover "passage de la souris"
    image.addEventListener('mouseover', function() {
        this.style.width = '1800px';
    });

    // Ajoutez un gestionnaire d'événement pour l'événement mouseout "déplacement du curseur aux dehors"
    image.addEventListener('mouseout', function() {
        this.style.width = '1200px';
    });

    image.addEventListener('mouseover', function() {
        this.style.height = '600px';
    });
</script>

</body>
</html>
