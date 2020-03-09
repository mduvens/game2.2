<?php
    include 'phpconnect.php';
    
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
//     $stmt->execute();

//     // set the resulting array to associative
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//         echo $v;
//     }
// }
// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;
   
    $medalhas = array('🥇','🥈', '🥉') ;
    $sqlDuplicate = "delete r1 from recordes r1 inner JOIN recordes r2 where r1.recorde<r2.recorde and r1.nome = r2.nome";
    $sql = "SELECT * FROM recordes ORDER BY recorde DESC LIMIT 5";
    // $result1 = mysqli_query($conn, $sql1);
    mysqli_query($conn, $sqlDuplicate);
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo " <table id = 'tableR', border = 1 >";
        $cont = 0;
        while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>";
                if ($cont<3){
                    echo "<b id='bMedalha'>";
                    echo "$medalhas[$cont]";
                    echo "</b>";
                    $cont++  ;
                }
                    echo "<b id='bNome'>";
                    echo $row['nome'];
                    echo "</b>";
                    echo "</td>";
                    echo "<td>";
                    echo "<b id='bRecorde'>";
                    echo $row['recorde'];
                    echo "</b>";
                    echo "</td>";
                    echo "</tr>";           
        }
        echo "</table>";
    }else{
        echo "THERE ARE NO HIGHSCORES";
    }
?>