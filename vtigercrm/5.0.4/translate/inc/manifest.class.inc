<?php
 
 
  class Manifest { 
    var $props;var $isRef;var $version;
    function Manifest($version,$isRef = false) {
        $this->props = query_db_prop("vtiger_mnf","WHERE lang = '".($isRef ? "REF" : "TRX" )."' and version_id = '$version' order by name");
        $this->isRef = $isRef;
        $this->version = $version;
    }
    function isEmpty() { return count($this->props) == 0; }
    function getFileSuffix() { return $this->props["lang_file_suffix"]; }
    function getPackName() { return $this->props["name"]; }
    function get($name) { return $this->props[$name]; }
    function has($name) { return isset($this->props[$name]) && $this->props[$name] != ""; }
    function set($name,$value) { $this->props[$name] = $value; }

    function save() {
        $lang = ($this->isRef ? "REF" : "TRX" );
        $version = $this->version;
        mysql_query("DELETE FROM vtiger_mnf WHERE lang = '$lang' and version_id = '$version'");
        foreach($this->props as $key => $value) mysql_query("INSERT INTO vtiger_mnf VALUES( '$version', '$lang','$key','".mysql_real_escape_string($value)."')");
    }
    
    function refresh($mnfRef = null) {
        global $manifestProps,$requiredProps,$default_props;
        $lang = ($this->isRef ? "REF" : "TRX" );
        $version = $this->version;
        mysql_query("DELETE FROM vtiger_mnf WHERE lang = '$lang' and version_id = '$version'");
        $merge = array_merge($manifestProps,$requiredProps);
        $this->props = array();
        for ($i = 0 ; $i < count($merge); $i++) {
              $key = $merge[$i];
              $value = (! is_null($mnfRef) && $mnfRef->has($key) ? $mnfRef->get($key) : "");
              if ($value == "" && array_key_exists($key,$default_props)) {
                  $value = $default_props[$key];
              }
              mysql_query("INSERT INTO vtiger_mnf VALUES( '$version', '$lang','$key','".mysql_real_escape_string($value)."')");
              $this->props[$key] =$value;
        }
    }
    
    function loadManifest($file_name) {
        global $manifest,$manifestProps;
        require($file_name);
        $this->props = array();
        for ($i = 0 ; $i < count($manifestProps); $i++) {
            $key = $manifestProps[$i];
            if (isset($manifest[$key])) {
                $value = $manifest[$key];
                if (is_array($value)) {
                    $this->set($key, var_export_min( $value ));
                } elseif (is_bool($value)) {
                    $this->set($key, ($value ? "true":"false"));
                } else {
                    $this->set($key, $value);
                }
            }
        }
        $this->save();
    }
    
    function check() {
        if ($this->has("lang_file_suffix") && $this->has("name")) {
            $trx_key = $this->get("lang_file_suffix");
            return eregi('^[a-z0-9]+([_-][a-z0-9]+)?$',$trx_key) ;
        }
        return false;
    }
    
    function checkText() {
        
        if (! $this->has("lang_file_suffix")) return "You need to set the 'lang_file_suffix' properties. The expected syntax is [:alpha:]{2}_[:alpha:]{2} ex : ('en_us')";
        else if (! $this->has("name")) return "You need to set up the name property. This value will also be used in the sugar language choice drop down.";
        //else if (!strlen( $this->get("lang_file_suffix")) == 5 || ! eregi("[a-z][a-z]_[a-z][a-z]", $this->get("lang_file_suffix"))) return "The expected syntax for the lang_file_suffix property is [:alpha:]{2}_[:alpha:]{2} ex : ('en_us')";
        else if (! eregi('^[a-z0-9]+([_-][a-z0-9]+)?$', $this->get("lang_file_suffix"))) return "The expected syntax for the lang_file_suffix property is [:alnum:]+_[:alnum:]+ or [:alnum:]+  ex : ('en_us', 'ja')";
    }
    
    function updateFrom($array) {
        $newProps = array();
        foreach($this->props as $key => $value) $newProps[$key] = (isset($array[$key]) ? $array[$key] : "");
        $this->props = $newProps;
        $this->save();
        if (! $this->check()) msg($this->checkText());
    }

    function toFile($path = "./") {
        global $manifestProps;
        $file_handle = fopen($path . "manifest.php","w");
        fwrite($file_handle,"<?php \n\$manifest = array( \n");
        for ($i = 0 ; $i < count($manifestProps); $i++) {
            $key = $manifestProps[$i];
            if ($this->has($key)) {
                $val = $this->get($key);
                if (ereg("array",$val)) {
                    fwrite($file_handle,"\t'$key' => " . stripslashes($val));
                } elseif (preg_match("/true|false/",$val)) {
                    fwrite($file_handle,"\t'$key' => $val");
                } else {
                    fwrite($file_handle,"\t'$key' => '" . stripslashes($val) . "'");
                }
                if ($i < count($manifestProps) -1) fwrite($file_handle,",\n");
            }
        }
        fwrite($file_handle,");\n");
        fwrite($file_handle,"\n\$installdefs = array(\n\t'id'=> '" . $this->getFileSuffix() . "',
        \n\t'image_dir'=>'<basepath>/images',
        \n\t'copy' => array(
        \n\tarray('from'=> '<basepath>/include','to'=> 'include',),
        \n\tarray('from'=> '<basepath>/modules','to'=> 'modules'))
        \n);\n");
        fwrite($file_handle,"?>\n");
    }
}

?>
