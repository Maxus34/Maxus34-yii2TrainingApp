<?php
//$this = view;
    $jsCode =
<<< JS
        $('#btn_1').on('click', function () {
            $.ajax({
                url : 'index.php?r=post/index',
                type : "POST",
                data : {"test" : 123},
                success : function (res) {
                    console.log(res);
                },
                error : function () {
                    alert("Error");
                }
            });
        });
JS;
    $this->registerJs($jsCode, yii\web\View :: POS_READY);
?>

<?php $this->beginBlock('block1'); ?>
    <h1> Заголовок страницы </h1>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>

<table class = 'table table-striped table-hover'>
    <thead>
    <tr>
        <th>Title</th>
        <th>Parent</th>
        <th>Alias</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cats as $cat): ?>
        <tr>
            <td><?= $cat['title']  ?></td>
            <td><?= $cat['parent'] ?></td>
            <td><?= $cat['alias']  ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


























