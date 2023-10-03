<?php

use App\Models\Airlines;
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
        Schema::create('airlines', function (Blueprint $table) {
            $table->id("airline_id");
            $table->string("name");
            $table->string("country");
            $table->timestamps();
        });

        Airlines::create(["name"=>"Malév","country"=>"Magyar"]);
        Airlines::create(["name"=>"Lufthansa","country"=>"Német"]);
        Airlines::create(["name"=>"Swit","country"=>"Svájci"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
