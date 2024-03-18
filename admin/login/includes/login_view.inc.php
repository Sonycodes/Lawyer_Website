<?php

declare(strict_types=1);

function output_username()
{
if (isset($_SESSION["user"])) {
echo "You are logged in as " . $_SESSION["user"];
} else {
echo "Tu n'est pas connecté";
var_dump($_SESSION['user']);
}
}



//on le voit pas pour l'instant
function check_login_errors()
{
if (isset($_SESSION["errors_login"])) {
$errors = $_SESSION["errors_login"];

echo "<br>";

foreach ($errors as $error) {
echo '<p class="danger">' . $error . '</p>';
}

unset($_SESSION['errors_login']);
} else if (isset($_GET['login']) && $_GET['login'] === "success") {
echo '<br>';
echo '<p class="success">Login success !< /p>';
}
}