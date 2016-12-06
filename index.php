<?php
require_once ('includes/config_data.php');
if(empty($_GET['page'])){
    $_GET['page'] = 'welcome';
}
$menu_selection = $_GET['page'];
if(!empty($menu_entries[ $menu_selection ])){
    $page = $menu_entries[$menu_selection];
}
?>
<!DOCTYPE html>
<html>
<?php include ('includes/head.php');?>
<body>
<?php include ('includes/navigation.php');?>
<?php include($page); ?>
<?php include('includes/footer.php');?>
<?php include ('includes/scripts.php');?>
</body>
</html>