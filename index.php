<?php





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <div id="app">

        <header style="height:125px;">
            <div class="col-12 ">
                <img src="./assets/img/logo.png" style="width:250px;">
            </div>
        </header>


        <main>
        <div class="container">
            <div class="row g-4 p-3">
                <div class="col-4" v-for="(disk, index) in disks" :key="index">
                    <div class="card card-bg-custom" style="width: 350px;">
                    <img :src="disk.poster" class="card-img-top w-50 center-image pt-4" :alt="disk.title">
                        <div class="card-body text-center text-white">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <h6 class="card-subtitle mb-2">{{disk.author}}</h6>
                            <p class="card-text">{{disk.year}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
</body>

</html>