<template>
    <panel-item :field="field">
        <div v-viewer slot="value" class="flex flex-row overflow-x-auto py-2">
            <img
                v-for="(img,index) in JSON.parse(field.value)"
                :src="img.url"
                :alt="img.name"
                :key="index"
                style="height: 8rem; width: auto;"
                class="rounded shadow-md mr-2"
            >
        </div>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
