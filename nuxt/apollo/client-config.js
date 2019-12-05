import {onError} from 'apollo-link-error';
// import auth from '~/utils/auth';

export default function (ctx) {
    const errorLink = onError(({networkError, operation, forward}) => {
        // if (networkError.statusCode === 401 || true) {
        //     if (networkError.result.message === 'Expired JWT Token') {
        //         ctx.app.$router = ctx.app.router;
        //         ctx.app.$store = ctx.app.store;
        //         // console.log(ctx.app);
        //         auth.logout(ctx.app);
        //         return forward(operation);
        //     } else {
        //         ctx.app.router.push('/auth/login');
        //     }
        // }
    });
    return {
        link: errorLink,

        // required
        httpEndpoint: 'http://api.syrius.local/api/graphql',
        httpLinkOptions: {
            headers: {
                // "Content-Type": "application/graphql",
                // "X-AUTH-TOKEN": "test_api_key",
            }
        }
    }
}
