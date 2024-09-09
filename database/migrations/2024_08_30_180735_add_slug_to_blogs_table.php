<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title'); // Adds a unique 'slug' column after the 'title' column
            $table->string('featured_image2')->nullable();
            $table->string('featured_image3')->nullable();

        });
    }
    
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('slug'); // Remove the 'slug' column
        });
    }
    
};
