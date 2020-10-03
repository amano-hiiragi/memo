# memo

```Vagrantfile
config.vm.synced_folder "ローカルディレクトリ指定", "vagrant内ディレクトリ指定"
# synced, 同期

config.vm.provider "virtualbox" do |vb|
  vb.memory = "1024" #メモリー設定
end
```
