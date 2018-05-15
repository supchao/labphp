<!DOCTYPE HTML>

<html>
<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <style>
    #intextv{
    overflow:scroll;
    width:500px;
    height:500px;
    background-color: powderblue;
    }
    </style>
    <script type = "text/javascript">
        $(document).ready(function(){
            // interval(1000,WebSocketTest());

        });
        var ws = new WebSocket("ws://localhost:8080");
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
        function WebSocketTest() {

            if ("WebSocket" in window) {
                //alert("WebSocket is supported by your Browser!");

                // Let us open a web socket

                ws.onopen = function() {

                    // Web Socket is connected, send data using send()
                    ws.send("Message to send");
                    alert("Message is sent...");
                    test3();
                };

                ws.onmessage = function (evt) {
                    var received_msg = evt.data;
                    alert(received_msg);
                };

                ws.onclose = function() {

                    // websocket is closed.
                    alert("Connection is closed...");
                };
            } else {

                // The browser doesn't support WebSocket
                alert("WebSocket NOT supported by your Browser!");
            }
        }

        var i = 0;
        function test1() {
            var input = document.getElementById('input').value;
            ws.send(input);
            inser();
        }
        function inser(){
            var intext = document.getElementById('input').value;
            if(intext != '') {
                xhttp.open('GET', 'checkmessage.php?intext=' + intext + "&idmo=" + id , true);
                xhttp.send();
            }
        }
        function test3(){

        }

    </script>

</head>

<body>
<div id = "sse">
    <a href = "javascript:WebSocketTest()">Run WebSocket</a>
</div>
<input type="text" id="input" />
<input type="button" onclick="test1()" value="send" />
<hr>
<hr>
<div id="intextv">

</div>
</body>
</html>