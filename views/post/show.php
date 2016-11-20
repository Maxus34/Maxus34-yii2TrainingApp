<?php
use app\components\MyWidget;

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

<h1>Show Action</h1>

<?php //echo MyWidget::widget(['name' => '123']); ?>
<?php MyWidget::begin()?>
    <h1>hello, world</h1>
<?php MyWidget::end()?>

<?php
/*
echo '<ul>';
    foreach ($cats as $cat) {
        echo "<li>" . $cat->title . "</li>";
        echo "<ul>";
            foreach ($cat->products as $product) {
                echo "<li>" . $product->title . "</li>";
            }
        echo "</ul>";
    }
echo '</ul>';
*/
?>



























