<?php
    $recipe = new Recipe;

    $file = fopen ($argv[1],"r");

    $recipe_id = $argv[2]; //ID指定の場合は数値を代入.それ以外はnull

    // ファイルを読み込んで出力
    if($file){
        $recipe_data = $recipe->readFile($file);
        if($recipe_id){
            $id = $recipe_id-1;
            echo $recipe_id.": ".$recipe_data[$id];
        }else{
            $recipe->fetchAll($recipe_data);
        }
    }else{
        // 読み込み失敗時
        echo "読み取り失敗";
    }

    fclose($file);

    Class Recipe {
        public function readFile($file) {
            $recipe_array = [];
            //ファイルのデータを読み込み配列で返す
            while($line = fgets($file)){
                $recipe_array[] = $line;
            }
            return $recipe_array;
        }

        //レシピのデータを全て出力する
        public function fetchAll($recipe_array) {
            for ($i = 0; $i < count($recipe_array); $i++){
                $id = $i+1;
                echo $id.": ".$recipe_array[$i];
            }
        }
    }