<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="blue-background" >
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <header class="page-header">
            <div class="row">
                <div class="col">
                <img class="logo" src="./img/Spotify_logo_without_text.png" alt="spotify logo"/>
                </div>
            </div>
        </header>
        <main>
            <section class="py-4">
                <div class="container">
                    <div class="row row-cols-3">
                        <div v-for="disco in dischi" class="col">
                            <div class="card disc-card mx-3 px-3">
                                <div class="card-body text-center">
                                    <div class="wrapper">
                                        <img class="img-fluid" :src="`${disco.poster}`">
                                    </div>
                                    <h5 class="card-title mt-3">{{disco.title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{disco.author}}</h6>
                                    <h5 class="card-title">{{disco.year}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>