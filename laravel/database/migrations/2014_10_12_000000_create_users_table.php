<?php

use App\Models\User;
use GuzzleHttp\Promise\Create;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('vip')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['user_id'=>1,'name'=>'Janos','email'=>'Janos@gmail.com','vip'=>true]);
        User::create(['user_id'=>2,'name'=>'Kovacs','email'=>'Kovacs@gmail.com','vip'=>false]);
        User::create(['user_id'=>3,'name'=>'Atta','email'=>'Atta@gmail.com','vip'=>false]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
