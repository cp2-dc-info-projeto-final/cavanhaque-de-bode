        <div class="container-fluid mt-3 mb-3">
            <h1 class="fontecdb">Selecione um horario:</h1>
        </div>
        <div class="container-fluid">
            <div>
                Manha:
            </div>
            <?php 
                $horariosmanha = ["9:00", "9:30", "10:00", "10:30", "11:00", "11:30"];
                $cu = "9:00";
                foreach($horariosmanha as $h){
                    if($h == $cu){
                        echo "
                            <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' disabled>
                            <label class='btn btn-outline-dark' for='$h'>$h</label>";
                        }
                    else{
                        echo "
                            <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' required>
                            <label class='btn btn-outline-dark' for='$h'>$h</label>";
                        }
                }
            ?>
        </div>
        <div class="container-fluid mt-2">
            <div>
                Tarde:
            </div>
            <?php 
                $horariostarde = ["12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:30", "16:00", "16:30", "17:00", "17:30"];
                foreach($horariostarde as $h){
                    echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$h'>$h</label>";
                }
            ?>
        </div>
        <div class="container-fluid mt-2">
            <div>
                Noite:
            </div>
            <?php 
                $horariosmanha = ["18:00", "18:30"];
                foreach($horariosmanha as $h){
                    echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$h'>$h</label>";
                }
            ?>
        </div>






        <div class="container-fluid mt-3 mb-3">
            <h1 class="fontecdb">Selecione um funcionario:</h1>
        </div>
        <div class="container-fluid mt-2">
            <input type='radio' class='btn-check' name='opcaofuncionario' value='sempreferencia' id='sempreferencia' autocomplete='off' required>
            <label class='btn btn-outline-dark' for='sempreferencia'> Sem Preferência</label>
            <?php
                $sql = "SELECT * FROM funcionario";
                $resfuncionario = mysqli_query($mysqli, $sql);
                $linhasfuncionario = mysqli_num_rows($resfuncionario);

                for($i=0; $i < $linhasfuncionario; $i++){
                    $funcionario = mysqli_fetch_array($resfuncionario);
                    $nomefuncionario = $funcionario['nome'];
                    $idfuncionario = $funcionario['id_funcionario'];
                    echo "
                        <input type='radio' class='btn-check' name='opcaofuncionario' value='$idfuncionario' id='$nomefuncionario' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$nomefuncionario'>$nomefuncionario</label>";
                }
            ?>
        </div>