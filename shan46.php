<!-- 設計類別的過程中,建構式/屬性/方法三者之中,屬性最為關鍵,所有的方法(功能)都是圍繞著屬性而生 -->
<?php
    class Bike{
        private $speed;    //1.先宣告一個屬性,並且讓屬性的存取只能在類別內部,外部不應該可以調整私有屬性

        // 3.初始設定(初始值/初始化/一開始長怎樣)寫在建構式中
        function __construct(){     //建構式語法 前面是兩條底線
            $this->speed = 0;
            echo 'Bike()';      //呼叫建構式
        }

        // 2.為腳踏車加入功能
        function upSpeed(){
            $this->speed = $this->speed<1 ? 1: $this->speed*1.2;
        }
        function downSpeed(){
            $this->speed = $this->speed<1 ? 0: $this->speed*0.7;
        }
        function getSpeed(){
            echo $this->speed;
        }
    }

    $myBike = new Bike();  //建立新物件1
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();

    $urBike = new Bike(); //建立新物件2
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->downSpeed();
    $urBike->upSpeed();

    echo "myBike : {$myBike->getSpeed()}<br/>";
    echo "urBike : {$myBike->getSpeed()}<br/>";
    echo "<hr/>";
    $myBike->speed = 10.1;     //可以隨意調節速度,代表程式設計不正確,'屬性失控'! 屬性應該要由方法來調節
    
    while($this->speed < 10){
        $this->upSpeed();
        echo "myBike : {$myBike->getSpeed()}<br/>";
    }

    // 和JS的寫法比較看看
    // <script>
    //     function Bike(){
    //         this.speed = 100;
    //     }
    //     var myBike = new Bike();
    //     console.log(myBike.speed);
    // </script>

?>