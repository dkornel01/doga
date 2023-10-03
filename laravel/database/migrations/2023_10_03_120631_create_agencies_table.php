<?php

use App\Models\Agency;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPSTORM_META\type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });
        Agency::create(['agency_id'=>1,'name'=>'Asztra','country'=>'England','type'=>'rent party']);
        Agency::create(['agency_id'=>2,'name'=>'MAD.','country'=>'Germany','type'=>'non rent party']);
        Agency::create(['agency_id'=>3,'name'=>'ClUB','country'=>'Spain','type'=>'rent party']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
