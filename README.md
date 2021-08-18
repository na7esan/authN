【学習目的】
ユーザを手動で認証する方法について学習する

【参考URL】
https://readouble.com/laravel/8.x/ja/authentication.html

【実装機能】
会員登録
ログアウト
ログイン

【URL設計】
非認証ルート
GEt /
GET register
POST register
GET login
POST login
認証ルート
POST logout
GET users

【サイト内容】
会員登録後に登録ユーザーの一覧を閲覧できる

【モデル】
User
