<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
            //posts
        Schema::create('posts', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('slug')-> unique();
            $table->foreignId('author_id')->constrained(
                    table: 'users',
                    indexName: 'post_author_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'post_category_id'
            );
            $table->text('body');
            $table->timestamp('timer')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

        

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
