
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $emp_name = $_POST["emp_name"];
    $hours_worked = $_POST["hours_worked"];
    $absent_days = $_POST["absent_days"];
    $punch_in = $_POST["punch_in"];
    $punch_out = $_POST["punch_out"];
    
  
    $servername = "your_server";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO employee_data (emp_name, hours_worked, absent_days, punch_in, punch_out) 
            VALUES ('$emp_name', '$hours_worked', '$absent_days', '$punch_in', '$punch_out')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
