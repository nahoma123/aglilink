<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('competition_type');
            $table->integer('competition_id');
            $table->integer('home_team'); //
            $table->integer('away_team'); //
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('match_status');
            $table->string('venue');
            $table->timestamps();
        });
        Schema::create('cups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description',200)->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('number_of_teams')->nullable();
            $table->integer('matches_played')->nullable();
            $table->timestamps();
        });
        Schema::create('leagues', function (Blueprint $table) {
             $table->increments('id');
            $table->string('nation');
            $table->string('league_name');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('description');
            $table->integer('number_of_teams')->nullable();
            $table->double('fifa_ranking')->nullable();
            $table->timestamps();
        });
        Schema::create('matches_result', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('home_team_score');
            $table->tinyInteger('away_team_score');
            $table->smallInteger('possession')->nullable();
            $table->smallInteger('home_team_shots_on_target')->nullable();
            $table->smallInteger('away_team_shots_on_target')->nullable();
            $table->smallInteger('home_team_corners')->nullable();
            $table->smallInteger('away_team_corners')->nullable();
            $table->smallInteger('home_team_fouls')->nullable();
            $table->smallInteger('away_team_fouls')->nullable();
            $table->integer('match_id'); // key to match tables
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
        Schema::dropIfExists('matches_result');
        Schema::dropIfExists('cups');
        Schema::dropIfExists('leagues');
        Schema::dropIfExists('matches');
    }
}