<h1>Show!!</h1>

<?php
/* Вывод полей title из таблицы Categories c запросом продуктов из другой таблицы*/
foreach ($cats as $cat) {
    echo "<ul>";
    echo "<li>.$cat->title.</li>";
    $products = $cat->products;
    foreach ($products as $product) {
        echo "<ul>";
        echo "<li>" . $product->title . "</li>";
        echo "</ul>";
    }
    echo "</ul>";
}

//echo count($cats->products);

//echo "<pre>";
//print_r($cats);
//echo "</pre>";
?>

<button class="btn btn-success" id="btn">Click me..</button>

<?php
//$this-> registerJSFile ('@web/js/scripts.js', ["depends" => "yii\web\YiiAsset"]);
//$this -> registerJs("$('.container').append('<p>SHOW!</p>')", \yii\web\View::POS_LOAD);
//$this -> registerCss (".container{background: grey;}");

$js = <<<JS
    $('#btn').on('click', function() {
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'GET',
            success: function(res) {
              console.log(res);
            },
            error: function() {
              alert("Error!");
            }
        });
    });
JS;

$this->registerJs($js);
?>