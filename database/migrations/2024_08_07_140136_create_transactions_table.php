<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Menggunakan unsignedBigInteger
            $table->unsignedBigInteger('bank_account_id'); // Menggunakan unsignedBigInteger
            $table->decimal('amount', 15, 2);
            $table->string('type'); // withdrawal or other types if needed
            $table->string('status')->default('pending'); // pending, accepted, rejected
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
