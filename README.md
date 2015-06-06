# Hello

##Editer
Sublime Text3

##Laguage
PHP

##実装について

###仕様1: レシピを出力
実行:
```
 $ php recipe.php
 オムライス
```

###仕様2: 同じグループの人がプログラムを実行できること
README.mdの記述

###仕様3: レシピデータを別ファイルに分離すること
recipe-data.txtファイルの追加
  
実行:
```
 $ php recipe.php recipe-data.txt
 オムライス

###仕様4: データファイルに3つのデータを保存できること
recipe-data.txtファイルの追加
  
実行:
```
 $ php recipe.php recipe-data.txt
オムライス
親子丼
杏仁豆腐
```

###仕様5: レシピにIDを振ること
出力結果にIDを付与する
  
実行:
```
 $ php recipe.php recipe-data.txt
1: オムライス
2: 親子丼
3: 杏仁豆腐
```

###仕様6: IDを指定したレシピだけ出力すること
IDのレシピだけを表示出来るように変更