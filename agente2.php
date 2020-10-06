<?php 
    if (isset($_POST['enviar'])) {
        if (is_array($_POST['estado'])) {
            $selected = '';
            $num_countries = count($_POST['estado']);
            $current = 0;
            foreach ($_POST['estado'] as $key => $value) {
                if ($current != $num_countries-1)
                    $selected .= $value.', ';
                else
                    $selected .= $value.'.';
                $current++;
            }
        }
        else {
            $selected = 'Debes seleccionar un estado';
        }
    
        
    }
    $estados[0][0]=5000;
    $estados[0][1]=1995;
    $estados[0][2]=2389;
    $estados[0][3]=1896;
    $estados[0][4]=2099;
    $estados[0][5]=2600;
    $estados[0][6]=2457;
    $estados[0][7]=2809;
    $estados[0][8]=3259;
    $estados[0][9]=4120;

    $estados[1][0]=2178;
    $estados[1][1]=5000;
    $estados[1][2]=516;
    $estados[1][3]=1048;
    $estados[1][4]=796;
    $estados[1][5]=707;
    $estados[1][6]=922;
    $estados[1][7]=909;
    $estados[1][8]=1362;
    $estados[1][9]=2221;

    $estados[2][0]=2389;
    $estados[2][1]=516;
    $estados[2][2]=5000;
    $estados[2][3]=534;
    $estados[2][4]=333;
    $estados[2][5]=213;
    $estados[2][6]=428;
    $estados[2][7]=415;
    $estados[2][8]=868;
    $estados[2][9]=1727;

    $estados[3][0]=1846;
    $estados[3][1]=1050;
    $estados[3][2]=536;
    $estados[3][3]=5000;
    $estados[3][4]=206;
    $estados[3][5]=586;
    $estados[3][6]=763;
    $estados[3][7]=740;
    $estados[3][8]=1203;
    $estados[3][9]=2061;

    $estados[4][0]=2051;
    $estados[4][1]=793;
    $estados[4][2]=340;
    $estados[4][3]=206;
    $estados[4][4]=5000;
    $estados[4][5]=386;
    $estados[4][6]=564;
    $estados[4][7]=541;
    $estados[4][8]=1003;
    $estados[4][9]=1862;

    $estados[5][0]=2603;
    $estados[5][1]=704;
    $estados[5][2]=213;
    $estados[5][3]=585;
    $estados[5][4]=386;
    $estados[5][5]=5000;
    $estados[5][6]=227;
    $estados[5][7]=214;
    $estados[5][8]=666;
    $estados[5][9]=1525;

    $estados[6][0]=2409;
    $estados[6][1]=922;
    $estados[6][2]=429;
    $estados[6][3]=765;
    $estados[6][4]=564;
    $estados[6][5]=229;
    $estados[6][6]=5000;
    $estados[6][7]=96;
    $estados[6][8]=480;
    $estados[6][9]=1339;

    $estados[7][0]=2623;
    $estados[7][1]=910;
    $estados[7][2]=417;
    $estados[7][3]=740;
    $estados[7][4]=541;
    $estados[7][5]=218;
    $estados[7][6]=94;
    $estados[7][7]=5000;
    $estados[7][8]=465;
    $estados[7][9]=1325;

    $estados[8][0]=3043;
    $estados[8][1]=1358;
    $estados[8][2]=864;
    $estados[8][3]=1200;
    $estados[8][4]=1002;
    $estados[8][5]=665;
    $estados[8][6]=480;
    $estados[8][7]=463;
    $estados[8][8]=5000;
    $estados[8][9]=1376;

    $estados[9][0]=3914;
    $estados[9][1]=2226;
    $estados[9][2]=1733;
    $estados[9][3]=2069;
    $estados[9][4]=1870;
    $estados[9][5]=1533;
    $estados[9][6]=1348;
    $estados[9][7]=1331;
    $estados[9][8]=1386;
    $estados[9][9]=5000;

    

    $i=0;
    $aux0=0;
    $aux1=0;
    while($num_countries>$i){
        $j=0;
        while($num_countries>$j){
            $nueva_m[$i][$j]=$estados[$_POST['estado'][$i]][$_POST['estado'][$j]];
            $j++;
        }
        $i++;
    }

    $nodo = array(0,0);
    $costo = 0;
    $min = 0;
    $aux = 0;
    $iMenor = 0;

    //algoritmo vecino mas cercano
    for($i = 0; $i < $num_countries; $i++){
        $matrizAux = $nueva_m;
        $nodo[0] = $i;
        $nodo[1] = $num_countries-1;
        //echo "Camino mas corto = ";
        for($j = 0; $j < $num_countries; $j++){
            if($j != $num_countries-1){
                //$min = numMenor($i);
                for($k = 0; $k < $num_countries; $k++){
                    if($matrizAux[$nodo[0]][$k] < $matrizAux[$nodo[0]][$iMenor]){
                        $iMenor = $i;
                    }
                }
                $nodo[1] = $iMenor;
                $min = $nueva_m[$nodo[0]][$nodo[1]];
                //cambiarNum()
                $matrizAux[$nodo[0]][$nodo[1]] = 5000;
                $matrizAux[$nodo[1]][$nodo[0]] = 5000;
                $matrizAux[$nodo[1]][$i] = 5000;
                //cambiarNodo();
                $nodo[0] = $nodo[1];
                $nodo[1] = $num_countries-1;
                //echo "costo = "+$min
                $costo += $min;
            }else{
                $min = $nueva_m[$nodo[0]][$i];
                //echo "costo = "+$min
                $costo += $min;
            }
        }
        //Aqui es donde tenemos que pintar las rutas con los resultados


    }

    function numMenor($cont){
        
        for($i = 0; $i < $num_countries; $i++){
            if($matrizAux[$nodo[0]][$nodo[$i]] < $matrizAux[$nodo[0]][$iMenor]){
                $iMenor = $i;
            }
        }
        $nodo[1] = $iMenor;
        $aux = $nueva_m[$nodo[0]][$nodo[1]];
        cambiarNum($cont);
        return $aux;
    }

    function cambiarNum($cont){
        $matrizAux[$nodo[0]][$nodo[1]] = 5000;
        $matrizAux[$nodo[1]][$nodo[0]] = 5000;
        $matrizAux[$nodo[1]][$cont] = 5000;
    }

    function cambiarNodo(){
        $nodo[0] = $nodo[1];
        $nodo[1] = $num_countries-1;
    }

     



?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <style>
            #form1{
                background-image: url(img/mapa-de-mexico-con-estados.jpg);
                height: 750px;
                width: 1200px;
            }
            #id0{
                stroke:red; 
                stroke-width:8;
            }
            #id1{
                stroke:blue; 
                stroke-width:8;
            }
            #id2{
                stroke:black; 
                stroke-width:8;
            }
            #id3{
                stroke:yellow; 
                stroke-width:8;
            }
            #id4{
                stroke:orange; 
                stroke-width:8;
            }
            #id5{
                stroke:green; 
                stroke-width:8;
            }
            #id6{
                stroke:gray; 
                stroke-width:8;
            }
            #id7{
                stroke:violet; 
                stroke-width:8;
            }
            #id8{
                stroke:brown; 
                stroke-width:8;
            }
            #id9{
                stroke:gold; 
                stroke-width:8;
            }
            #c{
                fill: blue; 
                stroke: black; 
                stroke-width: 1mm;
            }
        </style>
        <script language="javascript">
            //VALIDACION CHECKBOX
            function validacion(formu, obj) {
                limite=10; //limite de checks a seleccionar
                num=0;
                if (obj.checked) {
                    for (i=0; ele=document.getElementById(formu).children[i]; i++)
                        if (ele.checked) num++;
                    if (num>limite)
                        obj.checked=false;
                    }
                }  
        </script>        
    </head>
    <body >
        <form id="form1">
            <label style="position: absolute; top: 20px; left: 1000px;"><?php 

echo '<div>Has seleccionado: '.$selected.'  <br> Total: '.$num_countries.'<br>';

$nodo = array(0,0);
$costo = 0;
$min = 0;
$aux = 0;
$iMenor = 0;

//algoritmo vecino mas cercano
for($i = 0; $i < $num_countries; $i++){
    
    $matrizAux = $nueva_m;
    if($_POST['estado'][$i]==0){
        $ciudad="BC";
    }
    elseif($_POST['estado'][$i]==1){
        $ciudad="NL";
    }
    elseif($_POST['estado'][$i]==2){
        $ciudad="SLP";
    }
    elseif($_POST['estado'][$i]==3){
        $ciudad="NAY";
    }
    elseif($_POST['estado'][$i]==4){
        $ciudad="GDL";
    }
    elseif($_POST['estado'][$i]==5){
        $ciudad="QRT";
    }
    elseif($_POST['estado'][$i]==6){
        $ciudad="HID";
    }
    elseif($_POST['estado'][$i]==7){
        $ciudad="CDMX";
    }
    elseif($_POST['estado'][$i]==8){
        $ciudad="OAX";
    }
    elseif($_POST['estado'][$i]==9){
        $ciudad="QROO";
    }
    echo '<br><a href="#" id="p'.$i .'" > Orígen '.$ciudad.': ';
    $nodo[0] = $i;
    $nodo[1] = $num_countries-1;
    
    //echo "Camino mas corto = ";
    for($j = 0; $j < $num_countries; $j++){
        if($j != $num_countries-1){
            //$min = numMenor($i);
            for($k = 1; $k < $num_countries; $k++){
                if($matrizAux[$nodo[0]][$k] < $matrizAux[$nodo[0]][$iMenor]){
                    $iMenor = $k;
                    //echo '<br> pos_min = '.$iMenor.' <br>';
                }
            }
            $nodo[1] = $iMenor;
            $min = $nueva_m[$nodo[0]][$nodo[1]];
            //cambiarNum()
            $matrizAux[$nodo[0]][$nodo[1]] = 5000;
            $matrizAux[$nodo[1]][$nodo[0]] = 5000;
            $matrizAux[$nodo[1]][$i] = 5000;
            //cambiarNodo();
            $nodo[0] = $nodo[1];
            $nodo[1] = $num_countries-1;
            //echo "costo = "+$min
            echo ''.$min.', ';
            $costo += $min;
        }else{
            $min = $nueva_m[$nodo[0]][$i];
            //echo "costo = "+$min
            echo ''.$min.'</a> <br>';
            $costo += $min;
        }
    }
    
    

}
            
             ?></div></label>


            
            <?php
            $posicion[0][0]="65";
            $posicion[0][1]="5";
        
            $posicion[1][0]="647";
            $posicion[1][1]="309";
        
            $posicion[2][0]="614";
            $posicion[2][1]="450";
        
            $posicion[3][0]="453";
            $posicion[3][1]="482";
        
            $posicion[4][0]="518";
            $posicion[4][1]="516";
        
            $posicion[5][0]="645";
            $posicion[5][1]="519";
        
            $posicion[6][0]="713";
            $posicion[6][1]="535";
        
            $posicion[7][0]="697";
            $posicion[7][1]="569";
        
            $posicion[8][0]="798";
            $posicion[8][1]="663";
        
            $posicion[9][0]="1152";
            $posicion[9][1]="573";

            
            $nodo = array(0,0);
            $costo = 0;
            $min = 0;
            $aux = 0;
            $iMenor = 0;

//algoritmo vecino mas cercano
for($i = 0; $i < $num_countries; $i++){
    
    $matrizAux = $nueva_m;
    
    echo '<svg width="1500px" height="1500px" id="draw0">';
    $nodo[0] = $i;
    $nodo[1] = $num_countries-1;
    
    //echo "Camino mas corto = ";
    for($j = 0; $j < $num_countries; $j++){
        if($j != $num_countries-1){
            //$min = numMenor($i);
            for($k = 1; $k < $num_countries; $k++){
                if($matrizAux[$nodo[0]][$k] < $matrizAux[$nodo[0]][$iMenor]){
                    $iMenor = $k;
                    //echo '<br> pos_min = '.$iMenor.' <br>';
                }
            }
            $nodo[1] = $iMenor;
            $min = $nueva_m[$nodo[0]][$nodo[1]];
            //cambiarNum()
            $matrizAux[$nodo[0]][$nodo[1]] = 5000;
            $matrizAux[$nodo[1]][$nodo[0]] = 5000;
            $matrizAux[$nodo[1]][$i] = 5000;
            //cambiarNodo();
            $nodo[0] = $nodo[1];
            $nodo[1] = $num_countries-1;
            //echo "costo = "+$min
            //for para obtener posicion para pintar
            $x=0;
            
            $auxx=0;
            $auxy=0;
            while($x<10){
                $y=0;
                while($y<10){
                    if($estados[$x][$y]==$min){
                        $auxx=$x;
                        echo $x.' ';
                        $auxy=$y;
                        echo $y.' ';
                        break;
                    }
                    
                    $y++;
                }
                $x++;
            }
            echo '<line x1="'.$posicion[$auxx][0].'" y1="'.$posicion[$auxx][1].'" x2="'.$posicion[$auxy][0].'" y2="'.$posicion[$auxy][1].'" id="id'.$i.'"></line>
            <circle cx="'.$posicion[$auxy][0].'" cy="'.$posicion[$auxy][1].'" r="8" id="c0"/>';
            $costo += $min;
        }else{
            $min = $nueva_m[$nodo[0]][$i];
            //echo "costo = "+$min
            echo '</svg>';
            $costo += $min;
        }
    }
}
?>
                
            
            
            </form> 
    </body>
</html>



