# q2a-elasticsearch
Plugin to replace default search functionality in Question2Answer with ElasticSearch


## Testing plugin via dockerized services and local php server
Clone question2asnwer:
```
$ git clone https://github.com/q2a/question2answer.git
```
Clone plugin to `question2answer/qa-plugin/` directory:
```
$ cd question2answer/qa-plugin/
$ git clone https://github.com/Toopala/q2a-elasticsearch.git
$ cd q2a-elasticsearch
$ composer install
```
Create elasticsearch instance via:
```
$ docker run -d --name elasticsearch -p 9200:9200 -p 9300:9300 -e "discovery.type=single-node" elasticsearch:7.8.0
```
Create database instance via:
```
$ docker run --name q2adb -e MYSQL_ROOT_PASSWORD=my-secret-pw -p 3306:3306 -d mysql:latest
```
Run PHP web server inside `question2answer` folder:
```
$ php -S localhost:8001
```