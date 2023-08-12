<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::factory()->create([
            'name' => 'U Htain Lin Oo',
            'position' => 'Partner',
            'about' => 'Of the co-founders, Htain Lin Oo started practicing in legal field as a Higher Grade Pleader in 1987 and graduated with Bachelor of Laws degree from the Yangon Arts and Science University in 1991.(Barred at 1996 as Advocate.) He especially practiced in the fields of real estates, civil and commercial litigation. Since the year 1988, when the country started to introduce market oriented economic system, Htain Lin Oo has been specializing legal matters on protection of trademarks, copyrights, real estates, conveyancing and commercial transaction at home and abroad. Htain Lin Oo, managing partner, is taking part in the activities of IBA, IPBA, APAA and ASEAN IPA as a member.'
        ]);

        Member::factory()->create([
            'name' => 'U Thein Aung',
            'position' => 'Partner',
            'about' => 'Thein Aung obtained the Bachelor of Science (Physics) from the same University in 1977, and in 1983, he passed the post-graduate course of the Registered Lawyer. (Enrolled at 1983 as Higher Grade Pleader and Barred at 1998 as Advocate). Thein Aung served under the Attorney-General Office as a Township Law Officer for about 8 years and took further study on the nature of Singapore’s laws and practices in Singapore in collaboration with Singapore lawyers from 1993 to 1994, and in 1995, professionally entered the fields of Intellectual Property protection and promotion in Myanmar and legal consultative services for commercial transaction at home and abroad. Thein Aung, in 2000, passed with credit the post-graduate course of Diploma in Business Law from Yangon University; and also held Practice Diplomas in International Business Organizations and International Intellectual Property Law from the College of Law[U.K] under International Practice Diploma Programme jointly sponsored by the IBA and the College of Law. Meanwhile , Thein Aung is a member of AIPPI , INTA , APAA, IPBA and a councilor of The modernized initiative with excellent management of these two legal colleagues and concerted efforts of the competent associates gave rise this firm to be successful swiftly in a short period. ASEAN IPA whereas takes responsibility for the Firm as the Senior Associate. Now the new generation is included in the management body:'
        ]);

        Member::factory()->create([
            'name' => 'U Aung Khang Oo',
            'position' => 'Managing Partner',
            'about' => 'Aung Khine Oo obtained Master Degree of Laws (LL.M) from Yangon University in the year-------------and become a licensed Lawyer. He attended the course _________________ in Germany in the year ____________ . He is also a member of ASEAN IPA. Now Aung Khing Oo is taking responsibility as a Partner in the HTIP Law Firm. Since 1995 onword, more than two decades of proven quality service , this firm has become one of the leading law firms in Myanmar, having business relationship with over 900 law firms and companies abroad. It gives services to the satisfaction of local and foreign clients in the specific fields of Intellectual Property, Conveyancing, Corporate Law, Legal Consultancy, & Civil and Commercial Arbitration and Litigation. The leading lawyers of our firm have been actively participating and giving assistant to the state institutions for the development of IP laws in Myanmar and to enhance IP awareness among public.'
        ]);
    }
}
