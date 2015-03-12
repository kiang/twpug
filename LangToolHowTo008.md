The lang\_tool module is a tool helping people translating modules and core of XOOPS. I know many people tried to test this module with no luck. It's sure need more documentation. But I must work for living first, right? If you think this module should be better, try to do it by your hand, or consider clicking the donation link in the project page:
> http://code.google.com/p/twpug/

Let's begin. ;)

First, the lang\_tool module 0.08 beta is not complete. You should not put it in any production site. Use it at your own risk.

1) Download the module from the following url:
> http://code.google.com/p/twpug/downloads/list

If I have not modified the link, you could try to download 'lang\_tool\_0.08\_beta1.zip'.

2) Download cakephp 1.2 from the following url:
> http://cakephp.org/

The latest version is 1.2.2.8120 Stable

3) Extract lang\_tool\_0.08\_beta1.zip, put the folder 'lang\_tool' into the 'module' directory.

4) Extract cakephp, put the folder 'cake' ( cake\_1.2.2.8120/cake ) into the 'Framework' directory. (If you can't find the directory in the root of your XOOPS, you are not using XOOPS 2.3, considering using lang\_tool 0.0761 instead)

5) This module needs mod\_rewrite of apache and make sure the AllowOverride settings allow the module to override some settings using .htaccess file.

For example, in Ubuntu 9.04, I must check the settings in /etc/apache2/sites-available/default. Find out this part:

```
	<Directory /var/www/>
		Options Indexes FollowSymLinks MultiViews
		AllowOverride None
		Order allow,deny
		allow from all
	</Directory>
```

Change the line 'AllowOverride None' to 'AllowOverride All'.

And enable the mod\_rewrite with this command:
> sudo a2enmod rewrite

And remember to restart apache before next step:
> sudo /etc/init.d/apache restart

6) Install the module in the standard process.

7) If the XOOPS be installed in the user directory and have the url like '/~kiang/xoops/'. You need to modify the following files:
```
/home/kiang/public_html/xoops/modules/lang_tool/.htaccess
/home/kiang/public_html/xoops/modules/lang_tool/webroot/.htaccess
```

Add the following line into the settings:
> RewriteBase /~kiang/xoops/modules/lang\_tool/

8) If you are not using operating system called 'Windows', you must give the write privileges to apache in the following path and all its sub-directories:

```
xoops/modules/lang_tool/tmp
xoops/language
xoops/modules/*/language
```

If you are working in a testing environments, and you are as lazy as me, do it with this command:
> chmod -R 777 xoops

**It's a very very (very++) bad idea for production environments.**