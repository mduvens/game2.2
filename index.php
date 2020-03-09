<?php
include 'phpconnect.php';
?>
<!doctype html>

<head>
        <meta charset=UTF-8 name="viewport" content="width=device-width">
        <title> Luso Runner </title>
        <link rel="icon" href="img/newIconRun.ico">
        <style>
                html,
                body {
                        padding: 0;
                        margin: 0;
                        overflow: hidden;
                }

                canvas {
                        display: block;
                }
        </style>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
             var recordCount = 5;
            $("#btnTabelaRecordes").hover(function(){
                $("#comments").load("loadH.php");
            });
        });
        
    </script>
    <script>
        let recorde,rNome;
        $(document).ready(function(){
                $("#btnSave").click(function(){  
                        recorde = highscore;
                        rNome = strTitle(document.getElementById("inputNome").value); 
                        console.log(recorde);
                        console.log(rNome);
                $("#comments").load("saveH.php", {
                    rNome: rNome,
                    recorde: recorde
                });
                });
                $("#btnTabelaRecordes").click(function(){
                            $.get("loadH.php",function(data,status){
                                $("#comments").html(data);
                                // $("#guardado").css("display", "block");
                                // $("#guardado").html(data);
                                
                            })
                    })
        });
        </script>
        <script>
        //     $(document).ready(function(){
                    
        //     })
        </script> 

</head>

<body>
         
        <!-- <div id="container" charset="utf-8"></div> -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- TEST </div> -->
        <div id="inputR">
                <button id="btnSave" >Save</button>
                <input id = "inputNome" placeholder ="Name">
        </div>
        <div id="top5">
                <b>Top 5</b>
        </div>
        <div id="nomeInvalido">
                <b>Invalid</b>
        </div>
        <div id="novoRecorde">
                <b>New Highscore!</b>
        </div>
        <div id="morte"><b>☠️</b></div>
        <div class="highscore"><b id="infoHighScore">HighScore</b>
                <div class="valorHighscore"></div>
        </div>
        <div class="speed"><b id="infoSpeed">SPEED</b>
                <div class="valorSpeed"></div>
        </div>
        <div id="maxSpeed">
                <b>Max</b>
        </div>
        <div id="danger">
                <b>⚠️</b>
        </div>
        </div>
        <div id="btnTabelaRecordes">
                <b>🏆</b>
        </div>
        <div id="danger2">
                <b>⚡</b>
        </div>
        <div class="score">
                <div class="valorScore"></div>
        </div>
        <div id="comments" align="center">
                <!-- <?php
                //     $sql = "SELECT * FROM recordes ORDER BY recorde DESC LIMIT 4";
                //     $result = mysqli_query($conn, $sql);
                //     if(mysqli_num_rows($result) > 0){
                //         echo "NOT WORKING";
                //         echo " <table id = 'tableR', border = 1 >";
                //         while ($row = mysqli_fetch_assoc($result)){   
                //             echo "<tr>";
                //             echo "<td>";
                //             echo $row['nome'];
                //             echo "</td>";
                //             echo "<td>";
                //             echo "<b>";
                //             echo $row['recorde'];
                //             echo "</b>";
                //             echo "</td>";
                //             echo "</tr>";
                //         }
                //         echo "</table>";
                //     }else{
                //         echo "THERE ARE NO HIGHSCORES";
                //    }
                ?> -->
                </div>
        <div id="guardado">
                <b>GUARDADO!</b>
        </div>        
       
                
        <script src="ammo.js" charset="UTF-8"></script>
        <script src="cannon.js" charset="UTF-8"></script>
        <script src="threee.js" charset="UTF-8"></script>
        <script src="physi.js" charset="UTF-8"></script>
        <script src="physijs_worker.js" charset="UTF-8"></script>
        <script src="gsap.min.js"></script>
       
        <script src="OrbitControls.js"></script>
        <script src="Main.js" charset="UTF-8"></script>
       
</body>

</html>