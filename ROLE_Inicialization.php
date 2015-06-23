<?php
        if(\Yii::$app->user->can('admin')){
            echo "<p><a class='btn btn-lg btn-success' href='http://www.yiiframework.com'>Get started with Yii</a></p>";
        }else{
            echo "<p><a class='btn btn-lg' href='http://www.yiiframework.com'>Get started with Yii</a></p>";
        }    

        if(\Yii::$app->user->can('districtAdminOffice')){
            echo "districtAdminOffice";
        }else{
        }
?>  