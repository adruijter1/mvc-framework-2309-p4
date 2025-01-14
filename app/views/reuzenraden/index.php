<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3><?= $data['title']; ?></h3>            
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Naam Reuzenrad</th>
                        <th>Hoogte</th>
                        <th>Land</th>
                        <th>Kosten</th>
                        <th>Aantal Passagiers</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $data['dataRows']; ?>
                </tbody>
            </table>        
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>     
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>