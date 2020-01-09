<template>

        <div class="pb-4 pt-3 mb-0 lh-125 w-100 border-bottom border-gray">

            <div class="route-info">
                <h2>{{ route.title }}</h2>
                <h5>
                    {{ route.region }}, {{ route.country }}
                    <small>{{ route.distance}}m</small>
                </h5>
                
                <p>{{ route.description }}</p>

                <span>Created at {{ route.created_at }}</span>
            </div>

        </div>


</template>

<script>
    export default {
        props: {
            route: {
                required: true,
                type: Object,
            }
        },
        data: function() {
            return {

          }
        },
    }
</script>
