<html>
<body>
<form method="post">
<p>Enter Name</p>
<input type="text" name="name" />
<p>Enter Roll number</p>
<input type="text" name="number" />
<p>Enter class</p>
<input type="text" name="cls" />
<p>Enter city</p>
<input type="text" name="cty" />
<input type="submit" name="submit" />
</form>
<?php
class student
{
    public $name, $rno, $class, $city;
}
$a = new student();
if(isset($_POST['submit'])){
$a->name=$_POST['name'];
$a->rno=$_POST['number'];
$a->class=$_POST['cls'];
$a->city=$_POST['cty'];
echo"Name of student= $a->name<br>";
echo"Roll number of student= $a->rno<br>";
echo"Class= $a->class<br>";
echo"City= $a->city<br>";
}
?>
</body>
</html>