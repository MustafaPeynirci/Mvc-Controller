<?php
if($data['user'] == NULL)
{
    $name = 'Misafir';
}
else
{
    require 'admin_menu.php';
    $name = $data['user']['name'] . ' ' . $data['user']['surname'];
}
?>
<h4 style="font-weight: normal; text-align:center; margin-top:100px">Hoşgeldin <?=$name?></h4>

<h2>Öğrenciler</h2>
<hr>
<ol type="1">
    <?php foreach($data['students'] as $student): ?>
    <table class="table" style="margin-top:30px">
        <td>
            <?=$student['name'] . ' ' . $student['surname'] . ' - ' . $student['department'] ?>
            </li>
    </table>
    <?php endforeach; ?>
</ol>
<br>
<h2>Öğretmenler</h2>
<hr>
<ol type="1">
    <?php foreach($data['teachers'] as $teacher): ?>
    <table class="table" style="margin-top:30px">
        <td>
            <?=$teacher['name'] . ' ' . $teacher['surname'] ?>
        </td>
    </table>
    <?php endforeach; ?>
</ol>