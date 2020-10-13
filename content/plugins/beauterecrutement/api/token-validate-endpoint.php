<?php

add_filter(
    'jwt_auth_valid_token_response',
    
    function ( $response, $user, $token ) {
        $response['data']['displayName'] = $user->display_name;
        $response['data']['token'] = $token;

        return $response;
    },
    10,
    3
);