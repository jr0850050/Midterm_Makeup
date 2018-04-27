<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->decimal('shipAmount');
            $table->decimal('taxAmount');
            $table->datetime('shipDate');
            $table->integer('shipAddressID');
            $table->integer('cardType');
            $table->char('cardNumber', 16);
            $table->char('cardExpires', 7);
            $table->integer('billingAddressID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
