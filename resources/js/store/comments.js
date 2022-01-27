import axios from 'axios';

const initState = {
    comments: [],
    loading: false,
    error: false,
    selectedComment: false,
}
/*
    find and append data into comments list
 */
const recursiveSearch = (child, payload) => {
    try {
        return child.map(item => {
            if (item.id === payload.replyId) {
                if(item.child && payload.mode !== 'loadType')
                    item.child = [...item.child, ...payload.comments];
                else
                    item.child = payload.comments;
                //if add only one comment
                if(payload.mode === 'appendType') item.child_count += 1
            }else{
                item.child = recursiveSearch(item.child, payload)
            }
            return item;
        })
    }catch (e) {
        return child
    }
}

export default {
    namespaced: true,
    state: {...initState},
    getters: {
        getCommentList(state){
            return state.comments;
        }
    },
    mutations: {
        setLoading(state){
          state.loading = true;
        },
        setFailure(state){
            state.loading = false;
            state.error = true;
        },
        setComments(state, payload) {
            if(!payload.replyId || payload.replyId === 0){
                state.comments = [...state.comments, ...payload.comments];
            } else {

                state.comments = recursiveSearch(state.comments, payload)
                state.comments = JSON.parse(JSON.stringify(state.comments));
            }
            state.loading = false;
            state.error = false;

        },
        setSelectedComment(state, payload){
          state.selectedComment = payload;
        },
        setSubComments(state, payload){

        }

    },
    actions: {
        /*
         * get comment list
         * params: blogId, replyId
         */
        loadComments(context, payload) {
            context.commit('setLoading');
            axios.get(`/comments/${payload.blogId}/${payload.replyId}`).then(response => {
                context.commit('setComments',{comments: response.data, replyId: payload.replyId, mode: 'loadType'})
            }).catch(error => {
                context.commit('setFailure')
                throw error;
            })

        },
        /*
         * send comment
         * params: comment, name
         */
        async sendComments(context, payload) {
            context.commit('setLoading');
            try {
                const params = {
                    ...payload,
                }
                if (context.state.selectedComment) params.reply_id = context.state.selectedComment.id
                const result = await axios.post(`/comments`, params);

                if(result.data.status){
                    context.commit('setComments',{comments: [result.data.comment], replyId: params.reply_id, mode: 'appendType'})
                    context.commit('setSelectedComment',false)
                }
                return result.data.comment
            }catch (error) {
                console.error(error)
                context.commit('setFailure')
                throw error
            }

        },
    }
}
