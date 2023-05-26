<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('content'); ?>
    <h1>Panel de control de <?= session()->get('nombre'); ?></h1>

    <div class="jumbotron fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Docentes</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Estudiantes</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Carreras</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>