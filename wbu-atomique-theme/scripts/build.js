const webpack = require("webpack");
const fs = require("fs-extra")
const config = require("./../webpack.config")

function build() {
    return new Promise((resolve, reject) => {
        console.log("webpack building");
        const compiler = webpack(config);
        compiler.run((error, stats) => {
            if (error) return reject(error)
            return resolve(stats)
        })
    })

}

function copyPublic() {
    fs.copySync("public", "dist")
}

build()
    .then(() => copyPublic())
    .then(() => console.log('compilation terminée'))
    .catch(() => console.error(e))