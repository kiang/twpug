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
'LBL_RE'                                           => '回覆：',
'ERR_BAD_LOGIN_PASSWORD'                           => '帳號或密碼有誤',
'ERR_BODY_TOO_LONG'                                => '\\r信件內容太長，無法取得完整信件，經過整理。',
'ERR_INI_ZLIB'                                     => '暫時無法關閉 Zlib 壓縮功能，測試設定功能也許會產生錯誤。',
'ERR_MAILBOX_FAIL'                                 => '無法取得任何信箱。',
'ERR_NO_IMAP'                                      => '找不到 IMAP 函式庫，在繼續之前請先修正這個問題。',
'ERR_NO_OPTS_SAVED'                                => '沒有收件匣最佳儲存方式，請檢查您的設定。',
'ERR_TEST_MAILBOX'                                 => '請檢查您的設定後重試。',
'LBL_APPLY_OPTIMUMS'                               => '套用最佳設定',
'LBL_ASSIGN_TO_USER'                               => '指定給使用者',
'LBL_AUTOREPLY_OPTIONS'                            => '自動回應選項',
'LBL_AUTOREPLY'                                    => '自動回信樣板',
'LBL_BASIC'                                        => '基本設定',
'LBL_CASE_MACRO'                                   => '案件巨集',
'LBL_CASE_MACRO_DESC'                              => '設定用來解析與連結匯入郵件到案件的巨集。',
'LBL_CASE_MACRO_DESC2'                             => '設定為任何數值，但是保留 <b>"%1"</b>。',
'LBL_CERT_DESC'                                    => '強制檢查郵件伺服器的驗證資料，如果是同一台主機請不要啟用這個項目。',
'LBL_CERT'                                         => '檢查驗證資料',
'LBL_CLOSE_POPUP'                                  => '關閉視窗',
'LBL_CREATE_NEW_GROUP'                             => '--儲存時建立信箱群組 --',
'LBL_CREATE_TEMPLATE'                              => '建立',
'LBL_SUBSCRIBE_FOLDERS'                            => '訂閱資料夾',
'LBL_DEFAULT_FROM_ADDR'                            => '預設：',
'LBL_DEFAULT_FROM_NAME'                            => '預設：',
'LBL_DELETE_SEEN'                                  => '匯入後刪除閱讀過的信件',
'LBL_EDIT_TEMPLATE'                                => '編輯',
'LBL_EMAIL_OPTIONS'                                => '郵件處理選項',
'LBL_FILTER_DOMAIN_DESC'                           => '這個網域不要寄送自動回覆信件。',
'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'                  => '指派一個信箱到群組資料夾可以啟用郵件自動匯入。',
'LBL_POSSIBLE_ACTION_DESC'                         => 'For the Create Case option, a Group Folder must be selected',
'LBL_FILTER_DOMAIN'                                => '這個網域不要自動回應',
'LBL_FIND_OPTIMUM_KEY'                             => 'f',
'LBL_FIND_OPTIMUM_MSG'                             => '<br>偵測最佳設定',
'LBL_FIND_OPTIMUM_TITLE'                           => '偵測最佳設定',
'LBL_FIND_SSL_WARN'                                => '<br>測試 SSL 需要一點時間，請耐心等待。<br>',
'LBL_FORCE_DESC'                                   => '部份IMAP/POP3 伺服器需要特殊的切換，勾選這個項目會在連線時強制使用否定切換(i.e., /notls)',
'LBL_FORCE'                                        => '強制否定',
'LBL_FOUND_MAILBOXES'                              => '找到下面信箱：',
'LBL_FOUND_OPTIMUM_MSG'                            => '<br>找到最佳設定，請點選下面按鈕來套用到信箱。',
'LBL_FROM_ADDR'                                    => '寄件人信箱',
'LBL_FROM_NAME_ADDR'                               => '回信者名稱/信箱：',
'LBL_FROM_NAME'                                    => '寄件人名稱',
'LBL_GROUP_QUEUE'                                  => '指派給群組',
'LBL_HOME'                                         => '首頁',
'LBL_LIST_MAILBOX_TYPE'                            => '信箱使用率',
'LBL_LIST_NAME'                                    => '名稱：',
'LBL_LIST_GLOBAL_PERSONAL'                         => '群組/個人',
'LBL_LIST_SERVER_URL'                              => '郵件伺服器：',
'LBL_LIST_STATUS'                                  => '狀態：',
'LBL_LOGIN'                                        => '使用者名稱',
'LBL_MAILBOX_DEFAULT'                              => '收件匣',
'LBL_MAILBOX_SSL_DESC'                             => '連線時使用 SSL，如果這個功能無法執行，請透過參數 "--with-imap-ssl" 重新編譯您的PHP程式。',
'LBL_MAILBOX_SSL'                                  => '使用 SSL',
'LBL_MAILBOX_TYPE'                                 => '操作',
'LBL_DISTRIBUTION_METHOD'                          => '發佈方式',
'LBL_CREATE_CASE_REPLY_TEMPLATE'                   => '建立案件回應樣板',
'LBL_MAILBOX'                                      => '已訂閱資料夾',
'LBL_TRASH_FOLDER'                                 => '回收桶資料夾',
'LBL_GET_TRASH_FOLDER'                             => '取得回收桶資料夾',
'LBL_SENT_FOLDER'                                  => '寄件備份',
'LBL_GET_SENT_FOLDER'                              => '取得寄件備份',
'LBL_SELECT'                                       => '選擇',
'LBL_MARK_READ_DESC'                               => '匯入時郵件伺服器上的郵件只標示為已讀取，不要刪除。',
'LBL_MARK_READ_NO'                                 => '匯入後將郵件標示為刪除',
'LBL_MARK_READ_YES'                                => '匯入後將郵件保留在伺服器上',
'LBL_MARK_READ'                                    => '在伺服器上保留郵件',
'LBL_MAX_AUTO_REPLIES'                             => '自動回應數量',
'LBL_MAX_AUTO_REPLIES_DESC'                        => '設定在 24 小時內自動回應到個別信箱數量上限',
'LBL_MODULE_NAME'                                  => '電子郵件設定',
'LBL_MODULE_TITLE'                                 => '電子郵件',
'LBL_NAME'                                         => '名稱',
'LBL_NONE'                                         => '無',
'LBL_NO_OPTIMUMS'                                  => '找不到最佳設定，請檢查您的設定後重試。',
'LBL_ONLY_SINCE_DESC'                              => '使用 POP3 會無法辨識新信件與未閱讀信件，這個選項可以讓新信件的檢查依據上次檢查時間作為分隔，在郵件伺服器不支援 IMAP 時可以顯著提昇效能。',
'LBL_ONLY_SINCE_NO'                                => '否，檢查所有郵件。',
'LBL_ONLY_SINCE_YES'                               => '是',
'LBL_ONLY_SINCE'                                   => '只匯入上次檢查後的資料：',
'LBL_OUTBOUND_SERVER'                              => '外寄郵件伺服器',
'LBL_PASSWORD_CHECK'                               => '密碼（再次輸入）',
'LBL_PASSWORD'                                     => '密碼',
'LBL_POP3_SUCCESS'                                 => '您的 POP3 連線測試成功。',
'LBL_POPUP_FAILURE'                                => '測試連線失敗，請參考下面錯誤訊息。',
'LBL_POPUP_SUCCESS'                                => '測試連線成功，您的設定正確。',
'LBL_POPUP_TITLE'                                  => '測試設定',
'LBL_GETTING_FOLDERS_LIST'                         => '取得資料夾清單',
'LBL_SELECT_SUBSCRIBED_FOLDERS'                    => '選擇訂閱的資料夾',
'LBL_SELECT_TRASH_FOLDERS'                         => '選擇回收桶資料夾',
'LBL_SELECT_SENT_FOLDERS'                          => '選擇寄件備份',
'LBL_DELETED_FOLDERS_LIST'                         => '下面資料夾 %s 不存在或是已經刪除',
'LBL_PORT'                                         => '郵件伺服器連接埠',
'LBL_QUEUE'                                        => '信箱佇列',
'LBL_REPLY_NAME_ADDR'                              => '回覆名稱/信箱',
'LBL_REPLY_TO_NAME'                                => '回覆名稱',
'LBL_REPLY_TO_ADDR'                                => '回覆信箱',
'LBL_SAME_AS_ABOVE'                                => '使用寄件人名稱/信箱',
'LBL_SAVE_RAW'                                     => '儲存原始檔',
'LBL_SAVE_RAW_DESC_1'                              => '選擇是來保留每個匯入郵件的原始檔。',
'LBL_SAVE_RAW_DESC_2'                              => '大型附加檔案可能在保守或是錯誤的資料庫設定中造成錯誤。',
'LBL_SERVER_OPTIONS'                               => '郵件伺服器選項',
'LBL_SERVER_TYPE'                                  => '郵件伺服器協定',
'LBL_SERVER_URL'                                   => '郵件伺服器位址',
'LBL_SSL_DESC'                                     => '如果您的郵件伺服器支援安全連線，啟用這個項目會在匯入信箱的過程強制使用 SSL 連線。',
'LBL_ASSIGN_TO_TEAM_DESC'                          => 'The selected team has access to the mail account. If a Group Folder is selected, the team assigned to the Group Folder overrides the selected team.',
'LBL_SSL'                                          => '使用 SSL',
'LBL_STATUS'                                       => '狀態',
'LBL_SYSTEM_DEFAULT'                               => '系統預設值',
'LBL_TEST_BUTTON_KEY'                              => 't',
'LBL_TEST_BUTTON_TITLE'                            => '測試 [Alt+T]',
'LBL_TEST_SETTINGS'                                => '測試設定',
'LBL_TEST_SUCCESSFUL'                              => '連線成功。',
'LBL_TEST_WAIT_MESSAGE'                            => '請稍候',
'LBL_TLS_DESC'                                     => '連線到郵件伺服器時使用傳輸層保密，使用這個項目前請先確認郵件伺服器支援。',
'LBL_TLS'                                          => '使用 TLS',
'LBL_WARN_IMAP_TITLE'                              => 'IMAP 警告',
'LBL_WARN_IMAP'                                    => '警告：',
'LBL_WARN_NO_IMAP'                                 => '這個系統沒有在PHP啟用或編譯 IMAP 的 c-client 函式庫於模組 (--with-imap=/path/to/imap_c-client_library)，請聯絡管理員處理。',
'LNK_CREATE_GROUP'                                 => '建立新群組',
'LNK_LIST_CREATE_NEW'                              => '訂閱新信箱',
'LNK_LIST_MAILBOXES'                               => '所有信箱',
'LNK_LIST_QUEUES'                                  => '所有佇列',
'LNK_LIST_SCHEDULER'                               => '排程器',
'LNK_LIST_TEST_IMPORT'                             => '測試郵件匯入',
'LNK_NEW_QUEUES'                                   => '建立新佇列',
'LNK_SEED_QUEUES'                                  => '從團隊取得佇列',
'LBL_IS_PERSONAL'                                  => '個人信箱',
'LBL_GROUPFOLDER_ID'                               => '群組資料夾編號',
'LBL_ASSIGN_TO_GROUP_FOLDER'                       => '指派給群組資料夾',
'LBL_STATUS_ACTIVE'                                => '啟用',
'LBL_STATUS_INACTIVE'                              => '停用',
'LBL_IS_GROUP'                                     => '群組',
);?>
