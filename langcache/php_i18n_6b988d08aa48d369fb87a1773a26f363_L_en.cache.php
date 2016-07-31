<?php class L {
const title = '球學 | Choxue | Making Sports Easier';
const nav_home = 'HOME';
const nav_about = 'ABOUT';
const nav_team = 'MEET US';
const nav_schedule = 'SCHEDULE';
const nav_contact = 'CONTACT';
const nav_tournament_CX = 'TOURNAMENT CX';
const tagline = 'WELCOME TO CHOXUE';
const subtagline = 'Integrating sports with the educational system<br>MAKING SPORTS EASIER';
const watch_live_button = '▶ WATCH LIVE NOW';
const schedule_button = 'VIEW FULL SCHEDULE';
const about_title = 'ABOUT US';
const vimeo_ID = '176720735';
const about_description = 'Choxue, as a mission-driven company, believes that sports are the most important training ground of our future leaders. Therefore, we intend to integrate sports with the educational system by creating the future infrastructure of sports in Asia. We intend to make this happen by Making Sports Easier and empowering our sports teams to succeed. At this time, we\'re a sports media company that focuses on live sports broadcasting and analytics.';
const tournament_CX = 'TOURNAMENT CX';
const tournament_CX_description = 'Tournament CX is established and designed to reform and showcase how student athletics must be organized across Greater China. Tournament CX is our first step in showcasing what it means to integrate sports with the Chinese educational system and what making sports easier means.<br><br>This starts from team selection to game format to scheduling to broadcasting to media promotion to school spirit to fan engagement – a tournament that brings everyone together in order to empower our sports teams for success.';
const days = 'DAYS';
const hours = 'HOURS';
const minutes = 'MINUTES';
const seconds = 'SECONDS';
const upcoming_schedule = '2016 UPCOMING SCHEDULE';
const meet_us = 'MEET US';
const say_hello = 'SAY HELLO, WE\'D LOVE TO HEAR FROM YOU';
const our_address = 'OUR ADDRESS';
const address = '12F, #25, Zhonghua Road<br>Zhongzheng District, Taipei 100';
const call_us = 'CALL US';
const email_us = 'EMAIL US';
const placeholder_name = 'Name';
const placeholder_email = 'Email';
const placeholder_message = 'Message';
const send_message_button = 'SEND MESSAGE';
const event_1_name = 'WOMENS\' JONES CUP';
const event_1_date = 'August 3rd - 7th';
const event_1_location = 'Xinzhuang Stadium, New Taipei, Taiwan';
const event_2_name = 'Lau Lau Cup';
const event_2_date = 'August 2nd - 6th';
const event_2_location = 'I-Shou University';
const event_3_name = 'Jin Yin Cup';
const event_3_date = 'August 18th - 22nd';
const event_3_location = 'Hualien Stadium';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}