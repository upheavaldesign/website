<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
?>

<article class="project statedclearly">
	<section class="intro">
		<div class="row">
			<div class="columns xlarge-7 large-6 desc">
				<h3><span>web/</span> Stated Clearly</h3>
				<h1>Explaining Complex Science with Animations</h1>
				<p>Nunc urna libero, blandit id imperdiet vel, bibendum et sapien. Sed placerat nec enim nec ultricies. Vestibulum condimentum viverra arcu eu vestibulum. Nam fringilla tristique metus in elementum. Nullam gravida accumsan commodo. Suspendisse eget risus dolor.</p>
			</div>
			<!--<div class="columns xlarge-4 large-6">
			<figure class=""><img src="/assets/web/snake.svg" alt="Snake"></figure>
		</div>--> 
		</div>
	</section>
	<section class="screens" data-client="statedclearly" data-imgs="3">
		<div class="frame row">
			<figure>
				<img src="" alt="Screenshot">
				<figcaption>
					<h5>Loading</h5>
				</figcaption>
			</figure>			
		</div>
		<nav data-count="1"> <a id="prev" href=""><span><i class="icon-left"></i></span></a> <a id="next" href=""><span><i class="icon-right"></i></span></a> </nav>
	</section>
	<section class="page">
		<div class="row overview">
			<hr class="space-xl">
			<div class="columns xlarge-7">
				<h2>Nam ut congue neque</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat sit amet felis a facilisis. Integer consequat enim at libero pellentesque, eu pulvinar justo aliquet. Sed sed sapien sed sapien convallis convallis ac vel eros. Donec bibendum diam in orci pellentesque rutrum. Fusce sodales bibendum aliquet. Nam ut congue neque. Vestibulum malesuada tincidunt ipsum, in maximus tellus luctus eget. In vulputate dictum ullamcorper. Fusce blandit finibus massa at aliquam. Ut bibendum feugiat velit sit amet luctus. Nunc nec sodales sem. Vestibulum fermentum ex in neque convallis, vel malesuada ligula tempus. Maecenas facilisis sit amet nibh sed vestibulum.</p>
				<p>Nunc urna libero, blandit id imperdiet vel, bibendum et sapien. Sed placerat nec enim nec ultricies. Vestibulum condimentum viverra arcu eu vestibulum. Nam fringilla tristique metus in elementum. Nullam gravida accumsan commodo. Suspendisse eget risus dolor. Proin euismod, nulla sit amet varius suscipit, lectus tellus aliquet erat, nec consequat erat ligula ut odio. Praesent sagittis at mi nec ultricies. In eget enim est. Suspendisse suscipit orci gravida, porta tellus non, auctor odio. Ut semper, sem vel fringilla accumsan, dui nisi porttitor nunc, vel accumsan quam justo at dui.</p>
			</div>
			<!--<aside class="columns xlarge-4">
				<ul class="skills">
					<li>Interface Design</li>
					<li>Front End Programming</li>
					<li>MVC Framework</li>
					<li>Custom PHP Admin</li>
					<li>Fully Responsive</li>
				</ul>
			</aside>-->
		</div>
		<hr class="row">
		<div class="row tech">
			<div class="columns xlarge-7 large-centered desc">
				<h3>Technologies</h3>
				<p>Implementing modern technologies enriches my projects, and enables me to fulfill best practices in a changing landscape. Below are some that were used for Stated Clearly.</p>
			</div>
			<div class="columns">
				<figure class="columns xlarge-3 small-6"> <a href="http://adidas.com/us/" target="_blank">
					<h6>CodeIgniter</h6>
					<img alt="Adidas" src="/assets/ui/client-adidas.jpg" > </a> </figure>
				<figure class="columns xlarge-3 small-6"> <a href="https://thedoors.com/" target="_blank">
					<h6>Zurb Foundation</h6>
					<img alt="ABA" src="/assets/ui/client-thedoors.jpg" > </a> </figure>
				<figure class="columns xlarge-3 small-6"> <a href="http://rhymesayers.com/" target="_blank">
					<h6>Grunt</h6>
					<img alt="Rhyme Sayers" src="/assets/ui/client-rhymesayers.jpg" > </a> </figure>
				<figure class="columns xlarge-3 small-6"> <a href="http://amazon.com" target="_blank">
					<h6>Sass</h6>
					<img alt="Amazon" src="/assets/ui/client-amazon.jpg" > </a> </figure>
			</div>
			<div class="columns">
				<figure class="columns xlarge-3 small-6"> <a href="http://amazon.com" target="_blank">
					<h6>jQuery</h6>
					<img alt="Amazon" src="/assets/ui/client-amazon.jpg" > </a> </figure>
				<figure class="columns xlarge-3 small-6"> <a href="http://amazon.com" target="_blank">
					<h6>Sass</h6>
					<img alt="Amazon" src="/assets/ui/client-amazon.jpg" > </a> </figure>
				<figure class="columns xlarge-3 small-6"> <a href="http://amazon.com" target="_blank">
					<h6>Sass</h6>
					<img alt="Amazon" src="/assets/ui/client-amazon.jpg" > </a> </figure>
				<figure class="columns xlarge-3 small-6"> <a href="http://amazon.com" target="_blank">
					<h6>Sass</h6>
					<img alt="Amazon" src="/assets/ui/client-amazon.jpg" > </a> </figure>
			</div>
		</div>
		<hr class="row">
	</section>
	<!--End of Page-->
	
	<nav class="next"> <a href="/work/" title="">
		<div class="row">
			<div class="columns large-6">
				<h3><span>next project /</span> Oregon Runs</h3>
				<h2>Nunc urna libero, blandit id imperdiet vel, bibendum et sapien.</h2>
				<div class="btn-hollow dark">Find a Run<i class="icon-right"></i></div>	
			</div>
		</div>
		</a> </nav>
</article>
<?php include_once( $root."/templates/footer.php"); ?>
