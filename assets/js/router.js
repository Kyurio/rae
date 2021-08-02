export default new Router({
    mode: '',
    base: ProcessingInstruction.env.BASE_URL,
    routes: [
        
        {

            path: '/',
            name: 'home',
            component: Home

        },

        {

            path: '/',
            name: 'detalle',
            component: Home

        },



    ]
})