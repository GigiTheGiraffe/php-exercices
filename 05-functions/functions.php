<?php
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
function backspace() {
    echo "<br>";
}
backspace();
//function to capitalize multibyte char
function mb_ucfirst($string) {
    $first_char = mb_substr($string, 0, 1);
    $first_char = mb_strtoupper($first_char);
    $remnant_chars = mb_substr($string, 1);
    return $first_char . $remnant_chars;
}
echo mb_ucfirst("émile");
backspace();
echo date("Y");
backspace();
date_default_timezone_set('EUROPE/BRUSSELS');
echo date(" Y/m/d h:i:s");
backspace();
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
function feedback($message, $error) {
    
}