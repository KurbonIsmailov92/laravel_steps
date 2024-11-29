<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comment_post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Comment::class, 'comment_id')
                ->nullable()
                ->constrained('comments')
                ->cascadeOnDelete();
            $table->foreignIdFor(Post::class, 'post_id')
                ->nullable()
                ->constrained('posts')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comment');
    }
};
