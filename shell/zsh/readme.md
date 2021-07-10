# zsh

## 配列を0から始める

bashと統一するため、shellの中に以下記載する。

```
## Fix array index for ZSH
if [ "$ZSH_NAME" = "zsh" ];then
  setopt localoptions ksharrays
fi
```