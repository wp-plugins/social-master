<?php
get_post_custom();
//Display Google Plus
	echo '<div class="g-plusone" data-size="tall"></div>' .
		'<script type="text/javascript">' .
		'(function() {' .
		'var po = document.createElement('.$socialspacer.'script'.$socialspacer.'); po.type = '.$socialspacer.'text/javascript'.$socialspacer.'; po.async = true;' .
		'po.src = '.$socialspacer.'https://apis.google.com/js/plusone.js'.$socialspacer.';' .
		'var s = document.getElementsByTagName('.$socialspacer.'script'.$socialspacer.')[0]; s.parentNode.insertBefore(po, s);' .
		'})();' .
		'</script><br>';
?>