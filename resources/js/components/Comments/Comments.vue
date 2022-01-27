<template>
    <div>
        <div class="all-comments">
            <div class="view-comments">
                <Comment :data="commentsList" />
            </div>
        </div>
        <div class="divide-line">
            <img src="/images/div-line.png" alt="" />
        </div>
        <CommentForm />
    </div>
</template>
<script>
    import Comment from './Comment'
    import CommentForm from './CommentForm'

    export default {
        components: {Comment, CommentForm},
        computed: {
            commentsList() {
                return this.$store.state['comments'].comments
            },

        },
        mounted(){
            try {
                const matchUrl = window.location.href.match(/[^/?]*[^/?]/g);
                this.$store.dispatch('comments/loadComments',{blogId: parseInt(matchUrl[3]), replyId: 0});
            }catch (error) {
                this.$toasted.error(`Fail to add comment: ${String(error)}`,{duration: 5000})
            }

        }
    }
</script>
