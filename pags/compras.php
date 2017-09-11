<div class="content">

    <section class="container">
        <h1 class="title">Minhas Compras</h1>


        <table class="table">
            <thead>
                <tr>
                    <th width="50">Cod</th>
                    <th>Vôo</th>
                    <th>Data</th>
                    <th width="100">Status</th>
                    <th width="130">Cancelar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i =0; $i < 20; $i++):
                ?>
                <tr>
                    <td>321<?=$id?></td>
                    <td>
                        <a href="?pg=detalhes-voo" class="badge badge-light">
                            Ver Detalhes Voô: 131231<?=$id?> 
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>12/12/2018</td>
                    <td>
                        <span class="badge badge-secondary">Reservado</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">
                            Cancelar? <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php
                    endfor;
                ?>
            </tbody>
        </table>
    </section><!--Container-->

</div>