module.exports = {
    entry: {
        index:'./app/index.js',
        app:'./app/app.js'
    },
    output: {
        path: __dirname + '/assets/',
        filename: '[name].bundle.js'
    },
    module: {
        loaders: [
            // 使用babel-loader解析js或者jsx模块
            {test: /\.js\.jsx$/, loader: 'babel'},
            // 使用css-loader解析css模块
            {test: /\.css$/, loader: 'style-loader!css-loader'}
            // or another way
            //{test: /\.css$/, loader: ['style', 'css']}
        ]
    }
};
