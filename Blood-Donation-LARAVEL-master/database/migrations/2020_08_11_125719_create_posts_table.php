<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('title');
            $table->mediumText('description');
            $table->integer('phone');
            $table->string('city');
            $table->integer('blood_volume');
            $table->string('blood_type_needed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
/*
Post 1
$post= new App\Post();

$post->p_id="1";
$post->post_u_id="2";
$post->title="Blood Needed";
$post->description="Blood needed at Lorem ipsum dolor";
$post->phone="0612345678";
$post->city="Rabat";
$post->blood_volume="2";
$post->blood_type_needed="B+";
$post->save()

Post 2

$post= new App\Post();

$post->p_id="2";
$post->post_u_id="2";
$post->title="Blood ";
$post->description="Blood needed at Lorem ipsum dolor";
$post->phone="0625293190";
$post->city="Rabat";
$post->blood_volume="1";
$post->blood_type_needed="O+";
$post->save()

Post 3 

$post= new App\Post();

$post->p_id="3";
$post->post_u_id="5";
$post->title="Urgent: Rabat";
$post->description="Blood needed at Rabat ipsum";
$post->phone="0612345678";
$post->city="Rabat";
$post->blood_volume="3";
$post->blood_type_needed="A+";
$post->save()







*/