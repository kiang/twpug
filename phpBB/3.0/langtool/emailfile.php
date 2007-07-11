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

define('ESTATUS_UNCHANGED',0);
define('ESTATUS_CHANGED',1);
define('ESTATUS_BAD_FORMAT',2);

define('ETYPE_ORIGINAL',0);
define('ETYPE_REFERENCE',1);
define('ETYPE_TRANSLATED',2);
define('ETYPE_STATUS',3);

class EMailFile {

	private $langFile;
	private $origFile;
	private $refFile;

	private $langEmail;
	private $origEmail;
	private $refEmail;
	private $statusEmail;

	private $needChange;

	public function __construct($lang,$name) {
		$this->langFile='language/'.$lang.'/email/'.$name.'.txt';
		$this->origFile='language/en/email/'.$name.'.txt';
		$this->refFile='language/'.$lang.'/email/'.$name.'.txt.ref';
	
		if (file_exists($this->origFile)) {
			$this->origEmail=file_get_contents($this->origFile);
		} else {
			$this->origEmail=NULL;
		}

		if (file_exists($this->refFile)) {
			$this->refEmail=file_get_contents($this->refFile);
		} else {
			$this->refEmail=NULL;
		}

		if (file_exists($this->langFile)) {
			$this->langEmail=file_get_contents($this->langFile);
		} else {
			$this->langEmail=NULL;
		}

		$this->needChange=FALSE;
		$this->computeStatus();
		if ($this->statusEmail!=ESTATUS_UNCHANGED) $this->needChange=TRUE;
	}

	private function computeStatus() {
		if ($this->refEmail!=$this->origEmail) {
			$this->statusEmail=ESTATUS_CHANGED;
			return;
		}
		$form1=$this->getFormatSignature($this->origEmail);
		$form2=$this->getFormatSignature($this->langEmail);
		if ($form1!=$form2) {
			$this->statusEmail=ESTATUS_BAD_FORMAT;
			return;
		}
		$this->statusEmail=ESTATUS_UNCHANGED;
	}

	public function writeFiles() {
		file_put_contents($this->refFile,$this->refEmail);
		file_put_contents($this->langFile,$this->langEmail);
	}


	public function readOriginal() {
		return($this->origEmail);
	}

	public function readReference() {
		return($this->refEmail);
	}

	public function readTranslated() {
		return($this->langEmail);
	}

	public function readStatus() {
		return($this->statusEMail);
	}

	public function writeValue($value) {
		$this->langEmail=$value;
		$this->refEmail=$this->origEmail;
		$this->statusEMail=ESTATUS_UNCHANGED;
	}

	public function fileChanged() {
		return($this->needChange);
	}

	private function getFormatSignature($text) {
		$formArray=array();
		$formString='';
		$spos=0;
		while ( ($spos=strpos($text,'{',$spos))!==FALSE) {
			$epos=strpos($text,'}',$spos);
			if ($epos===FALSE) break;
			$spos++;
			$len=$epos-$spos;
			$fa=substr($text,$spos,$len);
			$formArray[$fa]=TRUE;
		}
		ksort($formArray);
		foreach (array_keys($formArray) as $key) {
			$formString.='{'.$key.'}';
		}
		return($formString);
	}

}

?>
