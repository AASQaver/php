<?php
    session_save_path('E:\xampp\htdocs\PHP');
    session_start();

    $sessionTimeout = 5;
    if (isset($_SESSION['LAST_ACTIVITY']))
    {
        $lastActivity = $_SESSION['LAST_ACTIVITY'];
        $currentTime = time();
        $timeSinceLastActivity = $currentTime - $lastActivity;

        if ($timeSinceLastActivity > $sessionTimeout)
        {
            session_unset();
            session_destroy();
            echo "session expired log in again";
        }
        else
        {
            $_SESSION['LAST_ACTIVITY'] = $currentTime;
            echo "Session active";
        }
    }
    else
    {
        $_SESSION['LAST_ACTIVITY'] = time ();
        echo "session started";
    }

?>