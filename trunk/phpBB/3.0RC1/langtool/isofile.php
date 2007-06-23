<?php

/* Copyright (C) 2007 Alexander Feigl

Redistribution and use in source and binary forms, with or without 
modification, are permitted provided that the following conditions 
are met:

   1. Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
   2. Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.
   3. The name of the author may not be used to endorse or promote products
      derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED 
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF 
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO 
EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT
OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY 
OF SUCH DAMAGE.
*/

class IsoFile {

	private $languageId;
	private $languageTrans;
	private $languageEn;
	private $languageAuthor;
	private $newLanguage;

	public function __construct($id,$lang_trans=NULL,$lang_en=NULL,$author=NULL) {
		$this->newLanguage=TRUE;
		$this->languageId=$id;
		$this->languageTrans=$lang_trans;
		$this->languageEn=$lang_en;
		$this->languageAuthor=$author;
		if ($this->languageTrans==NULL) {
			$this->newLanguage=FALSE;
			$fco=file_get_contents('language/'.$this->languageId.'/iso.txt');
			$exa=explode("\n",$fco);
			$this->languageEn=$exa[0];
			$this->languageTrans=$exa[1];
			$this->languageAuthor=$exa[2];
		}
	}

	public function writeFile() {
		if ($this->newLanguage) {
			if (!file_exists('language/'.$this->languageId)) {
				mkdir('language/'.$this->languageId);
				$ihtm="<html>\n<head>\n<title></title>\n".
					"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\n".
					"</head>\n\n<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n\n</body>\n</html>\n";
				file_put_contents('language/'.$this->languageId.'/index.htm',$ihtm);
				mkdir('language/'.$this->languageId.'/acp');
				file_put_contents('language/'.$this->languageId.'/acp/index.htm',$ihtm);
				mkdir('language/'.$this->languageId.'/email');
				file_put_contents('language/'.$this->languageId.'/email/index.htm',$ihtm);
				mkdir('language/'.$this->languageId.'/mods');
				file_put_contents('language/'.$this->languageId.'/mods/index.htm',$ihtm);
				$wrds="<?php\n\$words=array();\n?>\n";
				$syns="<?php\n\$synonyms=array();\n?>\n";
				file_put_contents('language/'.$this->languageId.'/search_ignore_words.php',$wrds);
				file_put_contents('language/'.$this->languageId.'/search_synonyms.php',$syns);
			}		
		}
		$iso=$this->languageEn."\n".$this->languageTrans."\n".$this->languageAuthor."\n";
		file_put_contents('language/'.$this->languageId.'/iso.txt',$iso);
	}

};

?>
