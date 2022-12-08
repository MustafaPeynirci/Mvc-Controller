<?php require 'admin_menu.php'; ?>

<div class="container"> 
<a class="btn btn-outline-success" style="float:right; margin-top:80px" href="?wanted_page=/Teachers/Create">Yeni Ekle</a>
<h2 style="font-weight: normal; text-align:center; margin-top:100px">Öğretmenler</h2>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Göster</th>
        <th>Düzenle</th>
        <th>Sil</th>
    </tr>
    <?php foreach($data as $data): ?>
        <tr>
            <td><?=$data['id'] ?></td>
            <td><?=$data['name'] ?></td>
            <td><?=$data['surname'] ?></td>
           
            <td>
                <a class="btn btn-primary" href="?wanted_page=/Teachers/Show/<?=$data['id'] ?>">
                   Göster 
                </a>
            </td>
            <td>
                <a class="btn btn-warning" href="?wanted_page=/Teachers/Edit/<?=$data['id'] ?>">
                   Düzenle 
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="?wanted_page=/Teachers/Delete/<?=$data['id'] ?>" onclick="return confirm('Emin misiniz?');">
                    Sil
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>

