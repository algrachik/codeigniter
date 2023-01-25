
            <div class="container" style="width: 750px; padding-top: 50px;">
                <?php

                $dataUsername = [
                        'name' => 'Username',
                        'placeholder' => 'Username',
                        'class' => 'form-control',
                        'id' => 'username',
                    ];
                $dataPassword = [
                    'name' => 'Password',
                    'placeholder' => 'Passwort',
                    'class' => 'form-control',
                    'id' => 'password',
                ];

                $datacheckbox = [
                    'name' => 'agb',
                    'class' => 'form-check-input',
                    'id' => 'agb',
                    'style' => 'margin-left: 10px;',
                    'value' => 'checked'
                ];

                $dataButton = [
                    'name' => 'login',
                    'class' => 'btn btn-primary'
                ];

                echo form_open();
                if (isset($validation)){echo $validation->listErrors();} ?>

                <div class="form-group mb-3">
                    <?php echo form_label('Username', 'username');
                          echo form_input($dataUsername, set_value('username')); ?>
                </div>
                <div class="form-group mb-3">
                    <?php echo form_label('Passwort', 'password');
                    echo form_password($dataPassword, set_value('password')); ?>
                </div>
                <div class="form-group mb-3">
                    <?php echo form_label('AGBs Akzeptieren', 'agb');
                    echo form_checkbox($datacheckbox, set_value('agb')); ?>
                </div>
                <div class="form-group mb-3">
                    <?php echo form_submit($dataButton, 'Einloggen'); ?>
                </div>


                <?php echo form_close(); ?>

            <p>Noch nicht Regestriert ? <a href="">Registrierung</a></p>

            </div>



        </div>
    </body>
</html>