<?php

use App\Models\Flights;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id("flight_id");
            $table->date("date");
            $table->integer("limit");
            $table->timestamps();
            $table->foreignId("airline_id")->references("airline_id")->on("airlines");
        });

        Flights::create(["date"=>"2022.01.10","limit"=>150,"airline_id"=>1]);
        Flights::create(["date"=>"2020.03.01","limit"=>550,"airline_id"=>2]);
        Flights::create(["date"=>"2021.11.05","limit"=>250,"airline_id"=>1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
