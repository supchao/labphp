<head>
    <style
    <link href="css/bootstrap.min.css" rel="stylesheet">

        #intextv {
            overflow: auto;
            margin:auto;
            width: 75%;
            height: 70%;
            padding-top: 10px;
            background-color: powderblue;
            margin-right: 0;
            float: left;
        }

        #fri {
            width: 15%;
            height: 70%;
            padding-top: 10px;
            background-color: whitesmoke;
            float: left;
            align-content: center;
            text-align: center;
        }
        .dcd{
            border:black 1px solid;
        }

        .fridv {
            margin: 3px 0;
        }

        .frili {
            width:auto;
            border: 0;
            background-color: whitesmoke;
            font-size: 15px;
            height:60px;
            width:150px;

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
            font-size: 5px;
            color: slategrey;
        }

        .spanl {
            margin: 0;
            font-size: 5px;
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
if(!isset($_REQUEST['id'])){header('Location:talkroom.php');}
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from member where id={$id}";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $member = $result->fetch_object('member');
    }
}
//$_SESSION[$member->id]=$member;
    $icon = base64_encode($member->icon);
?>
<h1>HELLO ! <?php echo "&nbsp{$member->name}&nbsp" ?></h1>
<img src="data:image/jpeg;base64,<?php echo $icon; ?>"/>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    window.onunload = goodbye

    function goodbye() {
        alert('bye');
    }
</script>
<script>

    $(document).ready(function () {

        get();
        setInterval(function () {
            get();
        }, 500);
        setInterval(function () {
            getfriend();
        }, 500);
        // setInterval(function () {
        //     scroll();
        // }, 2000);

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

    function scroll() {
        var intextv = document.getElementById('intextv');

        // intextv.scrollTop = intextv.scrollHeight;
        alert('ok');

    }

    function get() {
        $.get('checkmessage_1.php', function (object) {
            if (object) {
                var num = JSON.parse(object);
                $("#intextv").empty();
                // console.log(num);
                for (var i = 0; i < num.length; i++) {
                    var ret = num[i].name + " : " + num[i].mesg;
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
        $.get('checkmessage_2.php', function (oct) {
            if (oct) {
                var num = JSON.parse(oct);
                $("#fri").empty();
                var dc = document.createElement("div");
                dc.classList.add("dcd");
                document.getElementById('fri').appendChild(dc);

                for (var i = 0; i < num.length; i++) {
                    var ret = num[i].name + "  is Online";
                    if (num[i].id != <?php echo $member->id;?>) {
                        var dd = document.createElement("div");
                        var dv = document.createElement("button");
                        var dc = document.createElement("div");
                        dv.innerHTML = ret;
                        dv.classList.add("frili");
                        dd.appendChild(dv);
                        dd.classList.add("fridv");dc.classList.add("dcd");
                        document.getElementById('fri').appendChild(dd);
                        document.getElementById('fri').appendChild(dc);
                    }
                }
            }
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
textinput : <input type="text" id="intext" name="intext"/>
<input type="button" name="inser" id="inser" value="inser" onclick=""/>
<input type="button" onclick="location.href='logout.php?id='+<?php echo $member->id; ?> " value="Logout"/>

<br>
<br>
<div style="align-content: center;text-align: center;margin:auto;">
    <div id="intextv">

    </div>
    <div id="fri">

    </div>
</div>
</body>