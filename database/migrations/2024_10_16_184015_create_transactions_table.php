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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_title');
            $table->text('description');
            $table->string('status');
            $table->decimal('total_amount', 10, 2);
            $table->string('transaction_number')->unique();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};