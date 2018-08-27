> ES6 Version coming soon. Stay tuned and happy coding!

# moby.js
Moby.js is a jQuery Library that assists in creating mobile menus. [View demo and docs](http://www.joshuasanger.ca/libraries/moby)
## Basic Implementation
**1**. Adding the files to your project

You can [download](http://www.joshuasanger.ca/libraries/moby) the files, or simply include Moby.js in your project by using <a href="https://bower.io/" target="_blank">Bower</a> install.
```HTML
<link type="text/css" rel="stylesheet" href="./path-to-bower-components/moby.js/dist/moby.min.css"/>
-
OR
-
<link type="text/css" rel="stylesheet" href="./path-to-css/moby.min.css"/>
```

If you are using less, you can import Moby into your less file

```CSS
/* Include in your main less file */
@import "./path-to-bower-components/moby.js/dist/moby.less";
-
OR
-
@import "./path-to-css/moby.less";
```
**2**.   Link to jQuery v1.11.1+ (If not using already) and moby.min.js file. (If using Bower, Moby uses jQuery as a dependency)
```HTML
<script src="./path-to-bower-components/jquery/dist/jquery.min.js"></script>
<script src="./path-to-bower-components/moby.js/dist/moby.min.js"></script>
-
OR
-
<script src="./path-to-js/jquery-1.11.1.min.js"></script>
<script src="./path-to-js/moby.min.js"></script>
```
PRO TIP: Google's Material Icons work as a great asset when using Moby.js. [Download Google's Material Icons](http://material.io/icons/)


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
    <i class="material-icons">menu</i>
</span>
```
**4**.   Initiate basic Moby.js
```JS
var mobyMenu = new Moby({
    menu       : $('#main-nav'), // The menu that will be cloned
    mobyTrigger: $('#moby-button'), // Button that will trigger the Moby menu to open
});
```

