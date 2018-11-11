<?php
// Evaluation is done is several steps:
    //    Step 1: Determine if Submit button was pressed
if (isset($_POST['submit'])){                                // begin IF #1
    //    Step 2: ensure that year entry is NOT empty
    if (!empty($_POST['zodiac'])) {                            // begin IF #2
    //    Step 3: Ensure that a number was entered
        if (is_numeric($_POST['zodiac'])){                    // begin IF #3
$InputYear = $_POST['zodiac'];        
    //    Step 4: Check that birthdate is in the date range 1912-2009
            if ($InputYear >= 1800 && $InputYear <= 2018) {    //begin IF #4
// calculate the animal for the year with modulus .... starting with the year 1912, using modulus 12, each succeeding year has a modulus result of than the previous year. Note that the result of mod 12 for 1920, 1921 and 1922 goes back to 0
    $BirthYear = $InputYear % 12;
    switch($BirthYear){
        case 0:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Monkey</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/monkey.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/monkey.png'/></p>\n";
        break;
        case 1:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Hen</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/hen.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/hen.png'/></p>\n";
        break;
        case 2:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Dog</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/dog.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/dog.png'/></p>\n";        
        break;
        case 3:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Pig</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/pig.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/pig.png'/></p>\n";
        break;
        case 4:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Rat</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/rat.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/rat.png'/></p>\n";        
        break;
        case 5:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Ox</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/ox.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/ox.png'/></p>\n";        
        break;
        case 6:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Tiger</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/tiger.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/tiger.png'/></p>\n";
        break;
        case 7:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Rabbit</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/rabbit.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/rabbit.png'/></p>\n";
        break;
        case 8:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Dragon</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/dragon.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/dragon.png'/></p>\n";
        break;
        case 9:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Snake</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/snake.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/snake.png'/></p>\n";
        break;
        case 10:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Horse</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/horse.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/horse.png'/></p>\n";
        break;
        case 11:
        echo "<p style='text-align:center; color: black;'>You were born under the sign of the <strong>Sheep</strong>.</p><br/>\n";
        $Text=file_get_contents("./zodiac/sheep.txt");
        echo $Text;
        echo "<p style='text-align:center'><img src='Images/sheep.png'/></p>\n";
        break;
        default:
        break;
    }
    //Ends IF #4 - Correct Years?
}
    else {
    echo "<center><br>You must enter a  birthyear between 1912 and 2018 <br/>\n</center>";
    }
    }// End IF #3 - Is Numeric?
    else {
    echo "<center><br>You must enter a 4-digit number<br/>\n</center>";
    }
    }//End IF #2  Field Empty?
    else {
    echo "<center><br>You must enter a  birthyear<br/>\n</center>";
    }
    }
    else
    echo "<center><br>Please click to enter a birthyear<br/>\n</center>";
?>