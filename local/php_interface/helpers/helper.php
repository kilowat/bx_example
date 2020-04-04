<?php
class Helper
{
    public static function parseSectionPathUrl()
    {
        $_REQUEST["SECTION_CODE_PATH"] = $_REQUEST["SECTION_CODE_PATH"] ? $_REQUEST["SECTION_CODE_PATH"] : $_REQUEST["SECTION_CODE"];
       
        $section = explode("/",$_REQUEST["SECTION_CODE_PATH"]);
        $section = $section[count($section)-1];

        if(empty($section)){
            $section = explode("/",$_REQUEST["SECTION_CODE_PATH"]);
            $section = $section[count($section)-2];
        }
        
        return  $section;
    }
}