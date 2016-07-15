<?php
	$active = 'examples';
	$title = 'Examples | ';
	require_once('./inc/header.php');
?>
	<section id="top-section">
		<div class="container">
			<h2>Moby.js Examples</h2>
			<p>Examples that showcase some of Moby's options</p>
			<a href="<?php echo BASE_URL;?>/dist/moby1.7.1.zip">Download 1.7</a>
		</div> <!-- /container -->
	</section> <!-- / top-section -->
	<article class="content">
			<section class="separator">
				<div class="container">
					<h1>Using the Preset Animations</h1>
					<p>Moby.js comes packaged with 7 different transitions. All of these are editable throught the moby.less or moby.css files. Click each button below to view the different transitions.</p>
					<p class="center-text buttons-wrapper">
						<span class="trigger-menu demo-example button no-caps" data-target="left-side" id="left-side">"left-side"</span>
						<span class="trigger-menu demo-example button no-caps" data-target="right-side" id="right-side">"right-side"</span>
						<span class="trigger-menu demo-example button no-caps" data-target="top-full" id="top-full">"top-full"</span>
						<span class="trigger-menu demo-example button no-caps" data-target="bottom-full" id="bottom-full">"bottom-full"</span>
						<span class="trigger-menu demo-example button no-caps" data-target="grow-out" id="grow-out">"grow-out"</span>
						<span class="trigger-menu demo-example button no-caps" data-target="shrink-in" id="shrink-in">"shrink-in"</span>
						<span class="trigger-menu demo-example button no-caps" data-target="fade" id="fade">"fade"</span>
					</p>
					<p>To change the animation, specify one of the presets above for the <code class="language-js">menuClass</code> property, OR assign your own class and style it with less / css.</p>
<pre>
<code class="language-javascript">
// The defualt value for menuClass is "right-side"
$('nav#main-nav').moby({
	mobyTrigger  :  $('#moby-button'), // Button that will trigger the Moby menu to open
	menuClass    :  'grow-out' // This is the class that is added to #moby (Mobile menu)
});</code>
</pre>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>Customizing the Close Button</h1>
					<p>When you assign Moby.js to a <code class="language-markup">&lt;nav&gt;</code>, you have the option to customize what the close button says (And if you want a close button). The menus in this demo take advantage of Font-Awesome's close icon.</p>
					<p class="center-text"><span class="trigger-menu button" data-target="right-side">Take a look</span></p>
					<p>To change the contents of the close button, add the markup you wish to the <code class="language-markup">closeButtonContent</code> property.</p>
<pre>
<code class="language-javascript">
// The defualt value for closeButtonContent is "&lt;span&gt;X&lt;/span&gt; Close Menu"
$('nav#main-nav').moby({
	mobyTrigger         :  $('#moby-button'), // Button that will trigger the Moby menu to open
	closeButton         :  true, // If set to false the cose button will not appear
	closeButtonContent  :  '&lt;i class="fa fa-close"&gt;&lt;/i&gt; Close Menu' // To edit the css target #moby-close
});</code>
</pre>

					<div class="clear-float"></div>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>Customizing the drop down icons</h1>
					<p>When there are nested <code class="language-markup">&lt;ul&gt;</code> elements, Moby.js will allow hide them, and allow the user to expand them. Both the "open" and "close" icons are cutomizable. (I recommend using Font-Awesome icons).</p>
					<p class="center-text"><span class="trigger-menu button" data-target="right-side">Try it out</span></p>
					<p>To change the contents of the close and open icons, add the markup you wish to the <code class="language-markup">subMenuOpenIcon</code> and <code class="language-markup">subMenuCloseIcon</code> properties.</p>
					
<pre>
<code class="language-javascript">
// The defualt value for subMenuOpenIcon is "&#x25BC;"
// The defualt value for subMenuCloseIcon is "&#x25B2;"
$('nav#main-nav').moby({
	mobyTrigger         :  $('#moby-button'), // Button that will trigger the Moby menu to open
	subMenuOpenIcon     :  '&lt;i class="fa fa-angle-down"&gt;&lt;/i&gt;', // icon that shows when the submenu is hidden
	subMenuCloseIcon    :  '&lt;i class="fa fa-angle-up"&gt;&lt;/i&gt;', // icon that shows when the submenu is showing
});</code>
</pre>

					<div class="clear-float"></div>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>Inserting content BEFORE the mobile menu</h1>
					<p>Moby.js gives you the ability to add what ever content you wish to display above the mobile menu. This is useful for displaying logos, extra information that isn't in your <code class="language-markup">&lt;nav&gt;</code>, or just about anything your little heart desires.</p>
					<p class="center-text"><span class="trigger-menu button" data-target="right-side">Take a look</span></p>
					<p>To add content before the mobile menu, add the markup or text you wish to the <code class="language-markup">insertBefore</code> property. The content that is inserted before the mobile menu is wrapped with <code class="language-markup">&lt;div id="moby-before"&gt;&lt;/div&gt;</code>.</p>
					
<pre>
<code class="language-javascript">
// If insertBefore is not specified, this section will not be inserted
$('nav#main-nav').moby({
	mobyTrigger         :  $('#moby-button'), // Button that will trigger the Moby menu to open
	insertBefore		:  '&lt;img src="../images/moby.svg"&gt;' // Content that is inserted into #moby-before
});</code>
</pre>

					<div class="clear-float"></div>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>Inserting content AFTER the mobile menu</h1>
					<p>Moby.js gives you the ability to also add what ever content you wish to display below the mobile menu. It's a great spot for social media icons, copyright info, or a final thought.</p>
					<p class="center-text"><span class="trigger-menu button" data-target="right-side">Take a look</span></p>
					<p>To add content after the mobile menu, add the markup or text you wish to the <code class="language-markup">insertAfter</code> property. The content that is inserted after the mobile menu is wrapped with <code class="language-markup">&lt;div id="moby-after"&gt;&lt;/div&gt;</code>.</p>
					
<pre>
<code class="language-javascript">
// If insertAfter is not specified, this section will not be inserted
$('nav#main-nav').moby({
	mobyTrigger         :  $('#moby-button'), // Button that will trigger the Moby menu to open
	insertBefore		:  'If you find a better library, let minnow' // Content that is inserted into #moby-after
});</code>
</pre>

					<div class="clear-float"></div>
				</div> <!-- /container -->
			</section>

	</article> <!-- /content -->
	<?php require_once('./inc/footer.php'); ?>