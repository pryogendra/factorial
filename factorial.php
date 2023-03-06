<html>
    <body>
        <form method="POST">
            Enter a number : 
            <input type="text" name="num">
            <input type="submit" value="submit">
        </form>
    </body>
    <?php
    $num=(int)$_POST["num"];
    $fact=1;
    for($i=1;$i<$num+1;$i++)
    {
        $fact=$fact*$i;
    }
    print("factorial is : ".$fact);
    ?>
</html>