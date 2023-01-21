<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
    
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $msg=$_POST['msg']
    }
    

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact-form";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contact (fname, lname, email, phone, msg) VALUES ( '$fname', '$lname', '$email,'$phone','$msg')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>