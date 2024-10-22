# アプリケーション名
Rase

## 作成した目的
お気に入りの飲食店を整理したり、店舗予約をするため

## アプリケーションURL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/

## 他のリポジトリ

## 機能一覧
### 1.基本機能
- 会員登録
- ログイン
- ログアウト
- ユーザー情報取得
- ユーザー飲食店お気に入り一覧取得
- ユーザー飲食店予約情報取得
- 飲食店一覧取得
- 飲食店詳細取得
- 飲食店お気に入り追加
- 飲食店お気に入り削除
- 飲食店予約情報追加
- 飲食店予約情報削除
- エリア検索
- ジャンル検索
- 店名検索
### 2.追加機能
- 予約変更機能
- 評価機能
- バリデーション
- レスポンシブデザイン
- 管理画面
- ストレージ
- 認証
- メール送信
- リマインダー
- QRコード
- 決済機能
- AWS
- 環境の切り分け

## 使用技術
- Laravel8.x
- mysql8.0.26
- php7.4.9

## ER図

## 環境構築
### Dockerビルド
- 1.git clone git@github.com:kanai-naoki/advance_mission.git
- 2.DockerDesktopを立ち上げる
- 3.docker-compose up -d --build　
### Laravel環境構築
- 1.docker-compose exec php bash
- 2.composer install
- 3.「.env.example」ファイルをコピーして、「.env」にファイル名を変更
- 4.「.env」に以下の環境変数を追加  
**DB_CONNECTION=mysql**  
**DB_HOST=mysql**  
**DB_PORT=3306**  
**DB_DATABASE=laravel_db**  
**DB_USERNAME=laravel_user**  
**DB_PASSWORD=laravel_pass**  
- 5.アプリケーションキーの作成  
php artisan key:generate
- 6.マイグレーション実行  
php artisan migrate
- 7.シーディング実行  
php artisan db:seed




