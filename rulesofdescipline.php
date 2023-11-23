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
        @import url(https://fonts.googleapis.com/css?family=Montserrat:900|Raleway:400,400i,700,700i);
/*** FONTS ***/
/*** VARIABLES ***/
/* Colors */
/*** EXTEND ***/
/* box-shadow */
 ol.gradient-list > li, ol.gradient-list > li::before {
	 box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
}
/*** STYLE ***/
 *, *:before, *:after {
	 box-sizing: border-box;
}
 html, body {
	 margin: 0;
	 padding: 0;
}
h1{
	font-size:50px;
	text-align:center;
}
 body {
	 background-color: #fafafa;
	 color: #1d1f20;
	 font-family: 'Raleway', sans-serif;
}
 main {
	 display: block;
	 margin: 0 auto;
	 max-width: 100rem;
	 padding: 1rem;
}
 ol.gradient-list {
	 counter-reset: gradient-counter;
	 list-style: none;
	 margin: 1.75rem 0;
	 padding-left: 1rem;
}
 ol.gradient-list > li {
	 background: white;
	 border-radius: 0 0.5rem 0.5rem 0.5rem;
	 counter-increment: gradient-counter;
	 margin-top: 1rem;
	 min-height: 3rem;
	 padding: 1rem 1rem 1rem 3rem;
	 position: relative;
}
 ol.gradient-list > li::before, ol.gradient-list > li::after {
	 background: linear-gradient(135deg, #83e4e2 0%, #a2ed56 100%);
	 border-radius: 1rem 1rem 0 1rem;
	 content: '';
	 height: 3rem;
	 left: -1rem;
	 overflow: hidden;
	 position: absolute;
	 top: -1rem;
	 width: 3rem;
}
 ol.gradient-list > li::before {
	 align-items: flex-end;
	 content: counter(gradient-counter);
	 color: #1d1f20;
	 display: flex;
	 font: 900 1.5em/1 'Montserrat';
	 justify-content: flex-end;
	 padding: 0.125em 0.25em;
	 z-index: 1;
}
 ol.gradient-list > li:nth-child(10n+1):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
}
 ol.gradient-list > li:nth-child(10n+2):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
}
 ol.gradient-list > li:nth-child(10n+3):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
}
 ol.gradient-list > li:nth-child(10n+4):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
}
 ol.gradient-list > li:nth-child(10n+5):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 1) 0%, rgba(253, 220, 50, 1) 100%);
}
 ol.gradient-list > li:nth-child(10n+6):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
}
 ol.gradient-list > li:nth-child(10n+7):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
}
 ol.gradient-list > li:nth-child(10n+8):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
}
 ol.gradient-list > li:nth-child(10n+9):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
}
 ol.gradient-list > li:nth-child(10n+10):before {
	 background: linear-gradient(135deg, rgba(162, 237, 86, 0) 0%, rgba(253, 220, 50, 0) 100%);
}
 ol.gradient-list > li + li {
	 margin-top: 2rem;
}
 
        </style>
</head>
<body>
	<h1>Examination Rules</h1>
<main>
  <ol class="gradient-list">
    <li>Students having attendance less than 75%, will not be allowed to appear for examination</li>

    <li>Fee of two months will be taken in advance before 10 of the mentioned month.<br>If delayed, Rs. 50/- per month will be taken as late fee.</li>

    <li>Fee will be taken for 12 months. (i.e. From April to March)</li>

    <li>Before each Exams, all dues must be cleared up to that month. If failed, your child will not be allowed in the Exams .</li>

    <li>A Medical-leave' certificate is compulsory for student who is absent during Exams</li>

    <li> The fee once paid (Annual Charge & Monthly Fee ), will not be refunded on any ground.</li>

    <li>No transfer certificate will be issued for the students of class Nursery, K.G. and Prep</li>

    <li>Once the detail of student entered in 'Scholar-register will not be changed on any ground</li>
    
  </ol>
</main>
<h1>Rules of Descipline</h1>
<main>
  <ol class="gradient-list">
    <li>Parents will not be allowed in the classes during school hours.</li>

    <li>Please send one nicker, handkerchief & water-bottle along with your child ( play group and Nursery)</li>

    <li>Please don't send junk food, buiscuits, chocolates and toffee in your child's tiffin, send only roti, paranthas & vegetables</li>

    <li>Students should not wear any ornament or jewellery and wrist watch in school.</li>

    <li>The child's belongings (tiffin, bottle etc.)must have the child's name on it</li>

    <li>Student must wear the school uniform</li>

    <li>Student should arrive 10 minutes before the school time.</li>

    <li>Boys should get their hair cut at regular intervals.</li>

    <li>Girls hair should be pinned or ribboned (Red).</li>

    <li>Only prescribed books and uniform will be allowed.</li>

    <li> Stationary and book set should be covered and labeled (Don't use staple, Use adhesive tape)</li>

    <li>Stationary and book set must be deposited in the school (Play-Group, Nursery & K.G.)</li>

    <li> Please read remarks sign and send child's diary daily.</li>

    <li>Every note in the diary should be duly signed by parents.</li>

    <li>Parents should pay personal attention to the daily 'Home-Work assigned by the teacher.</li>

    <li>Students having attendance less than 75%, will not be allowed to appear for examination</li>

    <li>All parents must attend 'Parents- Teacher Meeting' for the betterment of their child</li>

    <li>Fee of two months will be taken in advance before 10th of the mentioned month.<br>
If delayed, Rs. 50/- per month will be taken as late fee.
</li>

    <li>Fee will be taken for 12 months. (ie. From April to March).</li>

    <li>Before each Exams all dues must be cleared up to that month. If failed, your child will not be allowed in the Exams. </li>

    <li>A Medical-leave certificate is compulsory for student who is absent during Exams. </li>

    <li>The fee once paid (Annual Charge & Monthly Fee ), will not be refunded on any ground.</li>

    <li>On Saturday, send your ward in sports-yoga dress. ( Class Prep and 1st to 8th)
On Saturday send your Nursery and K.G. child in colourful home dress.</li>

    <li>No transfer certificate will be issued for the students of class Nursery, K.G. and Prep.</li>

    
  </ol>
</main>





<?php
include("footer.php");
include("footer2.php");
?>
    
</body>
</html>