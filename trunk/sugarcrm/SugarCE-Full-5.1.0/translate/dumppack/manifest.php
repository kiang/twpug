<?php 
$manifest = array( 
	'name' => 'Traditional Chinese',
	'description' => '20080423',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '20080423',
	'published_date' => '20080423',
	'author' => 'Finjon Kiang',
);

$installdefs = array(
	'id'=> 'zh-tw',
        
	'image_dir'=>'<basepath>/images',
        
	'copy' => array(
        
	array('from'=> '<basepath>/include','to'=> 'include',),
        
	array('from'=> '<basepath>/modules','to'=> 'modules'))
        
);
?>
