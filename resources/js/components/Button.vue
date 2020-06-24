<template>
    <button :class="flat">
        {{title}}
    </button>
</template>

<script>
    export default {
        props : ["title", "flat"]
    }
</script>