<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products',function($table){
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer("stock");
			$table->boolean('availability')->default(1);
			$table->decimal('price', 10, 2);
      		$table->integer('category_id');
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
		Schema::drop('products');
	}

}
