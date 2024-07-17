# Rese(リーズ)
ある企業のグループ会社の飲食店予約サービス

## 作成した目的
外部の飲食店予約サービスでは手数料を取られる為、自社で独自の予約サービスを持ちたいというクライアントの要望に応えて作成。

## アプリケーションURL

## 他のリポジトリ
なし

## 機能一覧
会員登録機能
ログイン機能
ログアウト機能
ユーザー情報取得機能
ユーザー飲食店お気に入り一覧取得機能
ユーザー飲食店予約情報取得機能
飲食店一覧取得機能
飲食店詳細取得機能
飲食店お気に入り追加機能
飲食店お気に入り削除機能
飲食店予約情報追加機能
飲食店予約情報削除機能
エリアによる検索機能
ジャンルによる検索機能
店名による検索機能

## 仕様技術(実行環境)
Laravel 8.83.27
PHP 7.4.9
Docker
MySQL

## テーブル設計


## ER図


## 環境構築
当アプリケーションをダウンロード後、ターミナル上でdocker-composeコマンドでビルド
$ docker-compose up -d --build

docker-composeコマンドでコンテナ内にログイン
$ docker-compose exec php bash

artisanコマンドでデータベースをマイグレーション
$ php artisan migrate

artisanコマンドでシーディング
$ php artisan db:seed

ブラウザ上でlocalhostにアクセスし、アプリを起動

## シーダーファイルの種類
ShopsTableSeeder.php
20店舗分の情報を登録
AreasTableSeeder.php
店舗に対応するエリアの情報を3都府県分登録
GenresTableSeeder.php
店舗に対応する5種類のジャンルを登録
TimesTableSeeder.php
予約時間を17:00～22:00の間で30分おきに登録
NumbersTableSeeder.php
予約人数を1～8人まで登録