#练习1：第一个网页
<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello World!";
?>  
</body>
</html>

#练习2：连接数据库
<!DOCTYPE html>
<html>
<body>
<?php
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br />';
#echo greeting;   // 输出 "greeting"
?>

<?php
$servername = "localhost";
$servername = "211.71.20.212";
$username = "root";
$password = "123";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
</body>
</html>

#练习3：测试公司数据库
<?php
try {
	$dbh = new PDO('mysql:host=192.168.3.10;dbname=app_missevan', 'missevan', 'woshiceshi');
} catch (Exception $e) {
	echo $e->getMessage();
}

#练习4：
<html>

<body>
<?php
echo "hello world!";
#我是单行注释哦
//我也是单行注释哦
/*
我是多行注释
啥？
你不信？
*/

#php中定义的函数，类，关键字对大小写不敏感
echo "a";
Echo "b";
ECHO "C";

#php中所有的变量都对大小写敏感
$color="red";
echo $color . "<br>";
#echo $Color;

$a=1;
$b=2;
echo $z=$a+$b;

$x=5;
echo "#############################";

function myTest()
{
	global $x,$y;
	$y=1;
	echo $x;
	echo $y; 
}
	
myTest();
echo "######################";
echo $y;

#static变量
function myTest2() 
{
  static $x=0;
  echo $x;
  $x++;
}

myTest2();
myTest2();
myTest2();

#print echo
print "hello world!";
echo  "hello world!","hahahha";

echo "#############################";
$x=123;
var_dump($x);
$y=1.442;
var_dump($y);
$z=array("hello","world","bla");
var_dump($z);
$z1=true;
var_dump($z1);
$zz=null;
var_dump($zz);
echo $zz;

echo "#######################";
class Car
{
	var $color;
	function Car($color="green")
	{
		$this->color=$color;
	}
	function what_color()
	{
		return $this->color;
	}
}

#Car.what_color();

#php字符串
$x="abcd";
echo strlen($x);
echo strpos($x,"a");

#php常量
echo "##################";
define("M","www.app-echo.com");
echo M;

define("M1","www.app-echo.com",true);
echo M1;
echo m1;

#php面向对象
echo "##########starting ###########";
class person
{
	var $name;
	var $sex;
	var $age;
	function __construct($name,$sex,$age)
	{
		$this->name=$name;
		$this->sex=$sex;
		$this->age=$age;
	}
	function say()
	{
		echo "My name is:".$this->name." My sex is:".$this->sex."My age is:".$this->age."<br>";
	}
	function run()
	{
		echo "This people is running";
	}
	function __destruct()
	{
		echo "bye".$this->name."<br>";
	}
}
$p1=new person("Tom","male",20); 
$p2=new person("Lesile","female",30); 
$p3=new person("wang","unknown",25); 
$p1->say();
$p1->run();
echo $p1->name;

#连接本地数据库类
class GetData
{
	var $user;
	var $passwd;
	function __construct($user,$passwd)
	{
		$this->user=$user;
		$this->passwd=$passwd;
	}
	function printl()
	{
		echo $this->user;
	}
}
echo "?????????????????????";
$tmp=new GetData("wgb","123");
$tmp->printl();
echo "?????????????????????";


#本地数据库连接测试
echo "testinggggggggggggggggggggggggggggggggggggggggg"."\n";
$servername = "localhost";
# $servername = "211.71.20.212";
$username = "root";
$password = "123";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


echo "\n";
echo "#######"."\n";

##类的测试
class SimpleClass
{
	public $var="a default value";
	public function displayVar()
	{
		echo $this->var."\n";
	}
}

$test1=new SimpleClass();
$test1->displayVar();

#对象赋值

$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

#$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);

#类的继承
class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();

#伪变量指示器
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        // Note: the next line will issue a warning if E_STRICT is enabled.
        A::foo();
    }
}
echo "##########################";
echo "##1"."\n";
$a = new A();
$a->foo();

// Note: the next line will issue a warning if E_STRICT is enabled.
echo "##2"."\n";
A::foo();
$b = new B();
$b->bar();

// Note: the next line will issue a warning if E_STRICT is enabled.
echo "##3"."\n";
B::bar();


print ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
class Test22
{
	public static $test = 1;
	public static function test()
	{
		echo "hello world!";
	}
}

echo Test22::$test;
echo Test22::test();

#::表示对于静态方法或者属性，不需要实例化就可以引用；

##类常量
echo "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<";
class MyClass
{
    const constant = 'constant value';

    function showConstant() {
        echo  self::constant . "\n";
    }
}

echo MyClass::constant . "\n";

?>


<?php
#php面向对象

?>
</body>
</html>

