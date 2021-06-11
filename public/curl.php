<?php
    function http_request($url){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    $data = http_request("https://dekontaminasi.com/api/id/covid19/hospitals");
    $data = json_decode($data, TRUE);

    $jumlah = count($data);

    $nomor = 1;

    for($i = 0; $i < $jumlah; $i++){

        $hasil = $data[$i];
    ?>

    <div class="col-md-12 mt-4">
        <div class="bg-primary box text-black">
            <div class="row">
                <div class="col-md-3 ml-2 mt-1">
                    <img src="img/hospital.png" alt="" width="100%">
                </div>
                <div class="col-md-8">
                    <h2><?=$hasil['name']?></h2>
                    <h5 class="mt-6">Alamat     : <?=$hasil['address']?><br>
                                     Kota       : <?=$hasil['region']?><br>
                                     Kontak     : <?=$hasil['phone']?><br>
                                     Province   : <?=$hasil['province']?><br>
                                    </h5>
                </div>
            </div>
        </div>
    </div>

<?php
    }
?>