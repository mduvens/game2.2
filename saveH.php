<?php


    include 'phpconnect.php';

    $nome = $_POST['rNome'];
    $recorde = $_POST['recorde'];
    if($nome != "" && strlen($nome) <=10){
        $sql = "INSERT INTO `recordes` (`nome`, `recorde`) VALUES ('$nome', $recorde)";
  
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);    
    }
    else{
        ?>
        <div id="erro">Erro.</div>
        <?php
    }
?>
    <!-- $sql = "INSERT INTO `recordes` (`nome`, `recorde`) VALUES ($nome, $record);";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "NOT WORKING";
        while ($row = mysqli_fetch_assoc($result)){
            echo "<p>";
            echo $row['nome'];
            echo "  ";
            echo "<b>";
            echo $row['recorde'];
            echo "</b>";
            echo "</p>";
        }
    }else{
        echo "THERE ARE NO HIGHSCORES";
    } -->
