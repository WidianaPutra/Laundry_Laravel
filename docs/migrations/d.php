<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('username');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('address')->nullable();
      $table->string('phone_number')->nullable();
      $table->string('role');
      $table->string('user_img')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('users');
  }
}

class CreateOrdersTable extends Migration
{
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
      $table->string('order_status');
      $table->integer('total_weight');
      $table->string('transaction_id')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('orders');
  }
}

class CreateTransactionsTable extends Migration
{
  public function up()
  {
    Schema::create('transactions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
      $table->string('payment_method');
      $table->string('payment_status');
      $table->float('amount');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('transactions');
  }
}
