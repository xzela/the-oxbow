<?php require_once('header.php'); ?>

<div class="hero-image">
	<img src="http://theoxbow.com/slide1/1.jpg" alt="" class="active"/>
	<img src="http://theoxbow.com/slide1/2.jpg" alt="" />
	<img src="http://theoxbow.com/slide1/3.jpg" alt="" />
	<img src="http://theoxbow.com/slide1/4.jpg" alt="" />
	<img src="http://theoxbow.com/slide1/5.jpg" alt="" />
	<img src="http://theoxbow.com/slide1/6.jpg" alt="" />
	<img src="http://theoxbow.com/slide1/7.jpg" alt="" />
	<img src="http://theoxbow.com/slide1/8.jpg" alt="" />
</div>

<div class="three-column">

	<div class="column-1">
		<h2>Tour Dates</h2>
		<?php get_tourdates($db); ?>
	</div>

	<div class="column-1">
		<h2>News</h2>
		<p>
			New images from the November 2009 tour have been posted in the Media section. Enjoy.
		</p>
		<p>
			Complete newsletter and tour diary archives now online - click on the <a href="newsletter.php">NEWSLETTER</a> or <a href="shows.php">SHOWS</a> menu buttons above to access the respective archive. Enjoy.
		</p>
		<p>
			See live concert video from the Amsterdam <a href="http://www.fabchannel.com/oxbow" target="_blank">Paradiso Show</a> on June 11, brought to you by the good people at Fabchannel.
		</p>
		<p>
			New album to the right.
		</p>
		<p>
			New sights all around.
		</p>	
	</div>

	<div class="column-2">
		<h2>Featured Media</h2>
		<img src="http://www.theoxbow.com/narcotic.jpg" alt="The Narcotic Story"/>
		<p>
			OXBOW's The Narcotic Story is out! The record is a brilliant glass menagerie-like 
			animal that shines in the light. Like a knife.
		</p>
		<p>
			<a href="http://www.bluecollardistro.com/hydrahead/product_info.php?products_id=1681&cPath=4_135&store=" target="_blank">Buy it here</a> 
		</p>	
		<p>
			"That OXBOW still rattles me. These are some of the most complex and fearfully well-arranged compositions I've ever heard."
		</p>	
	</div>

</div> <!-- /three-column -->


<?php require_once('footer.php'); ?>