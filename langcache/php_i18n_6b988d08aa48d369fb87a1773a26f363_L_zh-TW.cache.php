<?php class L {
const greeting = 'Hallo Welt!';
const category_somethingother = 'Etwas anderes...';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}