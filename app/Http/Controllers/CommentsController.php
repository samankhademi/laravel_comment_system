<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Blogs;
use Symfony\Component\HttpFoundation\Response;

class CommentsController extends Controller
{
    /*
     * Get Comments
     *
     * @params:
     *
     *          postId: required
     *
     * return:
     *         http model <comment>
     */

    public function index($blogId = 1, $replyId = 0)
    {
        $commentsList = \DB::select(
            \DB::raw("SELECT comment.*,(SELECT count(*) FROM comments as c WHERE c.reply_id = comment.id) as child_count FROM `comments` as comment WHERE comment.reply_id =:replyId AND comment.blog_id=:blogId;"),
                ['blogId' => $blogId,'replyId' => $replyId]
        );
        return collect($commentsList);
    }

    /*
     * Add new Comments
     *
     * @params:
     *        $request:{
     *              comment :  required
     *              reply_id:  filled
     *              page_id :  filled
     *              users_id:  required
     *          }
     * return:
     *          <comment>
     */
    public function create(Request $request)
    {
        /*
         * validate comment
         */
        $this->validate($request, [
            'username' => 'required',
            'text' => 'required',
            'blog_id' => 'required',
            'reply_id' => 'filled',
        ]);

        //check if blog exist
        $blog = Blogs::where('id', $request->blog_id)->first();
        //if not blog set bad request error
        if(!$blog) return response(["wrong blog id: $request->blog_id"], Response::HTTP_BAD_REQUEST);
        if($request->reply_id){
            $result_level = \DB::select(
                \DB::raw("SELECT lv1.*, (SELECT reply_id FROM comments WHERE id = lv1.reply_id) lv2, (SELECT reply_id FROM comments WHERE id = lv2) lv3 FROM `comments` as lv1 WHERE lv1.id = :id;"),
                ['id' => $request->reply_id]
            );
            if($result_level[0]->lv3 !== null) return response(['You can only reply on 2 Level!'], Response::HTTP_BAD_REQUEST);
        }
        // create by ORM
        $comment = Comments::create($request->all());
        // check if comment
        if ($comment) {
            $comment->child_count = 0;
            return ["status" => "true", "comment" => $comment];
        }else {
            return response(['status' => false, 'error' => 'You can only reply on 2 Level!'], Response::HTTP_BAD_REQUEST);
        }
    }
}
