const path = require('path');

module.exports = {
  entry: "./assets/src/js/index.js",
  output: {
    path: path.resolve(__dirname, 'assets/dist/js'),
    filename: 'bundle.js'
  },
  mode: 'production'
};
