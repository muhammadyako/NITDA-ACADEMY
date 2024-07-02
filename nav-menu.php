<?php

if($_SESSION['Lne'] !=''){
echo"<nav id='nav-menu-container'>
			        <ul class='nav-menu'>
			          
			          <li><a href='index'>Home</a></li>
					  <li><a href='dashboard'>Dashboard</a></li>
					  <li><a href='courses'>Courses</a></li>
					  <li><a href='my-courses'>My Courses</a></li>
			         <li class='menu-has-children'><a href='profile'>Profile</a>
			            <ul>
			              <li><a href='profile'>Profile</a></li>
			              <li><a href='change-password'>Change password</a></li>
			            </ul>
			          </li>	     		          
			          <li><a href='contact'>contact</a></li>
					   <li><a href='logout'>Logout</a></li>
			        </ul>
			      </nav>";
}else{
	echo"<nav id='nav-menu-container'>
			        <ul class='nav-menu'>
			          <li><a href='index'>Home</a></li>
			          <li><a href='about'>About</a></li>
			          <li><a href='courses'>Courses</a></li>
			         
			          </li>					          					          		          
			          <li><a href='contact'>contact</a></li>
					   <li><a href='faq'>Faq</a></li>
					  <li><a href='user/register'>Register</a>/</a></li>
					   <li><a href='user'>Login</a></li>
			        </ul>
			      </nav>";
}

?>				  