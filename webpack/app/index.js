/*
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

/**
 * Created by Administrator on 2017/05/15.
 */
import _ from 'lodash';
import '../vendor/twbs/bootstrap/dist/css/bootstrap.css';
function component () {
    var element = document.createElement('div');

    /* 需要引入 lodash，下一行才能正常工作 */
    element.innerHTML = _.join(['Hello','webpack'], ' ');

    return element;
}

document.body.appendChild(component());