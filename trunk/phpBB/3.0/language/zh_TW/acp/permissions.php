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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>權限具有很高的粒度, 合併為四個主要權限組:</p>

		<h2>全局權限</h2>
		<p>用於管理整個討論區的全局瀏覽, 並進一步區分為會員權限, 管理員權限和超級版主權限.</p>

		<h2>版面權限</h2>
		<p>針對每個版面的權限控制, 進一步分為版面權限, 版主版面權限, 會員版面權限, 群組版面權限.</p>

		<h2>權限角色</h2>
		<p>用於建立不同的權限組, 以便於設定不同的角色權限. 預設的角色可以或大或小的覆蓋討論區的管理權限, 不過在這四個權限組中您也可以新增/編輯/刪除您覺得合適的角色.</p>

		<h2>權限掩碼</h2>
		<p>用於檢視設定給會員, 版主, 管理員的權限的效果.</p>
	
		<br />

		<p>需要瞭解更多的設定和權限管理資訊, 請瀏覽 <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> '從不',
	'ACL_SET'				=> '權限設定',
	'ACL_SET_EXPLAIN'		=> '權限基於簡單的 <samp>是</samp>/<samp>否</samp> 系統. 設定群組和會員選項為 <samp>從不</samp> 將覆蓋其他設定的值. 如果您不希望給這個會員或群組設定值, 請選擇 <samp>否</samp>. 如果值在其他地方設定, 他們將在設定中使用, 否則請選擇 <samp>從不</samp>. 所有勾選的對象 (他們前面的勾選框) 將複製您設定的權限組.',
	'ACL_SETTING'			=> '設定',

	'ACL_TYPE_A_'			=> '管理權限',
	'ACL_TYPE_F_'			=> '版面權限',
	'ACL_TYPE_M_'			=> '版主權限',
	'ACL_TYPE_U_'			=> '會員權限',

	'ACL_TYPE_GLOBAL_A_'	=> '管理權限',
	'ACL_TYPE_GLOBAL_U_'	=> '會員權限',
	'ACL_TYPE_GLOBAL_M_'	=> '超級版主權限',
	'ACL_TYPE_LOCAL_M_'		=> '版主權限',
	'ACL_TYPE_LOCAL_F_'		=> '版面權限',
	
	'ACL_NO'				=> '否',
	'ACL_VIEW'				=> '檢視權限',
	'ACL_VIEW_EXPLAIN'		=> '這裡您可以看到會員和群組擁有的有效權限. 紅色方形表示會員/組沒有該權限, 旅社方形表示會員/組擁有該權限.',
	'ACL_YES'				=> '是',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> '這裡您可以賦於會員/組更高的管理權限. 所有擁有進階管理權限的會員都能看到管理員控制面板.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> '這裡您可以將會員/組任命為版主. 請使用其他的頁面設定會員瀏覽版面的權限和設定超級版主, 管理員..',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> '這裡您可以更改哪些會員/組可以瀏覽哪些版面. 任命版主和管理員請使用其他的頁面.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> '這裡您可以設定會員/組為超級版主. 這些版主擁有一般的版主權限, 但是他們可以瀏覽討論區的每個版面.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> '這裡您可以設定群組的版面權限.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> '這裡您可以將全局權限設定到權限組 - 會員權限, 超級版主權限和管理員權限. 會員權限包含使用圖示, 發送私人信件等等, 超級版主權限包含審閱文章, 管理主題, 管理停用等等, 而管理員權限包含更改權限, 設定BBCode, 管理版面等等. 只有少數的情況下才需要單獨的會員權限設定, 推薦的方式是將會員歸類到不同的組, 再賦予組不同的權限.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> '這裡您可以管理管理員權限的角色. 角色是一種有效的權限組合, 如果您更改了角色內容, 那麼使用這個角色的對象就會正確的被更改權限.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> '這裡您可以管理版面權限的角色. 角色是有效的權限組合, 如果您更改了角色內容, 那麼使用這個角色的對象就會正確的被更改權限.',
	'ACP_MOD_ROLES_EXPLAIN'						=> '這裡您可以管理版主權限的角色. 角色是有效的權限組合, 如果您更改了角色內容, 那麼使用這個角色的對象就會正確的被更改權限.',
	'ACP_USER_ROLES_EXPLAIN'					=> '這裡您可以管理會員權限的角色. 角色是有效的權限組合, 如果您更改了角色內容, 那麼使用這個角色的對象就會正確的被更改權限.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> '這裡您可以為會員設定權限.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> '這裡您可以給會員設定全局權限 - 會員權限, 超級版主權限和管理員權限. 會員權限包含使用圖示, 發送站內簡訊等等; 超級版主權限包含審閱文章, 管理主題, 管理停用等等; 管理員權限包含權限設定, BBCode設定, 版面管理等等. 對於大規模的會員權限設定請使用群組權限方式. 會員的單獨權限只在很少數的情況下需要更改, 推薦的方式是將會員歸類在不同的群組中, 再賦予群組不同的權限.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> '這裡您可以檢視給勾選的會員/組設定的有效管理權限',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> '這裡您可以檢視給勾選的會員/組設定的有效版主權限',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> '這裡您可以檢視給勾選的會員/組和版面設定的有效版面權限',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> '這裡您可以檢視給勾選的會員/組和版面設定的版主權限',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> '這裡您可以檢視給勾選的會員/組設定的有效會員權限',

	'ADD_GROUPS'				=> '新增組',
	'ADD_PERMISSIONS'			=> '新增權限',
	'ADD_USERS'					=> '新增會員',
	'ADVANCED_PERMISSIONS'		=> '進階權限',
	'ALL_GROUPS'				=> '全選',
	'ALL_NEVER'					=> '所有 <samp>從不</samp>',
	'ALL_NO'					=> '所有 <samp>否</samp>',
	'ALL_USERS'					=> '選擇全部會員',
	'ALL_YES'					=> '所有 <samp>是</samp>',
	'APPLY_ALL_PERMISSIONS'		=> '應用所有權限',
	'APPLY_PERMISSIONS'			=> '應用權限',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '為這個對象設定的權限和角色將只被應用到這個對象和所有勾選的對象.',
	'AUTH_UPDATED'				=> '權限更新完成.',

	'CREATE_ROLE'				=> '建立角色',
	'CREATE_ROLE_FROM'			=> '使用設定自…',
	'CUSTOM'					=> '自訂…',

	'DEFAULT'					=> '預設',
	'DELETE_ROLE'				=> '刪除角色',
	'DELETE_ROLE_CONFIRM'		=> '您確認您需要刪除這個角色嗎? 使用這個角色的對象 <strong>不會</strong> 因此失去他們的權限設定.',
	'DISPLAY_ROLE_ITEMS'		=> '檢視使用這個角色的對象',

	'EDIT_PERMISSIONS'			=> '編輯權限',
	'EDIT_ROLE'					=> '編輯對像',

	'GROUPS_NOT_ASSIGNED'		=> '沒有使用這個角色的組',

	'LOOK_UP_GROUP'				=> '搜尋群組',
	'LOOK_UP_USER'				=> '搜尋會員',

	'MANAGE_GROUPS'		=> '管理群組',
	'MANAGE_USERS'		=> '管理會員',

	'NO_AUTH_SETTING_FOUND'		=> '沒有進行權限設定.',
	'NO_ROLE_ASSIGNED'			=> '沒有指定角色…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> '設定為這個角色並不改變右邊的權限. 如果您需要重設/刪除所有權限, 您需要使用 「所有 <samp>否</samp>」 連結.',
	'NO_ROLE_AVAILABLE'			=> '沒有可用的角色',
	'NO_ROLE_NAME_SPECIFIED'	=> '請設定角色的名稱.',
	'NO_ROLE_SELECTED'			=> '沒有勾選的角色.',
	'NO_USER_GROUP_SELECTED'	=> '您沒有勾選會員或組.',

	'ONLY_FORUM_DEFINED'	=> '您只設定了勾選的版面, 請再勾選至少一個會員或群組.',

	'PERMISSION_APPLIED_TO_ALL'		=> '權限和角色也將被應用到勾選的對象上',
	'PLUS_SUBFORUMS'				=> '+子版面',

	'REMOVE_PERMISSIONS'			=> '刪除權限',
	'REMOVE_ROLE'					=> '刪除角色',
	'ROLE'							=> '角色',
	'ROLE_ADD_SUCCESS'				=> '角色新增完成.',
	'ROLE_ASSIGNED_TO'				=> '會員/組設定給 %s',
	'ROLE_DELETED'					=> '角色刪除完成.',
	'ROLE_DESCRIPTION'				=> '角色描述',

	'ROLE_ADMIN_FORUM'			=> '版面管理',
	'ROLE_ADMIN_FULL'			=> '完全管理',
	'ROLE_ADMIN_STANDARD'		=> '標準管理',
	'ROLE_ADMIN_USERGROUP'		=> '會員/組管理',
	'ROLE_FORUM_BOT'			=> '機器人瀏覽',
	'ROLE_FORUM_FULL'			=> '完全瀏覽',
	'ROLE_FORUM_LIMITED'		=> '有限瀏覽',
	'ROLE_FORUM_LIMITED_POLLS'	=> '有限瀏覽 + 投票',
	'ROLE_FORUM_NOACCESS'		=> '禁止瀏覽',
	'ROLE_FORUM_ONQUEUE'		=> '版主隊列',
	'ROLE_FORUM_POLLS'			=> '標準瀏覽 + 投票',
	'ROLE_FORUM_READONLY'		=> '只讀瀏覽',
	'ROLE_FORUM_STANDARD'		=> '標準瀏覽',
	'ROLE_MOD_FULL'				=> '完全版主',
	'ROLE_MOD_QUEUE'			=> '隊列版主',
	'ROLE_MOD_SIMPLE'			=> '簡單版主',
	'ROLE_MOD_STANDARD'			=> '標準版主',
	'ROLE_USER_FULL'			=> '所有功能',
	'ROLE_USER_LIMITED'			=> '有限功能',
	'ROLE_USER_NOAVATAR'		=> '無圖示',
	'ROLE_USER_NOPM'			=> '無私人簡訊',
	'ROLE_USER_STANDARD'		=> '標準功能',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> '可以瀏覽討論區管理和討論區權限設定.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> '擁有這個討論區的所有管理員權限.<br />不推薦使用.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> '可以行使大部分管理員功能但是不允許使用伺服器/系統相關功能.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> '可以管理會員/組: 可以更改權限, 設定, 管理停用和等級.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> '這個角色推薦給機器人和搜尋爬蟲使用.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '可以使用所有版面功能, 包括發表通告和置頂. 不受灌水間隔限制.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> '可以使用部分版面功能, 但是不能上傳附加檔案和使用主題圖示.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '和受限瀏覽一樣但是可以建立投票.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> '無法看見和瀏覽版面.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> '可以使用大多數的版面功能包括上傳附加檔案, 但是文章和主題需要版主審閱後才能發表.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '和標準瀏覽一樣但是可以建立投票.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> '可以瀏覽版面, 但是不能建立也不能回覆主題.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> '可以使用大多數討論區功能包括上傳附加檔案, 但是不能鎖定和刪除自己的主題, 也不能建立投票.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> '可以行使所用版主功能, 包括停用.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '可以使用版主隊列審閱和編輯文章, 但是沒有其他權限.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '可以使用基本主題操作. 不能發送警告和使用版主隊列.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> '可以使用大部分的版主工具, 但是不能停用會員和更改文章作者.',
	'ROLE_DESCRIPTION_USER_FULL'			=> '可以對會員行使所有的版主功能, 包括更改帳號稱, 也不受灌水間隔限制.<br />不推薦使用.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> '可以瀏覽部分會員功能. 但是不允許上傳附加檔案, 發送email和私人簡訊.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> '有限的功能設定, 並且不允許使用圖示功能.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> '有限的功能設定, 並且不允許使用私人簡訊.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> '可以瀏覽大多數但不是全部會員功能, 例如更改帳號稱, 也受灌水間隔限制.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> '您可以輸入一個簡短的說明, 以解釋這個角色的用途和意義. 您這裡輸入的文字也會顯示在權限介面上.',
	'ROLE_DESCRIPTION_LONG'			=> '角色描述太長, 請壓縮至4000字元以內.',
	'ROLE_DETAILS'					=> '角色細節',
	'ROLE_EDIT_SUCCESS'				=> '角色編輯完成.',
	'ROLE_NAME'						=> '角色名稱',
	'ROLE_NAME_ALREADY_EXIST'		=> '指定權限類型, 名為 <strong>%s</strong> 的角色已經存在.',
	'ROLE_NOT_ASSIGNED'				=> '角色尚未指派.',

	'SELECTED_FORUM_NOT_EXIST'		=> '勾選的版面不存在.',
	'SELECTED_GROUP_NOT_EXIST'		=> '勾選的組不存在.',
	'SELECTED_USER_NOT_EXIST'		=> '勾選的會員不存在.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> '您勾選的版面將包含所有的子版面',
	'SELECT_ROLE'					=> '選擇角色…',
	'SELECT_TYPE'					=> '選擇類型',
	'SET_PERMISSIONS'				=> '設定權限',
	'SET_ROLE_PERMISSIONS'			=> '設定角色權限',
	'SET_USERS_PERMISSIONS'			=> '設定會員權限',
	'SET_USERS_FORUM_PERMISSIONS'	=> '設定會員版面權限',

	'TRACE_DEFAULT'					=> '預設情況下所有權限為 <samp>否</samp> (未設). 所以權限可以被其他設定覆蓋.',
	'TRACE_FOR'						=> '跟蹤',
	'TRACE_GLOBAL_SETTING'			=> '%s (全局)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> '這個組的權限設定為 <samp>從不</samp> 所以保留舊的結果.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> '他的組權限設為 <samp>從不</samp>, 這成為了新的值因為這個值在之前並沒有設定 (設定為 <samp>否</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> '這個組的權限被設定為 <samp>從不</samp>, 這將覆蓋會員的 <samp>是</samp> , 變成 <samp>從不</samp> .',
	'TRACE_GROUP_NO'				=> '這個組的權限是 <samp>否</samp>, 所以保留舊的值.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> '這個組的權限被設定為 <samp>是</samp> 但是 <samp>從不</samp> 無法被覆蓋.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> '這個組的權限被設定為 <samp>是</samp>, 這將成為新的值, 因為原值並沒有設定(設定成 <samp>否</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> '這個組的權限被設定為 <samp>是</samp>, 並且原值也被設定為 <samp>是</samp>, 所以最終還是一樣的結果.',
	'TRACE_PERMISSION'				=> '跟蹤權限 - %s',
	'TRACE_SETTING'					=> '跟蹤設定',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '會員的版面無關權限設定為 <samp>是</samp> 而原權限也已經設定為 <samp>是</samp>, 所以最終還是一樣的結果. %s跟蹤全局權限%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '會員的版面無關權限設定為 <samp>是</samp>, 這將覆蓋目前本地結果<samp>從不</samp>. %s跟蹤全局權限%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '會員的版面無關權限設定為 <samp>從不</samp>, 這對於本地權限無影響. %s跟蹤全局權限%s',
	'TRACE_USER_FOUNDER'					=> '會員屬於創始人, 因此預設的管理員權限設定為 <samp>是</samp>.',
	'TRACE_USER_KEPT'						=> '會員權限是<samp>否</samp> 所以保留舊的值.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '會員權限設定為 <samp>從不</samp> 而原值也是 <samp>從不</samp>, 所以沒有變化.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> '會員權限設定為 <samp>從不</samp>, 這成為新的值(舊的值是否).',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '會員權限設定為 <samp>從不</samp>, 覆蓋了原先的 <samp>是</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> '會員權限設定為 <samp>否</samp> 而原值也設定為否, 所以最終回覆預設值 <samp>從不</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '會員權限設定為 <samp>是</samp> 但是無法覆蓋原值 <samp>從不</samp>.',
	'TRACE_USER_YES_TOTAL_NO'				=> '會員權限設定為 <samp>是</samp> 這成為新的值(舊的值是<samp>否</samp>).',
	'TRACE_USER_YES_TOTAL_YES'				=> '會員權限設定為 <samp>是</samp> 而原值也是 <samp>是</samp>, 所以沒有變化.',
	'TRACE_WHO'								=> '誰',
	'TRACE_TOTAL'							=> '合計',

	'USERS_NOT_ASSIGNED'			=> '這個角色沒有會員',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '是下列預設組的成員',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '是下列自訂組的成員',

	'VIEW_ASSIGNED_ITEMS'	=> '檢視設定的項目',
	'VIEW_LOCAL_PERMS'		=> '本地權限',
	'VIEW_GLOBAL_PERMS'		=> '全局權限',
	'VIEW_PERMISSIONS'		=> '檢視權限',

	'WRONG_PERMISSION_TYPE'	=> '選擇了錯誤的權限類型.',
));

?>