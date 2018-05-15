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
include_once 'mesg.php';
session_start();
if(!isset($_SESSION['member'])){header('Location:talkroom.php');}
$member = $_SESSION['member'];
echo "<h1>HELLO ! &nbsp".$member->name ."&nbsp</h1>";
?>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setInterval(1000,get());
        $("#inser").click(function(){
            var intext = $("#intext").val();
            $.get('checkmessage.php',{id:<?php echo $member->id; ?>,intext:intext},function(data,status){
                if( status=='success'){
                    strtoview(data);
                }else{
                    var ret = 'server busy...';
                    strtoview(ret);
                }
            });
        });
        // $("#renew").click(function(){
        //     $.get('checkmessage_1.php',function(object){
        //         var num = JSON.parse(object);
        //         $("#intextv").empty();
        //         // console.log(num);
        //         for(var i=0;i<num.length;i++){
        //             var ret = num[i].interdate+"&nbsp"+num[i].name+"&nbsp&nbsp說了"+num[i].mesg;
        //             var dv = document.createElement("div");
        //             dv.innerHTML = ret;
        //             document.getElementById('intextv').appendChild(dv);
        //         }
        //         var intextv = document.getElementById('intextv');
        //         intextv.scrollTop = intextv.scrollHeight;
        //     });
        // });
    });
    function get(){
        $.get('checkmessage_1.php',function(object){
            var num = JSON.parse(object);
            $("#intextv").empty();
            // console.log(num);
            for(var i=0;i<num.length;i++){
                var ret = num[i].interdate+"&nbsp"+num[i].name+"&nbsp&nbsp說了"+num[i].mesg;
                var dv = document.createElement("div");
                dv.innerHTML = ret;
                document.getElementById('intextv').appendChild(dv);
            }
            var intextv = document.getElementById('intextv');
            intextv.scrollTop = intextv.scrollHeight;
        });
    }
    function strtoview(ret){
        var dv = document.createElement("div");
        dv.innerHTML = ret;
        document.getElementById('intextv').appendChild(dv);
        var intextv = document.getElementById('intextv');
        intextv.scrollTop = intextv.scrollHeight;
    }
</script>
<hr>
textinput : <input type="text" id="intext" name="intext"/>
<input type ="button" name="inser" id= "inser"value="inser" onclick=""/>
<input type ="button" name="renew" id= "renew"value="renew" onclick=""/>
<input type="button" onclick="location.href='logout.php'" value="Logout"/>

<br>
<br>
<div id="intextv">

</div>
</body>