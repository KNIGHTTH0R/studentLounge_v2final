<?php
//live search 
//Check if the string has value
if($_GET['keyword'] && !empty($_GET['keyword']))
{
    //Check if we got a result from user input
    $flag = 0;
        //Connection with DB
        $conn = mysqli_connect('localhost','root','','studentlounge'); //Connection to my database
        //Get input value
        $keyword = $_GET['keyword'];
        //Query to database
        $query = "SELECT * FROM users WHERE user_location LIKE '$keyword%'";
        $result = mysqli_query($conn,$query);

        //Loop for results to return to index.php
        while($row=mysqli_fetch_assoc($result)){
            echo "<a href=explore.php>".$row["user_location"]."</a><br/>";
            $flag = 1 ;
        }
        // Message for no results
        if ($flag == 0){
            echo "<p>No results found :/</p>";
        }

    };

    ?>