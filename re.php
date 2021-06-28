
<?php
$connection= new mysqli("localhost","root" ,"","arm control");



if(isset($_POST['FORWARD'])){

    $my_query = "select * from commands WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO commands (FORWARD) VALUES ('F')";
    $result = mysqli_query($connection, $my_query);
    if($result=='F')
    {
        echo "F";
    }
    else{
        echo "ERROR";
    }

}else if(isset($_POST['R'])){

        $my_query = "select * from commands WHERE 1 ";
        $result = mysqli_query($connection, $my_query);
    
        $my_query = "INSERT INTO commands (R) VALUES ('R')";
        $result = mysqli_query($connection, $my_query);
        if($result)
        {
            echo "R";
        }
        else{
            echo "ERROR";
        }

    }else if(isset($_POST['STOP'])){

        $my_query = "select * from commands  ";
        $result = mysqli_query($connection, $my_query);
    
        $my_query = "INSERT INTO commands (STOP) VALUES ('STOP')";
        $result = mysqli_query($connection, $my_query);
        if($result)
        {
            echo "S";
        }
        else{
            echo "ERROR";
        }


}else if(isset($_POST['L'])){

    $my_query = "select * commands WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO commands (L) VALUES ('L')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "L";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['BACKWARD'])){

    $my_query = "select * from commands WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO commands (BACKWARD) VALUES ('B')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "B";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}





?>