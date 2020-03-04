<?php

use Illuminate\Database\Seeder;
use App\Director;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $directors = [
            [
                'Karen',
                'Conard',
                'President',
                'City Manager, City of Portsmouth NH. Ms. Conard has many years of experience in the public and private sectors, including having served in both the executive and legislative branches of state government, and local government overseeing all planning, zoning, community development, building/inspections, and conservation functions.'
            ],
            [
                'Robert',
                'Jones',
                'Treasurer',
                'Mr. Jones has served as Treasurer of HSI for nearly 20 years, and has decades of experience in banking. He is presently a Senior Loan Officer with the Newburyport Bank with many years prior with the Massachusetts Growth Capital Corporation.'
            ],
            [
                'Dorothy',
                'La France',
                'Clerk',
                'Ms. La France was the Director of the Newburyport Public Library for many years. She is currently retired and serves in a leadership role on a number of local boards.'
            ],
            [
                'Lisa',
                'L. Mead',
                'Board Member',
                'A partner in the Firm, she is also former City Solicitor for the City of Somerville. She is a former three-term Mayor of the City of Newburyport and a former two-term City Councilor for the City of Newburyport. Lisa also served as State Director for Senator John Kerry’s Massachusetts operations.'
            ],
            [
                'Frank G.',
                'Cousins Jr.',
                'Board Member',
                'The President of the Greater Newburyport Chamber of Commerce & Industry. He is the former Essex County Sheriff and lifelong Newburyport resident. Prior to his appointment to sheriff, Cousins had served on the Newburyport, Massachusetts City Council, and then elected to the Massachusetts House of Representatives in 1993.'
            ],
            [
                'Paula',
                'Newcomb',
                'Executive Director',
                'Ms. Newcomb has been involved in the development of private and public affordable housing opportunities for forty years, including fifteen years in compliance at the US Department of HUD, and ten years with the City of Haverhill in Community Development and Affordable Housing production.'
            ]
        ];

        foreach ($directors as $directorData) {
            $director = new Director();

            $director->fname = $directorData[0];
            $director->lname = $directorData[1];
            $director->position = $directorData[2];
            $director->description = $directorData[3];

            $director->save();
        }
    }
}