<div class="container" style="margin-top:100px;">
    <h2 style="font-weight: normal; text-align:center">Öğrenci Düzenle</h2>
    <form action="?wanted_page=/Students/Update" method="POST">
    <input type="hidden" name="id" value="<?=$data['id'] ?>">

        <h5 style="font-weight: normal;">ID</h5>
        <input class="form-control" name="name" disabled="disabled" value="<?=$data['id'] ?>""></td>

        <h5 style="font-weight: normal;">Ad</h5>
        <input class="form-control" name="name" value="<?=$data['name'] ?>""></td>

        <h5 style="font-weight: normal;">Soyad</h5>
        <td><input class="form-control" name="surname" value="<?=$data['surname'] ?>""></td>

        <h5 style="font-weight: normal;">Bölüm</h5>
        <td><input class="form-control" name="department" value="<?=$data['department'] ?>""></td>

        <td colspan="2" align="right">
            <button type="submit" class="btn btn-warning" style="margin-top:10px; width:100%">Düzenle</button>

    </form>
</div>