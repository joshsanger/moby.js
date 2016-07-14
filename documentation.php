<?php
	$active = 'documentation';
	$title = 'Documentation | ';
	require_once('./inc/header.php');
?>
	<section id="top-section">
		<div class="container">
			<h2>Moby.js Documentation</h2>
			<p>The ins and outs of Moby.js</p>
			<a href="<?php echo BASE_URL;?>/dist/moby1.7.zip">Download 1.7</a>
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
// Moby.js will duplicate the #main-nav menu
$('nav#main-nav').moby({
	breakpoint			: 	1024, 
	closeButton		 	: 	true, 
	closeButtonContent 	: 	'&lt;span&gt;X&lt;/span&gt; Close Menu',
	enableEscape		: 	true, 
	insertAfter			: 	'', 
	insertBefore		: 	'',
	menuClass		 	: 	'right-side', 
	mobyTrigger		 	: 	$("#moby-button"), 
	overlay			 	: 	true, 
	overlayClass 	 	: 	'dark', 
	subMenuOpenIcon  	: 	'&lt;span&gt;&amp;#x25BC;&lt;/span&gt;', 
	subMenuCloseIcon 	: 	'&lt;span&gt;&amp;#x25B2;&lt;/span&gt;',
});</code>
</pre>
				</div> <!-- /container -->
			</section>
			<section class="separator">
				<div class="container">
					<h1>The Options</h1>
					<div class="option">
						<h2>breakpoint</h2>
						<p>(<span class="dark-red-font">integer</span>) The number that is entered should match the breakpoint of when the targeted menu switches to mobile. If <code class="language-CSS">#moby</code> is open when the screen resizes above the set breakpoint, <code class="language-CSS">#moby</code> will close.</p>	
						<p class="default">Default: 960</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>closeButton</h2>
						<p>(<span class="blue-font">boolean</span>) Show or hide the close button at the top of <code class="language-CSS">#moby</code>. Set to <code class="language-javascript">false</code> to hide, <code class="language-javascript">true</code> to show.</p>	
						<p class="default">Default: true</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>closeButtonContent</h2>
						<p>(<span class="green-font">string</span>) You can specify the markup or text that you wish to display inside of the close button div. Target <code class="language-css">#moby-close</code> in your CSS to add your own style.</p>	
						<p class="default">Default: '&lt;span&gt;X&lt;/span&gt; Close Menu'</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>enableEscape</h2>
						<p>(<span class="blue-font">boolean</span>) Enable or disable closing <code class="language-CSS">#moby</code> with the escape key. Set to <code class="language-javascript">true</code> to enable, <code class="language-javascript">false</code> to disable.</p>	
						<p class="default">Default: true</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>insertAfter</h2>
						<p>(<span class="green-font">string</span>) You can specify markup or text that you wish to display below the mobile navigation. Target <code class="language-css">#moby-after</code> in your CSS to add your own style. If left blank, nothing will be inserted.</p>		
						<p class="default">Default: ''</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>insertBefore</h2>
						<p>(<span class="green-font">string</span>) You can specify markup or text that you wish to display above the mobile navigation (right underneath the close button). Target <code class="language-css">#moby-before</code> in your CSS to add your own style. If left blank, nothing will be inserted.</p>		
						<p class="default">Default: ''</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>menuClass</h2>
						<p>(<span class="green-font">string</span>) This is the class that will be added to <code class="language-CSS">#moby</code>. There are preset animation you can use, or create your own with css.</p>
						<p>Available transitions are: 'left-side' | 'right-side' | 'top-full' | 'bottom-full' | 'shrink-in' | 'grow-out' | 'fade' | 'your-own-class'</p>		
						<p class="default">Default: 'right-side'</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>mobyTrigger</h2>
						<p>(<span class="pink-font">element</span>) You MUST specify which which element will trigger <code class="language-CSS">#moby</code> to open. It is recommended to NOT use an <code class="language-markup">&lt;a&gt;</code> tag for the trigger, but instead use a <code class="language-markup">&lt;span&gt;</code> tag. If not set, <code class="language-markup">#moby-button</code> will be set to the default trigger.</p>		
						<p class="default">Default: $("#moby-button")</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>overlay</h2>
						<p>(<span class="blue-font">boolean</span>) Show or hide an overlay that will appear below <code class="language-CSS">#moby</code>, but above the content. Set to <code class="language-javascript">true</code> to show, <code class="language-javascript">false</code> to hide.</p>
						<p class="default">Default: true</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>overlayClass</h2>
						<p>(<span class="green-font">string</span>) You can add a class to the overlay as well. Target <code class="language-css">#moby-overlay</code> in your CSS to add your own style, or you can use one of the available options.</p>
						<p>Available options: 'dark' | 'light' | 'your-own-class'</p>
						<p class="default">Default: 'dark'</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>subMenuOpenIcon</h2>
						<p>(<span class="green-font">string</span>) The icon displaying when sub menus are hidden (to prompt the user to expand it) can be replaced with text, markup, font-awesome, etc.</p>
						<p class="default">Default: '&lt;span&gt;&amp;#x25BC;&lt;/span&gt;'</p>
					</div> <!-- /wrap -->
					<div class="option">
						<h2>subMenuCloseIcon</h2>
						<p>(<span class="green-font">string</span>) The icon displaying when the sub menus are showing (to prompt the user to collapse it) can be replaced with text, markup, font-awesome, etc.</p>
						<p class="default">Default: '&lt;span&gt;&amp;#x25B2;&lt;/span&gt;'</p>
					</div> <!-- /wrap -->
					
					
				</div> <!-- /container -->
			</section>

			<section>
				<div class="container">
					<h1>The Methods</h1>
					<p>These methods are only to be used <em>after</em> you have already initiated moby.</p>
					<div class="option">
						<h2>.mobyClose()</h2>
						<p>Using mobyClose() will manually close the moby menu. Simply target the same menu as you did when you initated moby.</p>
<pre>
<code class="language-javascript">
// Manually closes Moby
$('nav#main-nav').mobyClose();</code>
</pre>
					</div> <!-- /option -->
					<div class="option">
						<h2>.mobyOpen()</h2>
						<p>Using mobyOpen() will manually open the moby menu. Simply target the same menu as you did when you initated moby.</p>
<pre>
<code class="language-javascript">
// Manually opens Moby
$('nav#main-nav').mobyOpen();</code>
</pre>
					</div> <!-- /option -->
					
					
				</div> <!-- /container -->
			</section>
			

	</article> <!-- /content -->
	<?php require_once('./inc/footer.php'); ?>