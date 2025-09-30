<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
        public function up(): void
        {
            Schema::create('holidays', function (Blueprint $table) {
                $table->bigIncrements('id')->primary();
                $table->string('name');
                $table->date('date');
                $table->text('description');
                $table->boolean('is_recurring')->default(false);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
                $table->softDeletes();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holidays');
    }
};
