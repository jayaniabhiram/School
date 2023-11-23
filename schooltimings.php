<?php
include("navbar.php");
include("topbutton.php");
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .timings_head{
  text-align: center;
  padding-top:50px;

}

.table-resp {
  border-collapse: collapse;
  /* margin:0 auto; */
  border: 20px solid #ffffff;
  border-radius: 20px;
  /* box-shadow: 10px 25px 30px rgba(30,30,200,0.3); */
  /* margin-left:50%;
  margin-right: 50px; */
  position: relative;
  max-width: 100%;
  width:80%;
  margin: 0 auto;
}
/* .head_1 th{
  text-align:center;
  padding:25px;
  font-size:25px;
  /* background-color:yellow; 
  
} */
 

.head th{
  text-align:center;
  padding:15px;
  font-size:30px;
  background: #15a8d4;
  border-radius: 40px;
  /* box-shadow: 10px 25px 30px rgba(30,30,200,0.3); */
  margin-left:50%;
  margin:50px;
}

.text td{
  background-color: #8ad2ee;
  text-align:center;
  width:500px;
  padding:10px;
  font-size:20px;
  /* box-shadow: 10px 25px 30px rgba(30,30,200,0.3); */
  margin-left:50%;
  margin:50px;
}


</style>
</head>
<body>
<h1 class="timings_head">School Timings</h1>


<table class="table-resp">
  
  <thead>
    
    
    <tr class="head">
      <th colspan="2">Winter</th>
    </tr>
  </thead>
  
  <tbody>
    <tr class="text">
      <td>Monday to Friday</td>
      <td>7:30am to 1:00pm</td>
    </tr>
    <tr class="text">
      <td>Saturday</td>
      <td>7:30am to 12:00pm</td>
  </tr>
    <tr>
      <td><br></td>
      </tr>
    
    <tr class="head">
      <th colspan="2">Summer</th>
    </tr>
    <tr class="text">
      <td>Monday to Friday</td>
      <td>7:15am to 1:15pm</td>
    </tr>
    <tr class="text">
      <td>Saturday</td>
      <td>7:15am to 11:30pm</td>
    </tr>
    <tr>
      <td><br></td>
      </tr>
   
    <tr class="head">
      <th colspan="2">Principal Office Hours</th>
    </tr>
    <tr class="text">
      <td colspan="2">8:00am to 10:00am</td>
      
    </tr>
    <tr class="text">
      <td colspan="2">On all days except Sundays and Holidays</td>
    </tr>
    <tr>
      <td><br></td>
      </tr>
    <tr class="head">
      <th colspan="2">Office Hours</th>
    </tr>
    <tr class="text">
      <td colspan="2">8:00am to 12:00pm</td>
      
    </tr>
    <tr class="text">
      <td colspan="2">No School business will be transacted on holidays</td>
    </tr>
    
    
    
    
  </tbody>
</table>





























<?php
include("footer.php");
include("footer2.php");
?>

    
</body>
</html>