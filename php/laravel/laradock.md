# laradock

## 参考

- https://qiita.com/J_Shell/items/695a30fd38444d065ae5
- https://laradock.io/introduction/

手順としては公式<https://laradock.io/introduction/>に沿って行った。

## 作業memo

docker利用

```bash
docker-compose up -d nginx mysql workspace
docker-compose exec --user=laradock workspace bash
docker-compose exec workspace bash
docker-compose exec mysql bash
```
