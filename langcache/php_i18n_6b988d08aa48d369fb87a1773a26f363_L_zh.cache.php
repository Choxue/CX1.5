<?php class L {
const title = '球學 | Choxue | Making Sports Easier';
const nav_home = '首頁';
const nav_about = '關於我們';
const nav_team = '團隊';
const nav_schedule = 'SCHEDULE';
const nav_contact = 'CONTACT';
const tagline = '歡迎來球學';
const subtagline = '把運動跟教育結合<br>把運動弄簡單';
const watch_live_button = '▶ 觀看直播';
const schedule_button = 'VIEW FULL SCHEDULE';
const about_title = '關於我們';
const about_description = '球學，作為一間背負使命的公司，深信運動是我們培育未來領袖的最好場域。因此，我們企圖以創造亞洲未來體育基礎的方式將運動與教育體系合為一體。我們希望透過「讓運動更簡單」、提升我們運動團隊的能力並幫助他們成功來達到目標。目前，我們是一間聚焦在體育賽事即時轉播與分析的運動傳媒公司。';
const tournament_CX = 'TOURNAMENT CX';
const tournament_CX_description = 'Tournament CX description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.';
const days = '天';
const hours = '小時';
const minutes = '分鐘';
const seconds = '秒';
const upcoming_schedule = '2016 UPCOMING SCHEDULE';
const meet_us = '我們團隊';
const say_hello = 'SAY HELLO, WE\'D LOVE TO HEAR FROM YOU';
const our_address = '我們地址';
const address = '台北市中正區中華路1段25號12樓';
const call_us = '電話';
const email_us = '電子信箱';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}