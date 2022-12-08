<?php require 'admin_menu.php'; ?>

<div class="container"> 
<h2 style="font-weight: normal; text-align:center; margin-top:120px">Bilgi Ekranı</h2>

<table class="table table-hover" style="margin-top:30px">
    <tr>
        <th>ID</th>
        <th>Ad</th>
        <th>Soyad</th>
    </tr>
   
        <tr>
            <td><?=$data['id'] ?></td>
            <td><?=$data['name'] ?></td>
            <td><?=$data['surname'] ?></td>
        </tr>
</table>
</div>