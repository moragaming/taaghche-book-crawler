<?php
function fetchAllTaaghcheBooks($initialOffset = "0-0-0-16") {
    $baseUrl = "https://get.taaghche.com/v2/everything";
    $fixedParams = "?filters=%7B%22list%22:%5B%7B%22type%22:3,%22value%22:645%7D,%7B%22type%22:21,%22value%22:0%7D,%7B%22type%22:50,%22value%22:0%7D%5D%7D&trackingData=110160240&order=5";

    $headers = [
        "Accept: */*",
        "Accept-Language: en-US,en;q=0.5",
        "Accept-Encoding: gzip, deflate, br, zstd",
        "Referer: https://taaghche.com/",
        "Origin: https://taaghche.com",
        "Sec-Fetch-Dest: empty",
        "Sec-Fetch-Mode: cors",
        "Sec-Fetch-Site: same-site",
        "Priority: u=4",
        "Pragma: no-cache",
        "Cache-Control: no-cache"
    ];

    $allBooks = [];
    $offset = $initialOffset;

    do {
        $url = $baseUrl . $fixedParams . "&offset=" . urlencode($offset);
        echo "📥 درخواست با offset: $offset<br>\n";

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:139.0) Gecko/20100101 Firefox/139.0",
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_ENCODING => "",
        ]);

        $response = curl_exec($ch);
        if(curl_errno($ch)) {
            echo "❌ خطا: " . curl_error($ch);
            break;
        }

        $data = json_decode($response, true);
        curl_close($ch);

        if (isset($data['bookList']['books']) && is_array($data['bookList']['books'])) {
            $allBooks = array_merge($allBooks, $data['bookList']['books']);
        }

        if (!isset($data['nextOffset'])) {
            echo "❌ nextOffset پیدا نشد، توقف.\n";
            break;
        }

        $parts = explode('-', $data['nextOffset']);
        $lastPart = intval(end($parts));
        $offset = $data['nextOffset'];

    } while ($lastPart !== 0);

    file_put_contents("taaghche_books.json", json_encode($allBooks, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    echo "<br>✅ تمام کتاب‌ها ذخیره شدند. تعداد: " . count($allBooks) . "<br>\n";
}

fetchAllTaaghcheBooks();
