<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
$verb = "do";
foreach ($pronouns as $key => $pronoun) {
    if ($key == 2) {
        $verb = "does";
    }
    echo '<pre>';
    echo $pronoun;
    echo " $verb";
    echo '</pre>';
    if ($key == 2) {
        $verb = "do";
    }
}
$number = 1;
while ($number < 121) {
    echo $number . " ";
    $number++;
}
echo "<br>";
for ($i = 1; $i < 121; $i++) {
    echo $i ." ";
}
echo "<br>";
$names = array ("Loïc","Martin","Sanjay","Jean","Jeanne","Isabelle");
foreach ($names as $name) {
    echo $name ."<br>";
}
$countries = array("BE" => "Belgium", "AT" => "Austria", "BG" => "Bulgaria", "HR" => "Croatia", "CY" => "Cyprus", "CZ" => "Czech Republic", "DK" => "Denmark", "EE" => "Estonia", "FI" => "Finland", "FR" => "France", "DE" => "Germany", "GR" => "Greece", "HU" => "Hungary");
?>
<form>
    <label for="countries">Choose your country</label>
    <select id="countries" names="countries">
        <?php
        foreach ($countries as $iso => $country) {
            echo "<option value=\"$iso\">$country</option>";
        }
        ?>
    </select>
</form>
