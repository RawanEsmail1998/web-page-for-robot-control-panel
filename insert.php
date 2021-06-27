<?php 
$my_sql = mysqli_connect('localhost','root','','remote_control');
if (!$my_sql)
{
die('Could not connect: ' .myaql_error());
}
if(isset($_POST["save"])){
    $engin1 = $_POST["en1"];
    $engin2 = $_POST["en2"];
    $engin3 = $_POST["en3"];
    $engin4 = $_POST["en4"];
    $engin5 = $_POST["en5"];
    $engin6 = $_POST["en6"];
    $query = "INSERT INTO remote_control_taskone VALUES ( '', '$engin1','$engin2','$engin3','$engin4','$engin5','$engin6','')";
    if($my_sql->query($query)) {
        echo "تم اضافة البيانات بنجاح" ;
    }else{
        echo "لم تتم عملية الإضافة";
    }
}elseif(isset($_POST["on"])){
$query = "UPDATE remote_control_taskone SET on_off = 1 order by id DESC LIMIT 1";
if($my_sql->query($query)){
    echo 'تم التشغيل بنجاح';
}else{
    echo 'لم تتم عملية التشغيل';
}
//  $query = $my_sql->prepare('select * from remote_control_taskone order by id DESC LIMIT 1');
//  $query->execute();
//  $result = $query->get_result();
//  echo "<table border='1'>";
//  while($row = $result->fetch_assoc()){
//      echo "<tr><td>محرك 1</td><td>محرك 2</td><td>محرك 3</td><td>محرك 4</td><td>محرك 5</td><td>محرك 6</td></tr>";
//      echo "<tr><td>". $row['engine1']."</td><td>". $row['engine2']."</td><td>". $row['engine3']."</td><td>". $row['engine4']."</td><td>". $row['engine5']."</td><td>". $row['engine6']."</td></tr>";
    
//  }
//  echo "</table>";
}
