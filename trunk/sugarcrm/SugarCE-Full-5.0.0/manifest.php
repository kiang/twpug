<?PHP 
$manifest = array( 
	'name' => 'Traditional Chinese',
	'description' => 'Taiwan PHP User Group | http://twpug.net',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '1',
	'acceptable_sugar_flavors' => array (),
	'author' => 'Finjon Kiang',
	'acceptable_sugar_versions' => array (),
);

$installdefs = array(
	'id'=> 'zh-tw',
        
	'image_dir'=>'<basepath>/images',
        
	'copy' => array(
        
	array('from'=> '<basepath>/include','to'=> 'include',),
        
	array('from'=> '<basepath>/modules','to'=> 'modules'))
        
);
?>
