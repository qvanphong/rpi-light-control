<?php
if (isset($_POST['light']) && $_POST['light'] == "on") {
    echo shell_exec("python ledOn.py");
} else if (isset($_POST['light']) && $_POST['light'] == "off") {
    echo shell_exec("python ledOff.py");
}
