<?php
require 'vendor/autoload.php'; // This ensures FakerPHP is loaded

class Random
{
    // Method to generate random person data
    public static function generatePersons($count = 300)
    {
        $faker = Faker\Factory::create('en_PH');
        $persons = [];

        // Create headers for the CSV file
        $persons[] = [
            'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay',
            'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number',
            'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 'Birthdate',
            'Email Address', 'Password'
        ];

        // Generate $count number of random person records
        for ($i = 0; $i < $count; $i++) {
            $persons[] = [
                $faker->uuid,
                $faker->title,
                $faker->firstName,
                $faker->lastName,
                $faker->streetAddress,
                $faker->barangay, // Barangay from the 'en_PH' locale
                $faker->city, // Municipality
                $faker->province, // Province
                'Philippines', // Country is fixed
                $faker->phoneNumber,
                $faker->mobileNumber,
                $faker->company,
                $faker->domainName,
                $faker->jobTitle,
                $faker->safeColorName,
                $faker->date('Y-m-d'), // Birthdate
                $faker->email,
                $faker->password
            ];
        }

        return $persons;
    }
}
