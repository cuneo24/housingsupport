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
                'Executive Director, Merrimack Valley Planning Commission, Haverhill MA. Ms. Conard has many years of experience in the public and private sectors, including having served in both the executive and legislative branches of state government, and local government overseeing all planning, zoning, community development, building/inspections, and conservation functions along with a staff of 25.'
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
                'Ms. La France was the Director of the Newburyport Public Library for many years. She currently serves in a leadership role on a number of local boards and financial institutions.'
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
                'The President of the Greater Newburyport Chamber of Commerce & Industry. He is the former Essex County Sheriff and lifelong Newburyport resident. Prior to his appointment to sheriff, Cousins had served on the Newburyport, Massachusetts City Council, and then in the Massachusetts House of Representatives from 1993.'
            ],
            [
                'Paula',
                'Newcomb',
                'Executive Director',
                'She has been involved in the development of private and public housing opportunities for most of her career, including fifteen years in compliance at the US Department of HUD.'
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