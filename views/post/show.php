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
<?php
debug($cats);



























