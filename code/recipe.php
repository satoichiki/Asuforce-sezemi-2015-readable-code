<?php
    $file = fopen ($argv[1],"r");

    $recipe_id = $argv[2]; //ID指定の場合は数値を代入.それ以外はnull

    // ファイルを読み込んで出力
    if($file){
        $recipe_data = readRecipe($file);
        if($recipe_id){
            $id = $recipe_id-1;
            echo $recipe_id.": ".$recipe_data[$id];
        }else{
            recipeGetAll($recipe_data);
        }
    }else{
        // 読み込み失敗時
        echo "読み取り失敗";
    }

    fclose($file);

    //ファイルのデータを読み込み配列で返す
    function readRecipe($file) {
        $recipe_array = [];
        //ファイルを1行ずつ読み込む
        while($line = fgets($file)){
            $recipe_array[] = $line;
        }
        return $recipe_array;
    }

    //レシピのデータを全て出力する
    function recipeGetAll($recipe_array) {
        for ($i = 0; $i < count($recipe_array); $i++){
            $id = $i+1;
            echo $id.": ".$recipe_array[$i];
        }
    }