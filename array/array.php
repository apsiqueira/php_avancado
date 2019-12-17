<div class="titulo">Array</div>
<?php


$nome=["ademir","pablo","siqueira","antonio"];


echo  $nome[rand(0,3)];
echo $nome[array_rand($nome)] ;

?>
<form action="#" name="alturaArvore" method="POST">
<input type="number" name="altura" placeholder="altura">
<button>Gerar Arvore</button>

</form>

<?php



$arvore="";
$altura=$_POST['altura'];

for($i=0;$i<=$altura;$i++){
        $linha=str_repeat("# ",($i));
        $arvore=$linha;   
        
       echo "$arvore <br>";

}

echo (1==true)?"verde":"vermelho";
?>

<table>
    <tr>

    <th>n1</th>
    <th>n2</th>
    <th>n3</th>
    <th>n4</th>
    <th>n5</th>
    </tr>
    <?php
    $matriz=[
        [01,02,03,04,05],
        [06,07,'08',"09","10"],
        [11,12,13,14,15],
        [16,17,18,19,20],
        ];
        
        foreach($matriz as $linha){  ?>
           
           <tr>
        
           <?php foreach($linha as $elemento){?>
             
                <td><?php echo $elemento ;?></td>
          
        
        
           <?php }?>
           </tr>
           <?php
        }
        
    
    ?>


</table>
 


<style>
.corSim {
    background-color: #8FCDFF;
}
.corNao {
    background-color: #FF8F8F;
}



</style>
