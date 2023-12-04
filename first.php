<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /*class statment {
  
    public $name;
   
  
    
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    
    
  }
  
  $stat = new statment();
  
  $stat->set_name('baker');

  echo " hello $stat->get_name()";
  
  */ 
  
  //first task, secound


  /*class FactorialCalculator {
    
    public static function calculate($number) {
        if ($number < 0) {
           
            return "Undefined (Factorial is not defined for negative numbers)";
        } elseif ($number == 0) {
            
            return 1;
        } else {
            // Calculate factorial for positive integers
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }
}


$number = 5;
$result = FactorialCalculator::calculate($number);

echo "Factorial of $number is: $result";*/


/*class IntegerArraySorter {
   
    public static function sortArray($integerArray) {
        sort($integerArray);
        return $integerArray;
    }
}


$inputArray = array(11, -2, 4, 35, 0, 8, -9);

$sortedArray = IntegerArraySorter::sortArray($inputArray);

print_r($sortedArray);
*/




/*class DateDifferenceCalculator {
    private $startDate;
    private $endDate;

    public function __construct($startDate, $endDate) {
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    public function calculateDifference() {
        $interval = $this->startDate->diff($this->endDate);//diff used to calculate the deffirnce bettween dates

        $years = $interval->y;
        $months = $interval->m;
        $days = $interval->d;

        return "Difference: $years years, $months months, $days days";
    }
}


$startDate = '1981-11-03';
$endDate = '2013-09-04';

$dateCalculator = new DateDifferenceCalculator($startDate, $endDate);

echo $dateCalculator->calculateDifference();
*/




















/*class clculater{

function sum($x,$y){

return $x+$y;

}

function subtract($x,$y){
return $x-$y;

}

function multiply($x,$y){
   return $x*$y;

}
public function divide($x, $y) {
    // Check if the divisor is not zero to avoid division by zero
    if ($y != 0) {
        return $x / $y;
    } else {
        return "Error: Division by zero";
    }
}

}
$cc=new clculater();

$ss=$cc->sum(4,5);
$sub=$cc->subtract(4,5);
$mul=$cc->multiply(4,5);
$div=$cc->divide(4,5);
echo " the transaction on first number 4 and secuond number 5 <br>";
echo "sumation: $ss <br>";
echo "subtraction: $sub <br>";
echo "multipieation: $mul <br>";
echo "dividiton: $div <br>";
*/ //calculater

/*if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // If the form was submitted using GET method
    echo "Data received via GET method:<br>";
    echo "Email: " . ($_GET["email"] ?? "") . "<br>";
    echo "Password: " . ($_GET["password"] ?? "") . "<br>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If the form was submitted using POST method
    echo "Data received via POST method:<br>";
    echo "Email: " . ($_POST["email"] ?? "") . "<br>";
    echo "Password: " . ($_POST["password"] ?? "") . "<br>";
} else {
    // If neither GET nor POST method is used
    echo "Invalid request method";
}
*/ //the first one


/*if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // If the form was submitted using GET method
    $url = $_GET["url"] ?? "";

    // Validate the URL (you may want to add more thorough validation)
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Redirect to the provided URL
        header("Location: $url");
        exit;
    } else {
        // Invalid URL, display an error message
        echo "Invalid URL. Please enter a valid URL.";
    }
} else {
    // If the request method is not GET, display an error message
    echo "Invalid request method.";
}
*/ //some Q


// Get the request time from the $_SERVER superglobal
/*$requestTime = $_SERVER['REQUEST_TIME'];

// Format the timestamp (optional)
$formattedTime = date('Y-m-d H:i:s', $requestTime);

// Output the result
echo "Page requested at: $formattedTime";
*/ //for reqjust time


/*
// Get the project name (document root)
$projectName = $_SERVER['DOCUMENT_ROOT'];

// Get the script name
$scriptName = $_SERVER['SCRIPT_NAME'];

// Output the results
echo "Project Name: $projectName<br>";
echo "Script Name: $scriptName";
*/ // for name 



?>
    
</body>
</html>