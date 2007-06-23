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

define('LSTATUS_UNCHANGED',0);
define('LSTATUS_CHANGED',1);
define('LSTATUS_NEW',2);
define('LSTATUS_BAD_TAIL',3);
define('LSTATUS_BAD_FORMAT',4);

define('LTYPE_ORIGINAL',0);
define('LTYPE_REFERENCE',1);
define('LTYPE_TRANSLATED',2);
define('LTYPE_STATUS',3);

class LangFile {

	private $helpMode;
	private $langFile;
	private $origFile;
	private $refFile;

	private $langArray;
	private $origArray;
	private $refArray;
	private $statusArray;
	private $keyList;

	private $needChange;
	private $untranslated;
	private $tailErrors;
	private $formatErrors;
	private $stringsTotal;
	private $stringsRemoved;

	public function __construct($lang,$name) {
		$this->helpMode=FALSE;
		$this->langFile='language/'.$lang.'/'.$name.'.php';
		$this->origFile='language/en/'.$name.'.php';
		$this->refFile='language/'.$lang.'/'.$name.'.php.ref';
	
		if (file_exists($this->origFile)) {
			include $this->origFile;
			if (is_array($lang)) {
				$this->origArray=$lang;
				unset($lang);
			} else if (is_array($help)) {
				$this->origArray=$help;
				unset($help);
				$this->helpMode=TRUE;
			} else $this->origArray=array();
		} else {
			$this->origArray=array();
		}

		if (file_exists($this->refFile)) {
			include $this->refFile;
			if (!$this->helpMode) {
				$refArray=$lang;
				unset($lang);
			} else {
				$refArray=$help;
				unset($help);
			}
		} else {
			$refArray=array();
		}

		if (file_exists($this->langFile)) {
			include $this->langFile;
			if (!$this->helpMode) {
				$langArray=$lang;
				unset($lang);
			} else {
				$langArray=$help;
				unset($help);
			}
		} else {
			$langArray=array();
		}

		$this->needChange=FALSE;
		$this->stringsRemoved=0;

		$this->cleanupArray($refArray,$this->origArray);
		$this->stringsRemoved=0;
		$this->cleanupArray($langArray,$this->origArray);
		$this->langArray=array();
		$this->refArray=array();
		$this->fillArray($this->langArray,$langArray,$this->origArray);
		$this->fillArray($this->refArray,$refArray,$this->origArray);
		$this->updateStatus();
	}

	public function updateStatus() {
		$this->untranslated=0;
		$this->tailErrors=0;
		$this->formatErrors=0;
		$this->stringsTotal=0;
		$this->statusArray=array();
		$this->keyList=array();
		$prefix=array();
		$this->computeKeys($this->origArray,$this->langArray,$this->refArray,
			$this->statusArray,$prefix);
	}

	private function computeKeys(&$oarr,&$larr,&$rarr,&$sarr,$prefix) {
		$keys=array_keys($oarr);
		foreach ($keys as $key) {
			$newprefix=$prefix;
			array_push($newprefix,$key);
			if (is_array($oarr[$key])) {
				$sarr[$key]=array();
				$this->computeKeys($oarr[$key],$larr[$key],$rarr[$key],$sarr[$key],$newprefix);
			} else {
				++$this->stringsTotal;
				array_push($this->keyList,$newprefix);
				if ($rarr[$key]===NULL) {
					$sarr[$key]=LSTATUS_NEW;
					$this->untranslated++;
					$this->needChange=TRUE;
				} else if ($rarr[$key]!==$oarr[$key]) {
					$sarr[$key]=LSTATUS_CHANGED;
					$this->untranslated++;
					$this->needChange=TRUE;
				} else {
					$sig1=$this->getFormatSignature($rarr[$key]);
					$sig2=$this->getFormatSignature($larr[$key]);
					if ($sig1!=$sig2) {	
						$sarr[$key]=LSTATUS_BAD_FORMAT;
						++$this->formatErrors;
						$this->needChange=TRUE;
					} else {
						$tail1='';
						$tail2='';
						if (strlen($rarr[$key])>0) $tail1=$rarr[$key][strlen($rarr[$key])-1];
						if (strlen($larr[$key])>0) $tail2=$larr[$key][strlen($larr[$key])-1];
						if ( ( ($tail1==' ') && ($tail2!=' ') ) ||
							( ($tail2==' ') && ($tail1!=' ') ) ) {
							++$this->tailErrors;
							$sarr[$key]=LSTATUS_BAD_TAIL;
							$this->needChange=TRUE;
						} else {		
							$sarr[$key]=LSTATUS_UNCHANGED;
						}
					}
				}
			}
		}
	}

	private function fillArray(&$arr,&$sarr,&$oarr) {
		$keys=array_keys($oarr);
		foreach ($keys as $key) {
			$ia=is_array($oarr[$key]);
			if ($ia) {
				if (!array_key_exists($key,$sarr)) {
					$this->needChange=TRUE;
					$sarr[$key]=array();
				}
				$arr[$key]=array();
				$this->fillArray($arr[$key],$sarr[$key],$oarr[$key]);
			} else {
				if (!array_key_exists($key,$sarr)) {
					$arr[$key]=NULL;
					$this->needChange=TRUE;
				} else {
					$arr[$key]=$sarr[$key];
				}
			}
		}
	}

	private function cleanupArray(&$arr,&$oarr) {
		$keys=array_keys($arr);
		foreach ($keys as $key) {
			if (!array_key_exists($key,$oarr)) {
				if (!is_array($arr[$key])) ++$this->stringsRemoved;
				unset($arr[$key]);
				$this->needChange=TRUE;
				continue;
			}

			$ia=is_array($oarr[$key]);
			$iao=is_array($arr[$key]);
			if ($ia xor $iao) {
				unset($arr[$key]);
				$this->needChange=TRUE;
				continue;
			}

			if ($ia) {
				$this->cleanupArray($arr[$key],$oarr[$key]);
			} 
		}
	}

	public function writeFiles() {
		$this->writeFile($this->langFile,$this->langArray);
		$this->writeFile($this->refFile,$this->refArray);
	}

	private function writeFile($file,&$arr) {
		if (!$this->helpMode) {
			$out="<?php\n\nif (empty(\$lang) || !is_array(\$lang))\n".
				"{\n"."        \$lang = array();\n"."}\n\n".
				"\$lang = array_merge(\$lang, array(";
		} else {
			$out="<?php\n\n".
				"\$help = array(";
		}
		$this->writeArray($out,$arr,1);
		if (!$this->helpMode) {
			$out.="\n));\n?>\n";
		} else {
			$out.="\n);\n?>\n";
		}
		file_put_contents($file,$out);
	}

	private function writeArray(&$out,&$arr,$level) {
		$tabbing='';
		for ($i=0;$i<$level;++$i) {
			$tabbing.="\t";
		}
		$keys=array_keys($arr);
		$putcomma=FALSE;
		foreach ($keys as $key) {
			$keyenc=str_replace("\\'","\\'",$key);
			$keyenc=str_replace("'","\\'",$keyenc);
			if ($putcomma) $out.=',';
			$putcomma=TRUE;
			if (is_array($arr[$key])) {
				if (($this->helpMode) && ($level==1)) {
					$out.= "\n".$tabbing."array(";
				} else {
					$out.= "\n".$tabbing."'".$keyenc."' => array(";
				}
				$this->writeArray($out,$arr[$key],$level+1);
				$out.="\n".$tabbing.')';
			} else {
				$v=$arr[$key];
				if ($v===NULL) {
					$v="NULL";
				} else {
					$v=str_replace("\\'","\\'",$v);
					$v=str_replace("'","\\'",$v);
					$v="'".$v."'";
				}
				if (($this->helpMode) && ($level==1)) {
					$out.= "\n".$tabbing.$v;
				} else if ($this->helpMode) {
					$out.= "\n".$tabbing.$keyenc.' => '.$v;
				} else {
					$out.= "\n".$tabbing."'".$keyenc."' => ".$v;
				}
			}
		}
	}

	public function readValue($path,$type) {
		if ($type==LTYPE_ORIGINAL) {
			return($this->readValueRecurs($path,$this->origArray));
		} else if ($type==LTYPE_REFERENCE) {
			return($this->readValueRecurs($path,$this->refArray));
		} else if ($type==LTYPE_TRANSLATED) {
			return($this->readValueRecurs($path,$this->langArray));
		} else if ($type==LTYPE_STATUS) {
			return($this->readValueRecurs($path,$this->statusArray));
		}
		return(NULL);
	}

	private function readValueRecurs($path,&$arr) {
		$np=$path;
		$key=array_shift($np);
		if (!array_key_exists($key,$arr)) return(NULL);
		if (is_array($arr[$key])) {
			if (count($np)==0) return(NULL);
			return($this->readValueRecurs($np,$arr[$key]));
		} else {
			return($arr[$key]);
		}
	}

	public function writeValue($path,$value) {
		return($this->writeValueRecurs($path,$value,$this->langArray,$this->refArray,$this->origArray,
			$this->statusArray));
	}

	private function writeValueRecurs($path,$value,&$arr,&$rarr,&$oarr,&$sarr) {
		$np=$path;
		$key=array_shift($np);
		if (!array_key_exists($key,$arr)) return(FALSE);
		if (is_array($arr[$key])) {
			if (count($np)==0) return(FALSE);
			return($this->writeValueRecurs($np,$value,$arr[$key],$rarr[$key],$oarr[$key],$sarr[$key]));
		} else {
			if (count($np)!=0) return(FALSE);
			$arr[$key]=$value;
			$rarr[$key]=$oarr[$key];
		}
	}

	public function readKeyList() {
		return($this->keyList);
	}

	public function getUntranslated() {
		return($this->untranslated);
	}

	public function getTotalStrings() {
		return($this->stringsTotal);
	}

	public function getRemovedStrings() {
		return($this->stringsRemoved);
	}

	public function getFormatErrors() {
		return($this->formatErrors);
	}

	public function getTailErrors() {
		return($this->tailErrors);
	}

	public function fileChanged() {
		return($this->needChange);
	}


	private function getFormatSignature($format,$strictFormat=FALSE) {
		$formArray=array();
		$formPos=0;
		$fNum=1;
		$fMax=0;
		while ( ($nForm=strpos($format,'%',$formPos))!==FALSE) {
			$formPos=$iForm=$nForm+1;
			if ($format[$iForm]=='%') {
				$formPos++;
				continue;
			}	
			$digit='';
			$mayPlace=TRUE;
			$parseFormat=TRUE;
			$forceSign=FALSE;
			$padding=' ';
			$alignLeft=FALSE;
			$fieldWidth=FALSE;
			$precision=FALSE;
			$nextPrecision=FALSE;
			while ($parseFormat) {
				$chr=$format[$iForm++];
				if ( ( ($chr<='9') && ($chr>='1') ) ||
					( ($chr=='0') && ($digit!='') ) ) {
					$digit.=$chr;
					continue;
				}
				if ($chr=='$') { 
					if ( ($mayPlace) && ($digit!='') ) {
						$fNum=intval($digit);
						$mayPlace=FALSE;
						$digit='';
						continue;
					} else {
						$parseFormat=FALSE;
						break;
					}
				}
				$mayPlace==FALSE;
				if ($digit!='') {
					if ($nextPrecision) {
						if ($precision!==FALSE) break;
						$precision=intval($digit);
						$digit='';
					} else {
						if ($fieldWidth!==FALSE) break;
						$fieldWidth=intval($digit);
						$digit='';	
					}
				}	

				switch ($chr) {
					case '+':
						$forceSign=TRUE;
						break;
					case '0':
						$padding='0';
						break;
					case '-':
						$alignLeft=TRUE;
						break;
					case '.':
						$nextPrecision=TRUE;
						break;
					case 'b':
					case 'c':
					case 'd':
					case 'e':
					case 'u':
					case 'f':
					case 'F':
					case 'o':
					case 's':
					case 'x':
					case 'X':
						if ($strictFormat) {
							$fArg='';
							if ($forceSign) $fArg.='+';
							$fArg.=$padding;
							if ($alignLeft) $fArg.='-';
							if ($fieldWidth!==FALSE) $fArg.=$fieldWidth;
							if ($precision!==FALSE) $fArg.='.'.$precision;
							$fArg.=$chr;
						} else $fArg=$chr;
						$formArray[$fNum]=$fArg;
						if ($fNum>$fMax) $fMax=$fNum;
						$fNum++;
						$parseFormat=FALSE;
						break;
					default:
						$parseFormat=FALSE;
						break;
				}
			}		
		}
		$formSignature='';
		for ($i=1;$i<=$fMax;++$i) {
			$formSignature.='%'.$formArray[$i];
		}
		return $formSignature;
	}

}

?>
