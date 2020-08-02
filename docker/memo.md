# Docker

## [Dockerをするべき事例](https://jp.quora.com/%E6%9C%AC%E7%95%AA%E7%92%B0%E5%A2%83%E3%81%A7Docker%E3%82%92%E7%94%A8%E3%81%84%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E3%82%92%E3%82%B3%E3%83%B3%E3%83%86%E3%83%8A%E5%8C%96%E3%81%99%E3%82%8B%E3%81%93%E3%81%A8%E3%81%AB)

### 不明点

- 冗長性が高くなる（VMに対して起動が100倍以上早いため）
  - [ ] VMってなんぞ？
- オンプレ＋クラウドといった構成のクラスタも作りやすいためコストダウンに繋がる
- (kubernetesを導入すれば）冗長性を高めるための仕組みを自動化できる
  - [ ] kubernetes
    - [概要参考]<https://www.kagoya.jp/howto/rentalserver/kubernetes/>
      - [ ] 一度触ってみる<https://kubernetes.io/ja/docs/concepts/overview/what-is-kubernetes/>
      - [ ] <https://www.udemy.com/course/web-application-with-docker-kubernetes/?utm_source=adwords-learn&utm_medium=udemyads&utm_campaign=DSA_WebIndex_la.JA_cc.JP&utm_content=deal4584&utm_term=_._ag_89101504074_._ad_439843892593_._de_c_._dm__._pl__._ti_dsa-446940544248_._li_1009318_._pd__._&gclid=Cj0KCQjwpZT5BRCdARIsAGEX0zloUKqSBFiEMq1SWKNDxPfcbMA3BNIejKGY-RbVqCJQWwu3FXjXzg8aArI8EALw_wcB>

## 確認点

- VM(VirtualMachine)
  mac上でwindowsを動かしたりする。仮想化する領域が広いのでオーバーヘッドが大きい。
  - オーバーヘッド:コンピュータで何らかの処理を行う際に、その処理を行うために必要となる付加的、間接的な処理や手続きのことや、そのために機器やシステムへかかる負荷、余分に費やされる処理時間などのことをオーバーヘッドということが多い。
  - 要は負荷が大きくなる。
