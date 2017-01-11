import Dashboard from './views/dashboard/Dashboard.vue'

export default [
    {
        path: '/dashboard',
        component: Dashboard,
        beforeEnter: requireAuth,
        children: [   
            //{
                //匹配/dashboard/
                //path: '/',
                //redirect: '/dashboard/home'
            //},
            {
                //匹配/dashboard
                path: '',
                component: require('./views/dashboard/Home.vue')
            },       
            {
                //匹配/dashboard/home
                path: 'home',
                component: require('./views/dashboard/Home.vue')
            },
            {
                //匹配/dashboard/system
                path: 'system',
                component: require('./views/dashboard/System.vue')
            },
            {
                //匹配/dashboard/links
                path: 'links',
                component: require('./views/dashboard/link/Default.vue'),
                children: [
                    {
                        //匹配/dashboard/links/
                        path: '/',
                        component: require('./views/dashboard/link/Link.vue')
                    },
                    {
                        //匹配/dashboard/links/create
                        path: 'create',
                        component: require('./views/dashboard/link/Create.vue')
                    },
                    {
                        //匹配/dashboard/links/1/edit
                        path: ':id/edit',
                        component: require('./views/dashboard/link/Edit.vue')
                    }
                ]
            },            
            {
                //匹配/dashboard/*
                path: '*',
                redirect: '/dashboard'
            }
        ]
    }
]

function requireAuth (to, from, next) {
    return next()
}