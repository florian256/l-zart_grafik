<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>footer</title>
</head>
<body>
    
</body>

<footer> 


<div class="parent">
<div class="di10"> 
<div class="di20"> <ol class="menu"> 
         <ol> <h3> Nos services</h3>
         <li> textile </li>
         <li> covering</li>
         <li> signalétique </li>
         <li> panneaux publicitaires</li>

       
     </li> 
  </ol>
  </ol>
  <img class="lezart3" src="../l-zart_grafik/images/LEZARTcontourBlanc.png" height="120px" width="180px" alt="lézart bleu">
   
 </div>

<div class="div30"> <h3>Qui-sommes-nous?</h3></div>

<div class="div40"> 
   <h3>Contact</h3> </div>
</div></div>
 
<style>

    *{
        margin: 0;
    }

    li{
        text-align: center;
        display: flex;
        align-items: left;
        font-size: 20px;
    }

    h3{
        color: white;
        font-size: 30px;
       
    }

   
    .lezart3 {
        display: flex;
        position: relative;
        top: 15%;
        left: 5%;
       
                
    }


/* attention */
.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.di10 { grid-area: 1 / 1 / 3 / 6; 
    height: 300px;
    width: 100%;
    display: flex;
    background-color: aqua;

}

.di20 { grid-area: 1 / 1 / 3 / 3;
    height: 100%;
    width: 30%;
    justify-content: left;
    display: block;
    text-align: left;
    background-color: aqua;
    
}

.di20 >ol {
    display: flex;
    text-align: left;
    justify-content: left;
    align-items: center;
    padding-left: 0px;
    margin: 0;
    margin-left: 0px;
}

.di20 >li {
    display: flex;
    text-align: left;
    justify-content: left;
    align-items: center;
    padding-left: 0px;
    margin: 0;
    margin-left: 0px;

}

.div30 { grid-area: 1 / 3 / 3 / 4; 
    height: 100%;
    width: 40%;
    background-color: aqua;
    text-align: center;

}

.div40 { grid-area: 1 / 4 / 3 / 6;
    background-color: aqua;
    height: 100%;
    width: 30%;
    text-align: right;
    position: relative;
    right: 1%;

}
</style>
</footer>

</html>