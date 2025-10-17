<?php
function http_request_get($url) {
    // Persiapkan curl
    $ch = curl_init(); 

    // Set url 
    curl_setopt($ch, CURLOPT_URL, $url);
 
    // Konversi hasil ke string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // Deteksi user agent
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'); 

    // Eksekusi
    $output = curl_exec($ch); 
 
    // Tutup curl 
    curl_close($ch);      
 
    // Mengembalikan hasil curl
    return $output;
}
?>