<?php
    @session_start();
    session_destroy();
    header("Location: ./log-register/login.html");
?>