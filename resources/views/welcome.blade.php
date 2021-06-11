<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Data Rumah Sakit Rujukan Covid-19</title>
</head>

<body>
    <div class="text-center">
        <img src="img/3052.jpg" alt="" width="72%">
    </div>

    <style>
        body {
            position: relative;
        }
        .box {
            padding: 30px 40px;
            border-radius: 5px;
        }
        .active-cyan-4 input[type=text]:focus:not([readonly]) {
            border: 1px solid #4dd0e1;
            box-shadow: 0 0 0 1px #4dd0e1;
        }
        .active-cyan-3 input[type=text] {
            border: 1px solid #4dd0e1;
            box-shadow: 0 0 0 1px #4dd0e1;
        }
    </style>

    <div class="container mt-4">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><strong>Protokol Kesehatan</strong></a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><strong>Data Penyebaran Covid-19</strong></a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><strong>Rumah Sakit Rujukan</strong></a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="text-center bg-primary text-white card-header text-center mt-3">
                    <b>Protokol Kesehatan Covid-19</b>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/prokes1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/prokes2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/prokes3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/prokes4.jpg" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/prokes5.jpg" alt="Fifth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card mt-4">
                    <div class="card-header text-center bg-primary text-white">
                        <b>Data Penyebaran Virus Corona Di Indonesia Berdasarkan Provinsi</b>
                    </div>
                    <div class="active-cyan-4 mt-3">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search-provs">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive service">
                            <table class="table text-nowrap table-bordered mt-1 table-hover">
                                <thead> 
                                    <tr>
                                        <th>No.</th>
                                        <th>Provinsi</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody id="table-data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="card-header text-center mt-5 bg-primary text-white">
                    <b>Daftar Rumah Sakit Rujukan Covid-19 Di Tiap Provinsi</b>
                </div>
                <div class="active-cyan-4 mt-3 text-center">
                    <p>Cari Berdasarkan Kota/Provinsi</p>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search-prov">
                </div>
                <div class="row" id="rumah-sakit">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white text-white">
        <h1>1</h1>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>

<script>
    $(document).ready(function(){
        dataProvinsi();
        covidProvinsi();

        function dataProvinsi(){
            $.ajax({
                url : 'curl.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#rumah-sakit').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        function covidProvinsi(){
            $.ajax({
                url : 'curl1.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#table-data').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        $(document).ready(function(){
            $("#search-prov").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#rumah-sakit div").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        
        $(document).ready(function(){
            $("#search-provs").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table-data tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    });
</script>