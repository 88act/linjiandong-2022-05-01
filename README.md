# recruitment-php-code-test

## 步骤

```shell
git clone https://github.com/88act/linjiandong-2022-05-01.git

使用 vscoed 打开 linjiandong-2022-05-01 文件夹 

cd linjiandong-2022-05-01
composer install 

运行测试所有代码 

./vendor/bin/phpunit ./tests



============================================================
Common.php 的问题,已写在提交的代码中,比如  

  try {
        // (1) 使用中文做redis key 可能会存在问题 , 可以md5($address) 后,使用返回的值做key 
        $cackeKey = 'cache-address-'.$address;
        // 從獲取座標
        $userLocation = redisx()->get($cackeKey);
        if ($userLocation) {
            return $userLocation;
        }
     ...
     ...

 
