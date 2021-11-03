<?php
$themeErr = $user_nameErr = $prenomErr = $user_mailErr = $user_phoneErr = $user_messageErr = "";
$theme = $user_name = $prenom = $user_mail = $user_phone = $user_message = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["theme"])){
        $themeErr = "theme is required";
    } else {
        $theme = test_input($_POST["theme"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$theme)) {
            $themeErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["user_name"])){
        $user_nameErr = "lastname is required";
    } else {
        $user_name = test_input($_POST["user_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$user_name)) {
            $user_nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["user_email"])){
        $user_mailErr = "Email is required";
    } else {
        $user_email = test_input($_POST["user_email"]);
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $user_mailErr = "Invalid email format";
        }
    }

    if (empty($_POST["user_phone"])){
        $user_phoneErr = "Phone is required";
    } else {
        $user_phone = test_input($_POST["user_phone"]);
        if (!preg_match("/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/",$user_phone)){
            $user_phoneErr = "Invalid phone format";
        }
    }

    if (empty($_POST["prenom"])){
        $prenomErr = "prenom is required";
    } else {
        $prenom = test_input($_POST["prenom"]);
    }

    if (empty($_POST["user_message"])){
        $user_messageErr = "Message is required";
    } else {
        $user_message = test_input($_POST["user_message"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$user_message)) {
            $user_messageErr = "Only letters and white space allowed";
        }
    }
}

echo $themeErr;
echo "</br>";
echo $user_nameErr;
echo "</br>";
echo $prenomErr;
echo "</br>";
echo $user_mailErr;
echo "</br>";
echo $user_phoneErr;
echo "</br>";
echo $user_messageErr;

if ($theme && $user_name && $user_email && $user_phone && $prenom && $user_message){
    echo "Merci " . $_POST["prenom"] . " " . $_POST["user_name"] . " de nous avoir contacté à propos de " . $_POST["theme"] . ".</br> </br>" .
    "Un de nos conseiller vous contactera soit à l'adresse " . $_POST["user_email"] . " ou par téléphone <br> au " 
    . $_POST["user_phone"] . " dans les plus brefs délais pour traiter votre demande: <br><br>" .
    $_POST["user_message"];
} 
?>

