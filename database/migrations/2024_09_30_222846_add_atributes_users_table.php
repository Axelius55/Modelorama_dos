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
        Schema::table('users', function (Blueprint $table) {
            //

            $table->integer('phone');
            $table->float('salary',8,2);
            $table->longText('address');
            $table->date('hire');
            $table->date('end');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->dropColumn('phone');
            $table->dropColumn('salary');
            $table->dropColumn('address');
            $table->dropColumn('hire');
            $table->dropColumn('end');
        });
    }
};
