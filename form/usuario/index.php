<?php


session_start('login');
echo 'Bom dia'.$_SESSION["user_ativo"];