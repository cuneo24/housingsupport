<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $about = [
            "Housing Support Inc. was incorporated in 1990 as a vehicle to purchase a shelter for women and their children located in Amesbury Ma. In 1994, the bylaws were changed to broaden the scope of the agency and to add community leaders and user representatives to the board. HSI owns and manages properties providing housing to disabled very low income individuals in Amesbury, Haverhill, and Lawrence, MA.",

            "Since then the corporation has developed an additional eight properties in the communities of Haverhill, Lawrence, and Amesbury, which offer supportive housing to homeless and/or disabled individuals. The projects were successfully completed despite challenges presented by difficult areas for the development and complex methods of competitive financing and public grant awards. HSI's real estate portfolio has a value of over $ 8,000,000. Over $1,500,000 in public grants has been awarded along with rental subsidies of $9,000,000 over the next twenty years have been guaranteed.",

            "These projects testify to a strong record by HSI in its ability to acquire property and develop it into affordable housing through public grants, public equity financing, market financing, and private donations. HSI has worked with The MA Land Bank, Community Economic Development and Assistance Corporation, Federal HOME Loan Bank, DHCD, DPH, DMH, DSS, MA Housing Finance Agency, Municipal Community Development Offices, MA Housing, North Shore HOME Consortium, Department of Housing and Urban Development and numerous local and regional housing authorities.",

            "HSI has received national recognition for its work when the “Elms” was selected by the Fannie Mae Foundation to receive one of only eighteen awards given nationwide for Excellence.",

            "Financial Partners include the Department of Housing and Urban Development, DHCD, Newburyport Bank, Pentucket Bank, CEDAC, Mass Housing, North Shore HOME Consortium, and the Federal HOME Loan Bank."
        ];

        $a = New About();
        $a->firstp = $about[0];
        $a->secondp = $about[1];
        $a->thirdp = $about[2];
        $a->fourthp = $about[3];
        $a->fifthp = $about[4];
        $a->save();
    }
}
