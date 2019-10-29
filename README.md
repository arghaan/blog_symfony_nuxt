If apache used as php web server install apache-pack to symfony project
    
    composer require symfony/apache-pack
   
API project based on [the article](https://www.nielsvandermolen.com/symfony-4-api-platform-application/)

If node trow error

    Invalid host header
    
create vue.config.js with this code

    module.exports = {
        devServer: {
            // proxy: {
            //     '^/api': {
            //         target: '<url>',
            //         ws: true,
            //         changeOrigin: true
            //     },
            // },
            disableHostCheck: true
            public: 'syrius.local',
            port: '8000'
        }
    };
    
* **proxy** section may be needed for proxy to api host
* **public** for fix problem with request _socks-node_ to localhost