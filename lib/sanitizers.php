<?php

function sanitize_email($email = "") {
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}

function is_valid_email($email = "") {
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}

function is_valid_username($username)
{
    return preg_match('/^[a-z0-9_-]{3,16}$/', $username);
}

function is_valid_address($address)
{
    return preg_match('/^[0-9]{1,5}[ ]([A-Za-z0-9.-]+[ ])+(Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)$/', $address);
}

function is_valid_password($password)
{
    return strlen($password) >= 8;
}