<?php
    $operator = $_POST['opeator'];
    $num1 = $_POST['numA'];
    $num2 = $_POST['numB'];

    // if($abc='add'){
    //   $result = ($num1 + $num2);
    //   echo $result;
    // }
    // elseif($abc='sub'){
    //   $result = ($num1 - $num2);
    //   echo $result;
    // }
    // elseif($abc='mul'){
    //   $result = ($num1 * $num2);
    //   echo $result;
    // }
    // elseif($abc='div'){
    //   $result = ($num1 / $num2);
    //   echo $result;
    // }
    // elseif($abc='null'){
    //   echo 'Enter The Operator';
    // }

    switch ($operator) {
      case 'null':
          echo "You need to select any operator";
          break;
      case 'add':
          $result = $num1 + $num2;
          echo $result;
          break;
      case 'sub':
          $result = $num1 - $num2;
          echo $result;
          break;
      case 'mul':
          $result = $num1 * $num2;
          echo $result;
          break;
      case 'div':
          $result = $num1 / $num2;
          echo $result;
          break;
  }
?>


