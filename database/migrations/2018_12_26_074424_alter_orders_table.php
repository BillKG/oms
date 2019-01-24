<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('users', function (Blueprint $table) {
        //     // ADD PRIMARY KEY (`id`),
        //     // ADD UNIQUE KEY `name` (`name`),
        //     // ADD KEY `customer_id` (`customer_id`);
        //    // $table->primary('id');                  // Adds a primary key.
        //     $table->unique('id');   
             
        //         // Adds a unique index.
        //    // $table->index('customer_id'); 

        //     // ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);
        //     $table->foreign('id')->references('customer_id')->on('orders');
        // });
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
