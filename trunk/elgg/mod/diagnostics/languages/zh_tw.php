<?php
	/**
	 * Elgg diagnostics language pack.
	 * 
	 * @package ElggDiagnostics
	 * @author Curverider Ltd
	 * @link http://elgg.com/
	 */

	$traditionalChinese = array(
	
			'diagnostics' => '系統診斷',
			'diagnostics:unittester' => '單元測試',
	
			'diagnostics:description' => '以下的診斷報告, 對於確認Elgg的問題非常有用, 在傳送錯誤報告時請附加診斷報告.',
			'diagnostics:unittester:description' => '以下為插件註冊的診斷測試,可以用來執行Elgg平台的偵錯部份.',
	
			'diagnostics:unittester:description' => '單元測試, 用來檢查Elgg的核心或APIs是否損壞.',
			'diagnostics:unittester:debug' => '網站必須設定為偵錯模式, 才能執行單元測試.',
			'diagnostics:unittester:warning' => '警告: 這些測試可能在您的資料庫中留下偵錯物件. 請勿在實際運作的網站中使用!',

			'diagnostics:test:executetest' => '執行測試',
			'diagnostics:test:executeall' => '執行全部',
			'diagnostics:unittester:notests' => '抱歉, 尚未安裝單元測試的模組.',
			'diagnostics:unittester:testnotfound' => '抱歉, 由於未找到該項測試, 無法產生報表',
	
			'diagnostics:unittester:testresult:nottestclass' => '失敗 - 並非測試類別的結果',
			'diagnostics:unittester:testresult:fail' => '失敗',
			'diagnostics:unittester:testresult:success' => '成功',
	
			'diagnostics:unittest:example' => '範例用的單元測試, 只在偵錯模式下使用.',
	
			'diagnostics:unittester:report' => '%s 的測試報告',
	
			'diagnostics:download' => '下載 .txt',
	
	
			'diagnostics:header' => '========================================================================
Elgg 診斷報告
%s由%s產生
========================================================================
			
',
			'diagnostics:report:basic' => '
Elgg Release %s, 版本 %s

------------------------------------------------------------------------',
			'diagnostics:report:php' => '
PHP 資訊:
%s
------------------------------------------------------------------------',
			'diagnostics:report:plugins' => '
安裝的插件與詳細資料:

%s
------------------------------------------------------------------------',
			'diagnostics:report:md5' => '
安裝的檔案與查核值:

%s
------------------------------------------------------------------------',
			'diagnostics:report:globals' => '
整體變數:

%s
------------------------------------------------------------------------',
	
	);
					
	add_translation("zh_tw",$traditionalChinese);
?>