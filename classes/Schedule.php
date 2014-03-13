<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 13.03.14
 * Time: 6:11
 */

class Schedule {

    public $name;
    public $day;
    public $time;
    public $actualTime;

    public function __construct(){

        $this->day = date('l');
    }
    public function getTodaySchedule(){

        mysql_connect('localhost','root','');
        mysql_query("SET NAMES utf8");
        mysql_select_db('radio');
        $rubrics = mysql_query('SELECT `name`,`time` FROM `schedule` WHERE `day` = "'.$this->day.'"');
        while($row = mysql_fetch_array($rubrics))
        {
            echo "<p>".$row['name']." в ".$row['time']."</p>" ;

        }

    }




} 