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
'LBL_MODULE_NAME'                                  => '機會',
'LBL_MODULE_TITLE'                                 => '機會：首頁',
'LBL_SEARCH_FORM_TITLE'                            => '搜尋機會',
'LBL_VIEW_FORM_TITLE'                              => '機會檢視',
'LBL_LIST_FORM_TITLE'                              => '機會列表',
'LBL_OPPORTUNITY_NAME'                             => '機會名稱：',
'LBL_OPPORTUNITY'                                  => '機會：',
'LBL_NAME'                                         => '機會名稱',
'LBL_INVITEE'                                      => '聯絡人',
'LBL_CURRENCIES'                                   => '貨幣',
'LBL_LIST_OPPORTUNITY_NAME'                        => '名稱',
'LBL_LIST_ACCOUNT_NAME'                            => '帳號',
'LBL_LIST_AMOUNT'                                  => '數量',
'LBL_LIST_DATE_CLOSED'                             => '關閉',
'LBL_LIST_SALES_STAGE'                             => '銷售階段',
'LBL_ACCOUNT_ID'                                   => '公司編號',
'LBL_CURRENCY_ID'                                  => '貨幣編號',
'LBL_CURRENCY_NAME'                                => 'Currency Name',
'LBL_CURRENCY_SYMBOL'                              => 'Currency Symbol',
'db_sales_stage'                                   => 'LBL_LIST_SALES_STAGE',
'db_name'                                          => 'LBL_NAME',
'db_amount'                                        => 'LBL_LIST_AMOUNT',
'db_date_closed'                                   => 'LBL_LIST_DATE_CLOSED',
'UPDATE'                                           => '機會 - 更新貨幣',
'UPDATE_DOLLARAMOUNTS'                             => '更新美金金額',
'UPDATE_VERIFY'                                    => '確認金額',
'UPDATE_VERIFY_TXT'                                => '確認機會中的金額欄位都是數字與小數點的組合',
'UPDATE_FIX'                                       => '修改金額',
'UPDATE_FIX_TXT'                                   => '嘗試從目前的金額建立正確的數字來修改任何錯誤的金額，原有的資料會備份到amount_backup欄位，如果您執行過程中發現任何錯誤，記得在重新執行前先將備份的數值還原，避免備份的數值也跟著出錯。',
'UPDATE_DOLLARAMOUNTS_TXT'                         => '透過目前的匯率來更新機會的美金金額，這個數值用來計算圖片與貨幣金額瀏覽清單',
'UPDATE_CREATE_CURRENCY'                           => '建立新的貨幣：',
'UPDATE_VERIFY_FAIL'                               => '確認錯誤的資料：',
'UPDATE_VERIFY_CURAMOUNT'                          => '目前金額：',
'UPDATE_VERIFY_FIX'                                => '執行修正將會變成',
'UPDATE_INCLUDE_CLOSE'                             => '包含停用的資料',
'UPDATE_VERIFY_NEWAMOUNT'                          => '新的金額：',
'UPDATE_VERIFY_NEWCURRENCY'                        => '新的貨幣：',
'UPDATE_DONE'                                      => '完成',
'UPDATE_BUG_COUNT'                                 => '發現問題並且嘗試解決：',
'UPDATE_BUGFOUND_COUNT'                            => '發現問題：',
'UPDATE_COUNT'                                     => '資料更新筆數：',
'UPDATE_RESTORE_COUNT'                             => '資料金額還原：',
'UPDATE_RESTORE'                                   => '還原金額',
'UPDATE_RESTORE_TXT'                               => '透過修正期間建立的備份來還原金額數值',
'UPDATE_FAIL'                                      => '無法更新 - ',
'UPDATE_NULL_VALUE'                                => '沒有輸入金額的項目會設定為 0 -',
'UPDATE_MERGE'                                     => '合併貨幣',
'UPDATE_MERGE_TXT'                                 => '合併多種貨幣成為單一貨幣，如果您發現同樣的貨幣有多筆資料，您可以將他們合併。這將會合併所有模組的貨幣資料。',
'LBL_ACCOUNT_NAME'                                 => '客戶名稱：',
'LBL_AMOUNT'                                       => '數量：',
'LBL_AMOUNT_USDOLLAR'                              => '金額（美金）:',
'LBL_CURRENCY'                                     => '貨幣',
'LBL_DATE_CLOSED'                                  => '結束日期：',
'LBL_TYPE'                                         => '類型：',
'LBL_CAMPAIGN'                                     => '活動：',
'LBL_NEXT_STEP'                                    => '下個步驟：',
'LBL_LEAD_SOURCE'                                  => '接觸來源：',
'LBL_SALES_STAGE'                                  => '銷售階段：',
'LBL_PROBABILITY'                                  => '成功率 (%)：',
'LBL_DESCRIPTION'                                  => '描述：',
'LBL_DUPLICATE'                                    => '可能重複的機會',
'MSG_DUPLICATE'                                    => '建立這筆資料可能造成重複，您可以從下面清單選擇或是點選新增來繼續透過舊有資料建立新機會',
'LBL_NEW_FORM_TITLE'                               => '建立機會',
'LNK_NEW_OPPORTUNITY'                              => '建立機會',
'LNK_OPPORTUNITY_LIST'                             => '機會',
'ERR_DELETE_RECORD'                                => '必須指定記錄編號才能刪除機會.',
'LBL_TOP_OPPORTUNITIES'                            => '重要機會',
'NTC_REMOVE_OPP_CONFIRMATION'                      => '您確定要從這個機會刪除這個聯絡人？',
'OPPORTUNITY_REMOVE_PROJECT_CONFIRM'               => '您確定要從專案刪除這個機會？',
'LBL_DEFAULT_SUBPANEL_TITLE'                       => '機會',
'LBL_ACTIVITIES_SUBPANEL_TITLE'                    => '待辦事項',
'LBL_HISTORY_SUBPANEL_TITLE'                       => '紀錄',
'LBL_RAW_AMOUNT'                                   => '原始金額',
'LBL_LEADS_SUBPANEL_TITLE'                         => '準客戶',
'LBL_CONTACTS_SUBPANEL_TITLE'                      => '聯絡人',
'LBL_PROJECTS_SUBPANEL_TITLE'                      => '專案',
'LBL_ASSIGNED_TO_NAME'                             => '分配給：',
'LBL_LIST_ASSIGNED_TO_NAME'                        => '指派的使用者',
'LBL_MY_CLOSED_OPPORTUNITIES'                      => '我的結案機會',
'LBL_TOTAL_OPPORTUNITIES'                          => '機會總額',
'LBL_CLOSED_WON_OPPORTUNITIES'                     => '成功結案的機會',
'LBL_ASSIGNED_TO_ID'                               => '負責人編號',
'LBL_CREATED_ID'                                   => '建立者編號',
'LBL_MODIFIED_ID'                                  => '修改者編號',
'LBL_MODIFIED_NAME'                                => '修改者帳號',
'LBL_CREATED_USER'                                 => '建立者',
'LBL_MODIFIED_USER'                                => '修改者',
'LBL_CAMPAIGN_OPPORTUNITY'                         => '活動',
'LBL_PROJECT_SUBPANEL_TITLE'                       => '專案',
);?>
