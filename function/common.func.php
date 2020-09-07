<?php
function getPath($type = "absolute")
{
    $type = strtolower($type);
    if ($type == "absolute")
        return $_SERVER["DOCUMENT_ROOT"] . explode("/function/common.func.php", explode($_SERVER["DOCUMENT_ROOT"], __FILE__)[1])[0];
    else if ($type == "relative")
        return explode("/function/common.func.php", explode($_SERVER["DOCUMENT_ROOT"], __FILE__)[1])[0];
}
function head($skin = "default", $type = null)
{
    global $_head, $_tail;
    if ($type == null) {
        if ($_SERVER["SCRIPT_NAME"] == getPath("relative") . "/install.php")
            $type = "install";
    }
    if (file_exists(getPath() . "/skin/" . $skin . "/" . $type . "/head.before.php"))
        include_once getPath() . "/skin/" . $skin . "/" . $type . "/head.before.php";
    include_once getPath() . "/skin/" . $skin . "/" . $type . "/head.php";
    if (file_exists(getPath() . "/skin/" . $skin . "/" . $type . "/head.after.php"))
        include_once getPath() . "/skin/" . $skin . "/" . $type . "/head.after.php";
}
function tail($skin = "default", $type = null)
{
    global $_head, $_tail;
    if ($type == null) {
        $type = getPageType();
    }
    if (file_exists(getPath() . "/skin/" . $skin . "/" . $type . "/tail.before.php"))
        include_once getPath() . "/skin/" . $skin . "/" . $type . "/tail.before.php";
    include_once getPath() . "/skin/" . $skin . "/" . $type . "/tail.php";
    if (file_exists(getPath() . "/skin/" . $skin . "/" . $type . "/tail.after.php"))
        include_once getPath() . "/skin/" . $skin . "/" . $type . "/tail.after.php";
}
function getSkinPath($skin = "default", $type = null, $path = "absolute")
{
    if ($type == null) return getPath($path) . "/skin/" . $skin;
    else return getPath($path) . "/skin/" . $skin . "/" . $type;
}
function getPageType($path = null)
{
    if ($path == null) $path = $_SERVER["SCRIPT_NAME"];
    $now = str_replace(getPath("relative"), "", $path);
    switch ($now) {
        case "/install.php":
            return "install";
    }
}
