# moby.js
Moby.js is a JS Library that assists in creating mobile menus. [View demo and docs](http://www.joshuasanger.ca/libraries/moby)
## Basic Implementation
**1**.   Link CSS file in head of document
```HTML
<link type="text/css" rel="stylesheet" href="./path-to-css/moby.css"/>
```
OR 
Import the less file if you are using LESS (If so, thumbs up!)
```CSS
/* Include in your main less file */
@import "./path-to-css/moby.less";
```
**2**.   Link to jQuery v1.11.1+ (If not using already) and moby.min.js file
```HTML
<!-- Moby.js requires jQuery version 1.11.1 or higher -->
<script src="./path-to-js/jquery-1.11.1.min.js"></script>
<script src="./path-to-js/moby.min.js"></script>
```
**3**.   Make sure you have the valid markup ready
```HTML
<!-- Standard sample menu -->
<nav id="main-nav">
	<ul>
		<li><a href="#">Link 1</a></li>
		<li><a href="#">Link 2</a></li>
		<li><a href="#">Link 3</a></li>
		<li><a href="#">Link 4</a></li>
	<ul>
</nav>

<!-- Do NOT use an anchor tag for the mobile menu button -->
<span id="#moby-button">
	<i class="fa fa-bars"></i>
</span>
```
**4**.   Iniate basic Moby.js
```JS
// Target the menu you would like to be mobile friendly
$('nav#main-nav').moby({
	mobyTrigger: $('#moby-button'), // Button that will trigger the Moby menu to open
});
```

