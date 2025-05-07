<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\StudentFormList;

class StudentformdetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['auth_name' => 'Admission Type', 'cat_id' => 1],
            ['auth_name' => 'Admission Date', 'cat_id' => 1],
            ['auth_name' => 'Scholar/Admission Number', 'cat_id' => 1],
            ['auth_name' => 'Admission Class', 'cat_id' => 1],
            ['auth_name' => 'Admission Session', 'cat_id' => 1],
            ['auth_name' => 'TC Details', 'cat_id' => 1],
            ['auth_name' => 'Previous Class', 'cat_id' => 1],
            ['auth_name' => 'Previous School', 'cat_id' => 1],

            ['auth_name' => 'Student Name', 'cat_id' => 2],
            ['auth_name' => 'Date Of Birth', 'cat_id' => 2],
            ['auth_name' => 'Place Of Birth', 'cat_id' => 2],
            ['auth_name' => 'Gender', 'cat_id' => 2],
            ['auth_name' => 'Blood Group', 'cat_id' => 2],
            ['auth_name' => 'Category', 'cat_id' => 2],
            ['auth_name' => 'Religion', 'cat_id' => 2],
            ['auth_name' => 'Nationality', 'cat_id' => 2],
            ['auth_name' => 'Student Image', 'cat_id' => 2],
            ['auth_name' => 'Medical Problem', 'cat_id' => 2],
            ['auth_name' => 'Mother Tongue', 'cat_id' => 2],
            ['auth_name' => 'Aadhar Number', 'cat_id' => 2],
            ['auth_name' => 'Samagra ID', 'cat_id' => 2],
            ['auth_name' => 'Family Samagra ID', 'cat_id' => 2],
            ['auth_name' => 'Email ID', 'cat_id' => 2],
            ['auth_name' => 'Birth Mark', 'cat_id' => 2],
            ['auth_name' => 'Specially Able', 'cat_id' => 2],
            ['auth_name' => 'Primary Number', 'cat_id' => 2],
            ['auth_name' => 'Whatsapp number', 'cat_id' => 2],
            ['auth_name' => 'Relation to the Person', 'cat_id' => 2],
            ['auth_name' => 'Caste', 'cat_id' => 2],
            ['auth_name' => 'Sub Caste', 'cat_id' => 2],
            ['auth_name' => 'Permanent Education Number', 'cat_id' => 2],
            ['auth_name' => 'Economically Weaker Section', 'cat_id' => 2],
            ['auth_name' => 'BPL Certificate', 'cat_id' => 2],
            ['auth_name' => 'Minority', 'cat_id' => 2],
            ['auth_name' => 'APAAR ID', 'cat_id' => 2],
            ['auth_name' => 'Name of Sibling', 'cat_id' => 2],
            ['auth_name' => 'Gender of sibling', 'cat_id' => 2],
            ['auth_name' => 'Age of sibling', 'cat_id' => 2],
            ['auth_name' => 'Sibling School Name', 'cat_id' => 2],
            ['auth_name' => 'Sibling Class', 'cat_id' => 2],

            ['auth_name' => 'Aadhar Card Image', 'cat_id' => 3],
            ['auth_name' => 'Samagra ID Image', 'cat_id' => 3],
            ['auth_name' => 'Previous Marksheet Image', 'cat_id' => 3],
            ['auth_name' => 'Passbook Image', 'cat_id' => 3],
            ['auth_name' => 'EWS', 'cat_id' => 3],

            ['auth_name' => 'Current Address', 'cat_id' => 4],
            ['auth_name' => 'Pincode', 'cat_id' => 4],
            ['auth_name' => 'City', 'cat_id' => 4],
            ['auth_name' => 'District', 'cat_id' => 4],
            ['auth_name' => 'State', 'cat_id' => 4],

            ['auth_name' => 'Permanent Address', 'cat_id' => 5],
            ['auth_name' => 'Pincode', 'cat_id' => 5],
            ['auth_name' => 'City', 'cat_id' => 5],
            ['auth_name' => 'District', 'cat_id' => 5],
            ['auth_name' => 'State', 'cat_id' => 5],

            ['auth_name' => 'Bank Name', 'cat_id' => 6],
            ['auth_name' => 'IFSC Code', 'cat_id' => 6],
            ['auth_name' => 'Account Number', 'cat_id' => 6],
            ['auth_name' => 'Account Holder Name', 'cat_id' => 6],

            ['auth_name' => 'Current Session', 'cat_id' => 7],
            ['auth_name' => 'Current Class', 'cat_id' => 7],
            ['auth_name' => 'Roll Number', 'cat_id' => 7],

            ['auth_name' => 'Father Name', 'cat_id' => 8],
            ['auth_name' => 'Father Image', 'cat_id' => 8],
            ['auth_name' => 'Father DOB', 'cat_id' => 8],
            ['auth_name' => 'Father Number', 'cat_id' => 8],
            ['auth_name' => 'Father Aadhar Number', 'cat_id' => 8],
            ['auth_name' => 'Father Qualification', 'cat_id' => 8],
            ['auth_name' => 'Father Occupation', 'cat_id' => 8],
            ['auth_name' => 'Father Office Address', 'cat_id' => 8],
            ['auth_name' => 'Father Annual Income', 'cat_id' => 8],
            ['auth_name' => 'Father Nationality', 'cat_id' => 8],
            ['auth_name' => 'Father Single Parent', 'cat_id' => 8],
            ['auth_name' => 'Father Aadhar Image', 'cat_id' => 8],
            ['auth_name' => 'Father Passbook Image', 'cat_id' => 8],

            ['auth_name' => 'Mother Name', 'cat_id' => 9],
            ['auth_name' => 'Mother Image', 'cat_id' => 9],
            ['auth_name' => 'Mother DOB', 'cat_id' => 9],
            ['auth_name' => 'Mother Number', 'cat_id' => 9],
            ['auth_name' => 'Mother Aadhar Number', 'cat_id' => 9],
            ['auth_name' => 'Mother Qualification', 'cat_id' => 9],
            ['auth_name' => 'Mother Occupation', 'cat_id' => 9],
            ['auth_name' => 'Mother Office Address', 'cat_id' => 9],
            ['auth_name' => 'Mother Annual Income', 'cat_id' => 9],
            ['auth_name' => 'Mother Nationality', 'cat_id' => 9],
            ['auth_name' => 'Mother Single Parent', 'cat_id' => 9],
            ['auth_name' => 'Mother Aadhar Image', 'cat_id' => 9],
            ['auth_name' => 'Mother Passbook Image', 'cat_id' => 9],

            ['auth_name' => 'Guardian Name', 'cat_id' => 10],
            ['auth_name' => 'Guardian Image', 'cat_id' => 10],
            ['auth_name' => 'Guardian DOB', 'cat_id' => 10],
            ['auth_name' => 'Guardian Number', 'cat_id' => 10],
            ['auth_name' => 'Guardian Aadhar Number', 'cat_id' => 10],
            ['auth_name' => 'Guardian Qualification', 'cat_id' => 10],
            ['auth_name' => 'Guardian Occupation', 'cat_id' => 10],
            ['auth_name' => 'Guardian Office Address', 'cat_id' => 10],
            ['auth_name' => 'Guardian Annual Income', 'cat_id' => 10],
            ['auth_name' => 'Guardian Nationality', 'cat_id' => 10],
            ['auth_name' => 'Guardian Single Parent', 'cat_id' => 10],
            ['auth_name' => 'Guardian Relation', 'cat_id' => 10],
            ['auth_name' => 'Guardian Aadhar Image', 'cat_id' => 10],
            ['auth_name' => 'Guardian Passbook Image', 'cat_id' => 10],
        ];

        foreach ($data as $item) {
            StudentFormList::firstOrCreate(
                ['auth_name' => $item['auth_name'], 'cat_id' => $item['cat_id']]
            );
        }
    }
}
