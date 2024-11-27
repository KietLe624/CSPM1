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
    public function up()
    {
        // Tạo bảng courses
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Tự tăng
            $table->string('name'); // Tên khóa học
            $table->timestamps(); // Tạo cột created_at và updated_at
        });

        // Tạo bảng contents
        Schema::create('contents', function (Blueprint $table) {
            $table->id(); // Tự tăng
            $table->string('title'); // Tiêu đề
            $table->text('text'); // Nội dung
            $table->timestamps(); // Tạo cột created_at và updated_at
        });

        // Tạo bảng details
        Schema::create('lessons', function (Blueprint $table) {
            $table->id(); // Tự tăng
            $table->string('name'); // Tên chi tiết
            $table->foreignId('course_id') // Khóa ngoại tham chiếu tới courses
                ->constrained('courses')
                ->onDelete('cascade'); // Nếu xóa course, chi tiết liên quan sẽ bị xóa
            $table->timestamps(); // Tạo cột created_at và updated_at
        });

        // Tạo bảng audios
        Schema::create('audios', function (Blueprint $table) {
            $table->id(); // Tự tăng
            $table->string('file_name'); // Tên file
            $table->string('file_path'); // Đường dẫn file
            $table->foreignId('content_id') // Khóa ngoại tham chiếu tới contents
                ->constrained('contents')
                ->onDelete('cascade'); // Nếu xóa content, audio liên quan sẽ bị xóa
            $table->foreignId('lessons_id') // Khóa ngoại tham chiếu tới details
                ->constrained('lessons')
                ->onDelete('cascade'); // Nếu xóa detail, audio liên quan sẽ bị xóa
            $table->timestamps(); // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audios'); // Xóa bảng audios
        Schema::dropIfExists('lessons'); // Xóa bảng details
        Schema::dropIfExists('contents'); // Xóa bảng contents
        Schema::dropIfExists('courses'); // Xóa bảng courses
    }
};
