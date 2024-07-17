<?php

//EXO1
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$words = explode(" ", $text);
unset($words[4]);
foreach ($words as $key => $word) {
    if (strlen($word) < 3) {
        echo $word . " ";
    } else {
        //s'arrete a la derniere clé qui équivaut le nombre d'éléments dans l'array car unset enleve la clé mais ne réarrange pas les autres clés donc on passe de 3 a 5 en clé. Ce qui fait qu'ils ont la même valeur à la fin.
        if ($key < count($words)) {
            $last_char = strlen($word) - 1;
            echo $word[0] . str_shuffle(substr($word, 1, $last_char - 1)) . $word[$last_char] . " ";
        } else {
            $last_char = strlen($word) - 1;
            echo $word[0] . str_shuffle(substr($word, 1, $last_char - 1)) . $word[$last_char];
        }
    }
}
//fonction pour faire un \n
function backspace() {
    echo "<br>";
}
backspace();

// EXO 2 function to capitalize multibyte char

function mb_ucfirst($string) {
    $first_char = mb_substr($string, 0, 1);
    $first_char = mb_strtoupper($first_char);
    $remnant_chars = mb_substr($string, 1);
    return $first_char . $remnant_chars;
}
echo mb_ucfirst("émile");
backspace();

//EXO 3

echo date("Y");
backspace();

//EXO 4

date_default_timezone_set('EUROPE/BRUSSELS');
echo date(" Y/m/d h:i:s");
backspace();

//EXO 5

function sum($number_one, $number_two) {
    if (is_int($number_one) &&  is_int($number_two)) {
        return $number_one + $number_two;
    } else {
        echo "Error: argument is not a number.";
    }
}
echo sum( 4, 8);
/*
backspace();
echo Sum( 4, "8");
backspace();
echo Sum( 4, "hello");
*/
backspace();

//EXO 6

function acronym($string) {
    $words = explode(" ", $string);
    foreach ($words as $word) {
        echo mb_strtoupper($word[0]);
    }
    backspace();
}
//acronym("Yolo");
//acronym("Yolo Este Bien");
acronym("JE SAIS PAS");

//EXO 7

function replaceAE($string) {
return $string = str_replace("ae", "æ", $string);
}
echo replaceAE(("sphaerotheca"));
backspace();
function replaceInverse($string) {
    return $string = str_replace("æ", "ae", $string);
    }
echo replaceInverse("sphærotheca");
backspace();

//EX8

function feedback($message, $css_class = "info") {
    echo "<div class=\"$css_class\">Error: $message.</div>";
}
feedback("Incorrect email address", "error");
backspace();

//EX9

function generateWord($length_min, $length_max) {
    if (isset($_GET['submit'])){
    $length = rand($length_min, $length_max);
    $str = "abcdefghijklmnopqrstuvwxyz";
    $str = substr(str_shuffle($str),0, $length);
    $str = ucfirst($str);
    echo $str;
    }
}
?>
<form method="get">
<h3>Generate a new word</h3>
<p><?php generateWord(1, 5); echo " "; generateWord(7, 15); ?></p>
<input type="submit" value="Generate words!" name="submit">
</form>
<?php

//EX10

$string_to_decapitalize = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
$string_to_decapitalize = strtolower($string_to_decapitalize);
echo $string_to_decapitalize;
backspace();

//EX11

function calculateConeVolume($ray, $height) {
    $raySquared = $ray * $ray;
    $volume = $raySquared * M_PI * $height * (1/3);
    echo "The volume of a cone which ray is $ray and height is $height = " . round($volume, 2) . " cm<sup>3</sup><br />";
}
calculateConeVolume(10, 5);
