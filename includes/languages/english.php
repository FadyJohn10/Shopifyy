<?php

    function lang($phrase) {

        static $lang = array(

            'home' => 'Home',

            'feats' => 'Features',
            
            'items' => 'Items',

            'logout' => 'Log out'

        );

        return $lang[$phrase];

    }

?>