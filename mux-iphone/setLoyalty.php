<?php

        $user_file = file_get_contents('data/users.json');
        $user_array = json_decode($user_file, true);
        $current_loyalty;
        $current_loyalty = $user_array[0]['loyalty_points'];
        $current_loyalty +=10;
        $user_array ='[{"user_id": "1","user_name":"Nancy","loyalty_points":'.$current_loyalty.',"logged_in":true}]';
        $user_array = json_decode($user_array,true);
        $new_json_string = json_encode($user_array);
        file_put_contents('data/users.json', $new_json_string);
?>