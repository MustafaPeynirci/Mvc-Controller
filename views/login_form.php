

<div class="container">
    <h2 style="margin-top:100px;"><?=($data['mesaj'] != NULL ? $data['mesaj'] : 'Giriş Yap') ?></h2>
    <form action="?wanted_page=/Session" method="POST">  
        <div class="form-group">
            <label>Kullanıcı Adı</label>
            <input name="username" type="text" class="form-control" aria-describedby="emailHelp" placeholder="...">
        </div>
        <div class="form-group">
            <label>Şifre</label>
            <input name="password" type="password" class="form-control"  placeholder="...">
        </div>

        <button type="submit" class="btn btn-outline-primary" style="margin-top:10px">Giriş</button>      
        
    </form>
</div>

<!-- <?php write_go_back_link(); ?>  -->
