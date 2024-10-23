<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Practice4!</title>
    <style>
        table {
            border-collapse: separate;
            width: auto;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
            padding: 2px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $size = intval($_POST["size"]);

    if ($size > 0) {
        echo "<table>";
        
        // First cell on empty
        echo "<tr><th></th>"; 

        // Adds a new header every time the loop iterates
        for ($column = 1; $column <= $size; $column++) {
            echo "<th>$column</th>";
        }

        //Close the row
        echo "</tr>";

        // This loop starts a new row with the row headers
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";

            // Inner loop to multiply the row header by each column head
            for ($column = 1; $column <= $size; $column++) {
                $result = $row * $column;
                echo "<td>$result</td>";
            }

            echo "</tr>";
        }

        echo "</table>";

        /*
        So if we start at column 1 and row 1, once it reaches "<td>$result</td>", the loop will increase to column 2 
        and multiply it with the current row. It will then store the result in the cell to the right of the previous one, 
        and so on until the size of the row is reached, where we will close the row. Then we will go back to the outer 
        loop and increase to row 2 and start the process over until we have reached maximum size.

        */

    } else {
        echo "<p>Gotta be positive bro</p>";
    }
}
?>

</body>
</html>
