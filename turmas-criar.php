<?php 
    require_once 'cabecalho.php';

?>

<h2>Cadastrar Nova Turma</h2>
<br>
<form action="recursos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="sala">Sala</label>
                <input name="sala" type="text" class="form-control" placeholder="Sala da nova turma" required>
            </div>

            

            <div class="form-group">
                <label for="periodo">Periodo</label>
                <select class="form-control" name="perido>">
                    <option value="">Diurno Matutino</option>
                    <option value="">Diurno Vespertino</option>
                    <option value="">Noturno</option>

                </select> 
            </div>
            <!--
            <div class="form-group">
                <label for="horarioEntrada">Horario de Entrada</label>
                <input name="horarioEntrada" type="time" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="horarioSaida">Horario de Entrada</label>
                <input name="horarioSaida" type="time" class="form-control" required>
            </div>
-->
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>