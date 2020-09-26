<?php
namespace App;

class Age 
{
    public static function count() {
        if ($_POST) {
            $date1 = $_POST['date'];
            $date2 = date(Y-m-d);

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

            return $years . ' years' . $months . ' months' . $days . ' days';
        }
    }
}