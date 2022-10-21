<?php 
function u_all_info($id = null) : array
{
  if(!empty($id))
  {
      $query_postwall = "SELECT * FROM users WHERE user_id = $id";
  }
  else
  {
      $query_postwall = "SELECT * FROM users ORDER BY user_id DESC";
  }
  $sql = pg_query($query_postwall);
  $totalRows_infouser = pg_num_rows($sql);
  
  $res = [];
  
  if(!empty($totalRows_infouser))
  {
      $row_infouser = pg_fetch_all($sql);
  
      foreach($row_infouser as $item)
      {
          $res[] = [
              "name"      => $item['name'],
              "surname"   => $item['surname'],
              "rate"      => $item['rate']
          ];
      }
  }
  
  return $res;
}

// function post_wall_profile($userId = null) : array
// {
//   global $con;
  
//   if(!empty($userId))
//   {
//     $query_postwall = "SELECT * FROM river WHERE user_id = $userId";
//   }
//   else
//   {
//     $query_postwall = "SELECT * FROM river ORDER BY r_id DESC";
//   }

//   $sql = mysqli_query($con, $query_postwall) or die(mysqli_error($con));
//   $totalRows_postwall = mysqli_num_rows($sql);

//   $res = [];

//   if(!empty($totalRows_postwall))
//   {
//     $row_postwall = mysqli_fetch_all($sql);
//     // var_dump($row_postwall);

//     foreach($row_postwall as $item)
//     {
//       $res[] = [
//         'name'        => $item['name'],
//         'surname'     => $item['surname'],
//         'rate'        => $item['rate']
//       ];
//     }
//   }

//   return $res;
// }
?>