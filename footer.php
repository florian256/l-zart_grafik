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
<div class="div10"> 
<div class="div20"> <ol class="menu"> 
         <ol> <h2> Nos services</h2>
         <li> textile </li>
         <li> covering</li>
         <li>signalétique </li>
         <li> panneaux publicitaires</li>

       
     </li> 
  </ol>
  </ol>
  <img class="lezart3" src=".//LEZARTcontourBlanc.png" height="120px" width="160px" alt="">
   
 </div>

<div class="div30"> <h2>Qui-sommes-nous?</h2></div>

<div class="div40"> 
   <h2>Contact</h2> </div>
</div></div>
 
<style>

    *{
        margin: 0;
    }

    li{
        text-align: center;
        display: flex;
        align-items: left;
    }

    h2{
        color: white;
       
    }

   
    .lezart3 {
        justify-items: left;
        display: flex;
        align-items: left;
        justify-content:left;
        justify-items: left;    
        margin-top: 50px;  
    }

</style>

<style>


/* attention */
.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div10 { grid-area: 1 / 1 / 3 / 6; 
    height: 300px;
    width: 100%;
    display: flex;

}

.div20 { grid-area: 1 / 1 / 3 / 3;
    height: 100%;
    width: 30%;
    background-color: blue;
    justify-content: left;
    display: block;
    text-align: left;
    
}

.div20 >ol {
    display: flex;
    text-align: left;
    justify-content: left;
    align-items: center;
    padding-left: 0px;
    margin: 0;
    margin-left: 0px;
}

.div20 >li {
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
    background-color: pink;
    text-align: center;

}

.div40 { grid-area: 1 / 4 / 3 / 6;
    background-color: green;
    height: 100%;
    width: 30%;
    text-align: right;

}
</style>
</footer>

</html>