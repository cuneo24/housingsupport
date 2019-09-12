<?php

use Illuminate\Database\Seeder;
use App\Partner;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $partners = [
            [
                'Emmaus, Inc., Haverhill, MA',
                'N/A',
                'https://emmausinc.org',
                'The mission of Emmaus, Inc. is to affirm the value of human dignity and self-respect for every person. We are called by our collective spiritual and social responsibility to serve all people in need—the homeless, disadvantaged, disabled, unemployed, and oppressed. Our goal is to enhance societal and personal advancement through provision of housing and support services that empower individuals and families to reach their fullest potential.

Emmaus helps people rebuild their lives by creating and renewing a sense of community.  Emmaus purchased its first property in 1986 for use as an emergency shelter. Since that time, the organization was launched into affordable housing development, including Gilead House,  the George C. Wadleigh Center,  Mitch’s Place, Jericho House Safe Haven, Bethel Business Center, and the Housing Assistance/Stabilization Program. Following projects included the Emerson Street Shelter Plus Care Project, Emmaus Family, the Applewood Apartments, Evergreen Place, 115 Emerson Street, 101 Winter Street and additonal units.  Over the past decade, Emmaus has consistently received statewide recognition for moving the greatest number of homeless families out of emergency shelter and into permanent housing, Last year alone, Emmaus placed 150 families into permanent housing and diverted another 300 high-risk families from entering emergency shelter by stabilizing them in their current housing or finding them new housing.'
            ],
            [
                'Veterans Northeast Outreach Center',
                'N/A',
                'https://www.vneoc.org/',
                'The mission of the Veterans Northeast Outreach Center is to provide the highest quality of services to assist, support, and advocate for all Veterans and their families in Essex, Middlesex, Barnstable and Rockingham County NH. The Outreach Center, our keystone program, has been in continuous operation since 1985. Established in Lawrence, VNOC started as a storefront operation, staffed largely by volunteers, to provide support and advocacy to Vietnam Veterans. Through the years, the focus of the Center has expanded to accommodate over 50,000 Veterans in our region who are eligible for care. We provide a continuum of care to Veterans, their families, from the very basic food and shelter needs to advocacy, information, referral, career, and education services. VNOC also sponsors a number of outreach initiatives to Veterans of all eras and families of Veterans. The Center is funded, in part, through contracts with Department of Veterans Affairs, Mass. Department of Veterans Services, US Dept. of Housing and Urban Development, and private donations.'
            ],
            [
                'Fidelity House and Career Resources',
                'N/A',
                'https://www.fidelityHHS.org',
                'Fidelity House CRC began in 1968 when an agency that would later evolve into Career Resources Corporation (CRC) opened a traditional sheltered workshop, providing meaningful work activities for adults with developmental disabilities. In 1971, Fidelity House, Inc. was founded as a single group home in Lawrence, an alternative to placement in a state institution for eight adults with disabilities. Both agencies have continuously expanded services, creating new housing options and providing a wide variety of supportive services for people with intellectual and developmental disabilities or other significant challenges. In 2019, Fidelity House, Inc. and CRC merged into one organization for the purpose of further enhancing services, improving efficiency and increasing the capacity for future innovation.'
            ],
            [
                'Vinfen',
                'N/A',
                'https://www.vinfen.org',
                'Vinfen’s mission is to transform lives by building the capacity of individuals, families, organizations, and communities to learn, thrive, and achieve their goals. Our services promote the recovery, resiliency, habilitation, and self-determination of the people we serve. As a human services leader, we strive to be the provider, employer, and partner of choice.  For 40 years, Vinfen has been dedicated to transforming lives. We are a leading provider of community-based services to people with psychiatric conditions, intellectual and developmental disabilities, brain injuries, and behavioral health challenges. Our dedicated staff uses the latest in science-based interventions to support the people we serve in achieving their goals and leading more independent, productive, and valued lives as members of their community.'
            ],
            [
                'Massachusetts Department of Mental Health',
                'N/A',
                'https://www.mass.gov/orgs/massachusetts-department-of-mental-health',
                'The Department of Mental Health, as the State Mental Health Authority, assures and provides access to services and supports to meet the mental health needs of individuals of all ages; enabling them to live, work and participate in their communities.'
            ],
            [
                'John Ashford Link House, Salisbury MA',
                'N/A',
                'https://linkhouseinc.org/',
                'The John Ashford Link House was established in 1972 and developed the 4th half-way house to be licensed in the Commonwealth, and continues to thrive today at its original location, 44 years since being incorporated.  To expand the continuity of care within the agency and to support the growing need in our communities, the John Ashford Link House has also developed other programs to provide sober, supportive residential housing with case management services to address long-term abstinence and to provide residents with community connections utilizing a peer-to-peer mentorship model.'
            ]
        ];

        foreach ($partners as $partnerData) {
            $partner = new Partner();

            $partner->name = $partnerData[0];
            $partner->logo_url = $partnerData[1];
            $partner->website_url = $partnerData[2];
            $partner->description = $partnerData[3];
            $partner->save();
        }
    }
}
