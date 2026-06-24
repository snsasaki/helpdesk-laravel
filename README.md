# ヘルプデスク　API

## クイックスタート

1. 環境変数をコピー

    ```shell
    $ cp .env.example .env
    ```

2. PHP 依存パッケージをインストール

    ```shell
    $ composer install
    ```

3. アプリケーションキーを作成

    ```shell
    $ php artisan key:generate
    ```

4. ファイルの権限を変更

    ```shell
    $ chmod -R 775 storage bootstrap/cache
    ```

5. マイグレーションと初期データ投入

    ```shell
    $ php artisan migrate:fresh --seed
    ```

6. シンボリックリンク作成

    ```shell
    $ php artisan storage:link
    ```

## ドキュメント

- [commit prefix](docs/commit.md)
