# 使用说明:

> **前提：**
> 
> 使用的`APP`支持多源仓库。

在设置内给予软件存储权限，

下载本地包，

将名为`TVBox`解压后的本地包复制到设备根目录（内部储存）。

> **注意：**
> 
> 根据下载方式或解压方式的不同，
> 
> 下载的本地包可能需重命名为`TVBox`。

> **注意：**
> 
> 本地包解压后若是文件夹，则不用新建`TVBox`文件夹，重命名为`TVBox`即可，
> 
> 若解压后是多个文件夹和文件，则需新建名为`TVBox`的文件夹，
> 
> 将解压后的多个文件夹和文件复制或移动到新建文件夹`TVBox`内。

> **注意：**
> 
> 电视上使用本地包要安装小白文件管理器操作。
> 
> 用U盘复制解压后的本地包到电视根目录。
> 
> 小白文件管理器进入后选全部，选本机磁盘，进去第一层就是根目录。
> 
> 复制完成后不要急于拔出U盘，需等待一段时间完成文件写入。

保证本地包解压后的文件都在设备根目录的名为`TVBox`内。

本地包放置到设备根目录后就可以到软件内输入链接了，

重置APP后点击首页的"仓库"或者"配置"，

扫码输入链接地址。

> **提示：**
> 
> 仓库名字随便取，
> 
> 也可以为空不填。

> **注意：**
> 
> 手机和电视要在同一个局域网内，
> 
> 且同频段2.4G或5G网络。

用手机自带浏览器扫描二维码，

在当前界面点选右下角"仓库推送"，

> **提示：**
> 
> 没有"仓库推送"就选"配置"，

按要求在第二栏添加本地仓库链接。

链接在本说明的“多仓配置接口”处复制，

复制时不要有空格。

## 不用U盘配置TVBox多仓版本地接口的方法

- 在手机上下载本地接口包后备用。

- 在手机和盒子（或者电视机）双端安装上超卓文件管理器或ES文件浏览器。

- 通过超卓浏览器上传或ES中的“快传”功能将已在手机端的本地接口压缩包传送到盒子（或者电视机）上。

- 解压到内部储存或esShare文件夹内。

- 将解压后的文件夹重命名为`TVBox`。
  
  > **注意：**
  > 
  > 注意字母大小写。

- 打开主目录下的内部储存或`esShare`文件夹将本地接口文件夹拷贝后粘贴到内部储存或主目录下。
  
  > **提示：**
  > 
  > 亦可解压到内部储存目录
  > 
  > 再重命名文件夹。

- 打开`TVBox`（或者其他`TVBox改版`），在首页点击仓库，用浏览器扫码后推送。
  
  > 推送：`clan://<localhost>/TVBox/<name.json>`即可。
  > 
  > 推送路径说明：
  > 
  > `localhost` → 盒子（或者电视机）根目录名；
  > `TVBox` → 本地包文件夹名；
  > `name.json` →本地接口文件夹内的配置文件名。

## 单仓使用方法:

- 在设置中给软件存储权限。

- 下载本地包。

- 把名为TVBox解压后的本地包放到设备根目录里。

- 在设置中”配置地址“里面填写该格式的链接：`clan://<localhost>/TVBox/<xx.json>`。

- 即可使用本地配置了。
  
  > **注意：**
  > 
  > 接口可复制本说明中”接口配置“或”半本地接口“里的链接。
  > 
  > "xx"代表接口文件名。
  > 
  > 上面链接仅举例不可用！！！

## 查找阿里`token`方法：

- 手机端下载安装阿里云盘APP。

- 注册账号并登陆。
  
  > **提示：**
  > 
  > 登陆后可退出APP。

- 打开手机文件管理器按照下面路径查找`token`码。    
  
  手机找到路径：
  
  `Android` -> `data` -> `com.alicloud.databox` -> `files` -> `logs` ->
   `trace` -> `网盘useid` -> `yunpan中的“网盘userid”` 
  
  > **注意：**
  > 
  > `yunpan中的“网盘userid”`一般为一串数字，
  > 
  > 若登录过多个网盘账号，
  > 
  > `trace` 这个文件夹内就会有多个`网盘ID`最终在对应网盘的`yunpan`文件夹里面，
  > 
  > 会看到很多`log`结尾的文件，
  > 
  > 这就是登录的日志文件，
  > 
  > 点击查看最新日期的`log`日志文件，
  > 
  > 查找 `refreshToken` 后面则是`你的token` 。

### 本地包替换路径是 :

`内部储存/TVBox/jar/alitoken.txt`

将`32位编码`替换成`自己的token`。


## 接口配置：

### 纯本地接口：

```shell
clan://localhost/TVBox/lib/无忧TV.json
clan://localhost/TVBox/lib/无忧.json
clan://localhost/TVBox/lib/无忧ali.json
clan://localhost/TVBox/lib/弯弯.json
clan://localhost/TVBox/Hk/XYQTVBox.txt
clan://localhost/TVBox/JS/js.json
clan://localhost/TVBox/py/py.txt
clan://localhost/TVBox/lib/动漫.txt
clan://localhost/TVBox/lib/云星家庭.json
clan://localhost/TVBox/lib/云星哔哩.json
clan://localhost/TVBox/lib/云星阿里.json
clan://localhost/TVBox/lib/肥猫.txt
clan://localhost/TVBox/lib/无名1.txt
clan://localhost/TVBox/lib/夜魔.txt
clan://localhost/TVBox/lib/cms.txt
```

### 半本地接口：

```shell
clan://localhost/TVBox/lib/运输车.txt
clan://localhost/TVBox/lib/菜妮丝.txt
clan://localhost/TVBox/lib/巧计.txt
clan://localhost/TVBox/lib/唐三.txt
clan://localhost/TVBox/lib/俊佬.txt
clan://localhost/TVBox/lib/老刘备.json
clan://localhost/TVBox/lib/多多.txt
clan://localhost/TVBox/lib/南风XC.json
clan://localhost/TVBox/lib/月光.json
clan://localhost/TVBox/lib/分享者.json
clan://localhost/TVBox/lib/饭太硬.txt
clan://localhost/TVBox/lib/小马.txt
```

### 多仓配置接口:

> **注意：**
> 
> 以下为“本地仓库”接口，
> 
> 包含以上所有接口，
> 
> 仅支持多仓版本,

------

#### 使用方法:

- 复制下面链接到软件首页，

- 点击仓库，

- 给仓库命名，

- 粘贴下面链接，

- 点击确定。

------

- 蜂蜜TV本地（专用）：  
  
  ```shell
  file://TVBox/local-warehouse.json
  ```

- 蜂蜜直播（专用）：  
  
  ```shell
  file://TVBox/tv/live.txt
  ```

- 本地多仓 （备用）： 
  
  ```shell
  clan://localhost/TVBox/local-warehouse.json
  ```

- 本地+在线多仓 （优选）：  
  
  ```shell
  clan://localhost/TVBox/lib/ksck.json
  ```

- 绿茶仓库（需自行添加）：  
  
  ```shell
  clan://localhost/TVBox/lib/99.json
  ```

------

请大家认真阅读。
