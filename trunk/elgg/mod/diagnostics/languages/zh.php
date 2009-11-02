<?php
	/**
	 * Elgg diagnostics language pack.
	 * 
	 * @package ElggDiagnostics
	 * @author Curverider Ltd
	 * @link http://elgg.com/
	 */

	$chinese = array(
	
			'diagnostics' => 'System diagnostics',
			'diagnostics:unittester' => '單元測試',
	
			'diagnostics:description' => 'The following diagnostic report is useful for diagnosing any problems with Elgg, and should be attached to any bug reports you file.',
			'diagnostics:unittester:description' => 'The following are diagnostic tests which are registered by plugins and may be performed in order to debug parts of the Elgg framework.',
	
			'diagnostics:test:executetest' => '執行測試',
			'diagnostics:test:executeall' => '執行全部',
			'diagnostics:unittester:notests' => 'Sorry, there are no unit test modules currently installed.',
			'diagnostics:unittester:testnotfound' => 'Sorry, the report could not be generated because that test was not found',
	
			'diagnostics:unittester:testresult:nottestclass' => 'FAIL - Result not a test class',
			'diagnostics:unittester:testresult:fail' => '失敗',
			'diagnostics:unittester:testresult:success' => '成功',
	
			'diagnostics:unittest:example' => 'Example unit test, only available in debug mode.',
	
			'diagnostics:unittester:report' => '%s 的測試報告',
	
			'diagnostics:download' => '下載 .txt',
	
	
			'diagnostics:header' => '========================================================================
Elgg Diagnostic Report
Generated %s by %s
========================================================================
			
',
			'diagnostics:report:basic' => '
Elgg Release %s, version %s

------------------------------------------------------------------------',
			'diagnostics:report:php' => '
PHP info:
%s
------------------------------------------------------------------------',
			'diagnostics:report:plugins' => '
Installed plugins and details:

%s
------------------------------------------------------------------------',
			'diagnostics:report:md5' => '
Installed files and checksums:

%s
------------------------------------------------------------------------',
			'diagnostics:report:globals' => '
Global variables:

%s
------------------------------------------------------------------------',
	
	);
					
	add_translation("zh",$chinese);
?>