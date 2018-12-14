<?php
include('connection.php');

$stmt="CREATE TABLE IF NOT EXISTS login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,

    role TINYINT(2) NOT NULL,
    status TINYINT(1) NOT NULL,
    UNIQUE (username),
    UNIQUE (email)
)";
$qry=mysqli_query($conn,$stmt);
if($qry){
	echo "table created successfully";


}
else{
	echo"error creating table or might be exist";
}
//inserting the default data
$stmt="INSERT INTO login (username ,password,email,role,status) VALUES('admin','admin','bhwedyosamana@gmail.com',1,1");
$qry=mysqli_query($conn,$stmt);
if($qry){
	echo"default data added succesfully";

}
else{
	echo"insert error into login table";
}
?>