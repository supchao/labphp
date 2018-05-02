<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/2
 * Time: 下午2:15
 */

/// 屬性 方法
class umi47OO
{
    private $speed;     //屬性  public private  物件等級擁有的屬性
    const var1 = 123;

    static $counter = 0;  //類別等級的屬性  //

    public function __construct($initspeed = 0)
    {   //建構式 建構方法  建構子  一個物件指呼叫一次
        $this->speed = $initspeed;
        self::$counter++;
    }

    public function upspeed()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
    }

    public function downspeed()
    {
        $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
    }

    public function getspeed()
    {
        return $this->speed;
    }
}

class people
{
    public $bike;

    public function setBike()
    {
        $this->bike = new umi47OO();
    }

    public function upBikespeed()
    {
        $this->bike->upspeed();
    }

    public function downBikespeed()
    {
        $this->bike->downspeed();
    }

    public function displayBikespeed()
    {
        return $this->bike->getspeed();
    }
}

class Twid
{
    private $id;
    private static $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

    public function __construct($gender = true, $area = -1, $id = '')
    {
        if (strlen($id) != 0) {
            $this->id = $id;
        } else {
            $area = $area==-1?rand(0,25):$area;         ///如果沒有輸入地區就亂數產生
            $this->createNewId($gender, $area);
        }
    }

    private function createNewId($gender, $area){ /// 物件級別可以取用類別級別
        $id = substr(self::$letters,$area,1);
        $id .= $gender?'1':'2';
        for($i=0;$i<7;$i++){
            $id .= rand(0,9);
        }
        for($i=0;$i<10;$i++){
            if(self::checkTWid($id . $i)){
                $this->id = $id.$i;
                break;}
        }
    }

    public static function checkTWid($twid)
    {
        $ret = false;
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)) {

            $c1 = substr($twid, 0, 1);
            $n12 = strpos(self::$letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);

            $sum = 1 * $n1 + 9 * $n2 + 8 * $n3 + 7 * $n4 + 6 * $n5 + 5 * $n6 + 4 * $n7 + 3 * $n8 + 2 * $n9 + 1 * $n10 + 1 * $n11;
            $ret = ($sum % 10) == 0;
        }
        return $ret;
    }


    public function getGender()
    {
        return true;
    }
    public function getArea()
    {
        return '台中市';
    }
    public function getId(){
        return $this->id;
    }
}

?>