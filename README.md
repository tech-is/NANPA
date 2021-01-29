# Compass

## Compassとは？

全ての出会いを実現させるそんな目標を立てて制作しているマッチングサイトです。
皆さんの出会いを北向き（正しい方向）へと導きだすそんなコンセプトが立てられています。

## 主な機能
```
・サイトメインページ（サイトの使用方法、お問合せフォーム）
・利用規約ページ、プライバシーポリシーページ
・会員登録画面、ログイン機能
・検索ページ及びその検索結果
・マイページ登録、編集
```

## 環境構築
```
・Apache 2.4.43
・PHP 7.4.6
・Mysql(MariaDB)  10.4.11 
・Codeigniter 3.1.11
```

## データベース設計

※後に記載

## 画面設計書,DB設計書

googleスレップシート


https://docs.google.com/spreadsheets/d/1-6Kkul4uTmF9SOy59QjSvYRlmdZ7es1Ddyc0rXnRuRs/edit?usp=sharing

## フォルダ構成
```
・db
　・compass.sql/ データベース設計のsql文
・src
  ・application/  
    ・config/ デフォルトコントローラーの設定やデータベースの設定ファイル等  
    ・controler/ コントローラーのフォルダ
    　・nanpa.php/ メインのコントローラー
    ・model/ データベース周りの処理フォルダ  
    ・views/ フロントエンドファイルをまとめたフォルダ
      ・folio/  サイトの検索をまとめたのフォルダ
  ・system/ ライブラリやヘルパーを置いているフォルダ  
  ・assets/css/ cssファイルをおいているフォルダ  
  ・images/img/ 画像を置いているフォルダ
  ・js/ jqueryのコードを置いているフォルダ　
  ・index.php　最初にこのファイルを読み込んでください  
```
