<?php require_once('../inc/header.php')?>
<?php require_once('../inc/connect.php')?>

<div class="row3-add">
    <form class="form2"action="../inc/addDataToDatabase.php" method="post">
    <table id="table1" border=0>
        <tr>
            <td>Enter Index Number: </td>
            <td><input type="text" name="index"></td>
            <td class="right">Select Bank: </td>
            <td>
                <select name="bank" id="#">
                    <option value="people_bank" selected>People's Bank</option>
                    <option value="boc_bank">BOC</option>
                    <option value="sampath_bank">Sampath Bank</option>
                    <option value="hnb_bank">HNB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Enter Name: </td>
            <td><input type="text" name="name"></td>
            <td class="right">Account Number: </td>
            <td><input type="text" name="accnum"></td>
        </tr>
        <tr>
            <td>Birth Day: </td>
            <td><input type="date" name="birthdate" id="" value="0000-00-00"></td>
        </tr>
        <tr>
            <td>City: </td>
            <td><input type="text" name="city"></td>
            <td></td>
            <td colspan="2" ><input id="btn" type="submit" value="SUBMIT"></td>
        </tr>
        <tr>
            <td>Contact: </td>
            <td><input type="text" name="contact"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" id=""></td>
        </tr>
    </table>

    <table id="table2" border=0>
        <tr>
            <td>Enter Index Number: </td>
            <td><input type="text" name="index"></td>
            
        </tr>
        <tr>
            <td>Enter Name: </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Birth Day: </td>
            <td><input type="date" name="birthdate" id="" value="0000-00-00"></td>
        </tr>
        <tr>
            <td>City: </td>
            <td><input type="text" name="city"></td>
            
        </tr>
        <tr>
            <td>Contact: </td>
            <td><input type="text" name="contact"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Select Bank: </td>  
            <td>
                <select name="bank" id="#">
                    <option value="people_bank" selected>People's Bank</option>
                    <option value="boc_bank">BOC</option>
                    <option value="sampath_bank">Sampath Bank</option>
                    <option value="hnb_bank">HNB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Account Number: </td>
            <td><input type="text" name="accnum"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" ><input id="btn" type="submit" value="SUBMIT"></td>
        </tr>
    </table>
    </form>
</div>