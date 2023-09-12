<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePostsTable extends Migration
{
public function up()
{
Schema::create('posts', function (Blueprint $table) {
$table->increments('id');
$table->string('title')->unique();
$table->string('content');
$table->timestamps();
});
}
public function down()
{
Schema::drop('posts');
}
}
    
