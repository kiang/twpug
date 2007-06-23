Moodle 說明文件
--------------------

如果您打算把 Moodle 的說明文件翻譯成他國的語言，我會作出以下建議:

 1) 切勿在本目錄夾雜英文語系的檔案，因為當系統發現檔案沒有他國語系版本，就會自動顯示英文版本的相關說明文件。

 2) 翻譯檔案的優次以檔案的重要性先行處理︰
  
    最要的檔案先進行翻譯︰
    |-------------------
    |
    |   - files.php
    |   - install.html
    |   - upgrade.html
    |
    |  -----------------
    |
    |   - teacher.html
    |   - module_files.txt
    | 
    |  -----------------
    |   
    |   - intro.html
    |   - features.html
    |   - release.html
    |
    |  -----------------
    |
    |   - developer.html
    |   - cvs.html
    |   - future.html
    |
    |  -----------------
    |   
    |   - license.html
    |   - credits.html
    |
    |-------------------
    最不重要的檔案排在較後的工作優次