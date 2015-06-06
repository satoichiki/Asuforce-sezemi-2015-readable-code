<?php
    $file = fopen ( "code/recipe-data.txt", "r" );

    // ファイルを読み込んで出力
    if($file){
        $count_id = 0; //idを割り振るためのカウント
        // 読み込み成功時
        while(!feof($file)){
            $line = fgets($file);
            $count_id++;
            echo $count_id.": ".$line;
        }
        echo "\n";
    }else{
        // 読み込み失敗時
        echo "読み取り失敗";
    }

    fclose($file);