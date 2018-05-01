<form action="umi32_sup31.php" method="post">

    Account: <input type="text" name="account"/><br>
    Password: <input type="password" name="passwd"/><br>
    Gender: <input type="radio" name="gender" value="1"/>Male
    <input type="radio" name="gender" value="2"/>Female<br>
    興趣:
    <input type="checkbox" name="like[]" value="1"/>a
    <input type="checkbox" name="like[]" value="2"/>b
    <input type="checkbox" name="like[]" value="3"/>c<br>
    <input type="checkbox" name="like[]" value="4"/>d
    <input type="checkbox" name="like[]" value="5"/>e
    <input type="checkbox" name="like[]" value="6"/>f<br>
    地區：<select name="zipcode">
        <option value="401" name="">北屯區</option>
        <option value="402" name="">南屯區</option>
        <option value="403" name="">西屯區</option>
        <option value="404" name="">東屯區</option>
        <select/><br>
        <textarea name="memo" rows="10" cols="40"></textarea><br>
        <input type ="file" name="upload"/><br>
        <input type="submit" name="putup" value="OK"/><br>
</form>