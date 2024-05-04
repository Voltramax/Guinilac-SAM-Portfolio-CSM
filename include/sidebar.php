<body>
    <div id="page-wraper">
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
			
          <div class="container">
            <div class="image">
				
              		<?php include('api/user.php'); ?>
			  
            <div class="author-content">
             <h4 class="mt-3">
				 
				 <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
				</h4>
              <span><?php echo $row['job']; ?></span>
				
            </div> <br>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">About Me</a></li>
                <li><a href="#section2">What I’m good at</a></li>
                <li><a href="#section3">My Work</a></li>
                <li><a href="#section4">Contact Me</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="login.php"><i class="fa fa-lock"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>My Online Portfolio</p>
            </div>
          </div>
        </div>
      </div>