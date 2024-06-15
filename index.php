<?php include("connect.php"); ?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Regisration Form </title>
</head>
<body>


    <div class="container">
        <header>Registration</header>

        <form action="connect.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                    <div class="input-field">
                            <label for ="firstname">First Name</label>
                            <input type="text" placeholder="Enter your name" required name="firstname">
                        </div>
                        <div class="input-field">
                            <label for="last name">Last Name</label>
                            <input type="text" placeholder="Enter your Last name" required name="lastname">
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <input type="text" placeholder="Enter your Gender" required name="gender">
                        </div>
                    
                        <div class="input-field">
                            <label>Father/Spouse Name</label>
                            <input type="text" placeholder="Enter your Father/Spouse Name" required name="fathername">
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required name="dob">
                        </div>
                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" placeholder="Nationality" required name="nationality">
                        </div>

                       

                        <div class="input-field">
                            <label>Education Level</label>
                            <input type="text" placeholder="Enter your Education" required name="educationlevel">
                        </div>
                    </div>
                </div>

                <div class="details ID">


                    <div class="fields">
                    <div class="input-field">
                            <label>Date of Joining</label>
                            <input type="date" placeholder="Enter Joining date" required name="joiningdate">
                        </div>

                        <div class="input-field"> 
                            <label>Designation</label>
                            <input type="text" placeholder="Enter Designation" required name="designation">
                        </div>

                        <div class="input-field">
                            <label>Category</label>
                            <input type="text" placeholder="Enter Your Category" required name="category">
                        </div>

                        <div class="input-field">
                            <label>Type Of Employment</label>
                            <input type="text" placeholder="Enter Type Of Employment" required name="employment">
                        </div>

                    
                        <div class="input-field">
                            <label>Mobile No</label>
                            <input type="number" placeholder="Enter Mobile No" required name="mobilenumber">
                        </div>

                        <div class="input-field">
                            <label>UAN</label>
                            <input type="number" placeholder="Enter your UAN" required name="uan">
                        </div>

                        <div class="input-field">
                            <label>PAN</label>
                            <input type="text" placeholder="Enter your PAN" required name="pan">
                        </div>
                        <div class="input-field">
                            <label>ESIC IP</label>
                            <input type="number" placeholder="Enter your ESIC IP" required name="esicip">
                        </div>
                        <div class="input-field">
                            <label>LWF</label>
                            <input type="number" placeholder="Enter your LWF" required name="lwf">
                        </div>


                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Aadhaar</label>
                            <input type="number" placeholder="Enter Your AADHAAR Number" required name="aadhaar">
                        </div>

                        <div class="input-field">
                            <label>Bank A/C number</label>
                            <input type="number" placeholder="Enter Your Bank A/C number" required name="bankac">
                        </div>

                        <div class="input-field">
                            <label>Bank</label>
                            <input type="text" placeholder="Enter your Bank Name" required name="bank">
                        </div>

                        <div class="input-field">
                            <label>Branch</label>
                            <input type="text" placeholder="Enter your Branch " required name="branch">
                        </div>

                        <div class="input-field">
                            <label>Present Address</label>
                            <input type="text" placeholder="Enter present address" required name="presentaadress">
                        </div>

                        <div class="input-field">
                            <label>Permanent Address</label>
                            <input type="text" placeholder="Enter permanent address" required name="permanentaadress">
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                       

                        <div class="input-field">
                            <label>Service Book No</label>
                            <input type="number" placeholder="Enter Service Book Number" required name="servicebookno">
                        </div>

                        <div class="input-field">
                            <label>Date of Exit</label>
                            <input type="date" placeholder="Enter Date of Exit" required name="dateofexit">
                        </div>

                        <div class="input-field">
                            <label>Reason For Exit</label>
                            <input type="text" placeholder="Enter Reason For Exit" required name="reasonforexit">
                        </div>

                        <div class="input-field">
                            <label>Mark Of Identification</label>
                            <input type="text" placeholder="Enter Mark Of Identification" required name="mark">
                        </div>

                    </div> 

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" type="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
</button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
