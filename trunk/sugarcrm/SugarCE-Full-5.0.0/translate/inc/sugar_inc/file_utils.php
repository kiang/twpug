<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2005 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
 
require_once('array_utils.php');

function clean_path( $path ){
    // clean directory/file path with a functional equivalent
    $path = str_replace( "\\", "/", $path );
    $path = str_replace( "//", "/", $path );
    $path = str_replace( "/./", "/", $path );
    return( $path );
}

function create_cache_directory($file){
    $paths = explode('/',$file);
    $dir = 'cache';
    if(!file_exists($dir)){
        mkdir($dir, 0755);
    }
    for($i = 0; $i < sizeof($paths) - 1; $i++){
        $dir .= '/' . $paths[$i];
        if(!file_exists($dir)){
            mkdir($dir, 0755);
        }
    }
    return $dir . '/'. $paths[sizeof($paths) - 1];
}

function get_module_dir_list(){
	$modules = array();
	$path = 'modules';
	$d = dir($path);
	while($entry = $d->read()){	
		if($entry != '..' && $entry != '.'){
			if(is_dir($path. '/'. $entry)){
				$modules[$entry] = $entry;
			}
		}
	}
	return $modules;
}

function mk_temp_dir( $base_dir, $prefix="" ){
    $temp_dir = tempnam( $base_dir, $prefix );
    if( !$temp_dir || !unlink( $temp_dir ) ){
        return( false );
    }

    if( mkdir( $temp_dir ) ){
        return( $temp_dir );
    }

    return( false );
}

function remove_file_extension( $filename ){
    return( substr( $filename, 0, strrpos($filename, ".") ) );
}

function write_array_to_file( $the_name, $the_array, $the_file ){
	
    $the_string =   "<?php\n" .
                    '// created: ' . date('Y-m-d H:i:s') . "\n" .
                    "\$$the_name = " .
                    var_export_helper( $the_array ) .
                    ";\n?>\n";

    if( $fh = @fopen( $the_file, "w" ) ){
        fputs( $fh, $the_string, strlen($the_string) );
        fclose( $fh );
        return( true );
    }
    else{
        return( false );
    }
}

function write_encoded_file( $soap_result, $write_to_dir, $write_to_file="" ){
    // this function dies when encountering an error -- use with caution!
    // the path/file is returned upon success

    require_once('upgrade/dir_inc.php');

    if( $write_to_file == "" ){
        $write_to_file = $write_to_dir . "/" . $soap_result['filename'];
    }

    $file = $soap_result['data'];
    $write_to_file = str_replace( "\\", "/", $write_to_file );

    $dir_to_make = dirname( $write_to_file );
    if( !is_dir( $dir_to_make ) ){
        mkdir_recursive( $dir_to_make );
    }
    $fh = fopen( $write_to_file, "wb" );
    fwrite( $fh, base64_decode( $file ) );
    fclose( $fh );

    if( md5_file( $write_to_file ) != $soap_result['md5'] ){
        die( "MD5 error after writing file $write_to_file" );
    }
    return( $write_to_file );
}

function create_custom_directory($file){
    $paths = explode('/',$file);
    $dir = 'custom';
    if(!file_exists($dir)){
        mkdir($dir, 0755);
    }
    for($i = 0; $i < sizeof($paths) - 1; $i++){
        $dir .= '/' . $paths[$i];
        if(!file_exists($dir)){
            mkdir($dir, 0755);
        }
    }
    return $dir . '/'. $paths[sizeof($paths) - 1];
}


?>