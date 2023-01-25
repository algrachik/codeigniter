



                <div class="col-10">
                    <div class="row">

                        <?php foreach ($todos as $e){

                            echo '<div class="col-4">';
                            echo    '<div class="card">';
                            echo       ' <div class="card-header">';
                            echo $e['name'] . ':' ;
                            echo       ' </div>';
                            echo    '<div class="list-group">';
                            foreach ($e['aufgaben'] as $x){
                                echo '<li class="list-group-item">' . $x['Name'] . '</li>';
                            }
                            echo    '</div>';
                            echo   '</div>';
                            echo '</div>';


                        } ?>
                    </div>
                </div>
    </body>
</html>