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
    public function up(): void
    {
        Schema::create('imc', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('peso');
             $table->double('altura');
            $table->timestamp();
    });

    Schema::create('sessions', function (Blueprint $table){
        $table->string('id')->primary();
        $table->foreignId('user_id')->nullable()->index();
        $table->string('ip_address', 45)->nullable();
        $table->text('user_agent')->nullable();
        $table->longText('payload');
        $table->integer('last_activity')->index();

    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists("sessions");
        Schema::dropIfExists("imc");
    }
};
