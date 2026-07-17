<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('qc_returns', function (Blueprint $table) {

            $table->id();

            $table->foreignId('stock_id')
                ->constrained('stocks')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->integer('damaged_quantity');

            $table->text('reason');

            $table->enum('action_taken',[
                'discard',
                'return_supplier',
                'discount_sale'
            ]);

            $table->enum('status',[
                'pending',
                'approved',
                'completed'
            ])->default('pending');

            $table->date('qc_date');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('qc_returns');
    }
};