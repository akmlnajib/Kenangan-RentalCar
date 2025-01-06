<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->string('car_type');
            $table->string('transmission_type');
            $table->string('image')->nullable();
            $table->integer('seat_count');
            $table->timestamps();
        });

        Schema::create('car_rentals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('car_id');
            $table->char('rental_time');
            $table->integer('rental_car_price');
            $table->integer('rental_driver_price')->default(0);
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('cars_id');
            $table->string('invoice');
            $table->string('nama_penyewa');
            $table->string('jaminan');
            $table->string('no_identitas');
            $table->string('alamat');
            $table->string('no_tlpn');
            $table->string('nopol');
            $table->string('rental_time');
            $table->integer('rental_hours')->nullable();
            $table->integer('rental_car');
            $table->integer('rental_driver')->default(0);
            $table->date('date_checkin')->nullable();
            $table->date('date_checkout')->nullable();
            $table->integer('total_date')->nullable();
            $table->integer('total_transaksi');
            $table->timestamps();
        
            // Mengatur Foreign Key dengan Cascade Delete
            $table->foreign('cars_id')
                  ->references('id')
                  ->on('cars')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        

        
        Schema::create('customs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('logo');
            $table->string('image_background');
            $table->string('image_promo_first');
            $table->string('image_promo_second');
            $table->string('text_promo');
            $table->string('image_profile_first');
            $table->string('image_profile_second');
            $table->string('location');
            $table->string('link_ig');
            $table->string('no_tlpn_first');
            $table->string('no_tlpn_second');
            $table->timestamps();
        });
    } 
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
        Schema::dropIfExists('car_rentals');
        Schema::dropIfExists('transactions');
    }
};
