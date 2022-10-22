<?php
if ( isset( $_POST[ 'get_emails' ] ) ) {
    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];

    //Connect Gmail feed atom
    $url = 'https://mail.google.com/mail/feed/atom';

    // Send Request to read email
    $curl = curl_init();
    curl_setopt( $curl, CURLOPT_URL, $url );
    curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1 );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $curl, CURLOPT_USERPWD, $username . ':' . $password );
    curl_setopt( $curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
    curl_setopt( $curl, CURLOPT_ENCODING, '' );
    $curlData = curl_exec( $curl );
    curl_close( $curl );

    $emails = new SimpleXmlElement( $curlData );
    echo '<ul>';
    foreach ( $emails->entry as $entry ) {
        echo '<li><p>'. $entry->title.'<br>';
        echo $entry->summary;
        echo '</p></li>';
    }
    echo '</ul>';
}
?>

<html>

<body>
    <div id='wrapper'>

        <div class='form_div'>
            <form method='post' action=''>
                <input type='text' name='username' placeholder='Enter Username'>
                <input type='password' name='password' placeholder='*********'>
                <input type='submit' name='get_emails' value='GET EMAILS'>
            </form>
        </div>

    </div>
</body>

</html>