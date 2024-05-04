			<div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>HTML5 &amp; CSS</h4>
                 <?php
                    $sql_html_css = "SELECT skill_desc FROM html LIMIT 1";
					$result_html_css = $conn->query($sql_html_css);
					$html_css_skill = ($result_html_css->num_rows > 0) ? $result_html_css->fetch_assoc()['skill_desc'] : '';
					?>
				  	<p><?php echo $html_css_skill; ?></p>           
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>JAVASCRIPT</h4>
                <?php
                    $sql_javascript = "SELECT skill_desc FROM javascript LIMIT 1";
					$result_javascript = $conn->query($sql_javascript);
					$javascript_skill = ($result_javascript->num_rows > 0) ? $result_javascript->fetch_assoc()['skill_desc'] : '';
					?>
				  	<p><?php echo $javascript_skill; ?></p> 
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>DATABASE</h4>
                <?php
                    $sql_db_management = "SELECT skill_desc FROM dbms LIMIT 1";
					$result_db_management = $conn->query($sql_db_management);
					$db_management_skill = ($result_db_management->num_rows > 0) ? $result_db_management->fetch_assoc()['skill_desc'] : '';
					?>
				  	<p><?php echo $db_management_skill; ?></p> 
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>DATA ANALYTICS</h4>
                <?php
                    $sql_analytics = "SELECT skill_desc FROM admin LIMIT 1";
					$result_analytics = $conn->query($sql_analytics);
					$analytics_skill = ($result_analytics->num_rows > 0) ? $result_analytics->fetch_assoc()['skill_desc'] : '';
					?>
				  	<p><?php echo $analytics_skill; ?></p> 
              </div>
            </div>
          </div>