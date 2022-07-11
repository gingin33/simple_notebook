# かんたん備忘録

## データベースのユーザ設定とデータベース作成
まず, XAMPPのMariaDBにroot権限でログインする. 次に`/mysql/mysqlEnv.sql`をsourceコマンドで実行すると, 

- ユーザ名 : `gingin`
- パスワード : `Pass2438`

のユーザが作られ, 権限の付与とデータベースの作成が完了する.
rootからログアウトして上記のユーザでログインすると生成したテーブルの操作が可能となる.´´

## Laravelの環境設定
まずcomposerというPHPのパッケージ管理システムをインストールする.
```
$ brew install composer
```


次に以下のコマンドを入力してLaravelのインストールを行う.
```
$ composer global require laravel/installer
```

しかし, このままだと環境変数が設定されていないので以下のコマンドで設定を行う. (Windows用の設定は割愛)
```
$ echo "export PATH=~/.composer/vendor/bin:$PATH" >> ~/.bash_profile
$ source ~/.bash_profile
```
これでLaravelのインストールは完了となる.

## Migrationによるテーブルの生成
simple_noteBookディレクトリに移動して
```
$ php artisan migrate
```
を実行することで事前に用意してあるマイグレーションファイルから必要なテーブルが生成される. 

## Laravelローカルサーバの起動方法
simple_noteBookディレクトリのまま,
```
$ php artisan serve
```
を実行することでローカルサーバが起動されるので, `localhost:8000`にアクセスすることでかんたん備忘録の閲覧が可能となる.

