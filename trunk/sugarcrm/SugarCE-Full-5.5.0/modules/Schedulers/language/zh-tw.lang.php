<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings= array (
'LBL_OOTB_WORKFLOW'                                => '處理工作流程任務',
'LBL_OOTB_REPORTS'                                 => '產生預定任務的報表',
'LBL_OOTB_IE'                                      => '檢查收件匣',
'LBL_OOTB_BOUNCE'                                  => '執行活動退信夜間處理',
'LBL_OOTB_CAMPAIGN'                                => '執行大量活動信件夜間處理',
'LBL_OOTB_PRUNE'                                   => '在每月月初清理資料庫',
'LBL_OOTB_TRACKER'                                 => '清空追蹤資料表',
'LBL_UPDATE_TRACKER_SESSIONS'                      => '更新 tracker_sessions 資料表',
'LBL_LIST_JOB_INTERVAL'                            => '間隔：',
'LBL_LIST_LIST_ORDER'                              => '工作排程：',
'LBL_LIST_NAME'                                    => '工作排程：',
'LBL_LIST_RANGE'                                   => '範圍：',
'LBL_LIST_REMOVE'                                  => '移除：',
'LBL_LIST_STATUS'                                  => '狀態：',
'LBL_LIST_TITLE'                                   => '工作排程列表：',
'LBL_LIST_EXECUTE_TIME'                            => '即將執行時間：',
'LBL_SUN'                                          => '星期日',
'LBL_MON'                                          => '星期一',
'LBL_TUE'                                          => '星期二',
'LBL_WED'                                          => '星期三',
'LBL_THU'                                          => '星期四',
'LBL_FRI'                                          => '星期五',
'LBL_SAT'                                          => '星期六',
'LBL_ALL'                                          => '每天',
'LBL_EVERY_DAY'                                    => '每天',
'LBL_AT_THE'                                       => '在',
'LBL_EVERY'                                        => '每一',
'LBL_FROM'                                         => '自',
'LBL_ON_THE'                                       => '於',
'LBL_RANGE'                                        => '到',
'LBL_AT'                                           => '於',
'LBL_IN'                                           => '在',
'LBL_AND'                                          => '且',
'LBL_MINUTES'                                      => '分',
'LBL_HOUR'                                         => '時',
'LBL_HOUR_SING'                                    => '時',
'LBL_MONTH'                                        => '月',
'LBL_OFTEN'                                        => '最高頻率。',
'LBL_MIN_MARK'                                     => '分鐘標示',
'LBL_MINS'                                         => '分',
'LBL_HOURS'                                        => '時',
'LBL_DAY_OF_MONTH'                                 => '日',
'LBL_MONTHS'                                       => '月',
'LBL_DAY_OF_WEEK'                                  => '天',
'LBL_CRONTAB_EXAMPLES'                             => '上面使用標準 crontab 語法。',
'LBL_ALWAYS'                                       => '永遠',
'LBL_CATCH_UP'                                     => '錯過時執行',
'LBL_CATCH_UP_WARNING'                             => '如果這個任務執行需要一點時間就取消勾選。',
'LBL_DATE_TIME_END'                                => '結束日期與時間',
'LBL_DATE_TIME_START'                              => '開始日期與時間',
'LBL_INTERVAL'                                     => '間隔',
'LBL_JOB'                                          => '任務',
'LBL_LAST_RUN'                                     => '最後執行時間',
'LBL_MODULE_NAME'                                  => '系統工作排程',
'LBL_MODULE_TITLE'                                 => '排程器',
'LBL_NAME'                                         => '任務名稱',
'LBL_NEVER'                                        => '從不',
'LBL_NEW_FORM_TITLE'                               => '新工作排程',
'LBL_PERENNIAL'                                    => '永遠',
'LBL_SEARCH_FORM_TITLE'                            => '搜尋工作排程',
'LBL_SCHEDULER'                                    => '工作排程：',
'LBL_STATUS'                                       => '狀態',
'LBL_TIME_FROM'                                    => '啟用自',
'LBL_TIME_TO'                                      => '啟用到',
'LBL_WARN_CURL_TITLE'                              => 'cURL 警告：',
'LBL_WARN_CURL'                                    => '警告：',
'LBL_WARN_NO_CURL'                                 => '系統沒有PHP 的 cURL 函式庫模組 (--with-curl=/path/to/curl_library)，請聯絡您的管理員；缺乏這個功能時，工作排程將無法順利進行。',
'LBL_BASIC_OPTIONS'                                => '基本設定',
'LBL_ADV_OPTIONS'                                  => '進階選項',
'LBL_TOGGLE_ADV'                                   => '進階選項',
'LBL_TOGGLE_BASIC'                                 => '基本選項',
'LNK_LIST_SCHEDULER'                               => '排程器',
'LNK_NEW_SCHEDULER'                                => '建立工作排程',
'LNK_LIST_SCHEDULED'                               => '已排程工作',
'SOCK_GREETING'                                    => '這是系統工作排程服務，[可以使用的常駐程式指令： start|restart|shutdown|status ] 要離開請輸入 "quit"，關閉請輸入 "shutdown"。',
'ERR_DELETE_RECORD'                                => '要刪除工作排成需指定編號。',
'ERR_CRON_SYNTAX'                                  => 'Invalid Cron syntax',
'NTC_DELETE_CONFIRMATION'                          => '確定要刪除這個記錄嗎?',
'NTC_STATUS'                                       => '設定狀態為停用會從工作排程的下拉選單中移除',
'NTC_LIST_ORDER'                                   => '設定工作排程的下拉選單順序',
'LBL_CRON_INSTRUCTIONS_WINDOWS'                    => '安裝 Windows 工作排程',
'LBL_CRON_INSTRUCTIONS_LINUX'                      => '安裝 Crontab',
'LBL_CRON_LINUX_DESC'                              => '新增這一行到您的 crontab：',
'LBL_CRON_WINDOWS_DESC'                            => '透過下面指令建立一個批次檔案：',
'LBL_NO_PHP_CLI'                                   => '如果您的主機沒有 PHP 執行程式，您可以使用 wget 或 curl 來執行工作。<br> wget: <b>*    *    *    *    *    wget --spider /cron.php</b><br>curl: <b>*    *    *    *    *    curl --silent /cron.php',
'LBL_JOBS_SUBPANEL_TITLE'                          => '執行中任務',
'LBL_EXECUTE_TIME'                                 => '執行時間',
'LBL_REFRESHJOBS'                                  => '任務重新整理',
'LBL_POLLMONITOREDINBOXES'                         => '檢查收件信箱',
'LBL_RUNMASSEMAILCAMPAIGN'                         => '執行夜晚大量郵件活動',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => '執行夜晚活動退信處理',
'LBL_PRUNEDATABASE'                                => '在每月 1 號清理資料庫',
'LBL_TRIMTRACKER'                                  => '清理追蹤資料表',
);?>
