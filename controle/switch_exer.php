<div class="titulo">Switch</div>

<form action="#" method="post">

<input type="number" name="valor" placeholder="Valor"> 
<select name="conversao" id="conversao">
   <option value="km_milhas">km em milhas</option>
   <option value="milhas_km">Milhas em km</option>
   <option value="metros_km">Metros em  KM</option>
   <option value="km_metros">km em metros</option>


  


</select>
<button >Calcular</button>
</form>
<?php
$valor=$_POST["valor"];
$conversao=$_POST["conversao"];
if($_POST){
    switch($conversao){
        case km_milhas:
        echo $valor*1.6;
        break;
        case milhas_km:
        echo $valor/1.6;    
        break;
        case metros_km:
        echo $valor/1000;    
        break;
        case km_metros:
        echo $valor*1000;     
        break;
        default:
         echo "opção não mapeada";
    
    
    }
}



?>