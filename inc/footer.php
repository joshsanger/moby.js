<footer>
		<div class="container">
			<p>Moby.js was created by <a href="http://www.joshuasanger.ca" target="_blank">Joshua Sanger</a>, Web Designer at GeekPower <a href="http://www.in-toronto-web-design.ca/" target="_blank" title="GeekPower Web Design"> Web Design In Toronto</a></p>
		</div> <!-- /container -->
	</footer>
	<script src="./js/jquery-1.11.1.min.js"></script>
	<script src="./js/prism.js" ></script>
	<?php 
		if ($active == 'examples') {
			echo '<script src="./js/demo.js"></script>';
		} else {
			echo '<script src="./js/moby.js"></script>';
		}
	?>
	
	<script src="./js/main.js"></script>
</body>
</html>