<?php
// if(isset($_POST['submit'])){
//     $operator = $_POST['opeator'];
//     $num1 = $_POST['numA'];
//     $num2 = $_POST['numB'];
//     switch ($operator) {
//         case 'null':
//             echo "You need to select any operator";
//             break;
//         case 'add':
//             $result = $num1 + $num2;
//             echo $result;
//             break;
//         case 'sub':
//             $result = $num1 - $num2;
//             echo $result;
//             break;
//         case 'mul':
//             $result = $num1 * $num2;
//             echo $result;
//             break;
//         case 'div':
//             $result = $num1 / $num2;
//             echo $result;
//             break;
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .calc {
            background-color: #a1bfb9;
            width: 390px;
            margin: 50px auto;
            margin-top: 170px;
            border-width: 5px;
            border-color: black;

        }

        .num {
            width: 70px;
            height: 40px;
            margin: 20px;
            border-width: 5px;
            font-size: xx-large;
        }

        .res {
            width: 70px;
            height: 40px;
            margin: 20px;
            border-width: 5px;
            font-size: xx-large;
        }

        .result {
            font-size: larger;
            font-weight: 600;
            font-family: sans-serif;
        }

        .btn {
            width: 50px;
            height: 50px;
            margin: 20px;
            border-width: 5px;
            font-size: xx-large;
            align-self: center;
            margin-left: 40px;
        }

        .btn:hover {
            background-color: #dce3e2;
            cursor: pointer;
        }

        .btn:active {
            background-color: blue;
        }

        .eql {
            width: 150px;
            height: 50px;
            margin: 20px;
            border-width: 5px;
            font-size: xx-large;
            align-self: center;
            margin-left: 40px;
        }

        .eql:hover {
            background-color: red;
        }

        .frm {
            border-width: 5px;
            border-color: black;
        }
    </style>
</head>

<body style="background-color: #94ebd8; ">
    <div class="frm">
        <form class="calc" action="calculate.php" method="POST">
            <center>
                <h3 style="font-size: xx-large;">Calculator</h3>
            </center>
            <hr style="border-width: 6px; background-color:indigo; ">
            <input type="number" class="num" name="numA" placeholder="0">
            <select class="btn" name="opeator">
                <option value="null" selected>___</option>
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="number" class="num" name="numB" placeholder="0"><br>
            <!--  &nbsp;&nbsp;&nbsp;<span class="result">Result</span>
            <input type="number" class="res"  value="" placeholder="0"><br>
            <input type="button" class="btn" name="btns" value="+" >
            <input type="button" class="btn" name="btns" value="-" ><br>
            <input type="button" class="btn" name="btns" value="/" >
            <input type="button" class="btn" name="btns" value="*" ><br> -->
            <input type="submit"  class="eql">
        </form>
    </div>
</body>

</html>