<?php
    require_once('./_includes/config.php');
	$active = 'documentation';
	$title = 'Documentation | ';
	require_once('./_includes/header.php');
?>
	<section id="top-section">
		<div class="container">
			<h2>Moby.js Documentation</h2>
			<p>The ins and outs of Moby.js</p>
			<a href="<?php echo BASE_URL;?>/downloads/moby2.0.6.zip">Download 2.0.6</a>
		</div> <!-- /container -->
	</section> <!-- / top-section -->
	<article class="content">
			<section class="separator">
				<div class="container">
					<h1>Description</h1>
					<p>Moby.js easily converts a desktop <code class="language-markup">&lt;nav&gt;</code> into a mobile friendly version. When the mobile button is clicked, the mobile nav will animate in using one of the 7 preset animations. If these animations don't suit your fancy, you can simply add your own class to Moby's menu, and style it as you see fit. Nested <code class="language-markup">&lt;ul&gt;</code> elements (Drop down items) are hidden and can be expanded by the user, while still having the ability to click on the actual link. No more fake top level navigation links required!</p>
				</div> <!-- /container -->
			</section> <!-- /separator -->
			<section class="separator">
				<div class="container">
					<h1>Available Options with defaults</h1>
					<p>Below are the current options available with their defaults. Each options is explained further down the page.</p>
<pre>
<code class="language-javascript">
var mobyMenu = new Moby({
	breakpoint		 : 1024,
	enableEscape	 : true,
    menu             : $('#main-nav'),
	menuClass		 : 'right-side',
	mobyTrigger		 : $("#moby-button"),
    onClose          : false,
    onOpen           : false,
	overlay			 : true,
	overlayClass 	 : 'dark',
    subMenuOpenIcon  : '&lt;span&gt;&amp;#x25BC;&lt;/span&gt;',
	subMenuCloseIcon : '&lt;span&gt;&amp;#x25B2;&lt;/span&gt;',
    template         : '&lt;div class="moby-wrap"&gt;&lt;div class="moby-close"&gt;&lt;span class="moby-close-icon"&gt;&lt;/span> Close Menu&lt;/div&gt;&lt;div class="moby-menu"&gt;&lt;/div&gt;&lt;/div&gt;'
});</code>
</pre>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>The Options</h1>
					<div class="option">
						<h2>breakpoint</h2>
                        <p>(<span class="dark-red-font">integer</span> | <span class="blue-font">boolean</span>) The number that is entered should match the breakpoint of when the targeted menu switches to mobile. If <code class="language-CSS">Moby</code> is open when the screen resizes above the set breakpoint, <code class="language-CSS">Moby</code> will close. Set to <code class="language-JS">false</code> if no breakpoint is desired.</p>
						<p class="default">Default: 1024</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>enableEscape</h2>
						<p>(<span class="blue-font">boolean</span>) Enable or disable closing <code class="language-CSS">Moby</code> with the escape key. Set to <code class="language-javascript">true</code> to enable, <code class="language-javascript">false</code> to disable.</p>
						<p class="default">Default: true</p>
					</div> <!-- /option -->
                    <div class="option">
						<h2>menu</h2>
						<p>(<span class="pink-font">element</span>) The menu that will be cloned. It is advised to use semantic markup.</p>
						<p class="default">Default: $('#main-nav')</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>menuClass</h2>
						<p>(<span class="green-font">string</span>) This is the class that will be added to <code class="language-CSS">Moby</code>. There are preset animation you can use, or create your own with css.</p>
						<p>Available transitions are: 'left-side' | 'right-side' | 'top-full' | 'bottom-full' | 'shrink-in' | 'grow-out' | 'fade' | 'your-own-class'</p>		
						<p class="default">Default: 'right-side'</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>mobyTrigger</h2>
						<p>(<span class="pink-font">element</span>) The element that will trigger <code class="language-CSS">Moby</code> to open. It is recommended to NOT use an <code class="language-markup">&lt;a&gt;</code> tag for the trigger, but instead use a <code class="language-markup">&lt;span&gt;</code> tag. If not set, <code class="language-markup">#moby-button</code> will be set to the default trigger.</p>
						<p class="default">Default: $("#moby-button")</p>
					</div> <!-- /option -->
                    <div class="option">
						<h2>onClose</h2>
						<p>(<span class="orange-font">function</span> | <span class="blue-font">boolean</span>) Callback function that is ran when <code class="language-CSS">Moby</code> is closed. By default the callback function is disabled.</p>
						<p class="default">Default: false</p>
					</div> <!-- /option -->
                    <div class="option">
						<h2>onOpen</h2>
						<p>(<span class="orange-font">function</span> | <span class="blue-font">boolean</span>) Callback function that is ran when <code class="language-CSS">Moby</code> is opened. By default the callback function is disabled.</p>
						<p class="default">Default: false</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>overlay</h2>
						<p>(<span class="blue-font">boolean</span>) Show or hide an overlay that will appear below <code class="language-CSS">Moby</code>, but above the content. Set to <code class="language-javascript">true</code> to show, <code class="language-javascript">false</code> to hide.</p>
						<p class="default">Default: true</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>overlayClass</h2>
						<p>(<span class="green-font">string</span>) You can add a class to the overlay as well. Target <code class="language-css">.moby-overlay</code> in your CSS to add your own style, or you can use one of the available options.</p>
						<p>Available options: 'dark' | 'light' | 'your-own-class'</p>
						<p class="default">Default: 'dark'</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>subMenuOpenIcon</h2>
						<p>(<span class="green-font">string</span>) The icon displaying when sub menus are hidden (to prompt the user to expand it) can be replaced with text, markup, material-icons, etc.</p>
						<p class="default">Default: '&lt;span&gt;&amp;#x25BC;&lt;/span&gt;'</p>
					</div> <!-- /option -->
					<div class="option">
						<h2>subMenuCloseIcon</h2>
						<p>(<span class="green-font">string</span>) The icon displaying when the sub menus are showing (to prompt the user to collapse it) can be replaced with text, markup, material-icons, etc.</p>
						<p class="default">Default: '&lt;span&gt;&amp;#x25B2;&lt;/span&gt;'</p>
					</div> <!-- /option -->
                    <div class="option no-margin">
						<h2>template</h2>
						<p>(<span class="green-font">string</span>) The desired template of <code class="language-css">Moby</code>. You can create what ever mark up you wish, the only requirement is you MUST have a <code class="language-css">.moby-menu</code> class in your template, otherwise an error will be thrown. <code class="language-css">.moby-menu</code> is where the cloned menu will be placed.</p>
                        <p class="default">Default:</p>
<pre>
<code class="language-markup">
&lt;div class="moby-wrap"&gt;
    &lt;div class="moby-close"&gt; &lt;!-- Reserved class for closing Moby --&gt;
        &lt;span class="moby-close-icon"&gt;&lt;/span> Close Menu
    &lt;/div&gt;
    &lt;div class="moby-menu"&gt;&lt;/div&gt; &lt;!-- Must be included --&gt;
&lt;/div&gt;</code>
</pre>
					</div> <!-- /option -->
				</div> <!-- /container -->
			</section>

			<section>
				<div class="container">
					<h1>The Methods</h1>
					<p>These methods are only to be used <em>after</em> you have already instantiated Moby.</p>
					<div class="option">
						<h2>.closeMoby()</h2>
						<p>Using closeMoby() will manually close the Moby menu. Simply target the same menu as you did when you instantiated Moby.</p>
<pre>
<code class="language-javascript">
// Manually closes Moby
mobyMenu.closeMoby();</code>
</pre>
					</div> <!-- /option -->
					<div class="option">
						<h2>.openMoby()</h2>
						<p>Using openMoby() will manually open the Moby menu. Simply target the same menu as you did when you instantiated Moby.</p>
<pre>
<code class="language-javascript">
// Manually opens Moby
mobyMenu.openMoby();</code>
</pre>
					</div> <!-- /option -->
					
					
				</div> <!-- /container -->
			</section>
			

	</article> <!-- /content -->
	<?php require_once('./_includes/footer.php'); ?>