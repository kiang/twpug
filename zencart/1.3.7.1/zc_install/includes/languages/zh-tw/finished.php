<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: finished.php 4837 2006-10-25 06:08:29Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('TEXT_MAIN', '<h2>恭喜！</h2><h3>您已經完成了 Zen Cart&trade; 的安裝！</h3>
<h2>下一步</h2>基於安全理由，在對外開放前請重設位於<strong>/admin/includes/</strong> 與 <strong>/includes/</strong>的<strong>configure.php</strong> 檔案成唯讀。<br /><br />此外，您需要移除或更改 <strong>/zc_install</strong> 資料夾名稱來確保不會有其他人重新安裝您的購物網站以及刪除您的資料！警告訊息會一直出現，直到您移除或是更改資料夾名稱。
<h2>設定</h2>We encourage you to begin by <a href=\"http:
If you have questions, this is the first place to look! If you\'re stumped, feel free to post a question! We have a helpful, friendly, knowledgeable community who welcomes you.<br /><br /> 
It\'s also <strong>important</strong> that you check out the <strong>Documentation </strong>in the <strong><a href=\"../docs\" target=\"_blank\">/docs folder</a> </strong>of your site. <a href=\"../docs\" target=\"_blank\">Click here to view a listing.</a>
<h2>IMPORTANT READING</h2>The most important tool you\'ll use when customizing your site is the <strong>Developers Tool Kit</strong>, which is in the <strong>Admin area, under Tools</strong>. You can use it to search for almost anything you might like to customize or change, especially the text displayed on your site. <br /><br />
The most important concept you\'ll want to become familiar with in order to customize your site is our <em><strong>template system</strong></em>.  There are some very good articles on the template system in our <a href=\"http:
<h2>ADDITIONAL READING</h2>
<p>The <a href=\"http:
<p>In our <a href=\"http:
  <br />
  We\'re glad you chose Zen Cart&trade; to be your e-Commerce solution!<br />
  <br />
" . 
\'<a href="http:
</p>
\' .
\'<p>Press the <em>Store</em> button below to test out your store or press the <em>Admin</em> button to begin customizing your store.</p>');

  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; 安裝 - 完成');
  define('STORE', '點選這裡到購物車');
  define('ADMIN', '點選這裡到管理區');
?>