<div class="row justify-content-end mr-5 my-3">
    <form class="form-inline" action="" method="get">
        <select class="form-control" name="service">
            <option selected="selected" value=0>Tous les services</option>
            <?php foreach ($services as $service): ?>
                <option value="<?= $service->id ?>" <?= $_POST && $service->id == $_POST['field'] ? 'selected' : '' ?> ><?= $service->id ?>. <?= $service->name ?></option>
            <?php endforeach; ?>
        </select>
        <div class="ml-2">
            <button class="btn btn-danger" type="submit"><i class="fas fa-search"></i>Rechercher</button>
        </div>
    </form>
</div>

<table class="table table-hover border bg-white">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Addresse</th>
            <th>Code Postal</th>
            <th>Telephone</th>
            <th>Service</th>
            <th colspan='2'></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->lastname ?></td>
                <td><?= $user->firstname ?></td>
                <td><?= $user->birthdate ?></td>
                <td><?= $user->address ?></td>
                <td><?= $user->zipcode ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->name ?></td>
                <td><a href="<?= site_url('edit/' . $user->id) ?>" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a></td>
                <td><button type="button" data-toggle="modal" data-target="#delete<?= $user->id ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php foreach ($users as $user) { ?>
    <div class="modal fade" id="delete<?= $user->id ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content text-center">
                <h2 class="bg-dark text-white p-2">Attention</h2>
                <p>Voulez-vous supprimer <b><?= $user->firstname . ' ' . $user->lastname ?></b>?</p>
                <div class="row justify-content-center">
                    <a href="<?= site_url('delete/' . $user->id) ?>" class="btn btn-outline-danger col-4 my-3">Confirmer</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="row justify-content-center">
    <?= $pagination ?>
</div>

<div class="row justify-content-end">
    <a href="<?= site_url('create/') ?>" class="btn btn-success mr-5"><i class="fas fa-plus"></i> Ajout utilisateurs</a>
</div>