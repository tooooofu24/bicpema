## 「Bic Pema」とは
理科や数学を「視覚的に」学習することができるWEBアプリケーションです。理科や数学の実験をWEBページで行うことができます。   
名前は「**bi**ology」、「**c**hemistry」、「**p**hysics」、「**e**arth」、「**ma**th」の頭文字をとっています。  
## 作った経緯
理科教育を専攻している友達に誘われて作りました。  
役割としては私がWEBページの機能を、友達は教材作りを担当しています。
## サービスの機能
主な機能は2つです。  
- 実験の実行
- 実験の投稿
## 実験の表示方法
実験に関しては「[p5.js](https://p5js.org/)」というJavaScriptライブラリを用いて表示しています。  
投稿する際もp5.jsで動くコード(jsファイル)であれば投稿して動かすことができます。
## 実験画面
[こちら](https://bicpema.jpn.org/posts/1/run)が実験画面になります。  
全画面にも対応しており、右下のアイコンをクリックすると全画面で表示します。
![image](https://user-images.githubusercontent.com/64852221/137614977-8c86858c-a650-49ea-9273-56e73d274b84.png)

## 投稿画面
[こちら](https://bicpema.jpn.org/submit)が投稿画面になります。  
jQueryでフロント側でのバリデーションを実装しており、分野は教科と学年に対応した分野だけを表示しています。  
![image](https://user-images.githubusercontent.com/64852221/137615160-0abb1522-1169-448b-89c5-c9701e2da8bc.png)  
また、[File Pond](https://pqina.nl/filepond/)というライブラリを使用しており、ファイルのアップロードが綺麗になっています。  
![image](https://user-images.githubusercontent.com/64852221/137615253-bf8566ea-3fb9-4052-a837-c189e5d1d625.png)


## 工夫した点
##### レスポンスを全て数値で管理した

　　
## 使用技術
- Laravel 8.61.0
- Bootstrap 5.0
- [LINE Messaging API](https://developers.line.biz/ja/services/messaging-api/)
- MySQL
- Git
- [Poke API](https://pokeapi.co/)
