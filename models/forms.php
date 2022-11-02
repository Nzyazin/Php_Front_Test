<?php 
    function forms_all() {
        $form1 = ["id"=>1, "title" => "Дашборд", "date"=>"2022-10-27",
        "content" => "Content1"];
        $form2 = ["id"=>2, "title" => "Мои заказы", "date"=>"2022-10-28",
        "content" => "Content2"];
        $form3 = ["id"=>3, "title" => "Мои программы", "date"=>"2022-10-28",
        "content" => "Content2"];
        $form4 = ["id"=>4, "title" => "Учебный центр", "date"=>"2022-10-28",
        "content" => "Content2"];
        $form5 = ["id"=>5, "title" => "Запрос токена", "date"=>"2022-10-28",
        "content" => "Content2"];
        $form6 = ["id"=>6, "title" => "Техподдержка", "date"=>"2022-10-28",
        "content" => "Content2"];

        $arr[0] = $form1;
        $arr[1] = $form2;
        $arr[2] = $form3;
        $arr[3] = $form4;
        $arr[4] = $form5;
        $arr[5] = $form6;
        
        return $arr;

    }

    function forms_get($id){
        return ["id"=>1, "title"=>"Это простой заголовок", "date"=>"2022-10-26", "content"=>"Здесь будет контент!"];
    }
?>