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
            #form1{
                background-image: url(img/mapa-de-mexico-con-estados.jpg);
                height: 750px;
                width: 1200px;
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
        <!-- <script>
            function realizaProceso(valorCaja1, valorCaja2){
                var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
                };
                 $.ajax({
                    data:  parametros,
                    url:   'agente.php',
                    type:  'post',
                    beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) {
                        $("#resultado").html(response);
                    }
                });
            }          
        </script> -->
        
    </head>
    <body >
        <form id="form1" method="POST" action="agente.php">
            <label style="position: absolute; top: 300px; left: 1000px;"><?php echo '<div>Has seleccionado: '. $nueva_m[2][1].' '.$selected.'  <br> Total: '.$num_countries.'</div>'; ?></label>


            <svg width="1500px" height="1500px" >
    <line x1="65" y1="5" x2="647" y2="309" stroke="black" stroke-width="8"></line>
    <line x1="713" y1="535" x2="697" y2="569" stroke="black" stroke-width="8"></line>
</svg>
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 5px; left: 65px;" value="bc"/>
            <!--<input type="checkbox" name="check2" onchange="validacion('form1', this)" style="position: absolute; top: 360px; left: 230px;" value="bcs"/>
            <input type="checkbox" name="check3" onchange="validacion('form1', this)" style="position: absolute; top: 165px; left: 225px;" value="son"/>
            <input type="checkbox" name="check4" onchange="validacion('form1', this)" style="position: absolute; top: 187px; left: 413px;" value="chi"/>-->
            
<!--            <input type="checkbox" name="check5" onchange="validacion('form1', this)" style="position: absolute; top: 325px; left: 618px;" value="coa"/>-->
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 309px; left: 647px;" value="nl"/>
            <!--<input type="checkbox" name="check7" onchange="validacion('form1', this)" style="position: absolute; top: 340px; left: 349px;" value="sin"/>
            <input type="checkbox" name="check8" onchange="validacion('form1', this)" style="position: absolute; top: 376px; left: 462px;" value="dur"/>-->
            
<!--            <input type="checkbox" name="check9" onchange="validacion('form1', this)" style="position: absolute; top: 425px; left: 548px;" value="zac"/>-->
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 450px; left: 614px;" value="slp"/>
<!--            <input type="checkbox" name="check11" onchange="validacion('form1', this)" style="position: absolute; top: 393px; left: 690px;" value="tam"/>-->
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 482px; left: 453px;" value="nay"/>
            
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 516px; left: 518px;" value="gdl"/>
            <!--<input type="checkbox" name="check14" onchange="validacion('form1', this)" style="position: absolute; top: 459px; left: 561px;" value="ags"/>
            <input type="checkbox" name="check15" onchange="validacion('form1', this)" style="position: absolute; top: 494px; left: 609px;" value="gnj"/>-->
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 519px; left: 645px;" value="qrt"/>
            
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 535px; left: 713px;" value="hid"/>
            <!--<input type="checkbox" name="check18" onchange="validacion('form1', this)" style="position: absolute; top: 571px; left: 497px;" value="col"/>
            <input type="checkbox" name="check19" onchange="validacion('form1', this)" style="position: absolute; top: 560px; left: 605px;" value="mch"/>
            <input type="checkbox" name="check20" onchange="validacion('form1', this)" style="position: absolute; top: 571px; left: 673px;" value="edm"/>-->
            
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 569px; left: 697px;" value="cdmx"/>
            <!--<input type="checkbox" name="check22" onchange="validacion('form1', this)" style="position: absolute; top: 587px; left: 690px;" value="mor"/>
            <input type="checkbox" name="check23" onchange="validacion('form1', this)" style="position: absolute; top: 578px; left: 729px;" value="pue"/>
            <input type="checkbox" name="check24" onchange="validacion('form1', this)" style="position: absolute; top: 566px; left: 735px;" value="tlx"/>-->
            
            <!--<input type="checkbox" name="check25" onchange="validacion('form1', this)" style="position: absolute; top: 558px; left: 785px;" value="ver"/>
            <input type="checkbox" name="check26" onchange="validacion('form1', this)" style="position: absolute; top: 645px; left: 672px;" value="guer"/>-->
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 663px; left: 798px;" value="oax"/>
<!--            <input type="checkbox" name="check28" onchange="validacion('form1', this)" style="position: absolute; top: 620px; left: 966px;" value="tab"/>-->
            
            <!--<input type="checkbox" name="check29" onchange="validacion('form1', this)" style="position: absolute; top: 666px; left: 970px;" value="chis"/>
            <input type="checkbox" name="check30" onchange="validacion('form1', this)" style="position: absolute; top: 533px; left: 1060px;" value="cam"/>
            <input type="checkbox" name="check31" onchange="validacion('form1', this)" style="position: absolute; top: 481px; left: 1097px;" value="yuc"/>-->
            <input type="checkbox" name="estado[]" onchange="validacion('form1', this)" style="position: absolute; top: 573px; left: 1152px;" value="qroo"/>
            <input type="submit" style="position: absolute; top: 450; left: 880px; height: 50px; border-radius: 10px">

            <!-- <input type="text" name="caja_texto" id="valor1" value="0"/> 
            Introduce valor 2
            <input type="text" name="caja_texto" id="valor2" value="0"/>
            Realiza suma
            <input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcular" style="position: absolute; top: 450; left: 880px; height: 50px; border-radius: 10px"/>
            <br/>
            Resultado: <span id="resultado">0</span> -->
            </form> 
    </body>
</html>



