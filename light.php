<?php
if (isset($_POST['light']) && $_POST['light'] == "on") {
    echo shell_exec("python led_on.py");
} else if (isset($_POST['light']) && $_POST['light'] == "off") {
    echo shell_exec("python led_off.py");
} else if (isset($_POST['get_'])) {
    $output =  shell_exec("crontab -l 2>&1");
    echo "<pre>$output</pre>";
} else if (isset($_POST['h-on']) && isset($_POST['m-on'])  && isset($_POST['h-off'])  && isset($_POST['m-off'])) {
    $file = fopen("crontab.txt", "w");

    fclose($file);
}

echo "Command executed!";
