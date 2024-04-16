<html>
<body bgcolor=linen>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Enter choice :<br>
<input type="radio" name="ch" value=1> Insert element in queue<br>
<input type="radio" name="ch" value=2> Delete element from queue <br>
<input type="radio" name="ch" value=3> Display content of queue <br>
<br>
 
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</body>
 
</html>

<?php
if(isset($_POST['ch']))
{
$choice=$_POST['ch'];
{
    $arr=array(1,2,3,4,5,6,7,8,9,10);
    echo "<br>Original QUEUE :<br>";
    print_r($arr);
    echo "<br><br>";
        switch($choice)
        {
    case 1:
            echo "<br>";
            array_unshift($arr,"10");
            print_r($arr);
             break;
    case 2:
            $ele=array_shift($arr);
            echo "Deleted element : $ele <br>";
            print_r($arr);
            break;
    case 3:
            print_r($arr);
            break;
        }
}
}
?>