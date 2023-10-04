<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Employees</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Company Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Add Employee</a></li>
                <li><a href="view_employees.php">View Employees</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>View Employees</h2>
        <?php
        
        include("includes/db_connection.php");
        
        
        $sql = "SELECT * FROM employee_data";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Employee Name</th><th>Hours Worked</th><th>Absent Days</th><th>Punch-In</th><th>Punch-Out</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["emp_name"] . "</td>";
                echo "<td>" . $row["hours_worked"] . "</td>";
                echo "<td>" . $row["absent_days"] . "</td>";
                echo "<td>" . $row["punch_in"] . "</td>";
                echo "<td>" . $row["punch_out"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No employees found.";
        }
        
        
        $conn->close();
        ?>
    </main>
    <footer>
        &copy; 2023 Your Company
    </footer>
</body>
</html>
