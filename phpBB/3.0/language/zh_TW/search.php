<?php

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'ALL_AVAILABLE' => '所有可用',
	'ALL_RESULTS' => '全部時間',
	'DISPLAY_RESULTS' => '顯示結果為',
	'FOUND_SEARCH_MATCH' => '搜尋得到 %d 個符合結果',
	'FOUND_SEARCH_MATCHES' => '搜尋得到 %d 個符合結果',
	'FOUND_MORE_SEARCH_MATCHES' => '搜尋得到超過 %d 個符合結果',
	'GLOBAL' => '全域公告',
	'IGNORED_TERMS' => '忽略',
	'IGNORED_TERMS_EXPLAIN' => '您輸入的以下字詞將被忽略：<strong>%s</strong>',
	'JUMP_TO_POST' => '跳到文章',
	'LOGIN_EXPLAIN_EGOSEARCH' => '這個討論區需要註冊且登入後來檢視您自己的文章。',
	'NO_KEYWORDS' => '您必須指定至少一個關鍵詞，且每個關鍵詞必須為 %d 到 %d 個字元（包含萬用字元）。',
	'NO_RECENT_SEARCHES' => '沒有找到最近的搜尋操作。',
	'NO_SEARCH' => '抱歉，您沒有權限使用搜尋系統。',
	'NO_SEARCH_RESULTS' => '沒有搜尋到符合的結果。',
	'NO_SEARCH_TIME' => '抱歉，您暫時不能使用搜尋功能，請過幾分鐘後再試。',
	'WORD_IN_NO_POST' => '沒有搜尋到任何結果，因為 <strong>%s</strong> 不在任何文章內。',
	'WORDS_IN_NO_POST' => '沒有搜尋到任何結果，因為 <strong>%s</strong> 不在任何文章內。',
	'POST_CHARACTERS' => '個字元',
	'RECENT_SEARCHES' => '最近的搜尋',
	'RESULT_DAYS' => '將搜尋結果限制到最近的',
	'RESULT_SORT' => '將搜尋結果按此排序',
	'RETURN_FIRST' => '將搜尋結果限制為每篇文章',
	'RETURN_TO_SEARCH_ADV' => '返回進階搜尋',
	'SEARCHED_FOR' => '使用的搜尋條件',
	'SEARCHED_TOPIC' => '搜尋的主題',
	'SEARCH_ALL_TERMS' => '滿足全部條件或使用輸入的搜尋字串',
	'SEARCH_ANY_TERMS' => '滿足任意條件',
	'SEARCH_AUTHOR' => '按作者搜尋',
	'SEARCH_AUTHOR_EXPLAIN' => '使用 * 作為萬用字元。',
	'SEARCH_FIRST_POST' => '只檢查主題的第一篇文章',
	'SEARCH_FORUMS' => '搜尋討論區',
	'SEARCH_FORUMS_EXPLAIN' => '選擇您想搜尋的討論區。如果您打開了「搜尋子討論區」選項，勾選討論區的子討論區也會被一併搜尋。',
	'SEARCH_IN_RESULTS' => '搜尋這些結果',
	'SEARCH_KEYWORDS_EXPLAIN' => '在必須存在的搜尋詞前放置 <strong>+</strong> 號，在必須不存在的搜尋詞前面放置 <strong>-</strong> 號。如果一系列搜尋詞中只需要出現一個，在括號中間放置搜尋詞列表，詞與詞間用 <strong>|</strong> 隔開。使用 * 作為萬用字元。',
	'SEARCH_MSG_ONLY' => '只搜尋文章內容',
	'SEARCH_OPTIONS' => '搜尋選項',
	'SEARCH_QUERY' => '搜尋文章',
	'SEARCH_SUBFORUMS' => '搜尋子討論區',
	'SEARCH_TITLE_MSG' => '搜尋文章標題和內容',
	'SEARCH_TITLE_ONLY' => '只搜尋文章標題',
	'SEARCH_WITHIN' => '搜尋範圍',
	'SORT_ASCENDING' => '升冪',
	'SORT_AUTHOR' => '作者',
	'SORT_DESCENDING' => '降冪',
	'SORT_FORUM' => '討論區',
	'SORT_POST_SUBJECT' => '文章標題',
	'SORT_TIME' => '發表時間',
	'TOO_FEW_AUTHOR_CHARS' => '您必須提供至少 %d 個字元來符合作者名字。'
));
?>
