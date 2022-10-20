<?php 
// if (!function_exists("GetSQLValueString")) {
//   function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
//   {
//     if (PHP_VERSION < 6) {
//       $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
//     }
//     global $con;
//     $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($con, $theValue) : mysqli_escape_string($con, $theValue);

//     switch ($theType) {
//       case "text":
//         $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
//         break;    
//       case "long":
//       case "int":
//         $theValue = ($theValue != "") ? intval($theValue) : "NULL";
//         break;
//       case "double":
//         $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
//         break;
//       case "date":
//         $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
//         break;
//       case "defined":
//         $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
//         break;
//     }
//     return $theValue;
//   }
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function u_all_info(int $id) : array
{
  global $con;
  
  $query_infouser = sprintf("SELECT * FROM users WHERE user_id = %s ",
                              GetSQLValueString($id, "int"));
  $sql = mysqli_query($con, $query_infouser) or die(mysqli_error($con));
  $totalRows_infouser = mysqli_num_rows($sql);

  $res = [
    "name"      => false,
    "surname"   => false,
    "rate"      => false
  ];

  if(!empty($totalRows_infouser))
  {
    $row_infouser = mysqli_fetch_assoc($sql);

      $res = [
        "name"      => $row_infouser['name'],
        "surname"   => $row_infouser['surname'],
        "rate"      => $row_infouser['rate']
      ];
  }

  return $res;
}

function post_wall_profile($userId = null) : array
{
  global $con;
  
  if(!empty($userId))
  {
    $query_postwall = "SELECT * FROM river WHERE user_id = $userId";
  }
  else
  {
    $query_postwall = "SELECT * FROM river ORDER BY r_id DESC";
  }

  $sql = mysqli_query($con, $query_postwall) or die(mysqli_error($con));
  $totalRows_postwall = mysqli_num_rows($sql);

  $res = [];

  if(!empty($totalRows_postwall))
  {
    $row_postwall = mysqli_fetch_all($sql);
    var_dump($row_postwall);

    foreach($row_postwall as $item)
    {
      $res[] = [
        'r_id'        => $item['r_id'],
        'user_id'     => $item['user_id'],
        'content'     => $item['content']
      ];
    }
  }

  return $res;
}
?>