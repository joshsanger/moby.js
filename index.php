<?php
    require_once('./_includes/config.php');
	$active = 'overview';
	$title = '';
	require_once('./_includes/header.php');
?>
	<section id="top-section">
		<div class="container">
			<h2>Wave goodbye to annoying Mobile Menus</h2>
			<p>Moby.js is a JS Library that assists in creating mobile menus</p>
            <a href="<?php echo BASE_URL;?>/downloads/moby2.0.6.zip">Download 2.0.6</a>
		</div> <!-- /container -->
	</section> <!-- / top-section -->
	<article class="content">
			<section class="separator" id="how-it-works">
				<div class="container">
					<h1>How it works</h1>
					<p>Moby.js easily converts a desktop <code class="language-markup">&lt;nav&gt;</code> into a mobile friendly version. When the mobile button is clicked, the mobile nav will animate in using one of the 7 preset animations. If these animations don't suit your fancy, you can simply add your own class to Moby's menu, and style it as you see fit. Nested <code class="language-markup">&lt;ul&gt;</code> (Drop down items) are hidden and can be expanded by the user, while still having the ability to click on the actual link. No more fake top level navigation links required!</p>
					<p class="center-text"><span class="demo-trigger button">Try it out:</span></p>
				</div> <!-- /container -->
			</section>
			<section class="no-separator" id="getting-started">
				<div class="container">
					<h1>Getting started</h1>
					<h2>1. Adding the files to your project</h2>
					<div class="wrap">
						<p>You can <a href="<?php echo BASE_URL;?>/downloads/moby2.0.6.zip">download</a> the files, or simply include Moby.js in your project by using <a href="https://bower.io/" target="_blank">Bower</a> install.</p>
<pre>
<code class="language-markup">
bower install moby.js</code>
</pre>
					</div> <!-- /wrap -->
					<div class="wrap">
						<p>Point to which ever style files you prefer (plain css or minified versions)</p>
<pre>
<code class="language-markup">
&lt;link type="text/css" rel="stylesheet" href="./path-to-bower-components/dist/moby.js/moby.min.css"/&gt;
OR
&lt;link type="text/css" rel="stylesheet" href="./path-to-css/moby.min.css"/&gt;</code>
</pre>
					</div> <!-- /wrap -->
					<div class="wrap">
                        <p>If you are using less, you can import Moby into your less file</p>
<pre>
<code class="language-css">
@import './path-to-bower-components/moby.js/dist/moby.less';
OR
@import './path-to-css/moby.less';</code>
</pre>
						<p>PRO TIP: Google's Material Icons work as a great asset when using Moby.js. <a href="http://material.io/icons/" target="_blank">Download Google's Material Icons</a></p>
					</div> <!-- /wrap -->
					<div class="wrap">
						<p>Link JS file(s) at the bottom of the document, just before <code class="language-markup">&lt;/body&gt;</code></p>
<pre>
<code class="language-markup">
&lt;!--
    Moby.js requires jQuery version 1.11.1 or higher.
    If using Bower, jQuery is a dependency and will be downloaded automatically
--&gt;
&lt;script src="./path-to-bower-components/jquery/dist/jquery.min.js"&gt;&lt;/script&gt;
&lt;script src="./path-to-bower-components/moby.js/dist/moby.min.js"&gt;&lt;/script&gt;
OR
&lt;script src="./path-to-js/jquery-1.11.1.min.js"&gt;&lt;/script&gt;
&lt;script src="./path-to-js/moby.min.js"&gt;&lt;/script&gt;</code>
</pre>
					</div> <!-- /wrap -->
				</div> <!-- /container -->
			</section>
			<section class="no-separator" id="verify-markup">
				<div class="container">
					<h2>2. Add / Verify Markup (HTML)</h2>
					<div class="wrap">
						<p>Make sure your document contains a <code class="language-markup">&lt;nav&gt;</code> (make sure it's semantic &amp; proper), and make sure it contains a mobile menu button.</p>

<pre>
<code class="language-markup">
&lt;!-- Standard sample menu --&gt;
&lt;nav id="main-nav"&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#">Link 1&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#">Link 2&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#">Link 3&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#">Link 4&lt;/a&gt;&lt;/li&gt;
	&lt;ul&gt;
&lt;/nav&gt;

&lt;!-- Do NOT use an anchor tag for the mobile menu button --&gt;
&lt;span id="moby-button"&gt;
	&lt;i class="material-icons"&gt;menu&lt;/i&gt;
&lt;/span&gt;</code>
</pre>
					</div> <!-- /wrap -->
				</div> <!-- /container -->
			</section>
			<section >
				<div class="container">
					<h2>3. Iniate basic Moby.js</h2>
					<p class="small-margin">Moby.js comes with basic styling, and defaults. For full details on customizing Moby.js, please refer to the <a href="<?php echo BASE_URL;?>/documentation.php">Documentation</a>.</p>

<pre>
<code class="language-javascript">
var mobyMenu = new Moby({
    menu       : $('#main-nav'), // The menu that will be cloned
	mobyTrigger: $('#moby-button'), // Button that will trigger the Moby menu to open
});</code>
</pre>
				</div> <!-- /container -->
			</section>
	</article> <!-- /content -->
	<?php require_once('./_includes/footer.php'); ?>