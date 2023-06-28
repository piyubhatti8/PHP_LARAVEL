<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('isbn');
            $table->unsignedBigInteger('auth_id');
            $table->unsignedBigInteger('pub_id');
            $table->string('pages');
            $table->string('edition');
            $table->date('pub_dt');
            $table->unsignedBigInteger('cid');
            $table->string('img')->nullable();
            $table->timestamps();

            $table->foreign('auth_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('pub_id')->references('id')->on('publishers')->onDelete('cascade');
            $table->foreign('cid')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
