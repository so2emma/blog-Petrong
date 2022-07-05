<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Inspiring;

class CreateDatabase extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'make:database';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create a new database';

  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $new_db_name = config('database.connections.mysql.database');
    $new_mysql_username = config('database.connections.mysql.username');
    $new_mysql_password = config('database.connections.mysql.password');
    $new_mysql_host = config('database.connections.mysql.host');

    $conn = mysqli_connect($new_mysql_host, $new_mysql_username, $new_mysql_password);
    if (!$conn) {
      return false;
    }
    $sql = 'CREATE Database IF NOT EXISTS ' . $new_db_name;
    $exec_query = mysqli_query($conn, $sql);
    if (!$exec_query) {
      die('Could not create database: ' . mysqli_error($conn));
    }
  }
}
