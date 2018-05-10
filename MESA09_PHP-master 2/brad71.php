<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function test1() {
        $("#id1").load("brad68.php", function (text, status, xhttp) {
            console.log(text + ":" + status);
            $("#id2").html(++text);
        });
    }

    $( document ).ready(function() {
        $("#bt1").click(function () {
            $.get('brad68.php', function (data, status) {
                $("#id1").html(data + " : " + status);
            });
        });

        $("#bt2").click(function () {
            $.post('brad69.php',
                {max : 10},
                function (data, status) {
                $("#id3").html(data + " : " + status);
            });
        });

    });


</script>

<input type="button" onclick="test1()" value="Say Hello"/>
<div id="id1"></div>
<div id="id2"></div>
<div id="id3"></div>
<button id="bt1">Click Me v1</button>
<button id="bt2">Click Me v2</button>


