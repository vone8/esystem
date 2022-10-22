<?php
$mbox = imap_open( '{imap.gmail.com:993/imap/ssl}', 'user', 'pass' );
$list = imap_getmailboxes( $mbox, '{imap.gmail.com:993/imap/ssl}', '*' );
$mailbox = null;
$mailbox_name = '';
$number = 0;
foreach ( $list as $key ) {
    $con = imap_open( "$key->name", 'user', 'pass' );
    $number_msg = imap_num_msg( $con );

    if ( $number_msg > $number ) {
        $number = $number_msg;
        $mailbox = $con;
        $mailbox_name = $key->name;
    }

}
?>