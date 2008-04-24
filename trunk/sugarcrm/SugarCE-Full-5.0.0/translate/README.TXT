
/* =================================================================================================
 * Sugar Translation Suite
 * January, 2006
 * Web Based Translation tool for SugarCRM application
 * author : http://www.grupa-atlantis.pl
 * =================================================================================================
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation at 
 * http://www.gnu.org/copyleft/gpl.html#SEC3.
 * 
 */

Description:
------------
Sugar Translation suite is a free php/MySQL based application which provide an easy way for people who are working 
on a language pack for SugarCRM to manage there translation and to make it evolve with each new version of SugarCRM.

Usage:
------
Uncompress the archive in your web  server directory and access the install.php file using your web browser.
Once installed you can use the application via the main index page (index.php).
note: this application requires Apache, PHP and MySQL

Documentation:
--------------
The complete documentation can be found in the doc.html file, and his accessible from the index page once installed.


For any comments or suggestions please contact us : office@grupa-atlantis.pl


Hint for merging translations:
INSERT INTO sugar_lang_dico( ref, trx )
SELECT b.ref, b.trx
FROM sugar_lang_dico_b AS b
WHERE 0 = (
SELECT COUNT( id )
FROM sugar_lang_dico
WHERE ref = b.ref ) 
