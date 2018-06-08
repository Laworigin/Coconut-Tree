# Coconut Tree Webshell Manage（椰子树webshell管理器）

Coconut Tree是一款webshell管理工具。不同于市面上常见的webshell管理器，如菜刀之类的是，Coconut Tree是一款实时密码webshell管理器。也就是说Coconut Tree只能连接Coconut Tree专用的webshell，其webshell的密码是实时更新，每一次链接的密码都不相同。采用一次一密的方法，保证了webshell的专用性。


准备：安装time，hashlib，requests，math，base64，sys六个库

git下载Coconut Tree

webshell下有一个PHP后门木马，`wisdom2.php`是混淆过的PHP后门木马。将其上传至目标网站即可。

运行Coconut_tree.py，建议使用python3运行。

`python3 Coconut_tree.py webshell`

成功运行之后进入phpshell命令行，在phpshell中可执行任意PHP代码。
