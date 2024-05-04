<?php
include( 'include/header.php' );
?>  
<body>	
	<section class="section login" data-section="section5">
		  <div class="login-container">
		  	<div class="section-heading">
              <div class="head">
                <h2 class="h2">Administrator</h2>
                <div class="line-dec"></div>
                <span>
              <a href=""><i class="fa fa-lock" style="font-size: 50px;"></i></a>
            </span>
            <div class="line-dec"></div>
            </div>              
            <div class="row">
                <div class="right-content">
                  <div class="container">           
                    <form id="contact" action="server/sv-login.php" method="post">
                    <div class="row">               
                        <div class="col-md-10">
                        <fieldset>          
                            <input name="username"type="text"class="form-control"id="username"placeholder="USERNAME..."required=""/>   
                          </fieldset>                  
                        </div>
                        <div class="col-md-10">                     
                            <input name="password"type="password"class="form-control"id="password"placeholder="PASSWORD..."required=""/>                      
                      </div>              
                        <div class="col-md-10"> 
                        <fieldset>                   
                            <button type="submit" name="submit" id="form-submit" class="button">
                              ACCOUNT LOGIN
                            </button>
                              <div id="error-message" class="error-message" style="display: none;"></div>
                        </fieldset>
                        </div>                
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>        
		    </div>
	  </section>	 
      
	<?php 
  include('include/scripts.php');
	?>