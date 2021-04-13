<?php

/*********
 * 色々な空白(スペース)を半角スペースに統一するクラス
 * {Unicode}
 * {0020}半角スペース(変換先）
 * {00A0}改行しない空白
 * {1680}オガム文字 SPACE MARK
 * {2000}en幅の四角形
 * {2001}漢字と同じ幅の空白文字
 * {2002}enスペース（emスペースの1/2）
 * {2003}emスペース
 * {2004}1/3 emスペース
 * {2005}1/4 emスペース
 * {2006}1/6 emスペース
 * {2007}数字幅スペース
 * {2008}句読点幅スペース
 * {2009}狭いスペース
 * {200A}極細スペース
 * {202F}幅の狭い改行しない空白
 * {205F}数学用空白
 * {3000}全角スペース
 */

// sample code
$text = '| | | | | | |　|';
$ConvertSpaceClass = new ConvertSpaceClass();
echo $ConvertSpaceClass->convert_spache($text);

class ConvertSpaceClass {
    
    private $target_regexs = '/[\x{00A0}\x{1680}\x{2000}\x{2001}\x{2002}\x{2003}\x{2004}\x{2005}\x{2006}\x{2007}\x{2008}\x{2009}\x{200A}\x{202F}\x{205F}\x{3000}]/u';
    private $result_regex = ' ';
    
    function convert_spache($text){
        $input_text  = mb_convert_encoding($text,'UTF-8','auto');
        $retrun_text = preg_replace($this->target_regexs,$this->result_regex,$input_text);
        return $retrun_text;
    }
}

?>
