# My Mitsu Mautic

concrete5 のフォームの送信時に、Mauticにもデータを送るアドオン。
jQueryを利用しているので、フォームのPHP部分を編集しなくても動作する。また画面遷移のないフォームでも導入可能。

## 設定方法
ブロック編集画面で、下記を設定する。

+ アクションを実行する要素(ID/class) : (必須) mauticへの送信をいつ行うかを決定する。通常はフォームの送信ボタン。
+ mauticのURL : (必須) mautiｃのURLをhttpsから記入する。
+ URLの末尾に付けるアルファベット : （オプション） #sent のように、mautic側で識別しやすくするために記入する。

mauticへ送るデータは、ver0.9では下記に対応。
+ firstname要素(ID/class) : 取得したいフォーム項目のID/classを設定する。
+ lastname要素(ID/class) : 取得したいフォーム項目のID/classを設定する。
+ email要素(ID/class) : 取得したいフォーム項目のID/classを設定する。


## 導入方法

パッケージディレクトリに導入して有効化する。

## ライセンス
MIT。
pull request はMITライセンスのコードのみ受け付けます。