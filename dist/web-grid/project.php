<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
?>

<section class="slides">
	<figure class="">
	</figure>
	<div class="details">
		<div class="row">
			<div class="columns large-5 large-push-7 title">
				<h4><?php echo $project['videos'][0]['title']; ?></h4>
			</div>
			<div class="columns large-6 large-pull-5 right-collapse desc">
				<p><?php echo html_entity_decode($project['videos'][0]['desc']); ?></p>
			</div>			
		</div>
	</div>
</section>
<section class="page remove-bottom">
	<div class="row pad-bottom overview">
		<div class="columns xlarge-9 copy-text">
			<h1><?php echo $project['headline']; ?></h1>
			<p class="lrg"><?php echo html_entity_decode(htmlspecialchars($project['overview'])); ?></p>
		</div>
		<div class="columns xlarge-3">
			<figure class="clients">
			<?php if($project['contend-original-logo'] != ""){ ?>
				<div class="columns xlarge-12 small-6">
					<dl>
						<dt><?php echo $project['contend-original']; ?></dt>
						<dd><img src="/assets/ui/clients/<?php echo $project['contend-original-logo'].'.svg'; ?>" alt="<?php echo $project['contend-original-logo']; ?>"/></dd>
					</dl>
				</div>	
			<?php } if($project['client-logo'] != ""){ ?>
				<div class="columns xlarge-12 small-6">
					<dl>
						<dt>Client</dt>
						<dd><img src="/assets/ui/clients/<?php echo $project['client-logo'].'.svg'; ?>" alt="<?php echo $project['client-name']; ?>"/></dd>
					</dl>
				</div>	
				<?php } if($project['agency-logo'] != ""){ ?>
				<div class="columns xlarge-12 small-6">
					<dl>
						<dt>Partner</dt>
						<dd><img src="/assets/ui/clients/<?php echo $project['agency-logo'].'.svg'; ?>" alt="<?php echo $project['agency-name']; ?>"/></dd>
					</dl>
				</div>	
				<?php } ?>
			</figure>
		</div>	
		<?php 
		/* If more than 1 video */		
		if(count($project['videos']) > 1){ ?>
		<div class="columns">
		<hr class="space">
			<h3>Watch More</h3>
		</div>	
		<?php } ?>
	</div>
</section>
<!--End of Page-->

<?php if(isset($project['videos'])){ 
$make_row = '';
$grid = "xlarge-4 large-6";
if (count($project['videos']) < 4){ $make_row = "row"; } ?>
<section class="color-egg">
	<div class="<?php echo $make_row; ?>">
		<div class="items projects">
			<div class="row">
				<?php
			$isFirst = true; 
			if($isMobile && !$iPad){ 
				/*If Mobile device, embed Vimeo videos directly*/				
				foreach ($project['videos'] as $video):
				if ($isFirst) { $isFirst = false; continue; } ?>
				<figure class="columns <?php echo $grid; ?> item">
					<div class="project video hd">
						<iframe src="https://player.vimeo.com/video/<?php echo $video['video_id']; ?>?title=0&amp;autoplay=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" allowfullscreen></iframe>
					</div>
				</figure>
				<?php endforeach;
			} else { 
				/*display thumbnails and launch video in modal*/			
				foreach ($project['videos'] as $video): 
				if ($isFirst) { $isFirst = false; continue; } ?>
				<article class="columns <?php echo $grid; ?> item">
					<a class="launch-modal" data-src="<?php echo $video['video_id']; ?>" data-slug="<?php echo slugify($video['title']); ?>" data-title="<?php echo $video['title']; ?>" data-desc="<?php echo html_entity_decode(htmlspecialchars($video['desc'])); ?>">
						<figure class="project thumb">
							<figcaption>
								<div class="title">
									<h4><?php echo $video['title']; ?></h4>								
								</div>
								<div class="desc">
									<p><img class="play" src="/assets/ui/play.svg" alt="play icon"/><?php echo html_entity_decode(htmlspecialchars($video['desc'])); ?></p>
								</div>
							</figcaption>
							<img class="bg-img" src="/assets/img/projects/<?php echo $project['assets'].$video['image']; ?>" alt="<?php echo $video['title']; ?>"/>
						</figure>
					</a>
				</article>
				<?php endforeach; } ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<aside class="cta">
	<div class="row">
		<div class="columns">
			<a href="/work"><span>Back To All Work</span></a>
			
			<?php if(isset($next_project['slug'])): ?>
				<a class="next" href="/work/<?php echo $next_project['slug']; ?>" title="<?php echo $next_project['title']; ?>"><span>Next Project</span></a>
			<?php endif; ?>
		</div>
	</div>
</aside>
<?php include_once( $server."/templates/footer.php"); ?>