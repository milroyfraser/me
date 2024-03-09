<?php

namespace App\Repositories;

use App\Dtos\Recommendation;
use Illuminate\Support\Collection;

class RecommendationRepository
{
    private array $recommendations = [
        [
            'name' => 'Christopher Svanefalk',
            'slug' => 'christopher-svanefalk',
            'linkedin' => 'https://www.linkedin.com/in/csvanefalk/',
            'title' => 'Software Developer at Volvo Group',
            'image' => '/img/chris.jpeg',
            'body' => [
                'Milroy was one of our first employees, and he rapidly rose to become a core player in the company. As our senior engineer, he was responsible for leading work on our primary in-house and client projects, while managing communication of work status and prospects with the board of directors. He shone through in both roles.',
                'Milroy is a keen learner and passionate programmer. He clearly shows that he works for much more than a paycheck - always eager to pick up new technologies and know-how, putting them into practice to deliver great products. He is forward thinking, taking initiative within the line of directives in order to lead his team to meet the goals set out.',
                'Finally, Milroy is simply a great person - honest, kind and friendly. I am very happy to have developed an enduring friendship with him during our time working together, a friendship which is as vibrant today as ever.',
                'I heartily commend Milroy and his expertise to any client or employer. He is a rare breed, and absolutely somebody who will bring value to your organisation.',
            ],
        ],
        [
            'name' => 'Sanka Attanayake',
            'slug' => 'sanka-attanayake',
            'linkedin' => 'https://www.linkedin.com/in/sanka-attanayake/',
            'title' => 'Project Management Consultant | Software Project Management',
            'image' => '/img/sanka.jpeg',
            'body' => [
                'I know Milroy as one of my subordinates who worked at DMS Software Engneering (Pvt) Ltd. He was one of the most enthusiastic and skilled employees out of all the junior employees I had to overlook during his time at DMS. I was particularly impressed about his dedication to work and the contribution he made by introducing latest technologies to the ongoing developments in the organization. At the same time he was great team player who managed his relationships professionally with his coworkers and the management.',
            ],
        ],
        [
            'name' => 'Umme Abida',
            'slug' => 'umme-abida',
            'linkedin' => 'https://www.linkedin.com/in/umme-abida-b3641013/',
            'title' => 'Experienced Business Analyst',
            'image' => '/img/umme.jpeg',
            'body' => [
                'Milroy is a gifted IT professional because he has many years of experience in Web Design, Website Development, Smartphone Applications and His incredible depth of knowledge was easily seen in the Websites he developed for our clients. Milroy is highly driven; he showed great leadership skills at YST, during critical phase of the project I found him very reliable. I see Milroy very successful in future. I highly recommend him to all other.',
            ],
        ],
        [
            'name' => 'Tharindu Rajapaksha',
            'slug' => 'tharindu-rajapaksha',
            'linkedin' => 'https://www.linkedin.com/in/tharindurajapaksha/',
            'title' => 'Lead DevOps Engineer at LSEG Technology',
            'image' => '/img/tharindu.jpeg',
            'body' => [
                "Milroy is a person who is really passionate about what he does. I worked with Milroy in the same team and his knowledge on Angular and Laravel was unchallenged. He knows what he talks about and always follows good software engineering practices. He's very dedicated to his task at hand and never gives up. He was good senior and whenever I went for help with a problem he always helps out at the best he can. He never misses a chance to learn something new and always stay updated. I can confidently recommend him to anyone on his skills and on his self as a person.",
            ],
        ],
        [
            'name' => 'Thilina Munasinghe',
            'slug' => 'thilina-munasinghe',
            'linkedin' => 'https://www.linkedin.com/in/thilina-munasinghe/',
            'title' => 'Architect - Development & Operations | 5x AWS | Certified Professional Architect',
            'image' => '/img/thilina.jpeg',
            'body' => [
                'Milroy is an excellent team player. He worked in our team as senior engineer. His knowledge on Angularjs, Laravel, TDD, E2E testing is amazing. He does work in style, and his releases are very stable & implemented thinking for longer time in future.',
                'He is an organized, well balanced person. He demonstrated elegant skills on frontend development & associated latest technologies.',
                'I recommend him for any designation relates to senior developer/lead engineer specialzed on frontend web technologies. ',
            ],
        ],
        [
            'name' => 'Damith Karunaratne',
            'slug' => 'damith-karunaratne',
            'linkedin' => 'https://www.linkedin.com/in/damith-karunaratne-9a2a7831/',
            'title' => 'Tech Lead at Creately',
            'image' => '/img/damith.jpeg',
            'body' => [
                "A highly skilled web developer coming from a good engineering background. Quality of the work is the key feature that defines Milroy's development skills. He tries to provide quality solutions to any task given to him. Also Milroy is a committed team player who encourages others as well. Can be count on him for any given task.",
            ],
        ],
        [
            'name' => 'Rajith Konara',
            'slug' => 'rajith-konara',
            'linkedin' => 'https://www.linkedin.com/in/rajith-konara/',
            'title' => 'Software Engineer',
            'image' => '/img/rajith.jpeg',
            'body' => [
                'Milroy is one of my mentors. He is an entrepreneur who founded Olionsoft. He is very passionate about what is he doing. He Always helped people who are willing to learn including myself and helped students by conducting tech events. He has vast knowledge in software Engineering. Milroy is a Laravel veteran.',
            ],
        ],
        [
            'name' => 'Niels de Rijk',
            'slug' => 'niels-de-rijk',
            'linkedin' => 'https://www.linkedin.com/in/nielsderijk/',
            'title' => 'Sr. Product Designer at Temper',
            'image' => '/img/niels.jpeg',
            'body' => [
                'Milroy is an impassioned full-stack developer with a strong technical background and a knack for solving problems in the most elegant way. He has worked with me (front-end designer) on several big features of our job searching platform and has become the go-to resource for developers, product owners and even designers looking for input on their projects. He doesn’t feel shy when it comes down to making suggestions on how to improve our product, which often resulted in a better result than originally planned. It’s thanks to him that our product runs smoothly and our code is reliable. I’m happy with the work we did and give him my full recommendation!',
            ],
        ],
        [
            'name' => 'Mohammad Hosein Abedi',
            'slug' => 'mohammad-hosein-abedi',
            'linkedin' => 'https://www.linkedin.com/in/mohammad-hosein-abedi/',
            'title' => 'Software Engineer at Mollie',
            'image' => '/img/hosein.jpeg',
            'body' => [
                'Milroy is a person with great skills and deep experience in modern software development. He is not only a reliable and forward-thinking software engineer but also an inspiring team player. If you need a highly committed expert, Milroy is the right person.',
            ],
        ],
        [
            'name' => 'Gbeila Aliu Wahab',
            'slug' => 'gbeila-aliu-wahab',
            'linkedin' => 'https://www.linkedin.com/in/gbeila-aliu-wahab/',
            'title' => 'Full Stack Engineer (TALL stack) at Nanny Nina',
            'image' => '/img/aliu.jpeg',
            'body' => [
                'Milroy has high technical and architectural abilities in designing stable and maintainable APIs. He has an eye for quality and has a very good human relation in working with others.',
            ],
        ],
        [
            'name' => 'Gimhani Perera',
            'slug' => 'gimhani-perera',
            'linkedin' => 'https://www.linkedin.com/in/gimhaniperera/',
            'title' => 'QA Consultant',
            'image' => '/img/gimhani.jpeg',
            'body' => [
                'Milroy is one of the best developers I have met in my professional life while working at Temper. He proved himself to be a trustworthy and reliable employee with solid problem solving and technical skills. He always brings out innovative ideas to the company and his quick thinking and cautious personality has helped the company in many ways.',
                "During his tenure at Temper, he's gone out of his way to welcome newcomers and resolve any problems they might have. He is an excellent team lead and works in coordination with rest of the team. He encourages and helps other team members to achieve their targets too.",
                'Milroy is a valuable asset to any team, he is simply that good. and I I wish you, all the very best for the long-lasting success at your doorstep..!',
            ],
        ],
        [
            'name' => 'Mijke Zomer',
            'slug' => 'mijke-zomer',
            'linkedin' => 'https://www.linkedin.com/in/mijkezomer/',
            'title' => 'Project/Product Management & Strategy',
            'image' => '/img/mijke.jpeg',
            'body' => [
                'Working with Milroy is at the same time fun and easy. He has a deep understanding of the product, always thinks about the end user when discussing solutions and challenges me when a shortcut has implications for the longer term scalability. At the same time he’s positive and there’s always room for a chat and a joke. This is a great combination and happy to work in the same team!',
            ],
        ],
        [
            'name' => 'Daniel Lima',
            'slug' => 'daniel-lima',
            'linkedin' => 'https://www.linkedin.com/in/yourwebmaker/',
            'title' => 'Principal Software Engineer at Mimecast',
            'image' => '/img/daniel.jpeg',
            'body' => [
                "Milroy takes responsibility for his tasks and he's a self-manageable professional.",
                "He's always committed to the work that he does deliver good quality code. Instead of doing tasks just for doing, he also thinks about taking any decision regarding software architecture and code.",
                "He's passionate about his profession.",
            ],
        ],
        [
            'name' => 'Rutger Van Straelen',
            'slug' => 'rutger-van-straelen',
            'linkedin' => 'https://www.linkedin.com/in/rutgervanstraelen/',
            'title' => 'Vice President of Product at HealthCare.com',
            'image' => '/img/rutger.jpeg',
            'body' => [
                "During my time at Temper, I had the pleasure to work closely with Milroy. Not only is he an outstanding full stack developer, he is also one of the kindest and most committed team members I've had the pleasure of working with. I hope our paths will cross again in the future.",
            ],
        ],
    ];

    /** @return Collection<Recommendation> */
    public function all(): Collection
    {
        return collect($this->recommendations)
            ->map(fn (array $recommendation) => Recommendation::fromArray($recommendation));
    }

    public function findBySlug(string $slug): ?Recommendation
    {
        return Recommendation::fromArray(collect($this->recommendations)
            ->firstWhere('slug', $slug));
    }
}
