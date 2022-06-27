# かんたん備忘録

## データベースのユーザ設定からテーブル作成まで
まず, MariaDBにroot権限でログインする. 次に`/mysql/mysqlEnv.sql`をsourceコマンドで実行すると, 

- ユーザ名 : `gingin`
- パスワード : `Pass2438`

のユーザが作られ, 権限の付与と必要なテーブルの生成が完了する.
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

## Laravelの実行方法
simpleNoteBookディレクトリに移動して
```
$ php artisan serve
```
を実行することでローカルサーバが起動されるので, `localhost:8000`にアクセスすることでかんたん備忘録の閲覧が可能となる.

