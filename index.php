<?php
include( 'include/header.php' );
include( 'include/sidebar.php' );
?>

<section class="section about-me" data-section="section1">
	<div class="container">
		<div class="section-heading">
			<h2>What is Lorem Ipsum?</h2>
			<div class="line-dec"></div>
			<span>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				</p>
			</span>
		</div>

		<div class="left-image-post">
			<div class="row">
				<div class="col-md-6">

					<div class="left-image">				
						<?php include('api/left-image.php');?>
						
				</div>
				<div class="col-md-6">
					<div class="right-text">
						<h4>Why do we use it?<h4>
							<?php include('api/right-txt.php');?>
				</div>
			</div>
		</div>
		<div class="right-image-post">
			<div class="row">
				<div class="col-md-6">
					<div class="left-text">
						<h4>Where does it come from?</h4>
						<?php include('api/left-txt.php');?>
				</div>
				<div class="col-md-6">
					
					<div class="right-image">
						<?php include('api/right-image.php');?>
				</div>
					
			</div>
		</div>
	</div>
</section>

<section class="section my-services" data-section="section2">
	<div class="container">
		<div class="section-heading">
			<h2>Where can I get some?</h2>
			<div class="line-dec"></div>
			<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>
          </div>
		
          <div class="row">
            <?php include('api/skills.php');?>
        </div>
		
      </section>
<section class="section my-work" data-section="section3">
	<div class="container">
		<div class="section-heading">
			<h2>My Work</h2>
			<div class="line-dec"></div>
			<span>Aenean sollicitudin ex mauris, lobortis lobortis diam euismod sit
              amet. Duis ac elit vulputate, lobortis arcu quis, vehicula
              mauris.</span
            >
          </div>
          <div class="row">
          <div class="isotope-wrapper">
    <form class="isotope-toolbar">
        <label>
            <input type="radio" data-type="*" checked name="isotope-filter"/>
            <span>All</span>
        </label>
        <?php
        // Query the database to fetch distinct titles
        $sql = "SELECT DISTINCT title FROM myworks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $title = $row["title"];
                ?>
                <label>
                    <input type="radio" data-type="<?php echo $title; ?>" name="isotope-filter"/>
                    <span><?php echo $title; ?></span>
                </label>
                <?php
            }
        }
        ?>
    </form>

    <div class="isotope-box">
      <?php
        $sql = "SELECT title, image_data FROM myworks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $image_data = base64_encode($row["image_data"]);
                ?>
                <div class="isotope-item" data-type="<?php echo $title; ?>">
                    <figure class="snip1321">
                        <img src="data:image/jpeg;base64,<?php echo $image_data; ?>" alt="<?php echo $title; ?>"/>
                        <figcaption>
                            <a href="data:image/jpeg;base64,<?php echo $image_data; ?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                            <h4><?php echo $title; ?></h4>
                        </figcaption>
                    </figure>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</div>

          </div>
        </div>
      </section>

      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Contact Me</h2>
            <div class="line-dec"></div>
                <span
                  >a dedicated software developer with a passion for crafting elegant solutions to complex problems. With a solid foundation in computer science and years of hands-on experience,<br>
                  I believe in the power of technology to drive positive change, and I'm excited to be part of a community that's constantly pushing the boundaries of what's possible. Let's build something amazing together!
                </span> <br>
                  <?php 
                
                        $sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          $row = $result->fetch_assoc();
                        
                        
                        }
                  ?>
			      <div class="line-dec"></div>
            <div class="col-md-8">
                <p><i class="fas fa-envelope"style="margin-left: 240px;"></i> <?php echo $row['email']; ?></p>
            </div>
            <div class="col-md-8">
                <p><i class="fas fa-phone"style="margin-left: 240px;"></i> <?php echo $row['phone']; ?></p>
            </div>
            <div class="col-md-8">
                <p><i class="fab fa-linkedin"style="margin-left: 240px;"></i> <?php echo $row['linkin']; ?></p>
            </div>
            <div class="col-md-8">
                <p><i class="fab fa-github"style="margin-left: 240px;"></i> <?php echo $row['github']; ?></p>
            </div>
            <div class="col-md-8">
                <p><i class="fab fa-facebook"style="margin-left: 240px;"></i> <?php echo $row['fb']; ?></p>
            </div>
            <div class="col-md-8">
                <p><i class="fab fa-youtube" style="margin-left: 240px;"></i> <?php echo $row['yt']; ?></p>
            </div>
            <div class="line-dec"></div>
          </div>
          
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="server/inquiries.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name"type="text"class="form-control"id="name"placeholder="Your name..."required=""/>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email"type="text"class="form-control"id="email"placeholder="Your email..."required=""/>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject"type="text"class="form-control"id="subject"placeholder="Subject..."required=""/>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message"rows="6"class="form-control"id="message"placeholder="Your message..."required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" name="submit" id="form-submit" class="button">
                          Send Message
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
	
    </div>
	<?php 
	include('include/scripts.php');
	?>