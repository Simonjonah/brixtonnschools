<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users')->onDelete('cascade')->update('cascade');
            $table->string('teacher_id', 11)->nullable();
            $table->string('ref_no', 20)->nullable();
            $table->string('surname', 50);
            $table->string('middlename', 50);
            $table->string('fname', 50);
            $table->string('phone', 20);
            $table->string('section', 50)->nullable();
            $table->string('academic_session', 15)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('centername', 20)->nullable();
            $table->string('classname', 20);
            $table->text('images')->nullable();
            $table->string('status', 12)->nullable();
            $table->string('entrylevel', 12)->nullable();
            $table->string('regnumer', 30)->nullable();
            
            $table->string('subjectname', 30);
            $table->string('test_1', 5)->default(0)->nullable();
            $table->string('test_2', 5)->default(0)->nullable();
            $table->string('test_3', 5)->default(0)->nullable();
            $table->string('exams', 5)->default(0)->nullable();

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
        Schema::dropIfExists('results');
    }
};
