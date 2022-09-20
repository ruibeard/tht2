<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    //Simulating a database recordset
    public static function getAll() : \Illuminate\Support\Collection {

        static::unguard();

        $records = collect([
            454232 => new Activity([
                'activity_id' => 454232,
                'activity_date' => '2022-09-01',
                'task_code' => 'HT-001',
                'cycle_month' => 'Sep 2022',
                'activity_type' => 'ODOL (AP/AT)',
                'team_code' => 'MT-01',
                'contract_code' => 'ABC123',
                'outputs' => [
                    'area_cleared_sqm' => 123,
                    'num_deminers' => 8,
                    'minutes_worked' => 380,
                ],
            ])

        ]);

        static::reguard();

        return $records;
    }

    //Simulating a database recordset
    public static function getOne($activityId) : ?\Illuminate\Database\Eloquent\Model {
        return static::getAll()->get($activityId);
    }

    //Simulating a database action
    public static function createOne($data) {
        return true;
    }

    //Simulating a database action
    public function saveOne() {
        return true;
    }
}
