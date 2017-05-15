/*
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

/**
 * Created by Administrator on 2017/05/11.
 */

require(["jquery","vue"], function($,vue) {
    var app = new vue({
        el: '#app',
        data: {
            message: 'Hello Vue11!'
        }
    });
    return app;
});