<?php
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_FILES'						=> '管理語言檔案',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '這裡您可以安裝/刪除語言包',

	'EMAIL_FILES'			=> 'Email模板',

	'FILE_CONTENTS'				=> '檔案內容',
	'FILE_FROM_STORAGE'			=> '存儲資料夾中的檔案',

	'HELP_FILES'				=> '幫助檔案',

	'INSTALLED_LANGUAGE_PACKS'	=> '已安裝的語言包',
	'INVALID_LANGUAGE_PACK'		=> '選中的語言包無效. 請檢驗語言包並重新上傳.',
	'INVALID_UPLOAD_METHOD'		=> '選中的上傳方式無效, 請選擇其他方式.',

	'LANGUAGE_DETAILS_UPDATED'			=> '語言細節更新完成.',
	'LANGUAGE_ENTRIES'					=> '語言項目',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> '這裡您可以改變現有的語言包或尚未翻譯的項目.<br /><strong>注意:</strong> 一旦您更改語言檔案, 改動將存儲在一個單獨的資料夾中用於下載. 變化對於會員是無法見的, 除非您上傳覆蓋原來的語言檔案.',
	'LANGUAGE_FILES'					=> '語言檔案',
	'LANGUAGE_KEY'						=> '語言字鍵',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '這個語言包已經安裝過了.',
	'LANGUAGE_PACK_DELETED'				=> '語言包 <strong>%s</strong> 已經被刪除. 所有使用這個語言的會員將被重置到討論區預設語言.',
	'LANGUAGE_PACK_DETAILS'				=> '語言包細節',
	'LANGUAGE_PACK_INSTALLED'			=> '語言包 <strong>%s</strong> 安裝完成.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> '本地名稱',
	'LANGUAGE_PACK_NAME'				=> '名稱',
	'LANGUAGE_PACK_NOT_EXIST'			=> '選中的語言包不存在.',
	'LANGUAGE_PACK_USED_BY'				=> '使用者 (包括機器人)',
	'LANGUAGE_VARIABLE'					=> '語言變量',
	'LANG_AUTHOR'						=> '語言包作者',
	'LANG_ENGLISH_NAME'					=> '英文名稱',
	'LANG_ISO_CODE'						=> 'ISO 代號',
	'LANG_LOCAL_NAME'					=> '本地名稱',

	'MISSING_LANGUAGE_FILE'		=> '失去語言檔案: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> '失去語言變量',
	'MODS_FILES'				=> 'MOD語言檔案',

	'NO_FILE_SELECTED'				=> '您沒有指定一個語言檔案.',
	'NO_LANG_ID'					=> '您沒有指定一個語言包.',
	'NO_REMOVE_DEFAULT_LANG'		=> '您不能刪除預設的語言包.<br />如果您確實想刪除它, 請先設定另一種語言為預設語言.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '沒有未安裝的語言包',

	'REMOVE_FROM_STORAGE_FOLDER'		=> '從存儲資料夾種刪除',

	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載格式',
	'SUBMIT_AND_DOWNLOAD'		=> '提供並下載檔案',
	'SUBMIT_AND_UPLOAD'			=> '提供並上傳檔案',

	'THOSE_MISSING_LANG_FILES'			=> '位於 %s 語言資料夾中的語言檔案缺少以下檔案',
	'THOSE_MISSING_LANG_VARIABLES'		=> '在 <strong>%s</strong> 語言包中缺少以下語言變量',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '未安裝的語言包',

	'UNABLE_TO_WRITE_FILE'		=> '檔案無法寫入 %s.',
	'UPLOAD_COMPLETED'			=> '上傳完成.',
	'UPLOAD_FAILED'				=> '上傳因為未知的原因失敗. 您可能需要手動替換相關檔案.',
	'UPLOAD_METHOD'				=> '上傳方式',
	'UPLOAD_SETTINGS'			=> '上傳設定',

	'WRONG_LANGUAGE_FILE'		=> '選中的語言包無效.',
));

?>