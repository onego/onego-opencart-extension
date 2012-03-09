<?php
// Heading
$_['heading_title']    = 'OneGo';

// Text
$_['text_total']       = 'Order Totals';
$_['text_success']     = 'Success: You have modified OneGo extension settings!';

// Entry
$_['entry_status']     = 'Status:';
$_['entry_sort_order'] = 'Sort Order:';

$_['entry_clientId']  = 'Client ID: *';
$_['entry_clientSecret']  = 'Client secret: *';
$_['entry_terminalId']  = 'Terminal ID: *';
$_['entry_transactionTTL']  = 'Transaction TTL: *';
$_['entry_delayedTransactionTTL']  = 'Delayed transaction timeout: *';
$_['entry_shippingCode']  = 'Shipping code: *';
$_['entry_widgetShow']  = 'Enable OneGo widget';
$_['entry_widgetPosition']  = 'Widget position: *';
$_['entry_widgetTopOffset']  = 'Widget top offset: ';
$_['entry_widgetFrozen']  = 'Widget frozen: ';
$_['entry_autologinOn']  = 'Autologin enabled';
$_['entry_confirmOnOrderStatus'] = 'Order status on which OneGo transaction gets confirmed: *';
$_['entry_cancelOnOrderStatus'] = 'Order status on which OneGo transaction gets canceled: *';
$_['entry_checkCredentials'] = 'Check configuration:';

$_['entry_help_clientId']  = 'Client ID assigned to you on OneGo merchant sign up.';
$_['entry_help_clientSecret']  = 'Client secret assigned to you on OneGo merchant sign up.';
$_['entry_help_terminalId']  = 'Terminal ID you have assigned for your e-shop at OneGo merchant portal.';
$_['entry_help_transactionTTL']  = '(in minutes) - Unfinished OneGo transaction timeout - 
    defines duration after which buyer\'s funds and offers reserved for the transaction 
    are to be released when he leaves your e-shop without completing purchase.';
$_['entry_help_delayedTransactionTTL']  = '(in hours) - Defines time in which orders will be processed, 
    so OneGo transaction can be confirmed or canceled. Set this value big enough because when
    transaction expires buyer receives back all the funds he spent for the order and can use them again.';
$_['entry_help_shippingCode']  = 'ItemCode value for shipping - must be unique and different 
    from any SKU of products sold on your e-shop. You will use this code to create offers with shipping
    as a reward, i.e. "free shipping" or "discount on shipping".';
$_['entry_help_autologinOn']  = 'Detect returning buyers (if they are logged in on the widget) 
    and automatically start transaction for them.';
$_['entry_help_widgetShow']  = 'Enable sliding-in OneGo widget, where buyer can view 
    his account details and your currently active offers.';
$_['entry_help_widgetFrozen']  = 'Widget stays on the same place when user scrolls page.';
$_['entry_help_widgetTopOffset']  = 'How far off the top should the widget be placed (in pixels).';
$_['entry_help_sortorder'] = 'Set value low enough to list buyer benefits before "taxes" and "total" rows. Best set the
    same as for "sub-total".';
$_['entry_help_confirmOnOrderStatus'] = 'OneGo transactions are confirmed when order 
    reaches these statuses, buyer\'s benefits are used and/or he receives rewards.';
$_['entry_help_cancelOnOrderStatus'] = 'OneGo transactions are canceled when order 
    reaches these statuses, buyer\'s benefits reserved for transaction are released, 
    he does not receive rewards.';

$_['onego_status'] = 'OneGo transaction status:';
$_['onego_status_short'] = 'OneGo:';
$_['transaction_status_undefined'] = 'Not initiated';
$_['transaction_status_confirm'] = 'Confirmed on %s (buyer\'s benefits used/rewarded)';
$_['transaction_status_cancel'] = 'Canceled on %s (buyer\'s benefits not used/rewarded)';
$_['transaction_status_delayed'] = 'Delayed on %s, expires %s';
$_['transaction_status_expired'] = 'Expired on %s (buyer\'s benefits not used/rewarded)';
$_['transaction_operation_failed'] = 'Transaction operation failed: [%s] %s - %s';
$_['button_confirm_transaction'] = 'Confirm';
$_['button_cancel_transaction'] = 'Cancel';
$_['button_check_credentials'] = 'Check';
$_['confirm_transaction_confirm'] = 'If you confirm this transaction, buyer\\\'s '
    .'benefits will be used/rewarded.\nIMPORTANT: this action cannot be undone.';
$_['confirm_transaction_cancel'] = 'If you cancel this transaction, buyer\\\'s '
    .'benefits will not be used/rewarded.\nIMPORTANT: this action cannot be undone.';
$_['confirm_transaction_delay'] = 'By delaying transaction, it will not expire until '
    .'the end of period and all buyer\\\'s benefits used/received for this order will stay '
    .'reserved.\nTransaction delay period can be changed anytime later, until it expires '
    .'or is confirmed/canceled.';
$_['delay_period'] = array(0 => 'Today', 1 => 'One day', 2 => 'Two days', 3 => 'Three days',
    5 => 'Five days', 7 => 'One week', 14 => 'Two weeks', 30 => '30 days', 60 => '60 days');
$_['delay_for_period'] = 'Delay for';
$_['button_delay_transaction'] = 'Delay';
$_['transaction_will_confirm'] = 'Transaction will be confirmed when you save your changes. Buyer\\\'s benefits will be used and/or rewards received.';
$_['transaction_will_cancel'] = 'Transaction will be canceled when you save your changes. Buyer\\\'s benefits will not be used and/or rewards received.';
$_['status_failure'] = 'failed';
$_['status_delayed'] = 'delayed until %s';
$_['status_confirmed'] = 'confirmed';
$_['status_canceled'] = 'canceled';
$_['status_expired'] = 'expired %s';

$_['check_credentials'] = 'Credentials check';
$_['check_environment'] = 'Server environment check';
$_['check_opencart_version'] = 'Opencart version check';
$_['ok'] = 'OK';
$_['failed'] = 'FAILED';
$_['cannot_check'] = 'cannot be checked';
$_['version_unsupported'] = 'Your version of Opencart is not officially supported by this extension. While it may be partially or even fully functional, there may be incompatibilities. Use at your own risk.';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify OneGo total!';
$_['error_missing_required_fields'] = 'Error: please fill in all required fields';
$_['error_transaction_id_unknown'] = 'Unknown transaction ID';
$_['error_transaction_state_invalid'] = 'Invalid transaction state';
$_['error_connection_timeout'] = 'HTTP connection timeout, try again later';
$_['error_forbidden'] = 'Invalid credentials and/or account blocked';
$_['error_curl_missing'] = 'PHP CURL extension is not installed';
$_['error_javascript_not_loaded'] = 'Extension dependencies could not be loaded: check if extension is installed correctly and VQMOD is working.';

$_['onego_extension_info'] = <<<END
onego.com is a loyalty system, which allows merchants to create, manage, publish and analyze loyalty campaigns. This extension integrates e-shop as a point-of-sale for the merchant, by allowing buyers to participate in merchant's
loyalty campaigns by tracking active offers, using them, collecting and spending their personal benefits. It provides seamless and unintrusive buying experience for the buyer while encouraging them to become loyal
and returning customers.<br />
For more information on this extension and a demo visit: <a href="http://opencart.extensions.onego.com">opencart.extensions.onego.com</a><br />
For more information on OneGo loyalty system visit: <a href="http://www.onego.com">www.onego.com</a>
END;
