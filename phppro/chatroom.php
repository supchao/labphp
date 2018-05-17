<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.toast.css" rel="stylesheet" >

    <style>
    button{
        outline:none;
    }
    #intextv {
        overflow: scroll;
        text-align: center;
        width: 40%;
        height: 70%;
        padding-top: 10px;
        background-color: powderblue;
        float:left;
        margin-left: 25%;
    }
    .dip{
        float:right;
    }.dipl{
        float:left;
    }
    #fri {
        width: 15%;
        height: 70%;
        padding-top: 10px;
        background-color: whitesmoke;
        align-content: center;
        text-align: center;
        float:left;
        margin-left:0;
    }

    .dcd {
        border: black 1px solid;
    }

    .fridv {
        margin: 3px 0;
    }

    .frili {
        border: 0;
        background-color: whitesmoke;
        font-size: 18px;
        height: 60px;
        width: auto;
        margin: auto;
        text-align: center;

    }

    .divtexr {
        text-align: right;
        margin: 10px 20px;
    }

    .divtexl {
        text-align: left;
        margin: 10px 20px;
    }

    .spanr {
        margin: 0;
        font-size: 12px;
        color: slategrey;
    }

    .spanl {
        margin: 0;
        font-size: 12px;
        color: slategrey;
    }

    .dintexr {
        margin: 0 3px;
    }

    .dintexl {
        margin: 0 3px;
    }
    </style>
</head>
<?php

include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';
session_start();
if (!isset($_SESSION['member'])) {
    header('Location:talkroom.php');
}
if (isset($_SESSION['member'])) {
    $member = $_SESSION['member'];
    $id=$member->id;


}

$icon = base64_encode($member->icon);
?>
<h1 class="h1" style="text-align: center">HELLO ! <?php echo $member->name;?>  歡迎進入</h1>


<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(document).ready(function () {

        setInterval(function () {
            get();
        }, 500);
        setInterval(function () {
            getfriend();
        }, 500);

        $("#inser").click(function () {
            var intext = $("#intext").val();
            if (intext != "") {
                $.get('checkmessage.php', {id:<?php echo $member->id; ?>, intext: intext}, function (data, status) {
                    if (status == 'success') {
                        get();
                        $("#intext").val('');
                    } else {
                        var ret = 'server busy...';
                        strtoview(ret);
                        $("#intext").val('');
                    }
                });
            }
            var intextv = document.getElementById('intextv');
            var iit = intextv.scrollHeight;
            intextv.scrollTop = iit;
        });
    });
    function get() {
        $.get('checkmessage_1.php',{id:<?php echo $member->id; ?>}, function (object) {
            if (object) {
                var num = JSON.parse(object);
                $("#intextv").empty();
                // console.log(num);
                for (var i = 0; i < num.length; i++) {
                    var ret = num[i].name + " : " + num[i].mesg ;

                    var dp = document.createElement("p");
                    var ds = document.createElement("span");
                    dp.innerHTML = ret;
                    ds.innerHTML = num[i].interdate;
                    var dv = document.createElement("div");
                    dv.appendChild(dp);
                    dv.appendChild(ds);

                    if (num[i].id == <?php echo $member->id?>) {
                        dv.classList.add("divtexr");
                        dp.classList.add("dintexr");
                        ds.classList.add("spanr");
                    }
                    else {
                        dv.classList.add("divtexl");
                        dp.classList.add("dintexl");
                        ds.classList.add("spanl");
                    }
                    document.getElementById('intextv').appendChild(dv);

                }
            }
        });
    }
    function getfriend() {
        $.get('checkmessage_2.php' , function (oct,status) {
            if (oct) {
                var num = JSON.parse(oct);
                $("#fri").empty();
                var dc = document.createElement("div");
                dc.innerHTML = '上線成員';
                dc.classList.add("dcd");
                document.getElementById('fri').appendChild(dc);

                for (var i = 0; i < num.length; i++) {
                    var ret = num[i].name + "  is Online";
                    if (num[i].id != <?php echo $member->id?>) {
                        var dd = document.createElement("div");
                        var dv = document.createElement("button");
                        var dc = document.createElement("div");
                        dv.innerHTML = ret;
                        dv.classList.add("frili");
                        dd.appendChild(dv);
                        dd.classList.add("fridv");
                        dc.classList.add("dcd");
                        document.getElementById('fri').appendChild(dd);
                        document.getElementById('fri').appendChild(dc);
                    }
                }
            }
            else{}
            // else{alert("xxx");}
        });
    }

    function strtoview(ret) {
        var dv = document.createElement("div");
        dv.innerHTML = ret;
        document.getElementById('intextv').appendChild(dv);
        var intextv = document.getElementById('intextv');
        intextv.scrollTop = intextv.scrollHeight;
    }
</script>
<hr>
<div style="text-align: center">
你想說 : <input type="text" id="intext" name="intext"/>
<input class="btn btn-info" type="button" name="inser" id="inser" value="inser" onclick=""/>
<input class ="btn btn-danger" type="button" onclick="location.href='logout.php?id='+<?php echo $member->id; ?> " value="Logout"/>
</div>
<br>
<br>
<div class="container">

    <div id="intextv">
    </div>
    <div id="fri">

    </div>

</div>
</body>