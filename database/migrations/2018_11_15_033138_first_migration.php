<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FirstMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblThu',function(Blueprint $table)
        {
            $table->increments('maThu');
            $table->date('ngayThu');
            $table->text('nguonThu');
            $table->integer('soTien');
        });

        Schema::create('tblChi', function(Blueprint $table)
        {
            $table->increments('maChi');
            $table->date('ngayChi');
            $table->text('lyDo');
            $table->integer('soTien');
        });

        Schema::create('tblDanhGia', function(Blueprint $table)
        {
            $table->increments('maDanhGia');
            $table->text('giaTri');
        });

        Schema::create('tblThongKe', function(Blueprint $table)
        {
            $table->increments('maTk');
            $table->string('thangNam',10);
            $table->integer('tongThu');
            $table->integer('tongChi');
            $table->integer('soDu');
            $table->integer('maDanhGia')->unsigned();
            $table->foreign('maDanhGia')->references('maDanhGia')->on('tblDanhGia');
        }); 

        Schema::create('tblTaiKhoan', function(Blueprint $table)
        {
            $table->increments('maTKhoan');
            $table->string('user',50)->unique();
            $table->string('pass',20)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblChi');
        Schema::dropIfExists('tblThu');
        Schema::dropIfExists('tblThongKe');
        Schema::dropIfExists('tblDanhGia');
    }
}
