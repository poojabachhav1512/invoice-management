<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('oc_number');
            $table->integer('po_number');
            $table->unsignedBigInteger('client_id'); // Foreign key column
            $table->foreign('client_id')->references('id')->on('clinet')->onDelete('cascade');
            $table->string('vendor_code');
            $table->string('gst_info');
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
        Schema::dropIfExists('invoices');
    }
};
