<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->nullable();
			$table->string('product', 255);
			$table->text('description')->nullable();
			$table->string('thumbnail', 255)->nullable();
			$table->decimal('price', 8, 2)->nullable()->unsigned();
			$table->unsignedMediumInteger('stock')->nullable();
			$table->date('stock_due_date')->nullable(); 
			$table->unsignedTinyInteger('is_discontinued')->nullable();
			$table->dateTime('date_discontinued')->nullable();
			$table->dateTime('last_sold_date')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('products');
	}
}
