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
    <div class="textile3"> </div>
<div class="textile4"> </div>
<div class="textile5"> </div> </div> <br><br><br><br><br><br><BR></BR><BR></BR><BR></BR><br><br><br><br><br><br> <BR></BR><BR></BR><BR></BR>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maiores placeat accusamus ipsa asperiores soluta libero quia. Perspiciatis omnis laudantium ab tempore reiciendis, nemo numquam minus ipsum, alias soluta enim? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere eius deleniti corrupti sunt error voluptatibus velit odio molestias corporis, possimus sed delectus doloremque distinctio hic ipsam voluptates assumenda eveniet laudantium?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quis soluta reprehenderit, magnam saepe, ratione neque culpa possimus autem fugiat, porro ipsam necessitatibus in nobis. Ipsum iste qui consectetur debitis!
<h4> NOS RÉALISATIONS</h4>
    
<div class="textile6"> </div>

<div class="textile7"> </div>
<div class="textile8"> </div>
<div class="div9"> </div>
<div class="div10"> </div>
<div class="div11"> </div>
<div class="div12"> </div>
<div class="div13"> </div>
<div class="div14"> </div>
<div class="div15"> </div>
<div class="div16"> </div>
<div class="div17"> </div>
<div class="div18"> </div>
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

h4{
    text-align: center;
    size: 40px;
}

.textile { grid-area: 1 / 1 / 7 / 6;
    height: 1200px;
    width: 100%;
    background-color: white;
   

}

.textile2 { grid-area: 1 / 1 / 3 / 6; 
    height: 800px;
    width: auto;
    

}

.textile3 { grid-area: 1 / 1 / 3 / 4; 
    border: solid black 2px;
    margin: 40px;
    width: 800px;
    height: 800px;
    margin-left: 90px;

}


.textile4 { grid-area: 1 / 4 / 2 / 6; 
    border: solid black 2px;
    height: 245px;
    width: 300px;
    margin: 20px;
    margin-top: 40px;
    justify-content: right;
    display: flex;
   
    
}



.textile5 { grid-area: 2 / 4 / 3 / 6; 
    height: 245px;
    border: solid black 2px;
    margin: 20px;
    width: 300px;
    margin-top: 6px;
   
}


.textile6 { grid-area: 3 / 1 / 4 / 6; 
        display: flex;
        text-align: center;
       

}

.textile7 { grid-area: 3 / 1 / 4 / 2; }

.textile8 { grid-area: 3 / 3 / 4 / 4; }

.div9 { grid-area: 3 / 5 / 4 / 6; }

.div10 { grid-area: 4 / 1 / 5 / 2; }

.div11 { grid-area: 4 / 3 / 5 / 4; }

.div12 { grid-area: 4 / 5 / 5 / 6; }

.div13 { grid-area: 5 / 1 / 6 / 2; }

.div14 { grid-area: 5 / 3 / 6 / 4; }

.div15 { grid-area: 5 / 5 / 6 / 6; }

.div16 { grid-area: 6 / 1 / 7 / 2; }

.div17 { grid-area: 6 / 3 / 7 / 4; }

.div18 { grid-area: 6 / 5 / 7 / 6; }

    </style>

  
</body>  
    <?PHP
    include 'footer.php' 
    ?>
</html>