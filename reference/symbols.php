<?php
	if(isset($_GET['q'])) {
		if(!empty($_GET['q'])) {
			$dir = '../../PNG_MulberryEN3v1';
			
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
				
				var_dump($matches);
				
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
<input type="text" id="symbol" />
<div id="results"></div>
<script type="text/javascript">
	$('#symbol').keyup(function() {
		 var needle = $(event.target).val();
		 
		 if(needle.length > 2) {
			console.log(needle);
			$('#results').load('symbols.php?q='+needle);
		 }
	});
</script>
<?php }
?>