<template>
    <div v-if="data && data.length > 0">
        <CommentBody :comment="comment" v-for="comment in data" :key="comment.id" :CommentBody="CommentBody" :level="0" />
   </div>
    <div v-else-if="data && data.length < 1" class="alert alert-warning">
        No Comment Found
    </div>
</template>

<script>
    import CommentBody from "./CommentBody";

    export default {
        name: "Comment",
        props: ['loading', 'error', 'data'],
        components: {CommentBody},

    }
</script>

<style scoped>

</style>
