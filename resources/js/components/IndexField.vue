<template>
    <span class="flex flex-row overflow-x-auto scrolling-touch p-2" style="width: 15rem;">
        <img
            v-for="(img, index) in JSON.parse(field.value)"
            :src="img.url"
            :alt="img.name"
            :key="index"
            class="rounded h-8 mr-2"
        >
    </span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
