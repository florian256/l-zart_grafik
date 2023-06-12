
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
    
    <title>premierepage</title>
</head>
<body>




<style>

.covering{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 40px;
}



.signaletique{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 40px;
}

.panneau{
    width: auto;
    height: 80vh;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bolder;
    font-size: 40px;
}


.quefaisonsnous{
    width: auto;
    height: 600px;
   
}

.confiance {
    height: 600px;
    width: 100%;
    border: solid black 2px;
    
}

.espace6{
    height: 100px;
    width: 100%;
    
}

.espace7{
height: 100px;
 width: 100%;
           
        }


   
.espace1{
height: 80px;
        }

.quefaisonsnous {
    height: 600px;
    width: auto;
    background-color: white;
}

h4{ 
    color: yellow;
    font-size: 40px;
}

.textile {
    height: 600px;
    width: auto;
    border: solid black 2px;
    justify-content: center;
    display: flex;
    text-align: center;
    margin-top: 800px;
    font-size: 40px;
   
}


.texte{
   
    font-size: 40px;
    color: white;
    text-align: center;
    display: flex;
    align-items: center;
    top: 50%;
    bottom: 50%;
    
   
}

#monImage {
  width:100%;
  height: 100%;
  transition: width 0.3s ease-in-out;
  justify-content: center;
  display: flex;
  align-items: center;
  text-align: center;
  margin: auto;
}

a{
    text-decoration: none;
    color: white;
    font-size: 40px;
    
}

.espace2{
height: 80px;
        }

  

     #imagecovering >.covering{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-items: center;
        text-align: center;
    }

    .co{
    position: absolute;
    font-size: 40px;
    color: white;
    text-align: center;
    display: flex;
    align-items: center;
    top: 50%;
    bottom: 50%;
   
    }

    .espace3{
            height: 80px;
        }

        .signaletique {
    height: 600px;
    width:auto;
    position: relative;
    justify-content: center;
    display: flex;
    text-align: center;

    }

    .sign{
    position: absolute;
    font-size: 40px;
    color: white;
    text-align: center;
    display: flex;
    align-items: center;
    top: 50%;
    bottom: 50%;

    }

    .espace4{
            height: 80px;
        }

        .panneau {
        height: 600px;
        width:auto;
        position: relative;
        justify-content: center;
        display: flex;
        text-align: center;

    }

    .publicitaire{
        position: absolute;
    font-size: 40px;
    color: white;
    text-align: center;
    display: flex;
    align-items: center;
    top: 50%;
    bottom: 50%;
    }


    .espace5{
            height: 100px;
            width: 100%;
            border: 2px solid black;
        }

        .parent1 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 200px;
}

h5{
    font-size: 40px;
}

.div0 { grid-area: 1 / 1 / 5 / 6; 
    height:600px;
    width: 100%;
    justify-content: left;
    display: flex;

}

.divimg { grid-area: 1 / 1 / 5 / 3;
    height: 700px; 
    width: 900px;
    background-color: yellow;
    display: flex;
    justify-content: left;
   
}


.divdescriptif { grid-area: 1 / 3 / 5 / 6;
    height: 700px;
    width: 100%;
    background-color: white;
    text-align: center;

}
.illustration { grid-area: 1 / 1 / 6 / 6;
    height: 600px;
    width: 100%;
    border: solid black 2px;

}



</style>

<h4>QUE-FAISONS-NOUS?</h4>

<div class="quefaisonsnous">
    <h4> QUE-FAISONS-NOUS?</h4>
        <img src="./images/LEZARTcontourBlanc.png" height="600px" width="100%" alt="">
</div>
<div class="espace1">
   
</div>



<div class="textile">
    <h4 class="texte"><a href="./pagetextile.php"> TEXTILE </h4> 
    <img class="" src="./images/smurboulogne.jpg" height="100%" width="100%" alt="camion" id="monImage"></a> 
</div>
 

<div class="espace2">
  
</div>



<div class="covering"> <h4 class="co"> covering </h4> <img src="../l-zart_grafik/images/covering3.jpg" height="100%" width="100%" alt="" id="imagecovering" >  </div>




<div class="espace3">
   
</div>




<div class="signaletique"> <h4 class="sign"> signalétique </h4> <img src="../l-zart_grafik/images/signalétique.jpg" height="100%" width="100%" alt="panneau"> </div>
    

<div class="espace4">
    
</div>

<div class="panneau"> <h4 class="publicitaire"> panneau publicitaire </h4> <img src="../l-zart_grafik/images/panneaupub2.jpg" height="100%" width="100%" alt=""> </div>
    

<div class="espace5">
 
    </div>

<div class="parent1">
<div class="div0"> 
<div class="divimg"> <img src="../l-zart_grafik/images/valeo.jpg" height="100%" width="100%" alt=""> </div>
<div class="divdescriptif"> <h5> Des réalisations sur mesure ... pour tous les budgets</h5> <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet incidunt omnis ad sint eum provident hic quisquam fuga odit, ut, quidem vero molestias aspernatur corrupti magnam natus sequi voluptatum dolorum! Cupiditate pariatur ut voluptatibus, voluptas maxime eaque aliquam hic vero dignissimos autem placeat corporis recusandae fuga, aut animi officia rerum voluptatem, eveniet omnis earum. Maxime assumenda dolorem totam autem perspiciatis? Adipisci harum, officiis alias ad ullam nisi vitae illo doloremque nostrum, voluptate beatae reiciendis esse distinctio consectetur fugiat omnis soluta molestias rem repellat maxime animi eius? Adipisci fuga neque quam quod deleniti officiis! Quo, facilis tenetur aut eveniet explicabo minima suscipit repellat et nam amet commodi. Adipisci a minus dolorum rem velit dignissimos magni neque suscipit, voluptatibus saepe sapiente atque maxime ipsam esse consequuntur distinctio dolor aliquam blanditiis expedita omnis? Facilis dolorum natus cupiditate possimus incidunt quo quam maxime voluptates! Hic architecto incidunt cupiditate illo, earum modi ipsam similique quibusdam eligendi laudantium ea odio ratione enim, error adipisci culpa laboriosam cum fuga a laborum quasi? Excepturi sint quia recusandae eligendi? Dolores eum deleniti nobis veritatis est sed, eligendi voluptates maiores maxime magni harum perspiciatis repellat quidem. Ullam nostrum corporis earum, cumque nesciunt dignissimos facere! Quo cumque voluptates, quas explicabo nisi autem, nostrum beatae, culpa fugit voluptatum laborum! Natus quisquam sed optio quam, doloribus explicabo eveniet deserunt tenetur reprehenderit dicta quasi nam molestiae, ducimus corrupti atque nobis ullam adipisci animi soluta eos beatae! Nesciunt, quos expedita libero alias ratione veritatis commodi fugiat minus impedit ipsum id explicabo modi corrupti animi quaerat hic at odio aspernatur maxime excepturi. Ad inventore sed consequuntur fugit blanditiis quidem totam, tempora perspiciatis nostrum odio in unde doloremque ab temporibus! Quod dolorum quam culpa temporibus consequatur tenetur totam eveniet eius suscipit quisquam, reiciendis nobis assumenda repellat officia commodi cumque consectetur quo veritatis explicabo, dicta, tempora facere quia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt debitis praesentium sapiente incidunt quod beatae vero necessitatibus possimus et deleniti, odio excepturi ipsum rerum at nisi libero aut voluptatum cupiditate eaque molestias. At sed assumenda consequuntur officia, ducimus maxime veritatis rerum illum ipsum nulla numquam, asperiores laudantium natus? Sit blanditiis cum nulla fuga ducimus odit omnis amet unde voluptatem facilis, quae libero necessitatibus provident asperiores fugit repellendus obcaecati. Culpa est sed asperiores beatae? Aspernatur libero tempore minima dolorum. Quas illo, odio perspiciatis reprehenderit maiores similique dolorem fuga, doloribus reiciendis voluptatem modi maxime dicta labore, earum tempore obcaecati eos aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo temporibus culpa debitis nisi explicabo, dignissimos animi laboriosam nulla magni eligendi excepturi earum porro eveniet tenetur et aut eos nihil voluptas.</div>
</div>
</div>



<div class="parent2">
<div class="illustration"> ILLUSTRATION 100% FR </div> </div>



<!--  slider   -->


<div class="espace7"> </div>


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


    var image = document.getElementById('imagecovering');
    image.addEventListener('mouseover', function() {
  this.style.width = '1990px';
});

    image.addEventListener('mouseover', function() {
  this.style.height = '680px';
});



// Sélectionnez l'élément image
var image = document.getElementById('monImage');

// Ajoutez un gestionnaire d'événement pour l'événement mouseover "passage de la souris"
image.addEventListener('mouseover', function() {
  this.style.width = '1990px';
});


image.addEventListener('mouseover', function() {
  this.style.height = '680px';
});


</script>

</body>
</html>
