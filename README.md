# 基于我的PHP框架的应用模板

## 安装说明

直接使用composer安装：

```bash
$ composer create-project lisijie/framework-app
```

## 目录结构说明

	|- app 应用目录
	|  |- Command 命令行脚本控制器（可选）
	|  |- Config 配置文件
	|  |- Controller Web控制器
	|  |- Exception 自定义异常类型和异常处理器（可选）
	|  |- Model 数据模型，提供数据的读写接口，一张表对应一个类（可选）
	|  |- Service Service模块，封装业务逻辑，操作Model（可选）
	|  |- View 视图模板文件
	|- data 运行时数据目录（日志、缓存文件等）
	|- public 发布目录，存放外部可访问的资源和index.php入口文件
	|- vendor composer第三方包目录

## 服务器配置

### Nginx示例

	server {
        listen       80;
        server_name  example.com;
        root   /path/to/project/public;

        location / {
            try_files $uri $uri/ /index.php?$args;
        }

        location ~ \.php$ {
            fastcgi_param  RUN_ENV development;
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            include        fastcgi.conf;
        }
    }