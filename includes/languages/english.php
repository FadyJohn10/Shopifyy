<?php

    function lang($phrase) {

        static $lang = array(

            'home' => 'Shopify <span>me</span>',

            'feats' => 'Features',
            
            'items' => 'Items',

            'logout' => 'Log out'

        );

        return $lang[$phrase];

    }

?>