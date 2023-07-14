<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Tehran');


class Jdate extends Controller
{
    private $week;
    private $months;
    private $today;
    private $d;
    private $day;
    private $month;
    private $year;
    private $Y;
    private $Leapyears;


    function __construct($week = [""], $month = "", $today = [""], $d = "", $months = [""], $year = "", $y = 1, $Leapyears = "")
    {
        $this->week = ["يكشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه", "شنبه"];
        $this->months = ["فروردين", "ارديبهشت", "خرداد", "تير", "مرداد", "شهريور", "مهر", "آبان", "آذر", "دي", "بهمن", "اسفند"];
        $this->today = date('r e O');
        $this->d = date('l');
        $this->day = date("j");
        $this->month = date("m");
        $this->year = date("Y");
        $this->Y = 1;
        $this->Leapyears = ['1313', '1317', '1321', '1329', '1333', '1337', '1341', '1346', '1350', '1354', '1358', '1362', '1366', '1370', '1375', '1379', '1383', '1387', '1391', '1395', '1399', '1403'];
    }
    public function jdate($type, $maket = "now")
    {
        $transnumber = 0;
        $TZhours = 0;
        $TZminute = 0;
        $need = "";
        $result1 = "";
        $result = "";
        if ($maket == "now") {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);
            $maket = mktime(date("H") + $TZhours, date("i") + $TZminute, date("s"), date("m"), date("d"), date("Y"));
        } else {
            $maket += $TZhours * 3600 + $TZminute * 60;
            $date = date("Y-m-d", $maket);
            list($year, $month, $day) = preg_split('/-/', $date);
            list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);
        }
        $need = $maket;
        $year = date("Y", $need);
        $month = date("m", $need);
        $day = date("d", $need);
        $i = 0;
        $subtype = "";
        $subtypetemp = "";
        list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);

        while ($i < strlen($type)) {

            $subtype = substr($type, $i, 1);

            if ($subtypetemp == "\\") {

                $result .= $subtype;

                $i++;

                continue;
            }


            switch ($subtype) {


                case "A":

                    $result1 = date("a", $need);

                    if ($result1 == "pm") $result .= "&#1576;&#1593;&#1583;&#1575;&#1586;&#1592;&#1607;&#1585;";

                    else $result .= "&#1602;&#1576;&#1604;&#8207;&#1575;&#1586;&#1592;&#1607;&#1585;";

                    break;


                case "a":

                    $result1 = date("a", $need);

                    if ($result1 == "pm") $result .= "&#1576;&#46;&#1592;";

                    else $result .= "&#1602;&#46;&#1592;";

                    break;

                case "d":

                    if ($jday < 10) $result1 = "0" . $jday;

                    else    $result1 = $jday;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "D":

                    $result1 = date("D", $need);

                    if ($result1 == "Thu") $result1 = "&#1662;";

                    else if ($result1 == "Sat") $result1 = "&#1588;";

                    else if ($result1 == "Sun") $result1 = "&#1609;";

                    else if ($result1 == "Mon") $result1 = "&#1583;";

                    else if ($result1 == "Tue") $result1 = "&#1587;";

                    else if ($result1 == "Wed") $result1 = "&#1670;";

                    else if ($result1 == "Thu") $result1 = "&#1662;";

                    else if ($result1 == "Fri") $result1 = "&#1580;";

                    $result .= $result1;

                    break;

                case "F":

                    $result .= $this->monthname($jmonth);

                    break;

                case "g":

                    $result1 = date("g", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "G":

                    $result1 = date("G", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "h":

                    $result1 = date("h", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "H":

                    $result1 = date("H", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "i":

                    $result1 = date("i", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "j":

                    $result1 = $jday;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "l":

                    $result1 = date("l", $need);

                    if ($result1 == "Saturday") $result1 = "&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Sunday") $result1 = "&#1610;&#1603;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Monday") $result1 = "&#1583;&#1608;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Tuesday") $result1 = "&#1587;&#1607;&#32;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Wednesday") $result1 = "&#1670;&#1607;&#1575;&#1585;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Thursday") $result1 = "&#1662;&#1606;&#1580;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Friday") $result1 = "&#1580;&#1605;&#1593;&#1607;";

                    $result .= $result1;

                    break;

                case "m":

                    if ($jmonth < 10) $result1 = "0" . $jmonth;

                    else    $result1 = $jmonth;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "M":

                    $result .= $this->short_monthname($jmonth);

                    break;

                case "n":

                    $result1 = $jmonth;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "s":

                    $result1 = date("s", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "S":

                    $result .= "&#1575;&#1605;";

                    break;

                case "t":

                    $result .= $this->mstart($month, $day, $year);

                    break;

                case "w":

                    $result1 = date("w", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "y":

                    $result1 = substr($jyear, 2, 4);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "Y":

                    $result1 = $jyear;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "U":

                    $result .= time();

                    break;

                case "Z":

                    $result .= $this->days_of_year($jmonth, $jday, $jyear);

                    break;

                case "L":

                    list($tmp_year, $tmp_month, $tmp_day) = $this->jalali_to_gregorian(13112, 12, 1);

                    echo $tmp_day;

                    /*if($this->mstart($tmp_month,$tmp_day,$tmp_year)=="31")

                       $result.="1";

                   else

                       $result.="0";

                       */

                    break;

                default:

                    $result .= $subtype;
            }

            $subtypetemp = substr($type, $i, 1);

            $i++;
        }

        return $result;
    }

    public function thisYear(string $data = "")
    {
        return date("Y");
    }

    // return now in persian
    public static function now(string $format = "y/m/d", string $full = "y/m/d")
    {
        $week = ["يكشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه", "شنبه"];
        $months = ["فروردين", "ارديبهشت", "خرداد", "تير", "مرداد", "شهريور", "مهر", "آبان", "آذر", "دي", "بهمن", "اسفند"];
        $today = date('r e O');
        $d = date('l');
        $day = date("j");
        $month = date("m");
        $year = date("Y");
        $y = 1;
        $Leapyears = ['1313', '1317', '1321', '1329', '1333', '1337', '1341', '1346', '1350', '1354', '1358', '1362', '1366', '1370', '1375', '1379', '1383', '1387', '1391', '1395', '1399', '1403'];
        if ($year == 0) {
            $year = date("2000");
        }
        if ($year < 100) {
            $year += 1900;
        }
        //Leap years
        for ($i = 0; $i < 3000; $i += 4) {
            if ($year == $i) {
                $y = 2;
            }
        }
        for ($i = 1; $i < 3000; $i += 4) {
            if ($year == $i) {
                $y = 3;
            }
        }
        if ($y == 1) {
            $year -= (($month < 3) || (($month == 3) && ($day < 21))) ? 622 : 621;
            switch ($month) {
                case 1:
                    if ($day < 21) {
                        $month = 10;
                        $day += 10;
                    } else {
                        $month = 11;
                        $day -= 20;
                    }
                    break;
                case 2:
                    if ($day < 20) {
                        $month = 11;
                        $day += 11;
                    } else {
                        $month = 12;
                        $day -= 19;
                    }
                    break;
                case 3:
                    if ($day < 21) {
                        $month = 12;
                        $day += 9;
                    } else {
                        $month = 1;
                        $day -= 20;
                    }
                    break;
                case 4:
                    if ($day < 21) {
                        $month = 1;
                        $day += 11;
                    } else {
                        $month = 2;
                        $day -= 20;
                    }
                    break;
                case 5:
                case 6:
                    if ($day < 22) {
                        $month -= 3;
                        $day += 10;
                    } else {
                        $month -= 2;
                        $day -= 21;
                    }
                    break;
                case 7:
                case 8:
                case 9:
                    if ($day < 23) {
                        $month -= 3;
                        $day += 9;
                    } else {
                        $month -= 2;
                        $day -= 22;
                    }
                    break;
                case 10:
                    if ($day < 23) {
                        $month = 7;
                        $day += 8;
                    } else {
                        $month = 8;
                        $day -= 22;
                    };
                    break;
                case 11:
                case 12:
                    if ($day < 22) {
                        $month -= 3;
                        $day += 9;
                    } else {
                        $month -= 2;
                        $day -= 21;
                    }
                    break;
                default:
                    break;
            }
        }
        if ($y == 2) {
            $year -= (($month < 3) || (($month == 3) && ($day < 20))) ? 622 : 621;
            switch ($month) {
                case 1:
                    if ($day < 21) {
                        $month = 10;
                        $day += 10;
                    } else {
                        $month = 11;
                        $day -= 20;
                    }
                    break;
                case 2:
                    if ($day < 20) {
                        $month = 11;
                        $day += 11;
                    } else {
                        $month = 12;
                        $day -= 19;
                    }
                    break;
                case 3:
                    if ($day < 20) {
                        $month = 12;
                        $day += 10;
                    } else {
                        $month = 1;
                        $day -= 19;
                    }
                    break;
                case 4:
                    if ($day < 20) {
                        $month = 1;
                        $day += 12;
                    } else {
                        $month = 2;
                        $day -= 19;
                    }
                    break;
                case 5:
                    if ($day < 21) {
                        $month = 2;
                        $day += 11;
                    } else {
                        $month = 3;
                        $day -= 20;
                    }
                    break;
                case 6:
                    if ($day < 21) {
                        $month = 3;
                        $day += 11;
                    } else {
                        $month = 4;
                        $day -= 20;
                    }
                    break;
                case 7:
                    if ($day < 22) {
                        $month = 4;
                        $day += 10;
                    } else {
                        $month = 5;
                        $day -= 21;
                    }
                    break;
                case 8:
                    if ($day < 22) {
                        $month = 5;
                        $day += 10;
                    } else {
                        $month = 6;
                        $day -= 21;
                    }
                    break;
                case 9:
                    if ($day < 22) {
                        $month = 6;
                        $day += 10;
                    } else {
                        $month = 7;
                        $day -= 21;
                    }
                    break;
                case 10:
                    if ($day < 22) {
                        $month = 7;
                        $day += 9;
                    } else {
                        $month = 8;
                        $day -= 21;
                    }
                    break;
                case 11:
                    if ($day < 21) {
                        $month = 8;
                        $day += 10;
                    } else {
                        $month = 9;
                        $day -= 20;
                    }
                    break;
                case 12:
                    if ($day < 21) {
                        $month = 9;
                        $day += 10;
                    } else {
                        $month = 10;
                        $day -= 20;
                    }
                    break;
                default:
                    break;
            }
        }
        if ($y == 3) {
            $year -= (($month < 3) || (($month == 3) && ($day < 21))) ? 622 : 621;
            switch ($month) {
                case 1:
                    if ($day < 20) {
                        $month = 10;
                        $day += 11;
                    } else {
                        $month = 11;
                        $day -= 19;
                    }
                    break;
                case 2:
                    if ($day < 19) {
                        $month = 11;
                        $day += 12;
                    } else {
                        $month = 12;
                        $day -= 18;
                    }
                    break;
                case 3:
                    if ($day < 21) {
                        $month = 12;
                        $day += 10;
                    } else {
                        $month = 1;
                        $day -= 20;
                    }
                    break;
                case 4:
                    if ($day < 21) {
                        $month = 1;
                        $day += 11;
                    } else {
                        $month = 2;
                        $day -= 20;
                    }
                    break;
                case 5:
                case 6:
                    if ($day < 22) {
                        $month -= 3;
                        $day += 10;
                    } else {
                        $month -= 2;
                        $day -= 21;
                    }
                    break;
                case 7:
                case 8:
                case 9:
                    if ($day < 23) {
                        $month -= 3;
                        $day += 9;
                    } else {
                        $month -= 2;
                        $day -= 22;
                    }
                    break;
                case 10:
                    if ($day < 23) {
                        $month = 7;
                        $day += 8;
                    } else {
                        $month = 8;
                        $day -= 22;
                    }
                    break;
                case 11:
                case 12:
                    if ($day < 22) {
                        $month -= 3;
                        $day += 9;
                    } else {
                        $month -= 2;
                        $day -= 21;
                    }
                    break;
                default:
                    break;
            }
        }
        if ($format === null || $format === 'undefined' || $format == "") {
            return strval($week[$d] . " " . $day . " " . $months[$month - 1] . " " . $year);
        }
        if ($format === "y/m/d") {
            return strval($year . "/" . $month . "/" . $day);
        }
        if ($format === "d/m/y") {
            return strval($day . "/" . $month . "/" . $year);
        }
    }

    public function persianStrToTime($string)
    {
        if (is_array($string)) {
            $arr = array();
            foreach ($string as $key => $str) {
                $arr[$key] = $this->persianStrToTime($str);
            }
            return $arr;
        } else {
            if (!$this->isValidTimeStamp($string)) {
                $MonthDayNum = 1;
                $MonthNumber = 1;
                $Minute = 0;
                $Hour = 0;
                $Year = 1399;
                $String = str_replace("ب ظ", "", $string);
                $String = str_replace("ق ظ", "", $String);
                $MonthDays = array(0 => '۰', 1 => '۱', 2 => '۲', 3 => '۳', 4 => '۴', 5 => '۵', 6 => '۶', 7 => '۷', 8 => '۸', 9 => '۹', 10 => '۱۰', 11 => '۱۱', 12 => '۱۲', 13 => '۱۳', 14 => '۱۴', 15 => '۱۵', 16 => '۱۶', 17 => '۱۷', 18 => '۱۸', 19 => '۱۹', 20 => '۲۰', 21 => '۲۱', 22 => '۲۲', 23 => '۲۳', 24 => '۲۴', 25 => '۲۵', 26 => '۲۶', 27 => '۲۷', 28 => '۲۸', 29 => '۲۹', 30 => '۳۰', 31 => '۳۱');
                $weekDays = array('شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهار شنبه', 'پنج‌شنبه', 'جمعه');
                $arrayOfMonths = array(1 => 'فروردین', 2 => 'اردیبهشت', 3 => 'خرداد', 4 => 'تیر', 5 => 'مرداد', 6 => 'شهریور', 7 => 'مهر', 8 => 'آبان', 9 => 'آذر', 10 => 'دی', 11 => 'بهمن', 12 => 'اسفند');
                foreach ($arrayOfMonths as $monthNum => $month) {
                    if (strpos($String, $month)) {
                        $MonthNumber = $monthNum;
                        $String = str_replace($month, "", $String);
                    }
                }
                $hasWeekDay = false;
                foreach ($weekDays as $weekDay) {
                    if (strpos($string, $weekDay)) {
                        $hasWeekDay = true;
                    }
                }
                if ($hasWeekDay == true) {
                    $String = str_replace($weekDays[1], "", $String);
                    $String = str_replace($weekDays[2], "", $String);
                    $String = str_replace($weekDays[3], "", $String);
                    $String = str_replace($weekDays[4], "", $String);
                    $String = str_replace($weekDays[5], "", $String);
                    $String = str_replace($weekDays[6], "", $String);
                    $String = str_replace($weekDays[0], "", $String);
                }
                foreach ($MonthDays as $monthDay => $day) {
                    $String = str_replace($day, $monthDay, $String);
                }
                $arrayOFNums = [1 => "01", 2 => "02", 3 => "03", 4 => "04", 5 => "05", 6 => "06", 7 => "07", 8 => "08", 9 => "09"];
                $demo = [];
                foreach ($arrayOFNums as $num => $OFNum) {
                    //         array_push($demo,strpos($String,$OFNum));
                    if (strpos($String, $OFNum) != false) {
                        $String = str_replace(" " . $OFNum . " ", $num, $String);
                        $MonthDayNum = $num;
                    } else {
                        foreach ($MonthDays as $monthDayNum => $monthDay) {
                            $monthDayNum = (string)$monthDayNum;
                            $String = str_replace($monthDay, $monthDayNum, $String);
                            if (strpos($String, " " . $monthDayNum . " ") !== false) {
                                $String = str_replace(" " . $monthDayNum . " ", "", $String);
                                $MonthDayNum = $monthDayNum;
                            }
                        }
                    }
                }


                $MonthDayNum = (int)$MonthDayNum;
                for ($i = 1000; $i <= 1500; $i++) {
                    $i = (string)$i;
                    if (strpos($String, $i) != false) {
                        $String = str_replace($i, '', $String);
                        $Year = $i;
                    }
                }
                if (strpos($String, ':')) {
                    $dist = str_replace(" ", "", $String);
                    $Minute = end(explode(":", $dist));
                    settype($Minute, 'integer');
                    $Hour = explode(":", $dist)[0];
                    settype($Hour, 'integer');
                }
                $gregTime = $this->jalali_to_gregorian($Year, $MonthNumber, $MonthDayNum);
                return mktime($Hour, $Minute, 0, $gregTime[1], $gregTime[2], $gregTime[0]);
            } else {
                return $string;
            }
        }
    }
    private function isValidTimeStamp($timestamp)
    {
        return ((string)(int)$timestamp === $timestamp) && ($timestamp <= PHP_INT_MAX) && ($timestamp >= ~PHP_INT_MAX);
    }

    public function jalali_to_gregorian($j_y, $j_m, $j_d)
    {

        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


        $jy = $j_y - 979;

        $jm = $j_m - 1;

        $jd = $j_d - 1;


        $j_day_no = 365 * $jy + $this->div($jy, 33) * 8 + $this->div($jy % 33 + 3, 4);

        for ($i = 0; $i < $jm; ++$i)

            $j_day_no += $j_days_in_month[$i];


        $j_day_no += $jd;


        $g_day_no = $j_day_no + 79;


        $gy = 1600 + 400 * $this->div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */

        $g_day_no = $g_day_no % 146097;


        $leap = true;

        if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ {

            $g_day_no--;

            $gy += 100 * $this->div($g_day_no, 36524); /* 36524 = 365*100 + 100/4 - 100/100 */

            $g_day_no = $g_day_no % 36524;


            if ($g_day_no >= 365)

                $g_day_no++;

            else

                $leap = false;
        }


        $gy += 4 * $this->div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */

        $g_day_no %= 1461;


        if ($g_day_no >= 366) {

            $leap = false;


            $g_day_no--;

            $gy += $this->div($g_day_no, 365);

            $g_day_no = $g_day_no % 365;
        }


        for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)

            $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);

        $gm = $i + 1;

        $gd = $g_day_no + 1;


        return array($gy, $gm, $gd);
    }

    private function div($a, $b)
    {

        return (int)($a / $b);
    }

    private function jmaketime($hour = "", $minute = "", $second = "", $jmonth = "", $jday = "", $jyear = "")
    {

        if (!$hour && !$minute && !$second && !$jmonth && !$jmonth && !$jday && !$jyear)

            return time();

        list($year, $month, $day) = $this->jalali_to_gregorian($jyear, $jmonth, $jday);

        return mktime($hour, $minute, $second, $month, $day, $year);
    }

    private function jcheckdate($month, $day, $year)
    {

        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

        if ($month <= 12 && $month > 0) {

            if ($j_days_in_month[$month - 1] >= $day && $day > 0)

                return 1;

            if ($this->is_kabise($year))

                echo "Asdsd";

            if ($this->is_kabise($year) && $j_days_in_month[$month - 1] == 31)

                return 1;
        }


        return 0;
    }

    private function is_kabise($year)
    {

        if ($year % 4 == 0 && $year % 100 != 0)

            return true;

        return false;
    }

    private function jgetdate($timestamp = "")
    {

        if ($timestamp == "")

            $timestamp = time();


        return array(

            0 => $timestamp,

            "seconds" => $this->jdate("s", $timestamp),

            "minutes" => $this->jdate("i", $timestamp),

            "hours" => $this->jdate("G", $timestamp),

            "mday" => $this->jdate("j", $timestamp),

            "wday" => $this->jdate("w", $timestamp),

            "mon" => $this->jdate("n", $timestamp),

            "year" => $this->jdate("Y", $timestamp),

            "yday" => $this->days_of_year($this->jdate("m", $timestamp), $this->jdate("d", $timestamp), $this->jdate("Y", $timestamp)),

            "weekday" => $this->jdate("l", $timestamp),

            "month" => $this->jdate("F", $timestamp),

        );
    }

    public function jdates($type, $maket = "now")
    {
        $transnumber = 0;
        $TZhours = 0;
        $TZminute = 0;
        $need = "";
        $result1 = "";
        $result = "";
        if ($maket == "now") {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);
            $maket = mktime(date("H") + $TZhours, date("i") + $TZminute, date("s"), date("m"), date("d"), date("Y"));
        } else {
            $maket += $TZhours * 3600 + $TZminute * 60;
            $date = date("Y-m-d", $maket);
            list($year, $month, $day) = preg_split('/-/', $date);
            list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);
        }
        $need = $maket;
        $year = date("Y", $need);
        $month = date("m", $need);
        $day = date("d", $need);
        $i = 0;
        $subtype = "";
        $subtypetemp = "";
        list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);

        while ($i < strlen($type)) {

            $subtype = substr($type, $i, 1);

            if ($subtypetemp == "\\") {

                $result .= $subtype;

                $i++;

                continue;
            }


            switch ($subtype) {


                case "A":

                    $result1 = date("a", $need);

                    if ($result1 == "pm") $result .= "&#1576;&#1593;&#1583;&#1575;&#1586;&#1592;&#1607;&#1585;";

                    else $result .= "&#1602;&#1576;&#1604;&#8207;&#1575;&#1586;&#1592;&#1607;&#1585;";

                    break;


                case "a":

                    $result1 = date("a", $need);

                    if ($result1 == "pm") $result .= "&#1576;&#46;&#1592;";

                    else $result .= "&#1602;&#46;&#1592;";

                    break;

                case "d":

                    if ($jday < 10) $result1 = "0" . $jday;

                    else    $result1 = $jday;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "D":

                    $result1 = date("D", $need);

                    if ($result1 == "Thu") $result1 = "&#1662;";

                    else if ($result1 == "Sat") $result1 = "&#1588;";

                    else if ($result1 == "Sun") $result1 = "&#1609;";

                    else if ($result1 == "Mon") $result1 = "&#1583;";

                    else if ($result1 == "Tue") $result1 = "&#1587;";

                    else if ($result1 == "Wed") $result1 = "&#1670;";

                    else if ($result1 == "Thu") $result1 = "&#1662;";

                    else if ($result1 == "Fri") $result1 = "&#1580;";

                    $result .= $result1;

                    break;

                case "F":

                    $result .= $this->monthname($jmonth);

                    break;

                case "g":

                    $result1 = date("g", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "G":

                    $result1 = date("G", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "h":

                    $result1 = date("h", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "H":

                    $result1 = date("H", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "i":

                    $result1 = date("i", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "j":

                    $result1 = $jday;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "l":

                    $result1 = date("l", $need);

                    if ($result1 == "Saturday") $result1 = "&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Sunday") $result1 = "&#1610;&#1603;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Monday") $result1 = "&#1583;&#1608;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Tuesday") $result1 = "&#1587;&#1607;&#32;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Wednesday") $result1 = "&#1670;&#1607;&#1575;&#1585;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Thursday") $result1 = "&#1662;&#1606;&#1580;&#1588;&#1606;&#1576;&#1607;";

                    else if ($result1 == "Friday") $result1 = "&#1580;&#1605;&#1593;&#1607;";

                    $result .= $result1;

                    break;

                case "m":

                    if ($jmonth < 10) $result1 = "0" . $jmonth;

                    else    $result1 = $jmonth;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "M":

                    $result .= $this->short_monthname($jmonth);

                    break;

                case "n":

                    $result1 = $jmonth;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "s":

                    $result1 = date("s", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "S":

                    $result .= "&#1575;&#1605;";

                    break;

                case "t":

                    $result .= $this->mstart($month, $day, $year);

                    break;

                case "w":

                    $result1 = date("w", $need);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "y":

                    $result1 = substr($jyear, 2, 4);

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "Y":

                    $result1 = $jyear;

                    if ($transnumber == 1) $result .= $this->Convertnumber2farsi($result1);

                    else $result .= $result1;

                    break;

                case "U":

                    $result .= time();

                    break;

                case "Z":

                    $result .= $this->days_of_year($jmonth, $jday, $jyear);

                    break;

                case "L":

                    list($tmp_year, $tmp_month, $tmp_day) = $this->jalali_to_gregorian(13112, 12, 1);

                    echo $tmp_day;

                    /*if($this->mstart($tmp_month,$tmp_day,$tmp_year)=="31")

                        $result.="1";

                    else

                        $result.="0";

                        */

                    break;

                default:

                    $result .= $subtype;
            }

            $subtypetemp = substr($type, $i, 1);

            $i++;
        }

        return $result;
    }

    public function gregorian_to_jalali($g_y, $g_m, $g_d)
    {

        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


        $gy = $g_y - 1600;

        $gm = $g_m - 1;

        $gd = $g_d - 1;


        $g_day_no = 365 * $gy + $this->div($gy + 3, 4) - $this->div($gy + 99, 100) + $this->div($gy + 399, 400);


        for ($i = 0; $i < $gm; ++$i)

            $g_day_no += $g_days_in_month[$i];

        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))

            /* leap and after Feb */

            $g_day_no++;

        $g_day_no += $gd;


        $j_day_no = $g_day_no - 79;


        $j_np = $this->div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */

        $j_day_no = $j_day_no % 12053;


        $jy = 979 + 33 * $j_np + 4 * $this->div($j_day_no, 1461); /* 1461 = 365*4 + 4/4 */


        $j_day_no %= 1461;


        if ($j_day_no >= 366) {

            $jy += $this->div($j_day_no - 1, 365);

            $j_day_no = ($j_day_no - 1) % 365;
        }


        for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)

            $j_day_no -= $j_days_in_month[$i];

        $jm = $i + 1;

        $jd = $j_day_no + 1;


        return array($jy, $jm, $jd);
    }

    private function Convertnumber2farsi($srting)
    {

        $num0 = "&#1776;";

        $num1 = "&#1777;";

        $num2 = "&#1778;";

        $num3 = "&#1779;";

        $num4 = "&#1780;";

        $num5 = "&#1781;";

        $num6 = "&#1782;";

        $num7 = "&#1783;";

        $num8 = "&#17112;";

        $num9 = "&#1785;";


        $stringtemp = "";

        $len = strlen($srting);

        for ($sub = 0; $sub < $len; $sub++) {

            if (substr($srting, $sub, 1) == "0") $stringtemp .= $num0;

            elseif (substr($srting, $sub, 1) == "1") $stringtemp .= $num1;

            elseif (substr($srting, $sub, 1) == "2") $stringtemp .= $num2;

            elseif (substr($srting, $sub, 1) == "3") $stringtemp .= $num3;

            elseif (substr($srting, $sub, 1) == "4") $stringtemp .= $num4;

            elseif (substr($srting, $sub, 1) == "5") $stringtemp .= $num5;

            elseif (substr($srting, $sub, 1) == "6") $stringtemp .= $num6;

            elseif (substr($srting, $sub, 1) == "7") $stringtemp .= $num7;

            elseif (substr($srting, $sub, 1) == "8") $stringtemp .= $num8;

            elseif (substr($srting, $sub, 1) == "9") $stringtemp .= $num9;

            else $stringtemp .= substr($srting, $sub, 1);
        }

        return $stringtemp;
    }

    private function monthname($month)
    {


        if ($month == "01") return "&#1601;&#1585;&#1608;&#1585;&#1583;&#1610;&#1606;";


        if ($month == "02") return "&#1575;&#1585;&#1583;&#1610;&#1576;&#1607;&#1588;&#1578;";


        if ($month == "03") return "&#1582;&#1585;&#1583;&#1575;&#1583;";


        if ($month == "04") return "&#1578;&#1610;&#1585;";


        if ($month == "05") return "&#1605;&#1585;&#1583;&#1575;&#1583;";


        if ($month == "06") return "&#1588;&#1607;&#1585;&#1610;&#1608;&#1585;";


        if ($month == "07") return "&#1605;&#1607;&#1585;";


        if ($month == "08") return "&#1570;&#1576;&#1575;&#1606;";


        if ($month == "09") return "&#1570;&#15112;&#1585;";


        if ($month == "10") return "&#1583;&#1610;";


        if ($month == "11") return "&#1576;&#1607;&#1605;&#1606;";


        if ($month == "12") return "&#1575;&#1587;&#1601;&#1606;&#1583;";
    }

    private function short_monthname($month)
    {


        if ($month == "01") return "&#1601;&#1585;&#1608;";


        if ($month == "02") return "&#1575;&#1585;&#1583;";


        if ($month == "03") return "&#1582;&#1585;&#1583;";


        if ($month == "04") return "&#1578;&#1610;&#1585;";


        if ($month == "05") return "&#1605;&#1585;&#1583;";


        if ($month == "06") return "&#1588;&#1607;&#1585;";


        if ($month == "07") return "&#1605;&#1607;&#1585;";


        if ($month == "08") return "&#1570;&#1576;&#1575;";


        if ($month == "09") return "&#1570;&#15112;&#1585;";


        if ($month == "10") return "&#1583;&#1610;";


        if ($month == "11") return "&#1576;&#1607;&#1605;";


        if ($month == "12") return "&#1575;&#1587;&#1601; ";
    }

    private function mstart($month, $day, $year)
    {

        list($jyear, $jmonth, $jday) = $this->gregorian_to_jalali($year, $month, $day);

        list($year, $month, $day) = $this->jalali_to_gregorian($jyear, $jmonth, "1");

        $timestamp = mktime(0, 0, 0, $month, $day, $year);

        return date("w", $timestamp);
    }

    private function days_of_year($jmonth, $jday, $jyear)
    {

        $year = "";

        $month = "";

        $year = "";

        $result = "";

        if ($jmonth == "01")

            return $jday;

        for ($i = 1; $i < $jmonth || $i == 12; $i++) {

            list($year, $month, $day) = $this->jalali_to_gregorian($jyear, $i, "1");

            $result += $this->mstart($month, $day, $year);
        }

        return $result + $jday;
    }
}
