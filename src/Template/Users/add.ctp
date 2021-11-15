<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Nuevo Usuario</h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
            echo $this->Form->control('first_name', ['label' => 'Nombre']);
            echo $this->Form->control('last_name', ['label' => 'Appelidos']);
            echo $this->Form->control('email', ['label' => 'Correo Electrónico']);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
            echo $this->Form->control('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario'], 'label' => 'Rol']);
            echo $this->Form->control('active', ['label' => 'Activo']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Aceptar')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>