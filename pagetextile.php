<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>textile</title>
</head>
<body>

<?PHP 
    include 'header.php';
    ?>

<?PHP 
 include 'premierepresentation.php'
?>
<div class="espace"> </div>
    <style> 
    .espace {
        height: 80px;
        width: auto;
    }
    </style>
   
    <div class="parent">
        
<div class="textile">  <h4>TEXTILE</h4>
<div class="textile2"> 
    <div class="textile3"><div class="textile5"> <img src="../l-zart_grafik/images/textile2.jpg" height="100%" width="100%" alt="">  </div> <div class="textile6"> <img src="../l-zart_grafik/images/textile3.jpg" height="100%" width="100%" alt=""></div> <div class="textile4"> <img src="../l-zart_grafik/images/textile1.jpg" height="100%" width="100%" alt=""> </div> 
  
    
    </div>
    </div> <br><br><br><br><br><br><BR></BR><BR></BR><BR></BR><br><br><br><br><br><br> <BR></BR><BR></BR><BR></BR>

    


<div class="textile7"> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maiores placeat accusamus ipsa asperiores soluta libero quia. Perspiciatis omnis laudantium ab tempore reiciendis, nemo numquam minus ipsum, alias soluta enim? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere eius deleniti corrupti sunt error voluptatibus velit odio molestias corporis, possimus sed delectus doloremque distinctio hic ipsam voluptates assumenda eveniet laudantium?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quis soluta reprehenderit, magnam saepe, ratione neque culpa possimus autem fugiat, porro ipsam necessitatibus in nobis. Ipsum iste qui consectetur debitis!</p> <br> <br> <br>
<h4> NOS RÉALISATIONS</h4></div>

<div class="textile8"> <div class="div9"> <img src="../l-zart_grafik/images/textile7.jpg" height="100%" width="100%" alt=""></div>
<div class="div10"> </div>
<div class="div11"> </div>
<div class="div12"> </div>
<div class="div13"> </div>
<div class="div14"> </div>
</div>

<div class="div15">
<div class="div16"> </div>
<div class="div17"> </div>
<div class="div18"> </div> 
<div class="div19"> </div>
<div class="div20"> </div>
<div class="div21"> </div>
</div>

<div class="finbody"> vous êtes intéressé? </div>
<div class="contact"> contactez-nous! </div>
<div class="vide"> </div>
<div class="footer"> <?php include 'footer.php'; ?> </div>

</div>


     
    </div>

    <style> 



.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(6, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

p{
    font-size: 30px;
    text-align: center;
}

h4{
    text-align: center;
    font-size: 80px;
    color: aqua;
}

.textile { grid-area: 1 / 1 / 7 / 6;
    height: 1200px;
    width: 100%;
    background-color: white;
   
   

}

.textile2 { grid-area: 1 / 1 / 3 / 6; 
    height: 900px;
    width: 100%;

    

}

.textile3{ grid-area: 1 / 1 / 3 / 4; 
    border: solid black 2px;
    background-color: white;
    width: 100%;
    height: 800px;
    max-width: 90%;
    margin: 0px 10px 10px 5%;

}


.textile4 { grid-area: 1 / 4 / 2 / 6; 
    height: 100%;
    width: 60%;
    position: relative;
    display: flex;
    
      
} 

.textile5{ grid-area: 2 / 4 / 3 / 6; 
    height: 385px;
   
    margin-left: 20px;
    width: 33%;
    background-color: white;
    right: 50%;
    display: flex;
    position: absolute;
    right: 95px;
   
}


.textile6 { grid-area: 3 / 1 / 4 / 6; 
        display: flex;
        height: 385px;
        width: 33%;
        position: absolute;
        right: 95px;
        margin-top: 415px;
       

}

.textile7 { grid-area: 3 / 1 / 4 / 2; 
    height: 650px;
    width: auto;
    position: absolute;
    top: 1700px;

}

.textile8 { grid-area: 3 / 3 / 4 / 4;
    height: 700px;
    width: 100%;
    
    
    
  
   

}

.div9 { grid-area: 3 / 5 / 4 / 6; 
    height: 500px;
    width: 25%;
    border: 2px black solid;
    margin: 20px;
 
    position: relative;
    z-index: 100;
    left: 4%;
    
  
}

.div10 { grid-area: 4 / 1 / 5 / 2;  
    height: 70px;
    width: 25%;
    border: 2px solid black;
    margin: 100px;
    bottom: 70px;
    position: relative;
    z-index: 100; 

}

.div11 { grid-area: 4 / 3 / 5 / 4; 
    height: 500px;
    width: 25%;
    border: 2px black solid;
    position: relative;
    z-index: 100;
    bottom: 800px;
    left: 32%;
    margin: 120px;

}

.div12 { grid-area: 4 / 5 / 5 / 6; 
    height: 500px;
    width: 25%;
    border: 2px black solid;
    margin: 50px;
    position: relative;
    z-index: 100;
    bottom:1425px;
    left: 65%;
    margin: 120px;
    margin-top: auto;
    

}

.div13 { grid-area: 5 / 1 / 6 / 2;
    height: 70px;
    width: 25%;
    border: 2px solid black; 
    position: relative;
    z-index: 100;
    bottom: 1515px;
    left: 32%;
    margin: 120px;
}

.div14 { grid-area: 5 / 3 / 6 / 4;
    height: 70px;
    width: 25%;
    border: 2px solid black; 
    position: relative;
    z-index: 100;
    bottom: 1710px;
    left: 65%;
    margin: 120px;
 }

.div15 { grid-area: 5 / 5 / 6 / 6; 
    height: 700px;
    width: 100%;
  
}

.div16 { grid-area: 6 / 1 / 7 / 2;
    height: 500px;
    width: 25%;
    border: 2px black solid;
    margin: 20px;
    position: relative;
    z-index: 100;
    left: 4%;
 }

.div17 { grid-area: 6 / 3 / 7 / 4; 
    height: 70px;
    width: 25%;
    border: 2px solid black;
    margin: 120px;
    bottom: 70px;
    position: relative;
    z-index: 100;
    right: 1%;
    
}

.div18 { grid-area: 6 / 5 / 7 / 6; 
    height: 500px;
    width: 25%;
    border: 2px black solid;
    position: relative;
    z-index: 100;
    bottom: 795px;
    left: 32%;
    margin: 120px;
}

.div19{
    height: 500px;
    width: 25%;
    border: 2px black solid;
    position: relative;
    z-index: 100;
    bottom:1417px;
    left: 65%;
    margin: 120px;
    margin-top: auto;

}

.div20{
    height: 70px;
    width: 25%;
    border: 2px solid black; 
    position: relative;
    z-index: 100;
    bottom: 1515px;
    left: 32%;
    margin: 120px;
    display: flex;

}

.div21{
    height: 70px;
    width: 25%;
    border: 2px solid black; 
    position: relative;
    z-index: 100;
    bottom: 1710px;
    left: 65%;
    margin: 120px;

}

.finbody{
    height: 300px;
    width: 100%;
    text-align: center;
    font-size: 100px;
    color: aqua;
}

.contact{
    height: 150px;
    width: 400px;
    border: 2px solid aqua;
    justify-content: center;
    display: flex;
    align-items: center;
    position: relative;
    left: 40%;
    font-size: 40px;
    color: aqua;
}

.vide{
    height: 100px;
    width: 100%;
}



    </style>

  
</body>  


    
</html>