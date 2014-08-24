<?php

function storeAddress()
{

    require_once('MCAPI.class.php');  // same directory as store-address.php

    // grab an API Key from http://admin.mailchimp.com/account/api/
    $api = new MCAPI('9e8b7b1d2fbb5f8e5894f0ecbb92d3da-us8');

    $merge_vars = Array( 
        'EMAIL' => $_GET['email'],
        'FNAME' => $_GET['fname'], 
        'LNAME' => $_GET['lname']
    );

    // grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
    // Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
    
    $list_id = "fb7f8de825";

    if($api->listSubscribe($list_id, $_GET['email'], $merge_vars , $_GET['emailtype']) === true) 
    {
        // It worked!   
        return 'Success!&nbsp; Check your inbox or spam folder for a message containing a confirmation link.';
    }
    else
    {
        // An error ocurred, return error message   
        return '<b>Error:</b>&nbsp; ' . $api->errorMessage;
    }

}
	
// If being called via ajax, autorun the function
if($_GET['ajax'])
{
	echo storeAddress(); 
}

?>