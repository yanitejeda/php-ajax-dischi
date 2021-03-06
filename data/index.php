<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i 
dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <header></header>
    <main>

    <div class="mainbg py-2">
        <div class="col d-flex text-center">
        <div class="row row-cols-1 row-cols-md-5 g-4 container mx-auto" id="vueContainer" >
            <div class="card bnone " v-for="(response,i ) in albumList" :key="i"  >
                    <img :src="response.poster" class="card-img-top" alt="disco.title">
                    <div class="card-body cardBg">

                        <h3 class="card-title tittleColor">{{response.title}}</h3>
                        <p class="card-text textColor ">
                            <span>
                            {{response.author}}<br> 
                            {{response.year}}
                            </span>
                        </p>
                    </div>
                </div>

             <?php include_once __DIR__ . "/../components/card_cicle.php" ?>
        </div>


        </div>
      
    </div>
   


    </main>
    

 
   <script src="mainVue.js"></script> 
</body>
</html>