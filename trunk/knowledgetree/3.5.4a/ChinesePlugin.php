<?php

class ChinesePlugin extends KTPlugin {
    var $sNamespace = "chinese.plugin";
    var $iOrder = -50;

    function setup() {
        $this->registerI18nLang('knowledgeTree', "zh_TW", 'translations/');
        $this->registerLanguage("zh_TW", "Traditional Chinese");
    }
}

$oPluginRegistry =& KTPluginRegistry::getSingleton();
$oPluginRegistry->registerPlugin('ChinesePlugin', 'chinese.plugin', __FILE__);
