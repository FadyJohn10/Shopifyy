<?php

    function lang($phrase) {

        static $lang = array(

            'message' => 'welcome',

            'admin' => 'admin'

        );

        return $lang[$phrase];

    }

?>