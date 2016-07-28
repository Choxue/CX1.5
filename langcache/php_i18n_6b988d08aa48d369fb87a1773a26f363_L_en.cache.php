<?php class L {
const title = '球學 | Choxue | Making Sports Easier';
const nav_home = 'HOME';
const nav_about = 'ABOUT';
const nav_team = 'MEET US';
const nav_schedule = 'SCHEDULE';
const nav_contact = 'CONTACT';
const tagline = 'WELCOME TO CHOXUE';
const subtagline = 'Integrating sports with the educational system<br>MAKING SPORTS EASIER';
const watch_live_button = '▶ WATCH LIVE NOW';
const schedule_button = 'VIEW FULL SCHEDULE';
const about_title = 'ABOUT US';
const about_description = 'Choxue, as a mission-driven company, believes that sports are the most important training ground of our future leaders. Therefore, we intend to integrate sports with the educational system by creating the future infrastructure of sports in Asia. How we intend to make this happen is by Making Sports Easier and empowering our sports teams and help them become successful. At this time, we\'re a sports media company that focuses on live sports broadcasting and analytics.';
const tournament_CX = 'TOURNAMENT CX';
const tournament_CX_description = 'Tournament CX description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.';
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
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}