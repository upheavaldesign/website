<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<section class="page-heading">
	<div class="grid-container">
		<div class="cell">
			<!-- <h1><a class="line" href="/about/jeremiah">Jeremiah<i></i></a> &amp; <a class="line" href="/about/adam">Adam<i></i></a> are creative comrades with a cultivated history of digital craft. Longtime friends and conspirators, they share a passion to inspire change through distinguished creativity.</h1>            
                <h1><a href="/about/jeremiah">Jeremiah</a> &amp; <a href="/about/adam">Adam</a> are creative comrades with a cultivated history of digital craft.</h1> -->
			<h1 class="title">I love to create stuff, <br class="hide-for-large">and problem solve. <br
					class="show-for-large">Let's collaborate, or <a class="line"
					href="/contact/"><em>conspire</em></a>.</h1>
		</div>
	</div>
</section>

<article class="page">

	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-11 xlarge-12">
				<h2>Jeremiah Deasey<span>Designer &amp; Photographer</span></h2>
				<hr class="space" />
				<p>Each of my projects is unique, I believe in quality craftsmanship. My approach is objective,
					diligent,
					meticulous, and driven. Developing functional solutions that meet/exceed modern standards in design,
					I
					take pride in all projects, and will work hard to make certain that you do as well.</p>
				<p>Often, I work directly with small and medium businesses, occasionally I collaborate with teams to
					lend
					support as a motivated freelancer.</p>
				<p>Just as you choose a designer, I select my clients, and accept projects that are exciting. Expect a
					high
					standard of work, and glowing enthusiasm to create something great.
					<?php echo encrypt_email('', 'sales@upheavaldesign.com', 'Hello!', 'Give me a shout!'); ?></p>

				<div class="grid-x grid-margin-x">
					<div class="cell large-9">
						<ul class="skills">
							<li>
								<h5>Front-End Development<span>HTML5, Sass, JS, Grunt, Git</span></h5>
							</li>
							<li>
								<h5>Server-Side Programming<span>PHP, WordPress, MVC</span></h5>
							</li>
							<li>
								<h5>Visual Design &amp; UI<span>Styling, Interactive, Components</span></h5>
							</li>
						</ul>
					</div>
					<div class="cell large-9">
						<ul class="skills">
							<li>
								<h5>Branding, Graphic Design<span>Photoshop, Illustrator</span></h5>
							</li>
							<li>
								<h5>Photography<span>Commercial Portraits, Stock Contributor</span></h5>
							</li>
							<li>
								<h5>Print, Publishing<span>Layout, Templating</span></h5>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<aside class="cell large-7 xlarge-6 sidebar">
				<figure class="photo"><img src="/assets/img/JeremiahDeasey.jpg" alt="Portrait of Jeremiah Deasey" />
				</figure>
				<blockquote class="hanger">
					<h5>Every day is a fresh chance to strike mediocrity and craft a change in tomorrow.</h5>
				</blockquote>
			</aside>
		</div>
	</div>

	<?php include $root."/templates/partners.php"; ?>
</article>

<section class="directive">
	<div class="grid-container">
		<div class="cell">
			<h4 class="call hide-for-large">Ready?</h4>
			<h4 class="call show-for-large">Ready to discuss your project?</h4>
			<a class="line action" href="/contact/" title="Contact">
				Give me a Shout
			</a>
		</div>
	</div>
</section>

<?php include_once($root."/templates/footer.php"); ?>