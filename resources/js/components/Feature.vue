<template>
    <div class="feature">
        <img :src="feature.img">
        <h3 class="font-mont-bold font-size-18">{{feature.title}}</h3>
        <p class="font-mont font-size-14">{{feature.description}}</p>
    </div>
</template>

<script>
    export default {
        props : ["feature"]
    }
</script>