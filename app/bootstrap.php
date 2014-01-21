<?php

require_once('../vendor/autoload.php');

call_user_func(function () {
    $application = new Application();

    $application->main();
});
