<?php
    require_once('./_includes/config.php');
	$active = 'examples';
	$title = 'Examples | ';
	require_once('./_includes/header.php');
?>
	<section id="top-section">
		<div class="container">
			<h2>Moby.js Examples</h2>
			<p>Examples that showcase some of Moby's options</p>
            <a href="<?php echo BASE_URL;?>/downloads/moby2.0.4.zip">Download 2.0.4</a>
		</div> <!-- /container -->
	</section> <!-- / top-section -->
	<article class="content">
			<section class="separator">
				<div class="container">
					<h1>Using the Preset Animations</h1>
					<p>Moby.js comes packaged with 7 different transitions. All of these are editable throught the moby.less or moby.css files. Click each button below to view the different transitions.</p>
					<p class="center-text buttons-wrapper">
						<span class="button no-caps" data-target="left-side" id="left-side">"left-side"</span>
						<span class="button no-caps" data-target="right-side" id="right-side">"right-side"</span>
						<span class="button no-caps" data-target="top-full" id="top-full">"top-full"</span>
						<span class="button no-caps" data-target="bottom-full" id="bottom-full">"bottom-full"</span>
						<span class="button no-caps" data-target="grow-out" id="grow-out">"grow-out"</span>
						<span class="button no-caps" data-target="shrink-in" id="shrink-in">"shrink-in"</span>
						<span class="button no-caps" data-target="fade" id="fade">"fade"</span>
					</p>
					<p>To change the animation, specify one of the presets above for the <code class="language-js">menuClass</code> property, OR assign your own class and style it with less / css.</p>
<pre>
<code class="language-javascript">
// The default value for menuClass is "right-side"
var mobyMenu = new Moby({
	menuClass    :  'left-side' // This is the class that is added to Moby (Mobile menu)
});</code>
</pre>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>Customizing the Moby Template</h1>
                    <p>When you create a new Moby menu, you have the option to customize what markup is generated inside of Moby. You can include as little or as much markup as you wish, as long as you have at least the <code class="language-css">.moby-menu</code> class included. This class is where the cloned menu will be placed</p>
					<p class="center-text"><span class="demo-trigger button" data-target="right-side">Take a look</span></p>
                    <p>To change the template, add the markup you wish to the <code class="language-markup">template</code> property. There are 2 reserved classes: <code class="language-css">.moby-close</code> and <code class="language-css">.moby-menu</code></p>
<pre>
<code class="language-javascript">
var template  = '&lt;div class="moby-inner"&gt;';
    template +=     '&lt;div class="moby-close"&gt;&lt;span class="moby-close-icon"&gt;&lt;/span&gt;&lt;/div&gt;'; // Reserved class for closing moby
    template +=     '&lt;div class="moby-wrap"&gt;';
    template +=         '&lt;div&gt;';
    template +=             '&lt;img src="images/moby-logo-white.svg"&gt;';
    template +=             '&lt;div class="moby-menu"&gt;&lt;/div&gt;'; // Must be included in template
    template +=         '&lt;/div&gt;';
    template +=     '&lt;/div&gt;';
    template +=     '&lt;p>If you see a better mobile menu, let minnow&lt;/p&gt;';
    template += '&lt;/div&gt;';

var demo = new Moby({
    template : template,
});</code>
</pre>

					<div class="clear-float"></div>
				</div> <!-- /container -->
			</section>
			<section>
				<div class="container">
					<h1>Customizing the drop down icons</h1>
					<p>When there are nested <code class="language-markup">&lt;ul&gt;</code> elements, Moby.js will allow hide them, and allow the user to expand them. Both the "open" and "close" icons are cutomizable. (I recommend using <a href="http://material.io/icons/" target="_blank">Google's Material icons</a>).</p>
					<p class="center-text"><span class="demo-trigger button" data-target="right-side">Try it out</span></p>
					<p>To change the contents of the close and open icons, add the markup you wish to the <code class="language-markup">subMenuOpenIcon</code> and <code class="language-markup">subMenuCloseIcon</code> properties.</p>
					
<pre>
<code class="language-javascript">
// The defualt value for subMenuOpenIcon is "&#x25BC;"
// The defualt value for subMenuCloseIcon is "&#x25B2;"
var mobyMenu = new Moby({
	subMenuOpenIcon: '&lt;i class="material-icons"&gt;keyboard_arrow_down&lt;/i&gt;', // icon that shows when the submenu is hidden
    subMenuCloseIcon: '&lt;i class="material-icons"&gt;keyboard_arrow_up&lt;/i&gt;', // icon that shows when the submenu is showing
});</code>
</pre>

					<div class="clear-float"></div>
				</div> <!-- /container -->
			</section>

	</article> <!-- /content -->
	<?php require_once('./_includes/footer.php'); ?>