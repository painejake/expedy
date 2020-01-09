<template>
    <div class="row">

        <h5>{{ route.title }}</h5>

        <p>{{ route.description }}</p>

        <span>Created at {{ route.created_at }}</span>
        
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
