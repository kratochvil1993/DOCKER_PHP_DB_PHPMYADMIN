<ul>
<?php 

$files = scandir('.');

sort($files); // this does the sorting

$i = 0;

foreach($files as $file){
	
	if ($file != '.DS_Store' && $i > 1) {
		echo'<li class=""><a class="" href="'.$file.'">'.$file.'</a></li>';
   	}
   	
	$i++;
}

?>
</ul>