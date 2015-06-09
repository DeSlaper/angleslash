<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function (Blueprint $table) {
			$table->foreign('sub_id')->references('id')->on('subs')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
		Schema::table('posts', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
		Schema::table('subs', function (Blueprint $table) {
			$table->foreign('owner_id')->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
		Schema::table('post_votes', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
		Schema::table('post_votes', function (Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function (Blueprint $table) {
			$table->dropForeign('posts_sub_id_foreign');
		});
		Schema::table('posts', function (Blueprint $table) {
			$table->dropForeign('posts_user_id_foreign');
		});
		Schema::table('subs', function (Blueprint $table) {
			$table->dropForeign('subs_owner_id_foreign');
		});
		Schema::table('post_votes', function (Blueprint $table) {
			$table->dropForeign('post_votes_user_id_foreign');
		});
		Schema::table('post_votes', function (Blueprint $table) {
			$table->dropForeign('post_votes_post_id_foreign');
		});
	}

}
