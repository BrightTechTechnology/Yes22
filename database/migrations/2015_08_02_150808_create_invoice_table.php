<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->index();    // who gets invoiced?
            $table->mediumInteger('amount');        // amount in cents
            $table->smallInteger('rate');        // amount in cents
            $table->enum('currency', ['USD', 'HKD', 'AUD', 'EUR', 'GBP', 'TWD', 'CNY', 'MOP']);
            $table->string('theme')->index();        // gotarot, whitelabel...
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
        Schema::drop('invoices');
    }
}
