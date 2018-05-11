<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    function test1(){
        $("#id1").load("umi68.php",function(text,status,xhttp){
            console.log(text + ":" + status);

            $("#id2").html(++text);
        });
    }
</script>
<input type="button" onclick="test1()" value="say hello"/>
<div id="id1"></div>
<div id="id2"></div>
<div id="id3"></div>
<button id="bt1">clickmev1</button><br/>
<button id="bt2">clickmev2</button>

<script>
    $(document).ready(function () {
        $("#bt1").click(function(){
            $.get('umi68.php',{max:10},function(data,status){
                $("#id1").html(data+":"+status);
            });
        });

        $("#bt2").click(function(){
            $.post('umi69.php',{max:10},function(data,status){
               $("#id3").html(data + ":" + status);
            });
        });
    });

</script>