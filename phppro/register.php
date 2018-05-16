
<?php
    include_once 'sql.php';

    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwwd = $_REQUEST['passwd'];
        $name = $_REQUEST['name'];
        $mesg=$_REQUEST['mesg'];
        $newpaddwd = password_hash($passwwd, PASSWORD_DEFAULT);

        $icon=null;
        if($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
        }

        $sql = "insert into `member`(`account`,`passwd`,`name`,`icon`)" .
            "values('{$account}','{$newpaddwd}','{$name}','{$icon}')";

        if($mysqli->query($sql)){
           header('Location: talkroom.php');
        }else{
            echo 'insert error';
        }
    }
?>

<script>
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200){
            var ret = xhttp.responseText;
            if (ret != 0){
                document.getElementById('mesg').innerHTML = 'XXX';
            }else{
                document.getElementById('mesg').innerHTML = 'OK';
            }
        }
    }


    function isNewAccount() {
        var account = document.getElementById('account').value;
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }
</script>
<form method="post" enctype="multipart/form-data">
    account : <input name="account" id="account" onchange="isNewAccount()"/>
    <span id="mesg" name="mesg"></span><br>
    passwd : <input type="password" name="passwd"/><br>
    real name : <input name="name"/><br>
    Icon: <input type="file" name="icon" /><br>
    <input type="submit" value="new"/><br>
</form>