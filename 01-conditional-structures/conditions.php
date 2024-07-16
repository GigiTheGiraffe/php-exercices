<?php
echo "1.1 Clean your room Exercise<br><br>";

$room_is_filthy = true;

if ($room_is_filthy) {
    echo "Yuk, Room is dirty : let's clean it up !<br>";
    //cleanup_room();
    echo "Room is now clean!<br>";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}

echo "<br>1.2 Clean your room Exercise, improved<br><br>";

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4];

if ($room_filthiness === $possible_states[0]) {
    echo "Yuk, Room is Disgusting! Let's clean it up !<br>";
} elseif ($room_filthiness === $possible_states[1]) {
    echo "Yuk, Room is Beurk! Let's clean it up !<br>";
} elseif ($room_filthiness === $possible_states[2]) {
    echo "Yuk, Room is dirty : let's clean it up !<br>";
} elseif ($room_filthiness === $possible_states[3]) {
    echo "Yes, Room is clean! We could make it better !<br>";
} else {
    echo "<br>Nothing to do, room is neat.<br>";
}

echo "<br>2. \"Different greetings according to time\" Exercise<br>";
date_default_timezone_set("Europe/Brussels");
$now = date("h:i"); // How to get the current time in PHP ? Google is your friend ;-)
// Test the value of $now AND display the right message according to the specifications.
if ($now > date("04:59") && $now < date("09:02")) {
    echo "Good morning! <br>";
} elseif ($now > date("09:00") && $now < date("12:02")) {
    echo "Good day ! <br>";
} elseif ($now > date("12:01") && $now < date("16:02")) {
    echo "Good afternoon ! <br>";
} elseif ($now > date("16:01") && $now < date("21:02")) {
    echo "Good evening ! <br>";
} else {
    echo "Good night ! <br>";
}

echo "<br>3. \"Different greetings according to age, gender and mothertongue\" Exercise<br>";
// Vérifier si l'âge a été soumis via le formulaire
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = $_GET['english'];
    // Form processing
    if ($age < 12) {
        if ($gender === "male") {
            if ($english === "yes") {
                echo "Hello mister kiddo! <br>";
            } else {
                echo "Aloha mister kiddo! <br>";
            }
        } else {
            if ($english === "yes") {
                echo "Hello miss kiddo! <br>";
            } else {
                echo "Aloha miss kiddo! <br>";
            }
        }
    } elseif ($age >= 12 && $age <= 18) {
        if ($gender === "male") {
            if ($english === "yes") {
            echo "Hello mister Teenager! <br>";
            } else {
                echo "Aloha mister Teenager!";
            }
        } else {
            if ($english === "yes") {
                echo "Hello miss Teenager! <br>";
                } else {
                    echo "Aloha miss Teenager!";
                }
        }
    } elseif ($age >= 19 && $age <= 115) {
        if ($gender === "male") {
            if ($english === "yes") {
            echo "Hello mister Adult! <br>";
            } else {
                echo "Aloha mister Adult!";
            }
        } else {
            if ($english === "yes") {
                echo "Hello miss Adult! <br>";
                } else {
                    echo "Aloha miss Adult!";
                }
        }
    } else {
        if ($gender === "male") {
            if ($english === "yes") {
            echo "Hello! Still alive ? Are you a mister robot, like me ? Can I hug you ? <br>";
            } else {
                echo "Aloha! Still alive ? Are you a mister robot, like me ? Can I hug you ? <br>";
            }
        } else {
            if ($english === "yes") {
                echo "Hello! Still alive ? Are you a miss robot, like me ? Can I hug you ? <br>";
                } else {
                    echo "Aloha! Still alive ? Are you a miss robot, like me ? Can I hug you ? <br>";
                }
        }
    }
}

?>
<form method="get" action="">
    <label for="age">Please type your age in number </label>
    <input type="number" name="age">
    <br>
    <label for="gender">Please select your gender </label>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male </label>
    <input type="radio" name="gender" value="female" id="female" checked>
    <label for="female">Female </label>
    <br>
    <label for="english">Do you speak English? </label>
    <input type="radio" name="english" value="yes" id="yes" checked>
    <label for="yes">Yes </label>
    <input type="radio" name="english" value="no" id="no">
    <label for="no">No </label>
    <br>
    <input type="submit" name="submitRobot" value="Greet me now">
</form>

<form method="get" action="">
    <label for="age_soccer">Please type your age in number </label>
    <input type="number" name="age_soccer" required>
    <br>
    <label for="gender_soccer">Please select your gender </label>
    <input type="radio" name="gender_soccer" value="male" id="male">
    <label for="male">Male </label>
    <input type="radio" name="gender_soccer" value="female" id="female" checked>
    <label for="female">Female </label>
    <br>
    <label for="name_soccer">What's your firstname? </label>
    <input type="texte" name="name_soccer">
    <br>
    <input type="submit" name="submitSoccer" value="Enroll!">
</form>

<?php
if (isset($_GET['age_soccer']) && isset($_GET['gender_soccer']) && isset($_GET['name_soccer'])) {
    $message = "Sorry, you don't fit the criteria for the girl soccer team.";
    $age_soccer = $_GET['age_soccer'];
    $gender_soccer = $_GET['gender_soccer'];
    $name_soccer = $_GET['name_soccer'];
 if ($age_soccer >= 21 && $age_soccer <=40 && $gender_soccer === "female") {
    $message = "Welcome to the team, $name_soccer!";
 }
 echo $message;
}
?>

<form method="get" action="">
    <label for="grade">What's the grade of the copy? </label>
    <input type="number" name="grade" required>
    <input type="submit" name="submitGrade" value="grade!">
</form>