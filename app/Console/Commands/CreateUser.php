<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Faker\Factory as Faker;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating admin users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $faker = Faker::create('id_ID');

        $email = $this->ask('What is your email?');
        $exist = User::where('email', $email)->first();
        if ($exist) {
            $this->error('Fail. User already exist');
            return;
        }

        $name = $this->ask('What is your name?');
        $password = $this->secret('What is your password?');
        $password_confirmation = $this->secret('Please confirm your password');

        if ($password != $password_confirmation) {
            $this->error('Fail. Password not match');
            return;
        }

        $obj = new User();
        $obj->name = $name;
        $obj->email = $email;
        $obj->no_telp = '08' . $faker->randomNumber($nbDigits = 7, $strict = false);
        $obj->tanggal_lahir = $faker->date($format = 'Y-m-d', $max = 'now');
        $obj->no_identitas = $faker->randomNumber($nbDigits = 7, $strict = false);
        $obj->universitas = 'Universitas Sumatera Utara';
        $obj->password = bcrypt($password);
        $obj->email_verified_at = $faker->dateTime($max = 'now', $timezone = null);
        $obj->isAdmin = 1;
        $obj->save();

        $this->info('Success!');

        return 0;
    }
}
