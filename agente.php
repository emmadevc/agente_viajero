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
    $estados[0][0]=0;
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
    $estados[1][1]=0;
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
    $estados[2][2]=0;
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
    $estados[3][3]=0;
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
    $estados[4][4]=0;
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
    $estados[5][5]=0;
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
    $estados[6][6]=0;
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
    $estados[7][7]=0;
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
    $estados[8][8]=0;
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
    $estados[9][9]=0;

    

    $i=0;
    
    while($num_countries>$i){
        $j=0;
        while($num_countries>$j){
            $nueva_m[$i][$j]=$estados[$_POST['estado'][$i]][$_POST['estado'][$j]];
            $j++;
        }
        $i++;
    }

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <style>
            <?php 
            $i=0;
            while($i<$num_countries){

            echo '
            #form'.$i.'{
                background-image: url(img/mapa-de-mexico-con-estados.jpg);
                height: 750px;
                width: 1200px;
            }';
            $i++;
        }
            ?>
            
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
        <?php 
        $i=0;
        while($i<$num_countries){
            echo '<script language="javascript">
            
             $(document).ready(function(){
                   var estado = false;
                 $("#p'.$i.'").on("click",function(){
                        if(estado==true){
                            $(".hidden'.$i.'").css({
                                "visibility":"visible"
                            });
                           estado=false;
                       }
                       else{
                           $(".hidden'.$i.'").css({
                              "visibility":"hidden"
                           });
                            estado=true;
                       }
                 });
                });
            </script>';
            $i++;
        }
        ?>
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
        <form id="form0" method="POST" action="agente.php">
            <label style="position: absolute; top: 0px; left: 1000px;">

            <?php
                
                $total=0;
                $i=0;
                while($i<$num_countries){
                    $total=0;
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
                    echo '<br><a href="#" id="p'.$i .'" style="z-index:999"> Orígen '.$ciudad.': '; 
                    $j=$i;
                    $j_aux=0;
                    $m_aux = $nueva_m;
                    while($j_aux<$num_countries-1){
                        $k=0;
                        $min=5000;
                        $aux_borrarj;
                        $aux_borrark;
                        $j_prime;
                        while($k<$num_countries){
                            if($m_aux[$j][$k]<$min&&$m_aux[$j][$k]>0){
                                $min=$m_aux[$j][$k];
                                $aux_borrarj=$j;
                                $aux_borrark=$k;
                                $j_prime=$k;
                            }
                            if($k==$num_countries-1){
                                $z=0;
                                while($z<$num_countries){
                                    $m_aux[$j][$z]=0;
                                    $m_aux[$z][$j]=0;
                                    $z++;
                                }
                                $j=$j_prime;
                                echo $min.'km, ';
                                $total+=$min;

                            }
                            $k++;
                        }
                        if($j_aux==$num_countries-2){
                            $total+=$nueva_m[$j_prime][$i];
                            echo $nueva_m[$j_prime][$i].'     Total: '.$total.'</a><br>';
                            
                        }
                        $j_aux++;   
                    }
                    $i++;
                }
                $i=0;
                
                
                
                
                //while($i<$num_countries){
                //    $j=0;
                //    while($j<$num_countries){
                //        echo $nueva_m[$i][$j].', ';
                //        $j++;
                //    }
                //    echo '<br>';
                //    $i++;    
                //}   
            ?>
            </label>
            <?php

            $i=0;


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

while($i<1){
    echo '<div class="hidden0" id="hidden0" style="visibility:visible;" ><svg width="1200px" height="770px">'; 
    $j=$i;
    $j_aux=0;
    $m_aux = $nueva_m;
    while($j_aux<$num_countries-1){
        $k=0;
        $min=5000;
        $aux_borrarj;
        $aux_borrark;
        $j_prime;
        while($k<$num_countries){
            if($m_aux[$j][$k]<$min&&$m_aux[$j][$k]>0){
                $min=$m_aux[$j][$k];
                $aux_borrarj=$j;
                $aux_borrark=$k;
                $j_prime=$k;
            }
            if($k==$num_countries-1){
                $z=0;
                                while($z<$num_countries){
                                    $m_aux[$j][$z]=0;
                                    $m_aux[$z][$j]=0;
                                    $z++;
                                }
                $j=$j_prime;
                $x=0;
                $auxx=0;
                $auxy=0;
                while($x<10){
                    $y=0;
                    while($y<10){
                        if($estados[$x][$y]==$min){
                            $auxx=$x;
                            $auxy=$y;
                            break;
                     }
                        $y++;
                    }
                    $x++;
                }
            echo '<line x1="'.$posicion[$auxy][0].'" y1="'.$posicion[$auxy][1].'" x2="'.$posicion[$auxx][0].'" y2="'.$posicion[$auxx][1].'" id="id'.$i.'"></line>
            <circle cx="'.$posicion[$auxx][0].'" cy="'.$posicion[$auxx][1].'" r="8" id="c0"/>';
            }
            $k++;
        }
        if($j_aux==$num_countries-2){
            $x=0;
                $auxx=0;
                $auxy=0;
                while($x<10){
                    $y=0;
                    while($y<10){
                        if($estados[$x][$y]==$nueva_m[$j_prime][$i]){
                            $auxx=$x;
                            $auxy=$y;
                            break;
                     }
                        $y++;
                    }
                    $x++;
                }
            echo '<line x1="'.$posicion[$auxy][0].'" y1="'.$posicion[$auxy][1].'" x2="'.$posicion[$auxx][0].'" y2="'.$posicion[$auxx][1].'" id="id'.$i.'"></line>
            <circle cx="'.$posicion[$auxx][0].'" cy="'.$posicion[$auxx][1].'" r="8" id="c0"/>';
            echo '</svg></div>';
            
        }
        $j_aux++;   
    }
    $i++;
}
                $i=1;
                while($i<$num_countries){
                    echo '<div class="hidden'.$i.'" id="hidden'.$i.'" style="visibility:visible;" ><svg width="1200px" height="765">'; 
                    $j=$i;
                    $j_aux=0;
                    $m_aux = $nueva_m;
                    while($j_aux<$num_countries-1){
                        $k=0;
                        $min=5000;
                        $aux_borrarj;
                        $aux_borrark;
                        $j_prime;
                        while($k<$num_countries){
                            if($m_aux[$j][$k]<$min&&$m_aux[$j][$k]>0){
                                $min=$m_aux[$j][$k];
                                $aux_borrarj=$j;
                                $aux_borrark=$k;
                                $j_prime=$k;
                            }
                            if($k==$num_countries-1){
                                $z=0;
                                                while($z<$num_countries){
                                                    $m_aux[$j][$z]=0;
                                                    $m_aux[$z][$j]=0;
                                                    $z++;
                                                }
                                $j=$j_prime;
                                $x=0;
                                $auxx=0;
                                $auxy=0;
                                while($x<10){
                                    $y=0;
                                    while($y<10){
                                        if($estados[$x][$y]==$min){
                                            $auxx=$x;
                                            $auxy=$y;
                                            break;
                                     }
                                        $y++;
                                    }
                                    $x++;
                                }
                            echo '<line x1="'.$posicion[$auxy][0].'" y1="'.$posicion[$auxy][1].'" x2="'.$posicion[$auxx][0].'" y2="'.$posicion[$auxx][1].'" id="id'.$i.'"></line>
                            <circle cx="'.$posicion[$auxx][0].'" cy="'.$posicion[$auxx][1].'" r="8" id="c0"/>';
                            }
                            $k++;
                        }
                        if($j_aux==$num_countries-2){
                            $x=0;
                                $auxx=0;
                                $auxy=0;
                                while($x<10){
                                    $y=0;
                                    while($y<10){
                                        if($estados[$x][$y]==$nueva_m[$j_prime][$i]){
                                            $auxx=$x;
                                            $auxy=$y;
                                            break;
                                     }
                                        $y++;
                                    }
                                    $x++;
                                }
                            echo '<line x1="'.$posicion[$auxy][0].'" y1="'.$posicion[$auxy][1].'" x2="'.$posicion[$auxx][0].'" y2="'.$posicion[$auxx][1].'" id="id'.$i.'"></line>
                            <circle cx="'.$posicion[$auxx][0].'" cy="'.$posicion[$auxx][1].'" r="8" id="c0"/>';
                            echo '</svg></div>';
                            
                        }
                        $j_aux++;   
                    }
                    $i++;
                }
                    
            ?>
            </form>
            <?php 
            $i=1;
            while($i<$num_countries){

            echo '
            <form id="form'.$i.'"> 
            </form>
            ';
            $i++;
        }
            ?>
    </body>
</html>



