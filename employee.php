<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","123","employees") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from employees where gender='M' and birth_date = '1965-02-01' and hire_date > '1990-01-01' order by first_name";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>
