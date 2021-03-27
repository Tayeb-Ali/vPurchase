<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Verifycode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //'app_id', 'ip', 'code', 'domain', 'status'
        Schema::create('verifycodes', function (Blueprint $table) {
            $table->string('app_id', 191);
            $table->string('ip', 20);
            $table->string('code', 191);
            $table->string('domain', 100)->unique();
            $table->integer('status')->default(0);
            $table->softDeletes();
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
        //
    }
}
