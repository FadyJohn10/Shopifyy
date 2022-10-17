<?php

    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

    if($do == 'Manage'){
        echo 'welcome in manage page';
    }elseif ($do == 'Add'){
        echo 'welcome in Add page';
    }elseif ($do == 'Edit'){
        echo 'welcome in Edit page' . $_GET['userID'];
    }

?>