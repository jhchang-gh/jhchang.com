<?php
include('header.php');

?>
<div class="wrapper">

	<div id="hero" class="">
		<i class="loader fas fa-spinner"></i>

		<div id="panel-group-1" class="panel-group">

			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<div class="panel contact-panel">
				
			</div>
			<div class="panel">
				<div id="anim-logo">
					<p></p>
					<div class="anim-text-fill">
						
					</div>
				</div>
			</div>
			<div class="panel">
				<h1>Hi, I'm Jeff, a Full-Stack Developer</h1>
			</div>
			<div class="panel">
				<h4>
					<a id="aboutme-btn" class="hover-left" href="#about-me">Find out a little more About Me <i class="fas fa-caret-right"></i></a>
					<br/><br/>
					<a class="hover-left" href="#portfolio">Check out My Portfolio <i class="fas fa-caret-right"></i></a>
				</h4>
			</div>
			<div class="panel panel-text">
				<h4>Want to get in touch? Contact me.
					<br/>
				<div class="contact-group">
					<a href="#contact-form" data-lity><i class="fas fa-envelope"></i></a>
					<a href="https://github.com/jhchang-gh" target="_blank"><i class="fab fa-github"></i></a>
					<a href="https://www.linkedin.com/in/jeffrey-chang-bb7b095a/" target="_blank"><i class="fab fa-linkedin"></i></a>
				</div>
				</h4>
			</div>

		</div>
	</div>

	<div id="about-me" class="jh-block">
		<div class="container shrink-container">
			<div class="row">
				<div class="col">
					<div class="rounded-img margin-center"> <!-- change picture -->
						<img src="./images/aboutme-img-v2.jpg" alt="My dumb face."/>
					</div>
					<div class="text-ctn">
						<p>I'm a New York-based web developer who is passionate about beautiful design, elegant code, and the combination of the two.</p>
					</div>
					<div id="skill-list">
						<h3>I work with:</h3>
						<ul>
							<li>HTML5</li><li>CSS / SASS</li><li>JavaScript / JQuery</li><li>Node.js</li><li>PHP</li><li>MySQL</li><li>Python</li><li>Ruby</li><li>Bootstrap</li><li>Wordpress</li><li>and whatever else you can throw at me...</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="portfolio" class="jh-block">
		<ul class="bg-bubbles bubbles2">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<div class="container shrink-container">
			<div class="row">
				<div class="col">
					<h3>Here are a few of the projects I've worked on:</h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="portfolio-list">
						<div class="port-item" style="background-image:url(./images/folio-onedrop.jpg)">
							<div class="port-title"><a href="https://www.onedrop-media.com" target="_blank">One Drop Media</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-invictus.jpg)">
							<div class="port-title"><a href="https://invictusproject.org" target="_blank">The Invictus Project</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-ampepi.jpg)">
							<div class="port-title"><a href="https://alvarezandmarsal-pepi.com" target="_blank">Alvarez & Marsal PEPI</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-hogshead.jpg)">
							<div class="port-title"><a href="https://hogsheadgolfclub.com" target="_blank">Hogshead Golf Club</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-victory.jpg)">
							<div class="port-title"><a href="https://victoryma.com" target="_blank">Victory Martial Arts</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-vasper.jpg)">
							<div class="port-title"><a href="https://vasper.com" target="_blank">Vasper Systems</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-amcap.jpg)">
							<div class="port-title"><a href="https://a-mcapital.com.com" target="_blank">A&M Capital</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/folio-tog.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item port-text">
							<h3>And many more...</h3>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</div>
	<div id="contact-me" class="jh-block">
		<div class="container shrink-container">
			<div class="row">
				<div class="col">
					<h3>Seen enough?</h3>
					<h3>Send me a message if you're interested in working together and I'll get back to you as soon as I can.</h3>
					<div class="contact-group">
						<a href="#contact-form" data-lity><i class="fas fa-envelope"></i></a>
						<a href="https://github.com/jhchang-gh" target="_blank"><i class="fab fa-github"></i></a>
						<a href="https://www.linkedin.com/in/jeffrey-chang-bb7b095a/" target="_blank"><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div id="contact-form" class="lity-hide">
    <div id="contact-area">
        <form method="post" action="contactengine.php">
          <div class="form-full">
            <div class="form-half-left">
              <label for="First">First</label>
              <input type="text" name="First" id="First" />
            </div>
            <div class="form-half-right">
              <label for="Last">Last</label>
              <input type="text" name="Last" id="Last" />
            </div>
          </div>

          <div class="form-full">
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" />
          </div>

          <div class="form-full">
            <label for="Message">Message:</label>
            <textarea name="Message" rows="20" cols="20" id="Message"></textarea>
          </div>
          <div class="form-full">
            <input type="submit" name="submit" value="SEND" class="submit-button" />
          </div>
        </form>
        
        <div style="clear: both;"></div>
    </div>
</div>
<div id="contact-success" class="lity-hide">
	<h4>Your message has been sent.<br/><br/>Thanks, I'll get back to you shortly.</h4>
</div>
<div id="contact-error" class="lity-hide">
	<h4>Your message has failed to send.<br/><br/>Sorry about that, please contact me through <a href="https://www.linkedin.com/in/jeffrey-chang-bb7b095a/" class="underline" target="_blank">LinkedIn</a> instead.</h4>
</div>
<?php
include('footer.php');
?>