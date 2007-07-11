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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode是一種HTML的特殊實現, 可以產生各種頁面效果而不會有安全隱患. 這裡您可以新增/刪除/編輯自訂BBCode',
	'ADD_BBCODE'				=> '新增BBCode',

	'BBCODE_ADDED'				=> 'BBCode新增完成.',
	'BBCODE_EDITED'				=> 'BBCode編輯完成.',
	'BBCODE_NOT_EXIST'			=> '您選擇的BBCode不存在.',
	'BBCODE_HELPLINE'			=> '提示',
	'BBCODE_HELPLINE_EXPLAIN'	=> '這個區域會在鼠標移過時顯示BBCode提示資訊',
	'BBCODE_HELPLINE_TEXT'		=> '提示文本',
	'BBCODE_INVALID_TAG_NAME'	=> '您選擇的BBCode標籤名稱已經存在.',
	'BBCODE_OPEN_ENDED_TAG'		=> '您的自訂BBCode必須包含開關標籤.',
	'BBCODE_TAG'				=> '標籤',
	'BBCODE_TAG_TOO_LONG'		=> '您選擇的標籤名稱太長了.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> '您輸入的標籤定義太長了, 請盡量簡短.',
	'BBCODE_USAGE'				=> 'BBCode使用方法',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> '這裡您可以定義bbcode的用法. 使用相關的標記替換相關的變量輸入(%s以下所示%s)',

	'EXAMPLE'						=> '例子:',
	'EXAMPLES'						=> '例子:',

	'HTML_REPLACEMENT'				=> 'HTML替換程式碼',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> '這裡您可以定義預設的HTML替換程式碼 (每個模板可以使用它自己的替換程式碼). 不要忘記放回您上面使用的標記!',

	'TOKEN'					=> '標記',
	'TOKENS'				=> '標記',
	'TOKENS_EXPLAIN'		=> '標記是會員輸入的佔位符. 只有當輸入滿足規則時才會被檢驗. 如果需要的話, 您可以在最後一個字元後新增數字進行編號, 例如 {USERNAME1}, {USERNAME2}.<br /><br />除了這些標記您可以使用任何語言包中的任何字元串, 例如: {L_<em>&lt;stringname&gt;</em>} 這裡 <em>&lt;stringname&gt;</em> 就是您希望新增的翻譯後的字元串的名稱. 例如, {L_WROTE} 將被顯示為 "wrote" 或者會員的當地語言',
	'TOKEN_DEFINITION'		=> '這將是?',
	'TOO_MANY_BBCODES'		=> '您不能建立更多BBCodes. 請刪除掉一些現有的BBCode後再重試.',

	'tokens'	=>	array(
		'TEXT'			=> '任何文字, 包括外文字元, 數字, 等等…',
		'NUMBER'		=> '任何數字序列',
		'EMAIL'			=> '有效的email位址',
		'URL'			=> '使用任何協議的有效的URL(http, ftp, 等等… 不能用作javascript掠奪). 如果沒有提供, 將新增"http://"',
		'LOCAL_URL'		=> '本地URL. URL必須和主題頁相關並且不能包含伺服器名稱和協議',
		'COLOR'			=> 'HTML顏色, 可以是六位十六進制數<samp>#FF1234</samp> 或者<a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS色彩關鍵字</a> 例如<samp>fuchsia</samp> 或 <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> '這裡您可以新增/刪除/編輯會員在主題和文章中使用的圖示. 這些圖示一般顯示在標題旁, 您也可以新增新的圖示包.',
	'ACP_SMILIES_EXPLAIN'	=> '表情圖示一般是較小的, 有時可以是動畫檔案的小圖片, 會員用於表達情緒的好方式. 這裡您可以新增/刪除/編輯表情圖示. 您也可以安裝和建立新的表情圖片包.',
	'ADD_SMILIES'			=> '新增多個表情圖示',
	'ADD_SMILEY_CODE'		=> '新增更多的表情程式碼',
	'ADD_ICONS'				=> '新增多個圖示',
	'AFTER_ICONS'			=> '在 %s 之後',
	'AFTER_SMILIES'			=> '在 %s 之後',

	'CODE'						=> '程式碼',
	'CURRENT_ICONS'				=> '目前圖示',
	'CURRENT_ICONS_EXPLAIN'		=> '選擇如何處理目前安裝的圖示',
	'CURRENT_SMILIES'			=> '目前表情圖示',
	'CURRENT_SMILIES_EXPLAIN'	=> '選擇如何處理目前安裝的表情圖示',

	'DISPLAY_ON_POSTING'	=> '在發表文章時顯示',

	'EDIT_ICONS'				=> '編輯圖示',
	'EDIT_SMILIES'				=> '編輯表情圖示',
	'EMOTION'					=> '表情',
	'EXPORT_ICONS'				=> '匯出並下載icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%s點選這個連結, 您安裝的圖示設定將被輸出為 <samp>icons.pak</samp> 下載, 用於建立 <samp>.zip</samp> 或 <samp>.tgz</samp> 檔案, 這個檔案包含所有您的圖示加上這個 <samp>icons.pak</samp> 設定檔案%s.',
	'EXPORT_SMILIES'			=> '匯出並下載smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%s點選這個連結, 您安裝的表情圖示設定將被匯出為 <samp>smilies.pak</samp> 下載, 用於建立 <samp>.zip</samp> 或 <samp>.tgz</samp> 檔案, 這個檔案包含所有您的表情圖示加上設定檔案 <samp>smilies.pak</samp>%s.',

	'FIRST'			=> '第一個',

	'ICONS_ADD'				=> '新增新圖示',
	'ICONS_ADDED'			=> '圖示新增完成.',
	'ICONS_CONFIG'			=> '圖示設定',
	'ICONS_DELETED'			=> '圖示刪除完成.',
	'ICONS_EDIT'			=> '編輯圖示',
	'ICONS_EDITED'			=> '圖示更新完成.',
	'ICONS_HEIGHT'			=> '圖示高度',
	'ICONS_IMAGE'			=> '圖示圖片',
	'ICONS_IMPORTED'		=> '圖示包安裝完成.',
	'ICONS_IMPORT_SUCCESS'	=> '圖示系列匯入完成.',
	'ICONS_LOCATION'		=> '圖示位置',
	'ICONS_NOT_DISPLAYED'	=> '以下圖示將不會在發表文章中顯示',
	'ICONS_ORDER'			=> '圖示順序',
	'ICONS_URL'				=> '圖示檔案',
	'ICONS_WIDTH'			=> '圖示寬度',
	'IMPORT_ICONS'			=> '安裝圖示包',
	'IMPORT_SMILIES'		=> '安裝表情圖片包',

	'KEEP_ALL'			=> '保留全部',

	'MASS_ADD_SMILIES'	=> '新增多個表情圖示',

	'NO_ICONS_ADD'		=> '沒有可用於新增的圖示.',
	'NO_ICONS_EDIT'		=> '沒有可用於修改的圖示.',
	'NO_ICONS_EXPORT'	=> '您沒有用於建立包的圖示.',
	'NO_ICONS_PAK'		=> '沒有找到圖片包.',
	'NO_SMILIES_ADD'	=> '沒有可用於新增的表情圖示.',
	'NO_SMILIES_EDIT'	=> '沒有可用於修改的表情圖示.',
	'NO_SMILIES_EXPORT'	=> '您沒有用於建立表情圖片包的表情圖片.',
	'NO_SMILIES_PAK'	=> '沒有找到表情圖片包.',

	'PAK_FILE_NOT_READABLE'		=> '無法讀取 <samp>.pak</samp> 檔案.',

	'REPLACE_MATCHES'	=> '替換符合',

	'SELECT_PACKAGE'			=> '選擇一個包檔案',
	'SMILIES_ADD'				=> '新增一個新表情',
	'SMILIES_ADDED'				=> '表情新增完成.',
	'SMILIES_CODE'				=> '表情程式碼',
	'SMILIES_CONFIG'			=> '表情設定',
	'SMILIES_DELETED'			=> '表情刪除完成.',
	'SMILIES_EDIT'				=> '編輯表情',
	'SMILIES_EDITED'			=> '表情更新完成.',
	'SMILIES_EMOTION'			=> '表情',
	'SMILIES_HEIGHT'			=> '表情圖片高度',
	'SMILIES_IMAGE'				=> '表情圖片',
	'SMILIES_IMPORTED'			=> '表情圖片包安裝完成.',
	'SMILIES_IMPORT_SUCCESS'	=> '表情圖片包匯入完成.',
	'SMILIES_LOCATION'			=> '表情圖片位址',
	'SMILIES_NOT_DISPLAYED'		=> '以下的表情圖片在發表文章頁面上不顯示',
	'SMILIES_ORDER'				=> '表情圖示順序',
	'SMILIES_URL'				=> '表情圖片檔案',
	'SMILIES_WIDTH'				=> '表情圖片寬度',

	'WRONG_PAK_TYPE'	=> '指定的檔案包中沒有所需的資料.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> '這個控制面板中可以新增, 編輯, 刪除需要過濾的詞彙. 並且會員將不允許使用包含這些敏感詞的帳號註冊帳號. 可以使用萬用字元, 例如 *test* 將符合detestable, test*將符合testing, *test將符合detest',
	'ADD_WORD'				=> '新增敏感詞',

	'EDIT_WORD'		=> '編輯敏感詞',
	'ENTER_WORD'	=> '您必須輸入敏感詞和其替代詞.',

	'NO_WORD'	=> '沒有選擇編輯對像.',

	'REPLACEMENT'	=> '替代詞',

	'UPDATE_WORD'	=> '更新敏感詞',

	'WORD'				=> '敏感詞',
	'WORD_ADDED'		=> '敏感詞新增完成.',
	'WORD_REMOVED'		=> '勾選的敏感詞刪除完成.',
	'WORD_UPDATED'		=> '勾選的敏感詞更新完成.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> '使用這個資料表您可以新增, 編輯, 檢視和刪除等級. 您也可以建立自訂等級, 使用在會員管理中.',
	'ADD_RANK'				=> '新增新等級',

	'MUST_SELECT_RANK'		=> '您必須選擇一個等級.',
	
	'NO_ASSIGNED_RANK'		=> '沒有指定特殊等級.',
	'NO_RANK_TITLE'			=> '您沒有給等級指定頭銜.',
	'NO_UPDATE_RANKS'		=> '等級成功刪除. 但是使用這個等級的會員並沒有更新. 您需要手動重置這些會員的等級.',

	'RANK_ADDED'			=> '等級新增完成.',
	'RANK_IMAGE'			=> '等級圖示',
	'RANK_IMAGE_EXPLAIN'	=> '這裡定義和等級相關聯的小圖片. 路徑為phpBB根目錄的相對路徑.',
	'RANK_MINIMUM'			=> '最小文章數',
	'RANK_REMOVED'			=> '等級刪除完成.',
	'RANK_SPECIAL'			=> '設定為特殊等級',
	'RANK_TITLE'			=> '等級頭銜',
	'RANK_UPDATED'			=> '等級更新完成.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> '這裡您可以管理禁止使用的帳號. 可以使用萬用字元 *. 請注意這對已經註冊的帳號是無效的',
	'ADD_DISALLOW_EXPLAIN'	=> '您可以使用萬用字元 *來禁止使用某類的帳號',
	'ADD_DISALLOW_TITLE'	=> '新增停用帳號',

	'DELETE_DISALLOW_EXPLAIN'	=> '您可以透過點選列表中的帳號再點選提供來刪除一個停用的帳號',
	'DELETE_DISALLOW_TITLE'		=> '刪除一個停用的帳號',
	'DISALLOWED_ALREADY'		=> '您輸入的帳號無法停用. 它或者已經存在列表中, 或者存在於敏感詞列表中, 或者與現存的帳號符合.',
	'DISALLOWED_DELETED'		=> '停用的帳號刪除完成.',
	'DISALLOW_SUCCESSFUL'		=> '停用的帳號新增完成.',

	'NO_DISALLOWED'				=> '沒有停用的帳號',
	'NO_USERNAME_SPECIFIED'		=> '您沒有輸入操作的帳號.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> '這裡您可以管理用於舉報和否決文章的原因. 預設的原因 (帶 * 標記) 不能刪除, 這個原因一般用於沒有合適的選項而要指定自訂原因的場合.',
	'ADD_NEW_REASON'		=> '新增新原因',
	'AVAILABLE_TITLES'		=> '可用自己的語言原因標題',
	
	'IS_NOT_TRANSLATED'			=> '原因 <strong>尚未</strong> 本地化.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> '原因 <strong>尚未</strong> 被翻譯成本地語言. 如果您希望提供本地化的資料表, 則需要為語言檔案的舉報原因片段設定合適的關鍵字.',
	'IS_TRANSLATED'				=> '原因已經本地化.',
	'IS_TRANSLATED_EXPLAIN'		=> '原因已經被翻譯成本地語言. 如果您您輸入的標題在語言檔案的舉報原因章節已經設定過, 本地化的標題和描述將自動啟用.',
	
	'NO_REASON'					=> '無法找到"原因".',
	'NO_REASON_INFO'			=> '您必須給這個原因指定標題和描述.',
	'NO_REMOVE_DEFAULT_REASON'	=> '您不能刪除預設的原因 "其他".',

	'REASON_ADD'				=> '新增舉報/否決原因',
	'REASON_ADDED'				=> '舉報/否決原因新增完成.',
	'REASON_ALREADY_EXIST'		=> '使用這個標題的原因已經存在, 請輸入另一個標題.',
	'REASON_DESCRIPTION'		=> '原因描述',
	'REASON_DESC_TRANSLATED'	=> '顯示原因描述',
	'REASON_EDIT'				=> '編輯舉報/否決原因',
	'REASON_EDIT_EXPLAIN'		=> '這裡您可以新增或編輯原因. 如果原因本有當地語言的版本則自動顯示當地語言.',
	'REASON_REMOVED'			=> '舉報/否決刪除完成.',
	'REASON_TITLE'				=> '原因標題',
	'REASON_TITLE_TRANSLATED'	=> '顯示的原因標題',
	'REASON_UPDATED'			=> '舉報/否決原因修改完成.',

	'USED_IN_REPORTS'		=> '舉報中使用',
));

?>