<?php

function connection() {
    try {
        $con = new mysqli("localhost", "root", "", "dissemination");
        if ($con) {
            return $con;
        }
    } catch (Exception $ex) {
        
    }
}
