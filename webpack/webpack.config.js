/*
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

/**
 * Created by Administrator on 2017/05/15.
 */
var path = require('path');
//var ExtractTextPlugin = require('extract-text-webpack-plugin');
module.exports = {
    entry: './app/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [ 'style-loader', 'css-loader' ]
            },
            // {
            //     use: ExtractTextPlugin.extract({
            //         use: 'css-loader'
            //     })
            // },
            {
                test: /\.(eot|otf|ttf|woff|woff2|svg)\w*/,
                loader: 'file-loader',
            }
        ]
    },
    // plugins: [
    //             new ExtractTextPlugin('styles.css'),
    //         ]
};
