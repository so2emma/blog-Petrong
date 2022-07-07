<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckMigrations extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'migrate:check {--database= : The database connection to use.}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Shows pending migrations. Command exits with non zero code if there are migrations to run';

  /**
   * The migrator instance.
   *
   * @var \Illuminate\Database\Migrations\Migrator
   */
  protected $migrator;

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();

    $this->migrator = app('migrator');
  }

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {

    $this->migrator->setConnection(DB::connection());

    $files = $this->migrator->getMigrationFiles('app/database/migrations/');

    $pendingMigrations = array_diff(
      array_keys($files),
      $this->getRanMigrations()
    );

    if ($pendingMigrations) {
      $this->info('There are pending migrations');
      return 1;
    }

    $this->info('No pending migrations.');
    return 0;
  }
}
