<?php
include("navbar.php");

?>


<?php
$conn = mysqli_connect("localhost", "root", "", "wisdom");
?>

<?php


if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $fname = $_POST["fname"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  
 
  
  

  $query = "INSERT INTO register VALUES(' ','$name','$fname','$email','$contact')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Registration Succesfull'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
.registration_form{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}
.wrapper_registration{
    max-width: 1000px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    padding-left:50px;
}

.wrapper_registration .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}
.wrapper_registration .title::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 40px;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}
.wrapper_registration form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
}



.user-details .input-box select{
    height: 45px;
    width: 100%;
}






.user-details .input-box .details{
    font-weight: 500;
    display: block;
    margin-bottom: 5px;
}

.user-details .input-box .details select{
    /* font-weight: 500; 
    display: block;
    margin-bottom: 5px; */
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all .3s ease;
}


.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all .3s ease;
}


.user-details .input-box option{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all .3s ease;
}





.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9B59B6;
}

form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
}

.gender-details .category{
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}
.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #D9D9D9;
    border: 5px solid transparent;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
    border-color: #D9D9D9;
    background: #9B59B6;
}

form input[type="radio"]{
    display: none;
}

form .button{
    height: 45px;
    margin: 45px 0;
}
form .button input{
    height: 100%;
    width: 100%;
    color: #fff;
    outline: none;
    border: none;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}
form .button input:hover{
    background: linear-gradient(-135deg, #71B7E6, #9B59B6);
}

/* Media Query */
@media (max-width: 584px) {
    .wrapper_registration{
        max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    .gender-details .category{
        width: 100%;
    }
    .wrapper_registration form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width: 0;
    }
}
        

        </style>




  </head>
  
  <body>
  <div class="registration _form">
<div class="wrapper_registration">
        <div class="title">Registration</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your fullname" required>
                </div>
                <div class="input-box">
                    <span class="details">Father's Name</span>
                    <input type="text"  name="fname"placeholder="Enter Father's Name" required>
                </div>
                <div class="input-box">
                    <span class="details">E-Mail</span>
                    <input type="email" name="email"placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="number" name="contact" placeholder="Enter your Contact number" required>
                </div>
                <div class="input-box">
                    <span class="details">Enter Class</span>
                    <select name="class">
                    <option value="">Select Class</option>
                    <option value="Play Group">Play Group</option>
                    <option value="Nursery">Nursery</option>
                    <option value="KG">KG</option>
                    <option value="Prep">Prep</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                </div>
                
                
                
            </div>
            
            <div class="button">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>
</div>





  </body>
</html>

<?php
include("footer.php");
include("footer2.php");


?>