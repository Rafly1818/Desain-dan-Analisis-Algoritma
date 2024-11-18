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
        if (! Schema::hasTable('borrowings')) {
            Schema::create('borrowings', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('book_id');
                $table->unsignedBigInteger('visitor_id');
                $table->string('name');
                $table->date('borrow_date');
                $table->date('return_date');
                $table->decimal('late_fees', 8, 2);
                $table->timestamps();

                $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
                $table->foreign('visitor_id')->references('id')->on('visitors')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
