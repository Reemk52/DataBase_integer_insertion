<?php 
    $Number = $_GET['number'];
    $Fname = $_GET ['Fname'];
    $user="root";
    $password="";
    $host="localhost";
    $my_DB="task3training";
    //DB connection 
$query = "INSERT INTO sensordata('Fname,'Number') VALUES ('$Fname','$Number')";

    
    if ( !( $database = mysqli_connect( $host, $user, $password, $my_DB ) ) ) 
    	die( "<p>Could not connect to database</p>" ); 
   
   if ( !mysqli_select_db( $database, $my_DB) )
 	die( "<p>Could not open form database</p>" );

//query form database
 if ( !( $result = mysqli_query( $database,$query) ) ) //17
 {
 print( "<p>Could not execute query!</p>" );
 die( mysqli_error($database) );//20
 } // end if

print "added successfully!";

 mysqli_close( $database );

?>