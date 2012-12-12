<?php
	if(isset($_GET['q'])) {
		if(!empty($_GET['q'])) {
			$dir = '../../WIDEST/Media/PNG_MulberryEN3v1';
			
			if ($handle = opendir($dir)) {
			
				$arSymbol = Array();
				
				while (false !== ($entry = readdir($handle))) {
					if ($entry != "." && $entry != "..") {
						$arSymbol[] = $entry;
					}
				}
				
				
				closedir($handle);
				
				$matches = array_filter($arSymbol, function($haystack) {
					$needle = 'milk';
					return(strpos($haystack, $_GET['q']) !== false);
					
				});
				
				//var_dump($matches);
				
				foreach($matches as $match) {
					list($width, $height, $type, $attr) = getimagesize($dir.'\\'.$match);
					
					$strRes = '<div id="resultTbl"><div style="width:64px;height:64px;margin:auto;"><img src="'.$dir.'\\'.$match.'" ';
					
					if($width > $height)
						$strRes .= 'class="imgWidth"';
					else
						$strRes .= 'class="imgHeight"';
						
					$strRes .= ' /></div><input type="text" value="'.substr($match,0,strripos ($match, '.')).'" READONLY onclick="select()" /></div>';
					
					echo $strRes;
				}
			}
		}
	} else {
?>
<h1 style="text-align:center;">Mulberry Symbol Set</h1>
<div style="background:url(coloredArrow.png) no-repeat;height:141px;padding-left:48px;padding-top:35px;margin:auto;width:470px;">
	<div style="font-size:larger">Start typing in the field below to browse the symbol set</div>
	<div style="padding-left:90px;padding-top:46px;"><input type="text" id="symbol" style="outline: 5px auto orange; -moz-outline-radius:5px; line-height:22px;font-size:20px;" /><span style="color:grey;line-height:22px;font-style:italic;">&nbsp;(3 letters min)</span></div>
</div>
<div id="results"></div>
<script type="text/javascript">
	$('#symbol').keyup(function(event) {
		 var needle = $(event.target).val();
		 
		 if(needle.length > 2) {
			console.log(needle);
			$('#results').load('symbols.php?q='+needle);
		 }
	});
</script>
<?php }
?>