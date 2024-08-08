<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id(); // Ini akan menjadi unsignedBigInteger secara default
            $table->unsignedBigInteger('user_id'); // Menggunakan unsignedBigInteger
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('account_holder');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
