<?php 
function isAuthenticated() {
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }
    header('Location: ?');
    exit;
}