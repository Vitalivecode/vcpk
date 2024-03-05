<?php
    $url = 'https://pdf-temp-files.s3.us-west-2.amazonaws.com/9FZWEUPAR2PRY6MV0R8A9QSIFEFKP3XD/Zulaikha_Athirah_Fuad_Resume.txt?X-Amz-Expires=3600&X-Amz-Security-Token=FwoGZXIvYXdzEE4aDLR8NKNO1p0cDcwpliKCAVKFlSrDPuhkOvZlKn4J8DwQZl7fvfkEQvpvOQ%2B%2F08a4TTuzJ4gqMp%2BR8%2BR9sJngUF%2BAxEbRsy3sTlMCX2jfqvOVSYnN%2B5DDUJ6s3PGPFOBWs9kroJzRYIwZB1wJKFQOeUObN%2FuyJxlcaKGswT9kOUVrsy4oKrUu%2FdAnC%2B%2B%2B7Sa%2F%2FNwohpv%2FqwYyKDbQGF9AfOWDcbRa7jJbUptkUXokF7QpDQtBn7m8xfX7RsGpxEQL7rA%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=ASIA4NRRSZPHOCDW3OII/20231218/us-west-2/s3/aws4_request&X-Amz-Date=20231218T065124Z&X-Amz-SignedHeaders=host&X-Amz-Signature=4e898a26f9a24bdb6a55fd7560bd4867ced4c9bc422c7ab4de5ca46b3edb1c3d';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    echo '<pre style="word-wrap: break-word; white-space: pre-wrap;">'.$result.'</pre>';
?>