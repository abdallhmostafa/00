<?php



$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bookingform", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


/*$servername = "localhost";
$username = "root";
$password = "";
$database="bookingform";

$full_name=$_POST['firstname'];
$phone_number=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
if(!empty($name)||!empty($phone)||!empty($email)||!empty($address)||!empty($city)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="bookingform";
    // Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $SELECT="SELECT email FROM customer WHERE email =? LIMIT =1";
    $INSERT ="INSERT INTO customer (full_name , phone_number , email,address ,city values(?,?,?,?,?)";

    //prepare statement 
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;
    if($rnum==0){
        $stmt->close();
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("ssssi",$full_name,$phone_number,$email,$address,$city);
        $stmt->execute();
        echo " successfully" ;
   
    }
         else{
            echo " someone already register this email" ;
        }
        $stmt->close();
        $conn->close();
    
}
}
else{
echo "ALL field are required" ;
die();
}*/
?>