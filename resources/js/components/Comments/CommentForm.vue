<template>
    <div>
        <div class="leave-comment">
            <div class="leave-one">
                <h4>Leave a comment</h4>
            </div>
        </div>
        <div class="leave-form" id="comment_form">
            <template v-if="this.$store.state['comments'].selectedComment">
                <CommentBody :comment="this.$store.state['comments'].selectedComment" :showMode="true" />
            </template>
            <form @submit.prevent.stop="sendComments" action="#" method="post" class="leave-comment">
                <div class="row">
                    <div class="name col-md-4">
                        <input minlength="3" required v-model.trim="name" type="text" name="name" id="name" placeholder="Name"/>
                    </div>
                </div>
                <div class="row">
                    <div class="text col-md-12">
                        <textarea required minlength="10" maxlength="1000" v-model.trim="comment" name="text" placeholder="Comment"/>
                    </div>
                </div>
                <div class="send">
                    <button type="submit">Send Your Comment</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import CommentBody from "./CommentBody";

    export default {
        name: "Comment-Form",
        components: {CommentBody},
        data: () => {
            return {
                comment: '',
                name: '',
                loading: false,
            }
        },
        methods: {
            async sendComments(){
                try {
                    const matchUrl = window.location.href.match(/[^/?]*[^/?]/g);
                    this.loading = true
                    const params = {
                        username: this.name,
                        text: this.comment,
                        blog_id: parseInt(matchUrl[3])
                    }
                    const result = await this.$store.dispatch('comments/sendComments', params)
                    this.name = ''
                    this.comment = ''
                    document.querySelector(`#comment_${result.id}`).scrollIntoView()
                    this.$toasted.success('Your Comment Add Successful',{duration: 2000})
                }catch (error) {
                    this.$toasted.error(`Fail to add comment: ${String(error.response.data)}`,{duration: 5000})
                    console.log(error)
                }finally {
                    this.loading = false
                }
            }
        }
    }
</script>

<style scoped>

</style>
