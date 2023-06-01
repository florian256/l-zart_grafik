
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


img{
    width: 260vh;
    height: 80vh;
}




</style>


<div class="quefaisonsnous">
    <h4>QUE-FAISONS-NOUS?</h4>
</div>

<div class="textile">
    <h4 class="texte">TEXTILE</h4>
    <img class="imagetextile" src="./images/smurboulogne.jpg" height="100%" alt="camion" id="monImage">
</div>

<div class="covering">
    <h4>covering</h4>
    <img src="./images/covering.jpg" height="50%" width="50%" alt="" id="imagecovering">
</div>

<div class="signaletique">
    <h4>signalétique</h4>
    <img src="./images/signalétique.jpg" height="50%" width="50%" alt="panneau">
</div>

<div class="panneau">
    <h4>panneau publicitaire</h4>
    <img src="./images/130941089_1748141352020523_5384673303095881047_n.png" height="50%" width="50%" alt="panneau">
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
