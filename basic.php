<?php

//first assignment:
$age = 18;
if ($age >= 18)
    echo 'you can sign in';
else
    echo 'you cannot sign in';


echo '<br/>';
echo "***************************************************** <br>";

/////////////////////////////////////////////////

//second assignment:
$films = array("Fast", "Predestination", "Pursuit", "Prestige", "avatar");
$keyword = "avatar";

//(1):
// $flag = false;
// foreach ($films as $film) {
//     if ($keyword == $film) {
//         echo "yes";
//         $flag = true;
//         break;
//     }
// }

// if ($flag == false)
//     echo "no";

//(2):
// if (in_array($keyword, $films)) {
//     echo 'yes';
// } else {
//     echo 'no';
// }

// echo '<br/>';

//(3):
function searchFilms($films, $keyword)
{
    $res = "No, Not Found.";
    foreach ($films as $film) {
        if ($keyword == $film)
            $res = "Yes, It was Found";
    }
    return $res;
}
echo searchFilms($films, $keyword);
echo '<br/>';
echo "***************************************************** <br>";

/////////////////////////////////////////////////

//third assignment:
$tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);

//(1):
// echo max($tests); 

//(2):
function maxNumber($tests)
{
    $max = 0;
    foreach ($tests as $test) {
        if ($test > $max) {
            $max = $test;
        }
    }
    return $max;
}

echo maxNumber($tests);

// //(3):
// $max = 0;
// for ($i = 0; $i <= count($tests); $i++) {
//     if ($i > $max) {
//         $max = $i;
//     }
// }
// echo $max;

echo '<br/>';
echo "***************************************************** <br>";

/////////////////////////////////////////////////

//fourth assignment:
$movies = array("avatar", "Prestige", "avatar", "Prestige");
$key = "avatar";

function countingFilms($movies, $key)
{
    $counter = 0;
    foreach ($movies as $movie) {
        if ($key == $movie) {
            $counter++;
        }
    }
    return $counter;
}

echo countingFilms($movies, $key);
echo '<br/>';
echo "***************************************************** <br>";

/////////////////////////////////////////////////

//fifth assignment:
//using for loop:
$types = array(1, "shorouk", 1.5, true, 7, 's', false);

function show($types)
{
    foreach ($types as $type) {
        if ($type === true) {
            echo 'YES <br/>';
        } elseif ($type === false) {
            echo 'NO <br/>';
        } else {
            echo $type . '<br/>';
        }
    }
}

show($types);
echo "***************************************************** <br>";

//using while loop:
$types2 = array(1, "shorouk", 1.5, true, 7, 's', false);

function show2($types2)
{
    $i = 0;
    while ($i < count($types2)) {
        if ($types2[$i] === true) {
            echo 'YES <br/>';
        } elseif ($types2[$i] === false) {
            echo 'NO <br/>';
        } else {
            echo $types2[$i] . '<br/>';
        }
        $i++;
    }
}
show2($types2);
echo "***************************************************** <br>";

/////////////////////////////////////////////////

//sixth assignment:
$numbers = array(6, 4, 9, 3, 12, 8, 7);

function sortNumber($numbers)
{
    for ($i = 0; $i < count($numbers); $i++) {
        for ($j = 0; $j < count($numbers) - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j + 1];
                $numbers[$j + 1] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }
    return $numbers[$j];
}

print_r(sortNumber($numbers));
echo '<br/>';
echo "***************************************************** <br>";

/////////////////////////////////////////////////

//seventh assignment:
$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');

function commonValues($arr1, $arr2)
{
    for ($i = 0; $i < count($arr1); $i++) {
        for ($j = 0; $j < count($arr2); $j++) {
            if ($arr1[$i] == $arr2[$j]) {
                echo $arr2[$j] . ' ';
            }
        }
    }
}

commonValues($arr1, $arr2);
