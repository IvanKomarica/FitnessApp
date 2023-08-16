<template>
    <div>
        <p>This is Dashboard {{ fname }} , {{ lname }}</p>
    </div>
</template>

<script>
export default {
    name: "Index",
    props: ['fname', 'lname'],
}
</script>

<style scoped>

</style>
