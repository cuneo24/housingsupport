<?php

use Illuminate\Database\Seeder;
use App\Residence;

class ResidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $residences = [
            [
                'The Elms Residence',
                'images/theelmsresidence.jpg',
                'The Elms provides single room occupancy with shared kitchens and baths for formerly homeless men in recovery with on site management and supportive services.',
                'Assistance Vouchers managed by the Amesbury Housing Authority leases individual rooms to tenants with services through Link House, Inc.',
                '53 Friend Street',
                'Amesbury',
                'MA',
                '01913',
                '1992',
                '1811',
                '.068',
                '7,453 sq. ft',
                '27 bedrooms, 8 full bathrooms, 4.5 bathrooms, common areas, a meeting room, and a kitchen',
                '0'
            ],
            [
                'Bartlett House',
                'images/bartletthouse.jpg',
                'This 14-room shelter/SRO for women who are sober and have domestic violence in their history. The program has been operated since 1993 (formerly Transitional Housing).',
                'Emmaus, Inc. provides services to the tenants of this building, funded by HSI. The building is supported by ten MVRP housing vouchers.',
                '276 Main Street',
                'Amesbury',
                'MA',
                '01913',
                '1991',
                '1850',
                '1.51',
                '7,728 sq. ft',
                '14 bedrooms, 3.5 bathrooms, and 1 kitchen. The property is the birthplace of Josiah Bartlett in 1730.',
                '0'
            ],
            [
                'Main Street Residence',
                'images/mainstreetresidence.jpg',
                'Tenants supported by Veterans Northeast Outreach Center',
                'Veterans Northeast Outreach Center',
                '278 Main Street',
                'Amesbury',
                'MA',
                '01913',
                '1991',
                '1880',
                '1.51',
                '2,910 sq. ft',
                '3 two-bedroom apartments',
                '0'
            ],
            [
                'Main Street Supportive Residence',
                'images/supportiveresidence.jpg',
                'Group home with services for individuals with developmental disabilities',
                'Fidelity House and Career Resources Inc.',
                '280 Main Street',
                'Amesbury',
                'MA',
                '01913',
                '1991',
                '2001',
                '1.51',
                '2,294 sq. ft',
                '1 unit, 5 bedrooms, 2.5 bathrooms and 1 kitchen',
                '0'
            ],
            [
                'Webster Building',
                'images/websterbuilding.jpg',
                'Housing with services for formerly homeless individuals with mental health and developmental disabilities.  Commercial tenant occupies first floor 2,898 square feet.',
                'Fidelity House, Career Resources Inc. and Vinfen.',
                '46 South Main Street',
                'Bradford',
                'MA',
                '01835',
                '1992',
                '1887',
                '0.21',
                '8,826 sq. ft',
                '10 total bedroom(s), 10 total baths on two floors, with a commercial tenant on floor one, 3 total half baths',
                '0'
            ],
            [
                'Bryant Avenue Residence',
                'images/bryantavenue.jpg',
                'Housing with services for homeless and very low-income veterans. Tenants supported by Veterans Northeast Outreach Center.',
                'Veterans Northeast Outreach Center',
                '2-4 Bryant Avenue',
                'Bradford',
                'MA',
                '01835',
                '1994',
                '1900',
                '.181',
                '2,925 sq. ft',
                '4 bedrooms, 2 units, 3 baths',
                '0'
            ],
            [
                'Parker Street Residence – Molin Building',
                'images/parkerstreetresidence.jpg',
                'Housing and services for individuals with mental illnesses and disabilities.',
                'Vinfen and the Dept. of Mental Health',
                '2 Springfield Street/46-58 Parker Street',
                'Lawrence',
                'MA',
                '01843',
                '1997',
                'Rebuilt 2009',
                '.11',
                '10,347 sq. ft',
                '12 bedroom unit with nine one-bedroom units and one commercial space',
                '0'
            ],
            [
                'E. James Gaines Veterans Residence',
                'images/ejamesgaines.jpg',
                'Residential apartments for Veterans. Many of the tenants are self – sufficient however we work with Veterans Northeast Outreach Center.',
                'Self-sufficience and Veterans Northeast Outreach Center',
                '34 Parker Street',
                'Lawrence',
                'MA',
                '01843',
                '2002',
                '2004',
                '.11',
                '9,234 sq. ft',
                'One-bedroom and 2-bedroom units.',
                '0'
            ],
            [
                'High Street Residence',
                'images/highstreetresidence.jpg',
                'Housing with services for individuals with Mental illness',
                'MA Department of Mental Health.',
                '329 High Street',
                'Lawrence',
                'MA',
                '01841',
                '1993',
                '1900',
                '.114',
                '4,188 sq. ft',
                '3 units, 12 bedrooms, 3 bathrooms and kitchens',
                '0'
            ],
            [
                'High Street Vacant Lot',
                'images/highstreetvacantlot.jpg',
                'Vacant lot',
                'N/A',
                '327 High Street',
                'Lawrence',
                'MA',
                '01841',
                '1995',
                'N/A',
                '.088',
                'N/A',
                'N/A',
                '1'
            ]

        ];

        foreach ($residences as $residenceData) {
            $residence = new Residence();

            $residence->name = $residenceData[0];
            $residence->picture_url = $residenceData[1];
            $residence->program = $residenceData[2];
            $residence->provider = $residenceData[3];
            $residence->street = $residenceData[4];
            $residence->city = $residenceData[5];
            $residence->state = $residenceData[6];
            $residence->zip = $residenceData[7];
            $residence->year_acquired = $residenceData[8];
            $residence->year_built = $residenceData[9];
            $residence->land_area = $residenceData[10];
            $residence->living_area = $residenceData[11];
            $residence->other = $residenceData[12];
            $residence->hidden = $residenceData[13];

            $residence->save();
        }
    }
}
