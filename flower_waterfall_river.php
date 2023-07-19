<?php

// First Seed - Simple Function
function hello_world()
{
 echo "Hello world!";
}

// Second Seed - Array Building
$food_items = array('apple', 'banana', 'celery', 'dill');

// Third Seed - Looping Through an Array
foreach($food_items as $food) {
    echo $food . "  ";
}

// Fourth Seed - Variable Assignment
$color = "red";

// Fifth Seed - Conditional Statement
if($color == "red") {
    echo "The color is red";
}

// Sixth Seed - Working with Dates
$today_date = date("F j, Y");
echo $today_date . "<br/>";

// Seventh Seed - Working with JSON
$json_data = '{"name":"John Smith","age":30,"city":"New York"}';

// Eighth Seed - Decoding JSON
$decoded_data = json_decode($json_data);

echo $decoded_data->name . " is from " . $decoded_data->city . "<br/>";

// Ninth Seed - Establishing a Database Connection
$dbhost = "localhost";
$dbuser = "username";
$dbpass = "password";
$dbname = "database_name";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Tenth Seed - Executing a Database Query
$sql = "SELECT id, name, age FROM users";
$result = mysqli_query($conn, $sql);

// Eleventh Seed - Looping Through a Database Result
while($row = mysqli_fetch_assoc($result)){
    echo "id: " . $row['id'] . " Name: " . $row['name'] . " Age: " . $row['age'] . "<br/>";
}

// Twelfth Seed - Annotation
// This line of code sets the variable 'color' to be 'red'
$color = "red";

// Thirteenth Seed - Working with Files
$filename = "text.txt";
$file_handle = fopen($filename, 'w');
fwrite($file_handle, "This is some text.");
fclose($file_handle);

// Fourteenth Seed - Working with Exceptions
try {
    throw new Exception('Error processing request');
} catch (Exception $e) {
    echo $e->getMessage();
}

// Fifteenth Seed - Working with Sessions
session_start();
$_SESSION['name'] = "John Smith";

// Sixteenth Seed - Working with Cookies
$cookie_name = "username";
$cookie_value = "John";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// Seventeenth Seed - Working with Regular Expressions
$pattern = "/[a-zA-Z]/";
if (preg_match($pattern, "John Smith")) {
    echo "The pattern matches";
}

// Eighteenth Seed - Working with Classes and Objects
class Person {
    // Class properties and methods
    public $name;
    public $age;
 
    public function getName() {
        return $this->name;
    }
 
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
}
 
$person1 = new Person();
$person1->setName("John Smith");
$person1->setAge(30);
 
echo $person1->getName() . " is " . $person1->getAge() . " years old. <br/>";

// Nineteenth Seed - Working with Interfaces
// Create a simple interface
interface Shape {
    public function calculateArea();
}

// Twentieth Seed - Working with Abstract Classes
// Create an abstract class
abstract class Vehicle {
    protected $make;
    protected $model;
    abstract public function getMakeModel();
}

?>