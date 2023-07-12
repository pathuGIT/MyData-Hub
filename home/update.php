<?php require_once('../inc/connect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Homee.css">
</head>

<?php
error_reporting(0);
$raw = $_GET['index'];

            session_start();
                $_SESSION['current_indeNo'] = $raw;


$query = "SELECT * FROM data WHERE indexNO = $raw";
$result = mysqli_query($conn,$query);

if($result){

    $table = '<table border=0 class="show-table">';
    $table .= '<tr><th>Index No</th> <th>Name</th> <th>Birth Date</th> <th>City</th> <th>Contact</th> <th>Email</th>  <th>Bank Name</th> <th>Account Nu</th> <th colspan="2">Option</th></tr>';

    while($record = mysqli_fetch_assoc($result)){
        echo"<div class='row3-add'>
            <form class='form2'action='../inc/updateToDatabase.php' method='post'>
            <table border=0>
                <tr>
                    <td>Enter Index Number: </td>
                    <td><input type='text' name='index' value='".$record['indexNo']."'></td>
                    <td class='right'>Select Bank: </td>
                    <td>
                        <select name='bank' id='#'>
                            <option value='people_bank' selected>Peoples Bank</option>
                            <option value='boc_bank'>BOC</option>
                            <option value='sampath_bank'>Sampath Bank</option>
                            <option value='hnb_bank'>HNB</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Enter Name: </td>
                    <td><input type='text' name='name' value='".$record['name']."'></td>
                    <td class='right'>Account Number: </td>
                    <td><input type='text' name='accnum' value='".$record['account']."'></td>
                </tr>
                <tr>
                    <td>Birth Day: </td>
                    <td><input type='date' name='birthdate' id=' value='".$record['birthday']."'></td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td><input type='text' name='city' value='".$record['city']."'></td>
                    <td></td>
                    <td colspan='2' ><input id='btn' type='submit' value='SUBMIT'></td>
                </tr>
                <tr>
                    <td>Contact: </td>
                    <td><input type='text' name='contact' value='".$record['contact']."'></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type='email' name='email' id=' value='".$record['email']."'></td>
                </tr>
            </table>
            </form>
        </div>";
    }

}else{
    echo"error";
}
?>


