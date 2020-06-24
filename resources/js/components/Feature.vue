<template>
    <div class="feature">
        <img :src="feature.img">
        <h3>{{feature.title}}</h3>
        <p>{{feature.description}}</p>
    </div>
</template>

<script>
    export default {
        props : ["feature"]
    }
</script>