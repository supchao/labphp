<form action="brad35.php" method="post">
    Account: <input type="text" name="account"/><br>
    Password: <input type="password" name="passwd"/><br>
    Gender: <input type="radio" name="gender" value="m">Male
    <input type="radio" name="gender" value="f">Female<br/>
    興趣:
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打籃球
    <input type="checkbox" name="like[]" value="3">打麻將<br>
    <input type="checkbox" name="like[]" value="4">打電動
    <input type="checkbox" name="like[]" value="5">打毛線
    <input type="checkbox" name="like[]" value="6">打小孩<br>
    地區:
    <select name="zipcode">
        <option value="401">北屯區</option>
        <option value="402">西屯區</option>
        <option value="403">南屯區</option>
        <option value="404">東屯區</option>
    </select><br>
    <textarea name="memo" rows="10" cols="40">資策會</textarea>
    <br>
    <input type="file" name="upload" />
    <input type="submit" value="OK" />
</form>
