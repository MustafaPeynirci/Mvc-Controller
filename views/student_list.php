<?php require 'admin_menu.php'; ?>

<div class="container"> 
<a class="btn btn-outline-success" style="float:right; margin-top:80px" href="?wanted_page=/Students/Create">Yeni Ekle</a>
<h2 style="font-weight: normal; text-align:center; margin-top:100px">Öğrenciler</h2>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Bölüm</th>
        <th>Göster</th>
        <th>Düzenle</th>
        <th>Sil</th>
    </tr>
    <?php foreach($data as $data): ?>
        <tr>
            <td><?=$data['id'] ?></td>
            <td><?=$data['name'] ?></td>
            <td><?=$data['surname'] ?></td>
            <td><?=$data['department'] ?></td>
            
            <td>
                <a class="btn btn-primary" href="?wanted_page=/Students/Show/<?=$data['id'] ?>">
                   Göster 
                </a>
            </td>
            <td>
                <a class="btn btn-warning" href="?wanted_page=/Students/Edit/<?=$data['id'] ?>">
                   Düzenle 
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="?wanted_page=/Students/Delete/<?=$data['id'] ?>" onclick="return confirm('Emin misiniz?');">
                    Sil
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>