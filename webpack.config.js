const path = require('path');
const browserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const uglifyJsPlugin = require('uglifyjs-webpack-plugin');
const optimizeCssAssetsWebpackPlugin = require('optimize-css-assets-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = (env) => {
  const {
    mode
  } = env;

  return {
    mode,
    context: __dirname,
    entry: [
      "./assets/src/js/index.js",
      "./assets/src/scss/main.scss",
    ],
    output: {
      path: path.resolve(__dirname, 'assets/dist'),
      filename: '[name].js',
      chunkFilename: '[chunkhash].js',
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /(node_modules)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        },
        // @see https://github.com/webpack-contrib/sass-loader
        {
          test: /\.scss$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
            },
            {
              loader: 'css-loader',
              options: {
                sourceMap: true,
              }
            },
            {
              loader: 'sass-loader',
            },
          ],
        },
        {
          test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                outputPath: 'fonts',
                name: '[name].[ext]'
              }
            }
          ]
        },
      ],
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: '[name].css',
        chunkFileName: '[id].css',
      }),
      new browserSyncPlugin(
        {
          files: "**/*.php",
          proxy: 'https://jmw2020.localhost',
        },
      ),
      new CleanWebpackPlugin(),
    ],
    optimization: {
      minimizer: [
        new uglifyJsPlugin(),
        new optimizeCssAssetsWebpackPlugin(),
      ]
    }
  }
};
