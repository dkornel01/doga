<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');
            $table->foreignid('agency_id')->references('agency_id')->on('agencies');
            $table->integer('number')->default(0);
            $table->timestamps();
        });
        Event::create(['event_id'=>1,'date'=>'2023-10-10','agency_id'=>'1','number'=>100]);
        Event::create(['event_id'=>2,'date'=>'2023-10-11','agency_id'=>'1','number'=>200]);
        Event::create(['event_id'=>3,'date'=>'2023-10-12','agency_id'=>'2','number'=>150]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
