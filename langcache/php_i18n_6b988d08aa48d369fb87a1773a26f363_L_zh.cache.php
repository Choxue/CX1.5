<?php class L {
const title = '球學 | Choxue | Making Sports Easier';
const nav_home = '首頁';
const nav_about = '關於球學';
const nav_team = '團隊';
const nav_schedule = '賽事';
const nav_contact = '聯絡我們';
const tagline = '歡迎來球學';
const subtagline = '把運動跟教育結合<br>把運動弄簡單';
const watch_live_button = '▶ 觀看直播';
const schedule_button = '完整賽程';
const about_title = '關於球學';
const vimeo_ID = '176628211';
const about_description = '球學，作為一間背負使命的公司，深信運動是我們培育未來領袖的最好場域。因此，我們企圖以創造亞洲未來體育基礎的方式將運動與教育體系合為一體。我們希望透過「讓運動更簡單」、提升我們運動團隊的能力並幫助他們成功來達到目標。目前，我們是一間聚焦在體育賽事即時轉播與分析的運動傳媒公司。';
const tournament_CX = '球學高中籃球交流賽';
const tournament_CX_description = '「球學高中籃球交流賽」是為了改造並呈現大中華地區的學生運動員應該如何被組織，而創建與設計的。這是我們將運動與華人教育體系結為一體並展現其意涵的第一步，同時也代表「讓運動更簡單」。<br><br>從團隊建立、比賽形式、排程、轉播、媒體宣傳、學校精神到球迷參與，這是一個為了讓我們的運動團隊能夠成功，而聚集每一個人的盃賽。';
const days = '天';
const hours = '小時';
const minutes = '分鐘';
const seconds = '秒';
const upcoming_schedule = '2016近期賽事';
const meet_us = '認識我們';
const say_hello = '說點什麼，我們希望聽到你的意見';
const our_address = '我們在哪';
const address = '台北市中正區中華路1段25號12樓';
const call_us = '電話';
const email_us = '電子信箱';
const placeholder_name = '名字';
const placeholder_email = '電子郵件';
const placeholder_message = '想說的話';
const send_message_button = '確認送出';
const event_1_name = '瓊斯盃 女子組';
const event_1_date = '8/3 - 8/7';
const event_1_location = '新莊體育館';
const event_2_name = '姥姥盃 男子組';
const event_2_date = '8/2 - 8/6';
const event_2_location = '義守大學';
const event_3_name = '菁英盃';
const event_3_date = '8/18 - 8/22';
const event_3_location = '花蓮縣立體育館';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}