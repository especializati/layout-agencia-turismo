<div class="content">

    <section class="container">
        <h1 class="title">Resultados Pesquisa:</h1>
        <div class="key-search row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-12 text-center">
                <img src="images/flight.png" alt="Voô">
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                <p>De: <span>Goiânia</span></p>
                <p>Para: <span>Buenos Aires</span></p>
                <p>Data: <span>12/12/2018</span></p>
            </div>
        </div>


        <div class="row results-search">
            <?php
                for($i =0; $i < 20; $i++):
            ?>
            <article class="result-search col-12">

                <span>Saída: <strong>12:00</strong></span>
                <span>Chegada: <strong>14:00</strong></span>
                <span>Paradas: <strong><?=$i?></strong></span>
                <a href="?pg=compras">Comprar</a>

            </article><!--result-search-->
            <?php
                endfor;
            ?>
        </div><!--Row-->
    </section><!--Container-->

</div>