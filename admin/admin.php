<?
root(3);

if ($Module == '') include 'pages/main.php';
else if ($Module == 'state_manager') include 'pages/state_manager.php';
else if ($Module == 'user_manager') include 'pages/user_manager.php';
else if ($Module == 'manager') include 'form/manager.php';
else if ($Module == 'createstate') include 'pages/createstate.php';

else MessageToUser(1, 'Извините, но данного модуля не существет!', '/admin');
?>
