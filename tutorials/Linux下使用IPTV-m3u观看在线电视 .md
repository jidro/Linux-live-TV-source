# Linux下使用IPTV m3u观看在线电视 

使用IPTV m3u列表在线观看电视，SMPlayer是Linux中最好的列表播放器之一。

带有列表的在线观看电视的最著名应用是VLC和Kodi。

但是老实说，两者都很重，尤其是在已经使用了几年的系统中。

SMPlayer在这里发挥作用。

SMPlayer最初是作为MPlayer的图形界面而发展的。

每个新版本都增加了新功能，包括可以从Internet对电视频道进行分类的功能。

如果要使用m3u IPTV列表在线观看电视，此功能特别有用。

这个应用程序的另一个显著特点是，它已经提供了可能需要的所有编解码器，而且非常轻便，快速。

在今天的文章中，将了解如何在Linux上安装SMPlayer，以及如何添加m3u url。

## 使用IPTV列表m3u在线观看电视-SMPlayer

从在Linux上安装SMPlayer开始。

## 安装SMPlayer

该播放器位于大多数Linux发行版的官方存储库中。

唯一要记住的是，将看到两个新图标，SMPlayer和mpv Media Player。

### Debian，Ubuntu，Linux Mint及其衍生产品：
```
linuxmi@linuxmi:~/www.linuxmi.com$ sudo apt update

linuxmi@linuxmi:~/www.linuxmi.com$ sudo apt install smplayer
```
### Fedora 及其衍生版本:
```
linuxmi@linuxmi:~/www.linuxmi.com$ sudo dnf install smplayer
```
### Arch Linux, Manjaro 及其衍生版本:
```
linuxmi@linuxmi:~/www.linuxmi.com$ sudo pacman -S smplayer
```
### Suse，Open Suse及其衍生版本:
```
linuxmi@linuxmi:~/www.linuxmi.com$ sudo zypper install smplayer
```
## 在SMPlayer中添加m3u

值得注意的是，并不是所有IPTV m3u类型的在线电视url都是合法传播的，因此不会在Linux公社上提供这些列表。

在例子中，将添加皇家马德里电视频道的m3u，可以在网上免费观看。

要将电视频道添加到SMPlayer，请单击“打开”按钮和“电视”选项。

现在点击编辑。

在SMPlayer中插入m3u

在出现的新窗口中，单击“新建项目”。

现在双击名称并输入通道名称，在媒体上进行相同的操作，但粘贴所选频道的URL的地址。

在示例中为：`http://rmtv24hweblive-lh.akamaihd.net/i/rmtv24hweben_1@300662/index_3_av-b.m3u8`

按OK保存频道。

要开始观看该频道，请单击“打开”，然后在“电视”部分中，将看到m3u频道列表，然后单击最感兴趣的频道开始播放。

在线观看皇家马德里电视

就这样，学会了吗？

...END...
