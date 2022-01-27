<template>
    <div class="comments" :id="`comment_${comment.id}`">
        <div class="author-thumb">
            <img :src="`/images/author-comment${randomAvatar}.jpg`" alt="">
        </div>
        <div class="comment-body">

            <h6>{{comment.username}}</h6>
            <span class="date">{{formatTime}}</span>
            <a v-if="level < 2" href="#" @click.prevent="setSelectedComment(comment)" class="hidden-xs">Reply</a>
            <a v-if="showMode" href="#" @click.prevent="setSelectedComment(false)">X</a>
            <p>{{comment.text}}</p>
        </div>
        <div v-if="!showMode && comment && comment.child_count > 0 && comment.child && comment.child.length > 0">
            <div v-for="childComment in comment.child" :key="childComment.id">
                <CommentBody :comment="childComment" :level="level + 1" />
            </div>
        </div>
        <div class="text-right" v-if="!showMode && comment.child_count > 0 && (!comment.child || comment.child.length < comment.child_count)">
            <a @click.stop.prevent="loadComments(comment.id)" class="btn btn-link my-3 ">Load Replies</a>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    export default {
        name: "CommentBody",
        props: ['comment','CommentBody','level', 'showMode'],
        computed:{
            formatTime(){
                return moment(this.comment.created_at).format('YYYY-MM-DD HH:mm:ss')
            },
            randomAvatar(){
                return Math.floor(Math.random() * 4) +1
            }
        },
        methods: {
            loadComments(replyId = '') {
                try {
                    const matchUrl = window.location.href.match(/[^/?]*[^/?]/g);
                    this.$store.dispatch('comments/loadComments', {blogId: parseInt(matchUrl[3]), replyId});
                }catch (error) {
                    this.$toasted.error(`Fail to add comment: ${String(error)}`,{duration: 5000})
                }

            },
            setSelectedComment(comment){
                this.$store.commit('comments/setSelectedComment', comment)
                document.querySelector('#comment_form').scrollIntoView();
            }
        }

    }
</script>

<style scoped>

</style>
