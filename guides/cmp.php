<script type="text/javascript" src="js/libs/shCore.js"></script>
<script type="text/javascript" src="js/libs/shBrushJScript.js"></script>

<link href="css/shCore.css" rel="stylesheet" type="text/css" />
<link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
     SyntaxHighlighter.all();
	 $(document).ready(function() {
		if ($('ol:first').css('list-style-type') != 'none') { /* For IE6/7 only. */
			$('ol ol').each(function(i, ol) {
				ol = $(ol);
				var level1 = ol.closest('li').index() + 1;
				ol.children('li').each(function(i, li) {
					li = $(li);
					var level2 = level1 + '.' + (li.index() + 1);
					li.prepend('<span>' + level2 + '</span>');
				});
			});
		}
	});
</script>

<h1>Creating custom components</h1>
<ol class="toc">
	<li><a href="">Intro</a></li>
	<li><a href="">Component package</a></li>
	<li><a href="">Component definition</a>
		<ol>
			<li><a href="">Themes</a></li>
			<li><a href="">Dependencies</a></li>
			<li><a href="">Attributes</a></li>
			<li><a href="">Actions</a></li>
			<li><a href="">Guidances</a></li>
		</ol>
	</li>
	<li><a href="">Javascript guidelines</a>
		<ol>
			<li><a href="">Component class</a></li>
			<li><a href="">Handling IDs</a></li>
			<li><a href="">Functions</a></li>
		</ol>
	</li>
</ol>
<h2>1. Intro</h2>
some intro
<h2>2. Component package</h2>
package details
<h2>3. Component definition</h2>
<h3>3.1 Themes</h3>
<h3>3.2 Dependencies</h3>
<h3>3.3 Attributes</h3>
<h3>3.4 Actions</h3>
<h3>3.5 Guidances</h3>
<h3>Example Component Definition Document</h3>
<pre class="brush: js">
	{
      "id":1,
      "className":"analogClock",
      "name":"Analog Clock",
      "description":"Analog looking clock timer using CSS3 for animation",
      "category":"Clock",
      "icon":"http://arc.tees.ac.uk/WIDEST/Widget/icons/analogClock.png",
      "placeHolder":"placeholder12",
      "authors":[
         {
            "name":"Franck Perrin",
            "email":"f.perrin@tees.ac.uk",
            "link":"http://arc.tees.ac.uk",
            "organisation":"ARC Teesside University"
         }
      ],
      "html":"analog.html",
      "javascript":"analog.js",
      "stylesheet":"analog.css",
      "themes":[
         {
            "name":"Default",
            "file":"analog.css"
         },
         {
            "name":"Black",
            "file":"analogBlack.css"
         }
      ],
      "dependencies":[
         {
            "name":"jquery"
         }
      ],
      "attributes":[
         {
            "shortName":"startTime",
            "name":"Starting Time",
            "type":"Number",
            "input":true,
            "required":true
         }
      ],
      "actions":[
         {
            "shortName":"launchCountdown",
            "name":"launch Countdown"
         },
         {
            "shortName":"resetClock",
            "name":"Reset clock"
         }
      ],
      "guidances":[
         {
            "priority":"high",
            "text":"The clock needs a starting time",
            "shortName":"startTime"
         }
      ]
   }
</pre>