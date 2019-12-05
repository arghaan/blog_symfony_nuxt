import colors from 'vuetify/es5/util/colors'

export default {
    server: {
        port: 8000, // default: 3000
        host: 'syrius.local', // default: localhost,
    },

    mode: 'universal',
    /*
     ** Headers of the page
     */
    head: {
        titleTemplate: '%s - ' + process.env.npm_package_name,
        title: process.env.npm_package_name || '',
        meta: [
            {charset: 'utf-8'},
            {name: 'viewport', content: 'width=device-width, initial-scale=1'},
            {
                hid: 'description',
                name: 'description',
                content: process.env.npm_package_description || ''
            }
        ],
        link: [{rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}]
    },
    /*
     ** Customize the progress-bar color
     */
    loading: {color: '#fff'},
    /*
     ** Global CSS
     */
    css: [],
    /*
     ** Plugins to load before mounting the App
     */
    plugins: [
        {src: '~/plugins/localStorage.js', ssr: true},
        // {src: '~/plugins/apollo-error-handler.js', ssr: true}
    ],
    /*
     ** Nuxt.js dev-modules
     */
    buildModules: [
        // Doc: https://github.com/nuxt-community/eslint-module
        // '@nuxtjs/eslint-module',
        '@nuxtjs/vuetify',
    ],
    /*
     ** Nuxt.js modules
     */
    modules: [
        '@nuxtjs/axios',
        '@nuxtjs/apollo',
        '@nuxtjs/auth',
    ],

    router: {
        // middleware: ['auth']
    },
    /*
     ** vuetify module configuration
     ** https://github.com/nuxt-community/vuetify-module
     */
    vuetify: {
        customVariables: [
            '~/assets/variables.scss',
            '~/assets/placeholders.scss',
            '~/assets/vars.scss'
        ],
        // treeShake: true,

        defaultAssets: {
            // icons: 'fa'
        },
        icons: {
            // iconfont: 'fa',
        },
        theme: {
            dark: false,
            themes: {
                dark: {
                    primary: colors.blue.darken2,
                    accent: colors.grey.darken3,
                    secondary: colors.amber.darken3,
                    info: colors.teal.lighten1,
                    warning: colors.amber.base,
                    error: colors.deepOrange.accent4,
                    success: colors.green.accent3
                }
            }
        }
    },
    /*
     ** Build configuration
     */
    build: {
        /*
         ** You can extend webpack config here
         */
        extend(config, ctx) {
        }
    },
    apollo: {
        clientConfigs: {
            default: '~/apollo/client-config.js',
        }
    },
    axios: {
        baseURL: 'http://api.syrius.local/api',
        headers: {
            'Content-Type': 'application/json'
        }
    },
    auth: {
        resetOnError: true,
        scopeKey: 'roles',
        strategies: {
            local: {
                endpoints: {
                    login: {url: 'login_check', method: 'post', propertyName: 'token'},
                    user: {url: 'user', method: 'get', propertyName: 'user'},
                    logout: false
                }
            },
        },
        plugins: [],
    }
}
