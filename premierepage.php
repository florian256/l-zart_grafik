<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylsheet" href="./premierepage.css">
    <title>premierepage</title>
</head>
<body>
    
<?php  
    include 'header.php'
?>

<?php  
    include 'premierepresentation.php'
?>

   
</div>

<div class="quefaisonsnous">
    <h4> QUE-FAISONS-NOUS?</h4>


<style>  
.quefaisonsnous {
    height: 600px;
    width: auto;
    background-color: blue;
}
h4{ 
    color: black;
}
</style>
</div>

<div class="textile"> <h4 class="texte">TEXTILE </h4> <img class="imagetextile" src="../lezartgrafik/images/covering.jpg" height="100%" alt="camion" id="monImage"></div>

<style>

 /* sert a rien normalement */
.texte>.textile{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: auto;
    width: 50%;
    height: 50%;

}

.imagetextile{
    width: 50%;
    height: 50%;
    margin: auto;
    text-align: center;
}

.texte{
    position: absolute;
    left: 50%;
    top: 50%;
    font-size: 10em;;
    color: white;
   
}

#monImage {
  width: 1400px;
  height: 550px;
  transition: width 0.3s ease-in-out;
  justify-content: center;
  display: flex;
  align-items: center;
}

#monImage:hover {
  width: 800px;
}

#monImage>.textile{
    display: flex;
    justify-content: center;
    align-items: center;
    justify-items: center;
    
}
</style>


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

    <style> 
    .textile {
        height: 600px;
        width: auto;
        border: solid black 2px;
        justify-content: center;
        display: flex;
        position: absolute;
        text-align: center;
    }

    </style>

<div class="covering"> <h4>covering </h4> <img src="../lezartgrafik/images/covering.jpg" height="50%" width="50%" alt="" id="imagecovering" >  </div>
    <style>
    .covering {       
    height: 600px;
    width:auto;
    background-color: blue;
    border: 2px black solid;
    } 

     #imagecovering >.covering{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-items: center;
        text-align: center;
    }

    </style>

<div class="signaletique"> <h4>signalétique </h4> <img src="../lezartgrafik/signalétique.jpg" height="50%" width="50%" alt="panneau"> </div>
    <style> 
    .signaletique {
    height: 600px;
    width:auto;
    background-color: blue;

    }
    </style>

<div class="panneau"> <h4>panneau publicitaire </h4> </div>
    <style>
        .panneau {
            height: 600px;
    width:auto;
    background-color: blue;

        }
    </style>

<div class="parent1">
<div class="div0"> 
<div class="divimg"> </div>
<div class="divdescriptif"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo temporibus culpa debitis nisi explicabo, dignissimos animi laboriosam nulla magni eligendi excepturi earum porro eveniet tenetur et aut eos nihil voluptas.</div>
</div>
</div>

<style>
    .parent1 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div0 { grid-area: 1 / 1 / 5 / 6; 
    height:600px;
    width: 100%;
    justify-content: left;
    display: flex;
    background-color: black;


}

.divimg { grid-area: 1 / 1 / 5 / 3;
    height: 600px; 
    width: 600px;
    background-color: yellow;
    display: flex;
    justify-content: left;
   
}


.divdescriptif { grid-area: 1 / 3 / 5 / 6;
    height: auto;
    width: 100%;
    background-color: white;
    text-align: center;

}
</style>

<div class="parent2">
<div class="illustration"><div class="illustration2"> ILLUSTRATION 100% FR </div> </div>

</div>

<style> 
.illustration { grid-area: 1 / 1 / 6 / 6;
    height: 600px;
    width: 100%;
    border: solid black 2px;

}


.illustration2 { grid-area: 2 / 2 / 5 / 5; 
    height: 600px;
    width: 100%;
    border: solid black 2px;
    margin-left: 10px;
    
    
}

</style>

<div class="confiance"> ILS NOUS FONT CONFIANCE..    <img class="active" src="../lezartgrafik/images/julien.sarl.jpg" alt="">
</div>

<style> 




.confiance {
    height: 500px;
    width: 100%;
    margin: 0 auto;
    padding: 50px;
    
}


</style>

<?php 
    include 'footer.php'
?>

</body>
</html>