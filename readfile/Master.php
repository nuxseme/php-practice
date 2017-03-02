<?php

/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */
class Master
{
    static $files = [
        '1K'   => '1K',
        '10K'  => '10K',
        '100K' => '100K',
        '500K' => '500K',
        '1M'   => '1M',
        //'50M'  => '50M',
        //'100M' => '100M'
    ];
    static $times = 10;//循环次数
    public $start_time;


    public function __construct()
    {
        $this->start_time = microtime(true);
    }

    public function init()
    {
        $this->start_time = microtime(true);
    }
    public function run(Sample $sample)
    {
        //跑样例文件
        foreach (self::$files as $file) {
            //每次之前初始化环境参数
            $this->init();
            $file_path = '../resource/'.$file;
            for($i = 0;$i<self::$times;$i++){
                $a = $sample->run($file_path);
            }
            $this->info($file);
        }
    }

    public function info($file)
    {
        $expend_time = microtime(true) - $this->start_time;
        $times = self::$times;
        $avg_time = $expend_time/10;
       $info = <<<eof
{$file} : 共执行{$times}次，耗时 总/平均 {$expend_time}/{$avg_time}
eof;

        echo $info,PHP_EOL;
    }

}