<?php 
require_once('../inc/header.php');
require_once('../inc/connect.php');
?>
<?php

$query = "SELECT * FROM data";
$result = mysqli_query($conn,$query);

if($result){

    $table = '<table border=0 class="show-table">';
    $table .= '<tr><th>Index No</th> <th>Name</th> <th>Birth Date</th> <th>City</th> <th>Contact</th> <th>Email</th>  <th>Bank Name</th> <th>Account Nu</th> <th colspan="2">Option</th></tr>';

    while($record = mysqli_fetch_assoc($result)){
        $table .= '<tr>';
        $table .= '<td>'.$record['indexNo'].'</td>';
        $table .= '<td>'.$record['name'].'</td>';
        $table .= '<td>'.$record['birthday'].'</td>';
        $table .= '<td>'.$record['city'].'</td>';
        $table .= '<td>'.$record['contact'].'</td>';
        $table .= '<td>'.$record['email'].'</td>';
        $table .= '<td>'.$record['bank'].'</td>';
        $table .= '<td>'.$record['account'].'</td>';
        $table .= '<td><a id="u" href="../inc/update.php?index='.$record['indexNo'].'">Update</a></td>';
        $table .= '<td><a id="d" href="../inc/delete.php?index='.$record['indexNo'].'">Delete</a></td>';
        $table .= '</tr>';
    }
    $table .= '</table>';
}else{
    echo"error";
}

mysqli_close($conn);
?>

<div class="row3-show">
    <?php echo $table;  ?>
</div>


