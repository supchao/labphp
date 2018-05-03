<?php
class twid{
    private $id;
    private static $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

    public function __construct($id='',$gender = true,$area = -1){
        if(strlen($id) != 0){
            if(self::checkTWid($id)){
                $this->id = $id;
            }else{
                throw new Exception('error id');
            }
        }else {
            $area = $area ==-1?rand(0,25):$area;
            $this->area = $area;
            $this->createNewId($gender,$area);
        }
    }
    private function createNewId($gender,$area){
        $id = substr(self::$letters,$area,1);
        $id .= $gender?'1':'2';
        $this->gender = $gender;
        for($i=0;$i<7;$i++){
            $id .= rand(0,9);
        }
        for($i = 0;$i<10;$i++){
            if(self::checkTWid($id.$i)){
                $this->id = $id.$i;
                break;}
        }
    }
    public static function checkTWid($twid)
}

?>