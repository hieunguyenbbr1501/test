<?php


namespace Hieu1501\HelloWorld\database\migrations;


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestMigration extends \Illuminate\Database\Migrations\Migration
{
    public function up() {
        Schema::create('test', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
        });
    }

    public function down() {
        Schema::drop('test');
    }
}