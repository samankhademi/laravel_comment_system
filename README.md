#✨Comments System✨
## _👋 Hi, I’m saman khademi_

Todo:
- ✔(Done) Assume that there is only one Blog Post that can be commented on.
- ✔(Done) Only the user’s name and comment text are required to post a comment.
- ✔(Done) A comment can be replied to with another comment.
- ✔(Done) Nested comments are up to 3 layers only
- ✔(Done) The page should not refresh when posting a comment.
- ✔(Done) Comments must be ordered by the latest.
- ✔(Done) Make the user interface as beautiful, responsive, and easy to use as you can.
- ✔(Done) Use MySQL database for storing your data.
- (Ok) No need to edit, delete, etc of comments.

What you are looking for:

- Optimal code that is clean and maintainable.
- Business logic organization and software design patterns.
- Optimized SQL performance.
    ```sh
    Please Check CommentsController
    ```
- Documentation.
- Unit tests.
### How To Run
-  Run Test(test add fake data and db will refresh after test finished)

    ```sh
      php artisan test
    ```
   
-  Migrate Database

    ```sh
      php artisan migrate
    ```
   
-  Seed DB Data

    ```sh
      php artisan db:seed BlogSeeder
      php artisan db:seed CommentsSeeder   
    ```
   
-  Start Application

    ```sh
      php artisan serve
      npm run watch   
    ```
   
   App will start on 3000 port
   > you can check VUE Js files in ``` resources\js``` path
   
   Also you can test methods ``` tests\Feature\Http\Controllers\CommentsControllerTest.php ```
