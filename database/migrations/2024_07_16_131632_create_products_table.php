<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('category');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->decimal('weight', 8, 2);
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->enum('condition', ['new', 'used']);
            $table->boolean('preorder');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
