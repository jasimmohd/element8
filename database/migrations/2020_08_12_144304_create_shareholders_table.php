<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShareholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sahareholders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('due_date');
            $table->string('paid_amount');
            $table->string('bal_payment');
            $table->string('office_staff');
            $table->string('unit');
            $table->string('zone');
            $table->string('country');
            $table->string('native_address');
            $table->string('img')->default('profile.png');
            $table->string('area');
            $table->string('emirate');
            $table->string('current_address');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('sahareholders');
    }
}
