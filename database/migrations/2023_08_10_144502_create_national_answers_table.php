<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_answers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('answer');
            $table->boolean('status')->default(0);
            $table->foreignId('national_question_id')->constrained('national_questions')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('national_answers');
    }
};
