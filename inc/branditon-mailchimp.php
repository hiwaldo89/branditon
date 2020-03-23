<?php

$api_key = 'e44a88538596da945073d241e9e46228-us19';
$list = 'd9d96f5957';

$email = $_POST['email'];
$status = 'subscribed';
$merge_fields = array();


if(trim($email) !== '') {
    $result = json_decode(mailchimp_subscirbe($email, $status, $list, $api_key, $merge_fields));
    if ($result->status == $status) {
        echo 'success';
    } else {
        //echo 'error';
        echo json_encode($result);
    }
} else {
    echo 'error';
}

function mailchimp_subscirbe($email, $status, $list_id, $api_key, $merge_fields) {
    $data = array(
        'apiKey' => $api_key,
        'email_address' => $email,
        'status' => $status,
        'merge_fields' => $merge_fields
    );
    $mch_api = curl_init();

    curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key, strpos($api_key, '-') + 1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
    curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic ' . base64_encode('user:' . $api_key)));
    curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
    curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
    curl_setopt($mch_api, CURLOPT_POST, true);
    curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data));

    $result = curl_exec($mch_api);
    return $result;
}