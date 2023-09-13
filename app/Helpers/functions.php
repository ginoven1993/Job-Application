<?php 

// Getting user logged informations

use App\Models\Clients;
use App\Models\Contrats;
use App\Models\Contrats_auto;
use App\Models\Partenaires;
use App\Models\Tasks;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


if (!function_exists('getUserAuth')) {
  function getAuth()
  {
    $id = session('id');
    $user = User::where(['id' => $id])->first();
    return $user;  
  }
}




if (!function_exists('getStatusComplete')) {
  function getStatusComplete($idtask)
  {
    $taskComplete = Tasks::where(['status' => 1])->first();

    return $taskComplete;
  }
}


if (!function_exists('getStatusInComplete')) {
  function getStatusInComplete($idtask)
  {
    $incomplete = User::where(['status' => 0])->first();

    return $incomplete;
  }
}




  // Random string
if (!function_exists('getRamdomText')) {
    function getRamdomText($n) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
  }
  // int string
if (!function_exists('getRamdomInt')) {
    function getRamdomInt($n) {
      $characters = '0123456789';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
}


// La date actuelle
  if (!function_exists('getActuDate')) {
      function getActuDate()
      {
        $date_actu = formatDate2('d-m-Y');
        return $date_actu;
      }
  }


  
  if (!function_exists('getDate')) {
    function getDate($date)
    {
      $elements = explode(" ", $date);
      return $elements[0];
    }
  }
  
  
  if (!function_exists('formatDate')) {
    function formatDate($date)
    {
      $formatDates = explode("T", $date);
      $elements = explode(" ", $formatDates[0]);
      $elements2 = explode("-", $elements[0]);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0] . " " .$elements[1];
      return $date;
    }
  }
  
  if (!function_exists('superFormatDate')) {
    function superFormatDate($date)
    {
      $formatDates = explode("T", $date);
      $elements = explode(" ", $formatDates[0]);
      $elements2 = explode("-", $elements[0]);
  
      $timeFormat=explode(":", $elements[1]);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0] . " à " . $timeFormat[0].":".$timeFormat[1];
      return $date;
    }
  }
  
  
  if (!function_exists('getHour')) {
    function getHour($date)
    {
      $formatDates = explode("T", $date);
      $elements = explode(" ", $formatDates[0]);
      $elements2 = explode("-", $elements[0]);
  
      $timeFormat=explode(":", $elements[1]);
  
      $date = $timeFormat[0].":".$timeFormat[1];
      return $date;
    }
  }
  
  if (!function_exists('formatDate2')) {
    function formatDate2($date)
    {
      $elements2 = explode("-", $date);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0];
      return $date;
    }
  }
  
  if (!function_exists('reformatDate')) {
    function reformatDate($date)
    {
      $elements2 = explode("-", $date);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0];
      return $date;
    }
  }

  if (!function_exists('format')) {
    function format($date)
    {
      $elements2 = explode("-", $date);
      $date = $elements2[0] . "-" . $elements2[1] . "-" . $elements2[2];
      return $date;
    }
  }
  
  // Random int
  if (!function_exists('getRamdomInt')) {
    function getRamdomInt($n) {
      $characters = '0123456789';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
}

if (!function_exists('getMonthName')) {
    function getMonthName($monthOfYear)
    {
      $arrayMonth = array(
       1 => "Janvier",
       2 => "Février",
       3 => "Mars",
       4 => "Avril",
       5 => "Mai",
       6 => "Juin",
       7 => "Juillet",
       8 => "Aôut",
       9 => "Septembre",
       10 => "Octobre",
       11 => "Novembre",
       12 => "Décembre"
     );
      $month =  $arrayMonth[$monthOfYear];
      return $month;
    }
  }
  

?>