<?php
$host_name = 'db5005921589.hosting-data.io';
$database = 'dbs4962945';
$user_name = 'dbu1060816';
$password = '<Enter your password here.>';

$connection = new mysqli($host_name, $user_name, $password, $database);
$response = array();



if($connection) {
    $sql = "select * from data";
    $result = mysqli_query($connection,$sql);

    if ($result) {
        $i = 0;
        while($row = mysqli_fetch_assoc($result))
        {
            $response[$i]["id"] = $row ["id"];
            $response[$i]["name"] = $row ["name"];
            $response[$i]["age"] = $row ["age"];
            $response[$i]["email"] = $row ["email"];
            $i++;
        }
       
        echo json_encode($response,JSON_PRETTY_PRINT);
        
       
    }

} else {
    echo "Connection failed";
}

?>