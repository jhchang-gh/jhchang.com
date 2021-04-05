<?php
include('header.php');

//include('navbar.php');
?>
<div class="wrapper">

	<div id="hero" class="">
		<i class="loader fas fa-spinner"></i>

		<div id="panel-group-1" class="panel-group">
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
				<p>:)</p>
			</div>
		</div>
	</div>

	<div id="about-me" class="jh-block">
		<div class="row">
			<div class="container shrink-container">
				<div class="col">
					<div class="rounded-img margin-center">
						<img src="./images/aboutme-img.jpg" alt="My dumb face."/>
					</div>
					<div class="text-ctn">
						<p>I'm a New York-based web developer who is passionate about beautiful design, elegant code, and the combination of the two.</p>
					</div>
					<div id="skill-list">
						<h3>I work with:</h3>
						<ul>
							<li>HTML5</li><li>CSS / SCSS</li><li>JavaScript / JQuery</li><li>Node.js</li><li>PHP</li><li>MySQL</li><li>Python</li><li>Wordpress</li><li>Search Engine Optimization (SEO)</li><li>and whatever else you can throw at me...</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="portfolio" class="jh-block">
		<div class="row">
			<div class="container shrink-container">
				<div class="col">
					<h3>Here's some of the projects I've worked on:</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="col">
					<div id="portfolio-list">
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
							<div class="port-title"><a href="https://togrp.com" target="_blank">The One Group</a></div>
						</div>
						<div class="port-item" style="background-image:url(./images/tog_folio.jpg)">
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

	<div id="contact-bar">
		<div class="contact-group">
			<a href="#contact-form" data-lity>Email</a>
			<a href="https://github.com/jhchang-gh" target="_blank">Github</a>
			<a href="https://www.linkedin.com/in/jeffrey-chang-bb7b095a/" target="_blank">LinkedIn</a>
		</div>
	</div>

</div>
<div id="contact-form" class="lity-hide">
	<h1>Hey</h1>
</div>
<?php
include('footer.php');
?>