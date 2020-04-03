<?php

class Exploit 
{
   protected $info = [], $name;

   function __construct($functions, $name){
      foreach ($functions as $key => $value) {
         $this -> info['functions'][] .= $value;
      }
      $this -> name = $name;
   }
   protected function open_shell(){
    echo "<br> victim@PC# <br>";
   }
   public function __get($info){
      foreach ($this -> info as $key => $value) {
         echo "<h3>$key </h3>";
         foreach ($value as $k => $v) {
            echo " $k : $v <br>"; 
         }
      }
   }
   public function set_options($lhost, $rhost, $port){
      $this -> info['options']['lhost'] = $lhost;
      $this -> info['options']['rhost'] = $rhost;
      $this -> info['options']['port'] = $port;
   }
   public function get_options($options){
       echo "<h3>OPTIONS</h3>";
       foreach ($this -> info['options'] as $key => $value) {
           echo "<br> $key => $value <br>";
       }
   }   
    function start(){
       echo "<h3>Starting {$this -> name} on victim PC </h3>";
       echo "<h4>Use functions: </h4>";
       foreach ($this -> info['functions'] as $key => $value) {
           echo "$key : $value <br>";
       }
       $this -> open_shell();
   }
   public function stop(){
       echo "<h3>Stopping {$this -> name}... </h3>";
   }    
}

class Trojan extends Exploit
{
  public function steel_info(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        echo "<h3> STOLEN_INFO: </h3>";
        echo "Victim ip : $ip <br>";
        echo "Victim User_Agent : $user_agent <br>";
        echo "Another info: <br>"; //in developing...
        echo "<br>";
  }
  public function reboot_sys(){
        echo "Victim pc has rebooted! <br>";
        echo "<br>";
  }
  public function break_sys(){
        echo "Victim pc will break! <br>";
        echo "<br>";
  }
  public function remote_desktop(){
       echo "Opening remote victim desktop ... <br>"; //in developing...
       echo "<br>";
  }
}

class RATS extends Trojan//my favorit type remote control...
{
  protected $typeJoke = [
                       1 => 'play_sound',
                         2 => 'pint_something', 
                         3 => 'enter_in_program', 
                         4 =>'discotect_mouse', 
                         5 => 'delete_system'
                        ];

    protected $typeSpam = [
                         1 => 'Spam contacts in sms (only on Phones)',
                           2 => 'Spam contacts in email', 
                           3 => 'Spam contacts in social nets'
                           ];

  public function joke($x){
       if (isset($x) && !empty($x)) {
          if ($x === '-h') {
            echo "<h3>Type of jokes: </h3>";
            foreach ($this -> typeJoke as $key => $value) {
              echo "$key : $value <br>";
            }
          }else{
            switch ($x) {
              case 1:
                echo "<br>-Play sound function selected, choise file .mp3 <br>";
                break;
                case 2:
                echo "<br>-Print function selected, enter text of joke :) <br>";
                break;
                case 3:
                echo "<br>-Function enter in program selected, choise program which will start! <br>";
                break;
                case 4:
                echo "<br>-Mouse was disconect from sysem <br>";
                break;
                case 5:
                echo "<br>-Ohhh, bad joke. Okey, system will be delete <br>";
                break;
                
            }
          }
       }else{
           echo "Enter type of joke, or print 'joke -h || --help'";
       }
  } 
    public function info_of_socialSys(){
        echo "<h5>INFORMATIONS of victim from all social nets where entered victim... </h5>"; //in developing...
  }
  public function turnToZombie(){
        echo "Reboot system of victim... <br>";
        echo "Starting proces of infecting... <br> ";
        echo '...Scaning all devices in localnet <br> ';
        echo '...Scaning open ports in devices <br> ';
        echo '...Infect all devices on the network <br> ';
        echo '...Get all info of infected devices <br> ';
        echo '...Take choise the device of all <br> ';
  }
  public function spam_global_mail($x){
       if (isset($x) && !empty($x)) {
          if ($x === '-h') {
            echo "<h3>Type of spam: </h3>";
            foreach ($this -> typeJoke as $key => $value) {
              echo "$key : $value <br>";
            }
          }else{
            switch ($x) {
              case 1:
                echo "<br>-Selected type of spam : 'sms'. Starting smsing all... <br>";
                break;
                case 2:
                echo "<br>-Selected type of spam : 'email'. Starting smsing on all contacts emails... <br>";
                break;
                case 3:
                echo "<br>-Selected type of spam : 'social nets'. Starting analize and smsing all contacts... <br>";
                break;
            }
          }
       }else{
           echo "Enter type of spam, or print 'spam -h || --help'";
       }
  }
}
// $functions_ms17_010 = ['change logs', 'rebute sys', 'logout', 'cmd'];
// $ms17_010 = new Exploit($functions_ms17_010, 'ms17_010');
// $ms17_010 -> get_info();
// $ms17_010 -> set_options('17.17.330.1', '544.232.18.99', '445');
// $ms17_010 -> get_options();
// $ms17_010 -> start();
// $ms17_010 -> stop();

// $functions_careto = ['change logs', 'rebute sys', 'logout', 'cmd', 'key_logger', 'steeler'];
// $careto = new Trojan($functions_careto, 'careto');
// $careto -> set_options('18.21.19.134', '123.123.222.919', '4444');
// $careto -> start();
// $careto -> steel_info();
// $careto -> remote_desktop();
// $careto -> reboot_sys();
// $careto -> break_sys();
// $careto -> stop();

$functions_nJrat = ['change logs', 
                    'rebute sys', 
                    'logout', 
                    'cmd', 
                    'key_logger', 
                    'steeler', 
                    'add_to_botnet', 
                    'hide_all_logs', 
                    'add_to_sleep_zombie'
                   ];
$type_joke = 1; // print type of joke
$type_spam = 1;// print type of spam
$nJrat = new RATS($functions_nJrat, 'NJRAT');
$nJrat -> set_options('14.88.90.22', '18.21.19.134', '2222');
$nJrat -> start();
$nJrat -> joke($type_joke);
$nJrat -> info_of_socialSys();
$nJrat -> turnToZombie();
$nJrat -> spam_global_mail($type_spam);
$nJrat -> info;
//честно, единсвенное для этого кода логичное примениение магического метода. Остально, будет притянуто, я так считаю..

// $nJrat -> steel_info();
// $nJrat -> stop();


?>