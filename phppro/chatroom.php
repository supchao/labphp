<head>

    <style>
        #intextv{
            overflow:scroll;
            width:500px;
            height:500px;
            background-color: powderblue;
        }
    </style>
</head>

<?php

include_once 'member.php';
session_start();
if(!isset($_SESSION['member'])){header('Location:talkroom.php');}
$member = $_SESSION['member'];

echo "<h1>HELLO ! &nbsp".$member->name ."&nbsp</h1>";
?>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    lis = 6;
    $(document).ready(function(){
        $("li").click(function(){
          lis = $(this).text();
        });
    });
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState ==4 && xhttp.status == 200){
            var ret = xhttp.responseText;
            if(ret !=0){
                var dv = document.createElement("div");
                    dv.innerHTML = ret;
                    document.getElementById('intextv').appendChild(dv);
                var intextv = document.getElementById('intextv');
                intextv.scrollTop = intextv.scrollHeight;
            }else{
                document.getElementById('intextv').innerHTML = 'xx';
            }
        }
    }
    function inser(){
        var intext = document.getElementById('intext').value;
        if(intext != '') {
            xhttp.open('GET', 'checkmessage.php?intext=' + intext + "&idmo=" + lis + "&id=" +<?php echo $member->id; ?>, true);
            xhttp.send();
        }
    }
</script>
<hr>
textinput : <input type="text" id="intext" name="intext"/>
<input type ="button" value="submit" onclick="inser()"/>
<input type="button" onclick="location.href='logout.php'" value="Logout"/>

<br>
<br>
<div id="intextv">

</div>
</body>