import Dashboard from './views/spa/Dashboard.vue'

export default [
    {
        path: '/spa',
        component: Dashboard,
        beforeEnter: requireAuth,
        children: [   
            //{
                //匹配/spa/
                //path: '/',
                //redirect: '/spa/home'
            //},
            {
                //匹配/spa
                path: '',
                component: require('./views/spa/Home.vue')
            },       
            {
                //匹配/spa/home
                path: 'home',
                component: require('./views/spa/Home.vue')
            },
            {
                //匹配/spa/system
                path: 'system',
                component: require('./views/spa/System.vue')
            },
            {
                //匹配/spa/links
                path: 'links',
                component: require('./views/spa/link/Default.vue'),
                children: [
                    {
                        //匹配/spa/links/
                        path: '/',
                        component: require('./views/spa/link/Link.vue')
                    },
                    {
                        //匹配/spa/links/create
                        path: 'create',
                        component: require('./views/spa/link/Create.vue')
                    },
                    {
                        //匹配/spa/links/1/edit
                        path: ':id/edit',
                        component: require('./views/spa/link/Edit.vue')
                    }
                ]
            },            
            {
                //匹配/spa/*
                path: '*',
                redirect: '/spa'
            }
        ]
    }
]

function requireAuth (to, from, next) {
    return next()
}