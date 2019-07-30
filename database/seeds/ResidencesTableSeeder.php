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
                '30 SRO',
                '.068',
                '7,453 square feet',
                'CB',
                '27 bedrooms, 8 full bathrooms, and 3 kitchens',
                '11302',
                '466',
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
                'Dormitory',
                '1.51',
                '7,728 square feet',
                'R20',
                '14 bedrooms, 3.5 bathrooms, and 1 kitchen. The property is the birthplace of Josiah Bartlett in 1730.',
                '10917',
                '3',
                '0'
            ],
            [
                'Main Street Residence',
                'images/mainstreetresidence.jpg',
                'Market or Subsidized Tenants',
                'Unit 3 – Veterans Northeast Outreach Center',
                '278 Main Street',
                'Amesbury',
                'MA',
                '01913',
                '1991',
                '1880',
                '3',
                '1.51',
                '2,910 square feet',
                'R20',
                'N/A',
                '10917',
                '3',
                '0'
            ],
            [
                'Supportive Residence',
                'images/supportiveresidence.jpg',
                'Housing with services for individuals with developmental disabilities',
                'Career Resources Inc.',
                '280 Main Street',
                'Amesbury',
                'MA',
                '01913',
                '1991',
                '2001',
                '1',
                '1.51',
                '2,294 square feet',
                'R20',
                '1 unit, 5 bedrooms, 2.5 bathrooms and 1 kitchen',
                '10917',
                '3',
                '0'
            ],
            [
                'Webster Building',
                'images/websterbuilding.jpg',
                'Housing with services for formerly homeless individuals with mental health and developmental disabilities.  Commercial tenant occupies first floor 2,898 square feet.',
                'Career Resources Inc. and Vinfen.',
                '46 South Main Street',
                'Bradford',
                'MA',
                '01835',
                '1992',
                '1887',
                '10+ Comm',
                '0.21',
                '8,826 square feet',
                'N/A',
                '10 total bedroom(s), 10 total baths on two floors, with a commercial tenant on floor one, 3 total half baths',
                '18958',
                '136',
                '0'
            ],
            [
                'Bryant Avenue Residence',
                'images/bryantavenue.jpg',
                'Housing with services for homeless and very low-income veterans.',
                'Veterans Northeast Outreach Center',
                '2-4 Bryant Avenue',
                'Bradford',
                'MA',
                '01835',
                '1994',
                '1900',
                '3',
                '.181',
                '2,925 square feet',
                'N/A',
                '1 units, 1 bedrooms, 1 bathroom and kitchen - 2 unit(s), 10 room(s), 4 bedroom(s), 2 bath(s), 0 half bath(s).',
                '12818',
                '334',
                '0'
            ],
            [
                'Parker Street Residence – Molin Building',
                'images/parkerstreetresiidence.jpg',
                'On January 21, 2008, a fast-moving fire engulfed a block of Parker and Market Street in Lawrence and destroyed this property. It had been seven residential units over commercial space. The property was rebuilt in 2009 and contains 10 residential apartments and one commercial unit. The tenant and service provider will continue to be Vinfen and the Dept. of Mental Health. with housing and services for individuals with disabilities.',
                'Vinfen and the Dept. of Mental Health',
                '2 Springfield Street/46-58 Parker Street',
                'Lawrence',
                'MA',
                '01843',
                '1997',
                'N/A',
                '10',
                '.11',
                'N/A',
                'R3',
                'Ten one-bedroom units and one commercial space.',
                '4871',
                '345',
                '0'
            ],
            [
                'E. James Gaines Veterans Residence',
                'images/ejaimesgaines.jpg',
                'The property was built in 2004 and contains 10 residential apartments for Veterans. Many of the tenants are self – sufficient however we work with Veterans Northeast Outreach Center.',
                'Self-sufficience and Veterans Northeast Outreach Center',
                '34 Parker Street',
                'Lawrence',
                'MA',
                '01843',
                '2002',
                '2004',
                '10',
                '.11',
                'N/A',
                'R3',
                'Eight one-bedroom and two 2-bedroom units.',
                'N/A',
                'N/A',
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
                '3',
                '.114',
                '4,188 square feet',
                'R3',
                '3 units, 12 bedrooms, 3 bathrooms and kitchens',
                '3962',
                '165',
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
                '0',
                '.088',
                'N/A',
                'R3',
                'N/A',
                '4213',
                '189',
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
            $residence->units = $residenceData[10];
            $residence->land_area = $residenceData[11];
            $residence->living_area = $residenceData[12];
            $residence->zoning = $residenceData[13];
            $residence->other = $residenceData[14];
            $residence->book = $residenceData[15];
            $residence->page = $residenceData[16];
            $residence->hidden = $residenceData[17];

            $residence->save();
        }
    }
}
