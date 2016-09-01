<?php
use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{

    static $csvFile = '/sites/capstone.dev/database/seeds/school_db.csv';

    public function run()
    {

        $schools = self::csv_to_array();

        //var_dump($schools);
        // Uncomment the below to run the seeder

    }
    public static function csv_to_array($delimiter = ',')
    {
        $filename = __DIR__ . '/../seeds/school_db.csv';
        if (!file_exists($filename) || !is_readable($filename)) {
            return FALSE;
        }
        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 0, $delimiter)) !== FALSE) {
                //var_dump($row);
                if (!$header)
                    $header = $row;
                else {
                    //var_dump(count($row));
                    $school = array_combine($header, $row);
                    DB::table('schools')->insert($school);
                }
            }
            fclose($handle);
        }
        //var_dump($data[0]);
        return $data;
    }

}