<?php

class Computer {

  public $cpu;
  public $ram;
  public $mobo;

  function __construct($cpu, $ram, $mobo){

    $this -> cpu = $cpu;
    $this -> ram = $ram;
    $this -> mobo = $mobo;

  }



  public function printMe(){

    echo "Caratteristiche pc: " . "<br>" . "Cpu: " .  $this -> cpu . "<br>" . "Ram: " . $this -> ram . "<br>" . "Motherboard: " . $this -> mobo;

  }


}

class UpgradePc extends Computer {

  public $ssd;
  public $hdd;
  public $gpu;

  function __construct($ssd, $hdd, $gpu){

    $this -> ssd = $ssd;
    $this -> hdd = $hdd;
    $this -> gpu = $gpu;

  }

  public function printMe(){

    echo "<br>" . "Upgrade pc: " . "<br>" . "ssd: " .  $this -> ssd . "<br>" . "hdd: " . $this -> hdd . "<br>" . "Scheda video: " . $this -> gpu;

  }
}

  // pc1

  $pc1 = new Computer("Intel", 16, "Asus");
  $pc1 -> cpu;
  $pc1 -> ram;
  $pc1 -> mobo;
  $pc1 -> printMe();

  // pc 2

  $pc2 = new UpgradePc(128, 500, "Nvidia RTX 2080");
  $pc2 -> ssd;
  $pc2 -> hdd;
  $pc2 -> gpu;
  $pc2 -> printMe();


 ?>
