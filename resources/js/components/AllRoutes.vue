<template>
    <div>
        <div>
            
            <route v-for="route in routes" :key="route.id" :route="route"></route>

        </div>
    </div>
</template>

<script>

    import route from './RouteItem'

    export default {

        components: {
            route
        },

        data: function() {
            return {
                routes: [
                    {
                        id: 1,
                        title: 'Qui id illum sequi.',
                        description: 'Possimus facere ducimus et corporis. Et eligendi cumque modi.',
                        region: 'Wales',
                        country: 'GB',
                        distance: 234789,
                        created_at: new Date().toLocaleString(),
                        updated_at: new Date().toLocaleString(),
                        gpx_route: {
                            id: 1,
                            gpx_file: '/some.gpx',
                            gpx_json: '{}',
                            created_at: new Date().toLocaleString(),
                            updated_at: new Date().toLocaleString(),
                        }
                    },
                ]
            }
        },
        
    }
</script>
