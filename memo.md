# 分類は後で考える

linuxディレクトリに入れとけばいいか?

## TCP/IP

docker run -it ubuntu:18.04 /bin/bash  

aptで色々入れれるらしい。
初期状態ではvimもないので一例として、下記実施

    apt update
    apt upgrate
    apt install vim

### ping

    $ ping -c 3 8.8.8.8
    PING 8.8.8.8 (8.8.8.8) 56(84) bytes of data.
    64 bytes from 8.8.8.8: icmp_seq=1 ttl=37 time=15.9 ms
    64 bytes from 8.8.8.8: icmp_seq=2 ttl=37 time=17.2 ms
    64 bytes from 8.8.8.8: icmp_seq=3 ttl=37 time=22.8 ms

    --- 8.8.8.8 ping statistics ---
    3 packets transmitted, 3 received, 0% packet loss, time 2008ms
    rtt min/avg/max/mdev = 15.937/18.655/22.818/2.993 ms

- ping -c 3: 応答を要求するメッセージを３回送る
- 8.8.8.8はGoogleが運用する公開DNSサーバのIPアドレスです。
