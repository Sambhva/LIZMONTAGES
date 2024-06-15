<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $fathername = $_POST['fathername'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $educationlevel = $_POST['educationlevel'];
    $joiningdate = $_POST['joiningdate'];
    $designation = $_POST['designation'];
    $category = $_POST['category'];
    $employment = $_POST['employment'];
    $mobilenumber = $_POST['mobilenumber'];
    $uan = $_POST['uan'];
    $pan = $_POST['pan'];
    $esicip = $_POST['esicip'];
    $lwf = $_POST['lwf'];
    $bankac = $_POST['bankac'];
    $bank = $_POST['bank'];
    $branch = $_POST['branch'];
    $presentaadress = $_POST['presentaadress'];
    $permanentaadress = $_POST['permanentaadress'];
    $servicebookno = $_POST['servicebookno'];
    $dateofexit = $_POST['dateofexit'];
    $reasonforexit = $_POST['reasonforexit'];
    $mark = $_POST['mark'];
    
    echo ' YOUR DATA IS INSERTED SUCCSESFULLY <br><br><br>';
    echo ' 
    
    <div class="container">

    <a href="display.php" class="button button--piyo">
        <div class="button__wrapper">
            <span class="button__text">ENTRY</span>
        </div>
        </div>
        
        ';

  $con = mysqli_connect("localhost","root","","employee");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
else{
    $sql = "INSERT INTO `set` (`firstname`, `lastname`, `gender`, `fathername`, `dob`, `nationality`, `educationlevel`, `joiningdate`, `designation`, `category`, `employment`, `mobilenumber`, `uan`, `pan`, `esicip`, `lwf`, `bankac`, `bank`, `branch`, `presentaadress`, `permanentaadress`, `servicebookno`, `dateofexit`, `reasonforexit`, `mark`) VALUES ('$firstname', '$lastname', '$gender', '$fathername', '$dob', '$nationality', '$educationlevel', '$joiningdate', '$designation', '$category', '$employment', '$mobilenumber', '$uan', '$pan', '$esicip', '$lwf', '$bankac', '$bank', '$branch', '$presentaadress', '$permanentaadress', '$servicebookno', '$dateofexit', '$reasonforexit', '$mark' )";
    $result = mysqli_query($con, $sql);

$sql = "SELECT * FROM `set`";
$result = mysqli_query($con, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
// echo $num;
// echo " records found in the DataBase<br>";
    // if($num> 0){
    
    //     // We can fetch in a better way using the while loop
    //     while($row = mysqli_fetch_assoc($result)){
    //         // echo var_dump($row);
    //         echo $row['firstname']. $row['lastname']. $row['gender']. $row['fathername'] .$row['dob']. $row['nationality']. $row['educationlevel']. $row['joiningdate']. $row['designation']. $row['category']. $row['employment']. $row['mobilenumber']. $row['uan']. $row['pan']. $row['esicip']. $row['lwf']. $row['bankac']. $row['bank']. $row['branch']. $row['presentaadress']. $row['permanentaadress']. $row['servicebookno']. $row['dateofexit']. $row['reasonforexit']. $row['mark'];
    //         echo "<br>";
    //     }
    

    if($result){

    }else {
        echo ' THE RECORD IS NOT INSERTED SUCCSESFULLY !! '.mysqli_error($con);
    }


}

}

?>