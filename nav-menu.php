<?php

if($_SESSION['Lne'] !=''){
echo"<nav id='nav-menu-container'>
			        <ul class='nav-menu'>
			          
			          <li><a href='index.php'>HOME</a></li>
					  <li><a href='dashboard.php'>DASHBOARD</a></li>
					  <li><a href='courses.php'>COURSES</a></li>
					  <li><a href='my-courses.php'>MY COURSES</a></li>
			         <li class='menu-has-children'><a href='profile.php'>PROFILE</a>
			            <ul>
			              <li><a href='profile.php'>Profile</a></li>
			              <li><a href='change-password.php'>Change Password</a></li>
			            </ul>
			          </li>	     		          
			          <li><a href='faq.php'>FAQs</a></li>
					   <li><a href='logout.php'>LOGOUT</a></li>
			        </ul>
			      </nav>";
}else{
	echo"<nav id='nav-menu-container'>
			        <ul class='nav-menu'>
			          <li><a href='index.php'>HOME</a></li>
			          <li><a href='about.php'>ABOUT US</a></li>
			          <li><a href='courses.php'>COURSES</a></li>
			         
			          </li>					          					          		          
			          <li><a href='contact.php'>CONTACT US</a></li>
					  <li><a href='faq.php'>FAQs</a></li>
					  <li><a href='user/register.php'>REGISTER</a>/</a></li>
					   <li><a href='user'>LOGIN</a></li>
			        </ul>
			      </nav>";
}

?>				  