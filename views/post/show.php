<?php
    $this->title="Post=>Show";
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
<button class="btn btn-success" id="btn_1">Click me</button>