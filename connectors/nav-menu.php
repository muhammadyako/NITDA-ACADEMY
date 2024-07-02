<?php

if($_SESSION['Lne'] !=''){
echo"<nav id='nav-menu-container'>
			        <ul class='nav-menu'>
			          
			          <li><a href='index.php'>Home</a></li>
					  <li><a href='my-courses.php'>My Courses</a></li>
			          <li><a href='events.html'>Events</a></li>
			          <li><a href='gallery.html'>Gallery</a></li>
			          <li class='menu-has-children'><a href=''>Blog</a>
			            <ul>
			              <li><a href='blog-home.html'>Blog Home</a></li>
			              <li><a href='blog-single.html'>Blog Single</a></li>
			            </ul>
			          </li>	
			          <li class='menu-has-children'><a href=''>Pages</a>
			            <ul>
		              		<li><a href='course-details.html'>Course Details</a></li>		
		              		<li><a href='event-details.html'>Event Details</a></li>		
			                <li><a href='elements.html'>Elements</a></li>
					          <li class='menu-has-children'><a href=''>Level 2 </a>
					            <ul>
					              <li><a href='#'>Item One</a></li>
					              <li><a href='#'>Item Two</a></li>
					            </ul>
					          </li>					                		
			            </ul>
			          </li>					          					          		          
			          <li><a href='contact.php'>Contact</a></li>
					   <li><a href='logout.php'>Logout</a></li>
			        </ul>
			      </nav>";
}else{
	echo"<nav id='nav-menu-container'>
			        <ul class='nav-menu'>
			          <li><a href='index.php'>Home</a></li>
			          <li><a href='about.php'>About</a></li>
			          <li><a href='courses.php'>Courses</a></li>
			          <li><a href='events.html'>Events</a></li>
			          <li><a href='gallery.html'>Gallery</a></li>
			          <li class='menu-has-children'><a href=''>Blog</a>
			            <ul>
			              <li><a href='blog-home.html'>Blog Home</a></li>
			              <li><a href='blog-single.html'>Blog Single</a></li>
			            </ul>
			          </li>	
			          <li class='menu-has-children'><a href=''>Pages</a>
			            <ul>
		              		<li><a href='course-details.html'>Course Details</a></li>		
		              		<li><a href='event-details.html'>Event Details</a></li>		
			                <li><a href='elements.html'>Elements</a></li>
					          <li class='menu-has-children'><a href=''>Level 2 </a>
					            <ul>
					              <li><a href='#'>Item One</a></li>
					              <li><a href='#'>Item Two</a></li>
					            </ul>
					          </li>					                		
			            </ul>
			          </li>					          					          		          
			          <li><a href='contact.php'>Contact</a></li>
					  <li><a href='../user/register.php'>Register</a>/<a href='../user'>Login</a></li>
			        </ul>
			      </nav>";
}

?>				  