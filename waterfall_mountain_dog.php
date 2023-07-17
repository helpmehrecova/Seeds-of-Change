<?php

// 1. Basic Math Functions

function add($num1, $num2) {
  return $num1 + $num2;
}

function subtract($num1, $num2) {
  return $num1 - $num2;
}

function multiply($num1, $num2) {
  return $num1 * $num2;
}

function divide($num1, $num2) {
  if ($num2 == 0)
    return false;
  else
    return $num1 / $num2;
}

// 2. Multi-dimensional Arrays

$people = array(
  array(
    'name' => 'John',
    'age' => 32
  ), 
  array(
    'name' => 'Mary',
    'age' => 25
  ),
  array(
    'name' => 'Amy',
    'age' => 34
  )
);

function getNames($people) {
  $names = array();

  foreach ($people as $person) {
    array_push($names, $person['name']);
  }
  return $names;
}

// 3. Object Orientation

class Person {
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function greet() {
    return "Hello, my name is " . $this->name . " and I'm " . $this->age . " years old.";
  }
}

$person1 = new Person('John', 32);
$person2 = new Person('Mary', 25);
$person3 = new Person('Amy', 34);

// 4. File Manipulation

$file = fopen('people.txt', 'w');

fwrite($file, "John,32\n");
fwrite($file, "Mary,25\n");
fwrite($file, "Amy,34\n");

fclose($file);

function readPeople() {
  $people = array();

  $file = fopen('people.txt', 'r');

  while ($line = fgets($file)) {
    $person = array();

    list($person['name'], $person['age']) = explode(',', $line);
    array_push($people, $person);
  }

  fclose($file);
  return $people;
}

// 5. Handling Errors

function getPersonByName($people, $name) {
  foreach ($people as $person) {
    if ($person['name'] == $name) {
      return $person;
    }
  }
  throw new Exception("Person with name '$name' not found");
}

try {
  $person = getPersonByName($people, 'Bob');
  echo $person['name'] . "\n";
} catch (Exception $e) {
  echo $e->getMessage() . "\n";
}

// 6. Regular Expressions

function isValidEmail($email) {
  return preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $email);
}

$email1 = 'test@example.com';
$email2 = 'test@example';

if (isValidEmail($email1)) {
  echo "$email1 is a valid email address\n";
} else {
  echo "$email1 is not a valid email address\n";
}

if (isValidEmail($email2)) {
  echo "$email2 is a valid email address\n";
} else {
  echo "$email2 is not a valid email address\n";
}

// 7. Working with Databases

function getPersonById($db, $id) {
  $stmt = $db->prepare('SELECT * FROM people WHERE id = ?');
  $stmt->execute([$id]);

  return $stmt->fetch();
}

$person = getPersonById($db, 1);

echo "Name: " . $person['name'] . "\n";
echo "Age: " . $person['age'] . "\n";

// 8. Working with APIs

function getWeather($location) {
  $endpoint = 'http://api.openweathermap.org/data/2.5/weather';
  $params = array(
    'q' => $location,
    'appid' => 'YOUR_API_KEY'
  );

  $query = http_build_query($params);
  $url = "$endpoint?$query";

  $resp = file_get_contents($url);
  $data = json_decode($resp);

  return $data->main->temp;
}

$weather = getWeather('New York');
echo "The temperature in New York is currently $weather\n";

// 9. Working with HTML & CSS

function showPeopleTable($people) {
  echo "<table>\n";

  echo "<tr>\n";
  echo "  <th>Name</th>\n";
  echo "  <th>Age</th>\n";
  echo "</tr>\n";

  foreach ($people as $person) {
    echo "<tr>\n";
    echo "  <td>" . $person['name'] . "</td>\n";
    echo "  <td>" . $person['age'] . "</td>\n";
    echo "</tr>\n";
  }

  echo "</table>\n";
}

showPeopleTable($people);

// 10. Working with JavaScript

function showPeopleTableJS($people) {
  ?>
  <script type="text/javascript">
    function showPeopleTable() {
      var people = <?php echo json_encode($people); ?>;

      var table = "<table>\n";

      table += "<tr>\n";
      table += "  <th>Name</th>\n";
      table += "  <th>Age</th>\n";
      table += "</tr>\n";

      for (var i=0; i<people.length; i++) {
        table += "<tr>\n";
        table += "  <td>" + people[i].name + "</td>\n";
        table += "  <td>" + people[i].age + "</td>\n";
        table += "</tr>\n";
      }

      table += "</table>\n";

      document.body.innerHTML = table;
    }
  </script>
  <?php
}

showPeopleTableJS($people);

?>