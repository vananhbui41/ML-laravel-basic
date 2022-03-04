<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
            // $table->timestamps();
            $table->string('address',255)->nullable();
            $table->string('phone',15)->nullable();
            // $table->dateTime('created_at')->nullable();
            // $table->dateTime('update_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email_verified_at');
            $table->dropColumn('remember_token');
            $table->dropColumn('email_verified_at');
        });
    }
}
