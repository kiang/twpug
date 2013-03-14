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
'LBL_MODULE_NAME'                                  => '工作事項',
'LBL_MODULE_TITLE'                                 => '工作事項：首頁',
'LBL_SEARCH_FORM_TITLE'                            => '工作事項搜尋',
'LBL_LIST_FORM_TITLE'                              => '工作事項清單',
'LBL_LIST_SUBJECT'                                 => '主旨',
'LBL_LIST_CONTACT'                                 => '聯絡人',
'LBL_LIST_RELATED_TO'                              => '相關',
'LBL_LIST_DATE'                                    => '日期',
'LBL_LIST_TIME'                                    => '開始時間',
'LBL_LIST_CLOSE'                                   => '關閉',
'LBL_SUBJECT'                                      => '主旨：',
'LBL_STATUS'                                       => '狀態：',
'LBL_LOCATION'                                     => '地點：',
'LBL_DATE_TIME'                                    => '開始日期、時間：',
'LBL_DATE'                                         => '開始日期：',
'LBL_TIME'                                         => '開始時間：',
'LBL_DURATION'                                     => '活動期間：',
'LBL_DURATION_MINUTES'                             => '期間(分鐘)：',
'LBL_HOURS_MINS'                                   => '(時/分)',
'LBL_CONTACT_NAME'                                 => '聯絡人：',
'LBL_MEETING'                                      => '會議：',
'LBL_DESCRIPTION_INFORMATION'                      => '描述資訊',
'LBL_DESCRIPTION'                                  => '描述：',
'LBL_COLON'                                        => '：',
'LBL_DEFAULT_STATUS'                               => '已規劃',
'LNK_NEW_CALL'                                     => '安排電話',
'LNK_NEW_MEETING'                                  => '安排會議',
'LNK_NEW_TASK'                                     => '建立任務',
'LNK_NEW_NOTE'                                     => '新增備註',
'LNK_NEW_EMAIL'                                    => '新增電子郵件',
'LNK_CALL_LIST'                                    => '電話',
'LNK_MEETING_LIST'                                 => '會議',
'LNK_TASK_LIST'                                    => '任務',
'LNK_NOTE_LIST'                                    => '備註',
'LNK_EMAIL_LIST'                                   => '電子郵件',
'ERR_DELETE_RECORD'                                => '必須指定記錄編號才能刪除公司.',
'NTC_REMOVE_INVITEE'                               => '您確定要從會議中刪除這個受邀者？',
'LBL_INVITEE'                                      => '受邀者',
'LBL_LIST_DIRECTION'                               => '方向',
'LBL_DIRECTION'                                    => '方向',
'LNK_NEW_APPOINTMENT'                              => '新約會',
'LNK_VIEW_CALENDAR'                                => '今天',
'LBL_OPEN_ACTIVITIES'                              => '進行中的行程',
'LBL_HISTORY'                                      => '紀錄',
'LBL_UPCOMING'                                     => '最近安排',
'LBL_TODAY'                                        => '顯示到時間 ',
'LBL_NEW_TASK_BUTTON_TITLE'                        => '新增任務 [Alt+N]',
'LBL_NEW_TASK_BUTTON_KEY'                          => 'N',
'LBL_NEW_TASK_BUTTON_LABEL'                        => '建立任務',
'LBL_SCHEDULE_MEETING_BUTTON_TITLE'                => '安排會議 [Alt+M]',
'LBL_SCHEDULE_MEETING_BUTTON_KEY'                  => 'M',
'LBL_SCHEDULE_MEETING_BUTTON_LABEL'                => '安排會議',
'LBL_SCHEDULE_CALL_BUTTON_TITLE'                   => '安排電話 [Alt+C]',
'LBL_SCHEDULE_CALL_BUTTON_KEY'                     => 'C',
'LBL_SCHEDULE_CALL_BUTTON_LABEL'                   => '安排電話',
'LBL_NEW_NOTE_BUTTON_TITLE'                        => '新增備註 [Alt+T]',
'LBL_NEW_NOTE_BUTTON_KEY'                          => 'T',
'LBL_NEW_NOTE_BUTTON_LABEL'                        => '新增備註',
'LBL_TRACK_EMAIL_BUTTON_TITLE'                     => '保留信件 [Alt+K]',
'LBL_TRACK_EMAIL_BUTTON_KEY'                       => 'K',
'LBL_TRACK_EMAIL_BUTTON_LABEL'                     => '保留信件',
'LBL_LIST_STATUS'                                  => '狀態',
'LBL_LIST_DUE_DATE'                                => '到期',
'LBL_LIST_LAST_MODIFIED'                           => '最新修改',
'NTC_NONE_SCHEDULED'                               => '沒有安排.',
'LNK_IMPORT_NOTES'                                 => '匯入記事',
'NTC_NONE'                                         => '無',
'LBL_ACCEPT_THIS'                                  => '接受？',
'LBL_DEFAULT_SUBPANEL_TITLE'                       => '進行中的行程',
'LBL_LIST_ASSIGNED_TO_NAME'                        => '指派的使用者',


'appointment_filter_dom' => array(
'today'                                            => '今天',
'tomorrow'                                         => '明天',
'this Saturday'                                    => '這週',
'next Saturday'                                    => '下週',
'last this_month'                                  => '這個月',
'last next_month'                                  => '下個月',
),
);?>