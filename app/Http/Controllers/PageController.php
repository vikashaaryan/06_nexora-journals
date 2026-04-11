<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $stats = [
            ['count' => '31', 'label' => 'Journals'],
            ['count' => '8168', 'label' => 'Articles Published'],
            ['count' => '1537', 'label' => 'Editorial Members'],
            ['count' => '19416', 'label' => 'Authors Worldwide'],
        ];

        $indexingBodies = [
            'PubMed',
            'PubMed Central',
            'Crossref',
            'Google Scholar',
            'DOAJ',
            'Creative Commons',
        ];

        $features = [
            [
                'title' => 'Rigorous Peer Review',
                'description' => 'Every submission undergoes double-blind review by independent domain experts to ensure scientific validity and integrity.',
                'icon' => '🔒',
            ],
            [
                'title' => 'PubMed Indexed',
                'description' => 'Multiple journals indexed in PubMed and PMC for maximum discoverability and citation impact worldwide.',
                'icon' => '🌍',
            ],
            [
                'title' => 'Rapid Publication',
                'description' => 'Streamlined editorial workflows ensure timely decisions and fast publication of accepted manuscripts.',
                'icon' => '⚡',
            ],
            [
                'title' => 'Fully Open Access',
                'description' => 'All content is permanently free to read, share, and reuse under CC BY 4.0 — no paywalls, ever.',
                'icon' => '🔓',
            ],
        ];

        $subjects = [
            [
                'title' => 'Biomedical Sciences',
                'description' => 'Biomedical Sciences subject includes most prestigious journals in the field, all of our journals are Open Access and the published article...',
                'image' => 'https://images.unsplash.com/photo-1532187643603-ba119ca4109e?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Clinical & Medical',
                'description' => 'On these pages you will find our most prestigious Open Access journals in Clinical & Medical fields. In Particular noteworthy publishi...',
                'image' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Medicine & Public Health',
                'description' => 'Fortune Journals Medicine & Public Health subject includes top most Open Access journals in the field. The journals cover a wide range...',
                'image' => 'https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Life Sciences',
                'description' => 'On these pages you will find our top most Open Access journals in the field of Life Sciences including Agriculture & Agronomy, Animal ...',
                'image' => 'https://images.unsplash.com/photo-1530026405186-ed1f139313f8?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Dentistry',
                'description' => 'Our Dentistry journals are peer reviewed and Open Access, it will covers the topics such as the study, diagnosis, prevention, and treatme...',
                'image' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Health Education',
                'description' => 'On these pages you will find our highly accessed journals in the field of Health Education. Under this subject you can find the journals w...',
                'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Chemistry & Chemical Engineering',
                'description' => 'Our Chemistry & Chemical Engineering journals covers the topics such as organic chemistry, inorganic chemistry, industrial chemistry, ...',
                'image' => 'https://images.unsplash.com/photo-1532634993-15f421e42ec0?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Computer Science & Bioinformatics',
                'description' => 'Our Computer Science & Bioinformatics journals covers a wide range of topics include Sequence analysis, Genome annotation, Computation...',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Environmental Science',
                'description' => 'Environmental Science subject includes top most Open Access journals in the field covers pollution, biodiversity, climate and weather chan...',
                'image' => 'https://images.unsplash.com/photo-1473448912268-2022ce9509d8?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Pharmaceutical Sciences',
                'description' => 'Our Pharmaceutical Sciences journals covers the broad range of topics such as Clinical and Industrial Drug Development, Medicinal and Phar...',
                'image' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Neuroscience & Psychology',
                'description' => 'Fortune Journals Neuroscience & Psychology subject includes top most Open Access journals in the field. The topics covered by our jour...',
                'image' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Veterinary Sciences',
                'description' => 'On these pages you can find our top most peer reviewed open access journals list in the Veterinary science field. It will covers the topic...',
                'image' => 'https://images.unsplash.com/photo-1576201836106-db1758fd1c97?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        $articles = [
            [
                'type' => 'Research Article',
                'country' => 'USA',
                'doi' => '10.26502/fjsrs0097',
                'title' => 'Emerging Biologics in Lumbar Disc Degeneration: PRP, Stem Cell Therapy, and Pharmacotherapy in Mobility Restoration and Rehabilitation',
                'authors' => 'Andre Aabedi, Devendra K. Agrawal',
            ],
            [
                'type' => 'Research Article',
                'country' => 'USA',
                'doi' => '10.26502/aimr.0234',
                'title' => 'Convergent Regenerative Strategies in PM&R for Musculoskeletal and Hair Restoration: Integration of PRP, Exosomes, and Physical Modalities',
                'authors' => 'Andre Aabedi, Devendra K. Agrawal',
            ],
            [
                'type' => 'Research Article',
                'country' => 'USA',
                'doi' => '10.26502/aimr.0233',
                'title' => 'Dermatomyositis: Prevalence, Clinical Spectrum, Diagnostic Approach, and Management Strategies',
                'authors' => 'Amrita Sandhu, Devendra K. Agrawal',
            ],
            [
                'type' => 'Review Article',
                'country' => 'USA',
                'doi' => '10.26502/josm.511500247',
                'title' => 'Comparing Regenerative Biologics and Standard Pharmacotherapy for Chronic Rotator Cuff Tendinopathy: A Study of PRP, Cell-Based, and Peptide Interventions',
                'authors' => 'Andre Aabedi, Devendra K. Agrawal',
            ],
            [
                'type' => 'Research Article',
                'country' => 'USA',
                'doi' => '10.26502/aimr.0232',
                'title' => 'Immunopathogenesis, Diagnosis, and Treatment of Hashimoto’s Thyroiditis',
                'authors' => 'Felicia Delgadillo, Devendra K. Agrawal',
            ],
            [
                'type' => 'Review Article',
                'country' => 'USA',
                'doi' => '10.26502/josm.511500243',
                'title' => 'Merits and Limitations of Robotic-assisted Surgery in Improving Precision, Accuracy, and Patient Outcomes in Orthopedic Procedures',
                'authors' => 'David Parvizi, Blake Han, Artin Allahverdian, Devendra K Agrawal',
            ],
            [
                'type' => 'Research Article',
                'country' => 'USA',
                'doi' => '10.26502/aimr.0230',
                'title' => 'Stage-Based Communication Rehabilitation in Amyotrophic Lateral Sclerosis (ALS): A Review of Strategies for Enhancing Quality of Life',
                'authors' => 'Mark C. Jackson, Rafaelle B. Azarraga, Marcel P. Fraix, Devendra K. Agrawal',
            ],
            [
                'type' => 'Research Article',
                'country' => 'USA',
                'doi' => '10.26502/aimr.0229',
                'title' => 'Preventative Measures for Lower Extremity Skin Conditions in Paralympic and Adaptive Sports: An Epidemiological Overview',
                'authors' => 'Vera Wang, Andre Aabedi, Devendra K. Agrawal',
            ],
        ];

        $countries = [
            'USA & Americas' => [
                'USA', 'Brazil', 'Canada', 'Mexico',
            ],
            'Asia-Pacific & Middle East' => [
                'Australia', 'China', 'Hong Kong', 'India', 'Indonesia', 'Japan', 'Malaysia',
                'Philippines', 'Singapore', 'South Korea', 'Taiwan', 'Thailand', 'UAE',
            ],
            'Europe' => [
                'Austria', 'Denmark', 'Finland', 'France', 'Germany', 'Italy', 'Netherlands',
                'Norway', 'Poland', 'Romania', 'South Africa', 'Spain', 'Switzerland',
                'Turkey', 'UK', 'Ukraine',
            ],
        ];

        $featuredJournals = [
            'Journal of Nanotechnology Research',
            'Dental Research and Oral Health',
            'Journal of Surgery and Research',
            'Journal of Food Science and Nutrition Research',
            'Fortune Journal of Rheumatology',
            'Fortune Journal of Health Sciences',
            'International Journal of Applied Biology and Pharmaceutical Technology',
            'Journal of Womens Health and Development',
            'Archives of Microbiology & Immunology',
            'Archives of Clinical and Biomedical Research',
            'Journal of Cancer Science and Clinical Therapeutics',
            'Archives of Veterinary Science and Medicine',
            'Cardiology and Cardiovascular Medicine',
            'Journal of Pediatrics, Perinatology and Child Health',
            'Journal of Spine Research and Surgery',
            'Journal of Pharmacy and Pharmacology Research',
            'Archives of Nephrology and Urology',
            'International Journal of Plant, Animal and Environmental Sciences',
            'Archives of Internal Medicine Research',
            'Journal of Analytical Techniques and Research',
        ];

        return view('home', compact(
            'stats',
            'indexingBodies',
            'features',
            'subjects',
            'articles',
            'countries',
            'featuredJournals'
        ));
    }

    public function about()
    {
        return view('about');
    }

    public function journals()
    {
        $journals = [
            [
                'title' => 'Cardiology and Cardiovascular Medicine',
                'issn' => '2572-9292',
                'if' => '5.6',
                'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=900&q=80',
                'slug' => 'cardiology-and-cardiovascular-medicine',
            ],
            [
                'title' => 'Archives of Clinical and Biomedical Research',
                'issn' => '2572-5017',
                'if' => '5.8',
                'image' => 'https://images.unsplash.com/photo-1532187643603-ba119ca4109e?auto=format&fit=crop&w=900&q=80',
                'slug' => 'archives-of-clinical-and-biomedical-research',
            ],
            [
                'title' => 'Archives of Microbiology & Immunology',
                'issn' => '2572-9365',
                'if' => '3.5',
                'image' => 'https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?auto=format&fit=crop&w=900&q=80',
                'slug' => 'archives-of-microbiology-immunology',
            ],
            [
                'title' => 'Journal of Pharmacy and Pharmacology Research',
                'issn' => '2578-1553',
                'if' => '3.3',
                'image' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-pharmacy-and-pharmacology-research',
            ],
            [
                'title' => 'Journal of Surgery and Research',
                'issn' => '2640-1002',
                'if' => '4.2',
                'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-surgery-and-research',
            ],
            [
                'title' => 'Journal of Pediatrics, Perinatology and Child Health',
                'issn' => '2641-7405',
                'if' => '4.8',
                'image' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-pediatrics-perinatology-and-child-health',
            ],
            [
                'title' => 'Fortune Journal of Health Sciences',
                'issn' => '2644-2906',
                'if' => '6.2',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=80',
                'slug' => 'fortune-journal-of-health-sciences',
            ],
            [
                'title' => 'Dental Research and Oral Health',
                'issn' => '2641-7413',
                'if' => '3.1',
                'image' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',
                'slug' => 'dental-research-and-oral-health',
            ],
            [
                'title' => 'Archives of Internal Medicine Research',
                'issn' => '2688-5654',
                'if' => '8.1',
                'image' => 'https://images.unsplash.com/photo-1516549655669-df83a0774514?auto=format&fit=crop&w=900&q=80',
                'slug' => 'archives-of-internal-medicine-research',
            ],
            [
                'title' => 'Obstetrics and Gynecology Research',
                'issn' => '2637-4560',
                'if' => '3.6',
                'image' => 'https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=900&q=80',
                'slug' => 'obstetrics-and-gynecology-research',
            ],
            [
                'title' => 'Journal of Analytical Techniques and Research',
                'issn' => '2687-8038',
                'if' => '2.8',
                'image' => 'https://images.unsplash.com/photo-1532634993-15f421e42ec0?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-analytical-techniques-and-research',
            ],
            [
                'title' => 'Archives of Nephrology and Urology',
                'issn' => '2644-2833',
                'if' => '3.3',
                'image' => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?auto=format&fit=crop&w=900&q=80',
                'slug' => 'archives-of-nephrology-and-urology',
            ],
            [
                'title' => 'Anesthesia and Clinical Care',
                'issn' => '2687-7996',
                'if' => '3.1',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=900&q=80',
                'slug' => 'anesthesia-and-clinical-care',
            ],
            [
                'title' => 'Journal of Womens Health and Development',
                'issn' => '2644-2884',
                'if' => '3.4',
                'image' => 'https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-womens-health-and-development',
            ],
            [
                'title' => 'Journal of Spine Research and Surgery',
                'issn' => '2687-8046',
                'if' => '3.123',
                'image' => 'https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-spine-research-and-surgery',
            ],
            [
                'title' => 'Journal of Radiology and Clinical Imaging',
                'issn' => '2644-2809',
                'if' => '4.3',
                'image' => 'https://images.unsplash.com/photo-1579154204601-01588f351e67?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-radiology-and-clinical-imaging',
            ],
            [
                'title' => 'Journal of Food Science and Nutrition Research',
                'issn' => '2642-1100',
                'if' => '3.8',
                'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=900&q=80',
                'slug' => 'journal-of-food-science-and-nutrition-research',
            ],
            [
                'title' => 'International Journal of Applied Biology and Pharmaceutical Technology',
                'issn' => '0976-4550',
                'if' => '3.0',
                'image' => 'https://images.unsplash.com/photo-1530210124550-912dc1381cb8?auto=format&fit=crop&w=900&q=80',
                'slug' => 'international-journal-of-applied-biology-and-pharmaceutical-technology',
            ],
            [
                'title' => 'International Journal of Plant, Animal and Environmental Sciences',
                'issn' => '2231-4490',
                'if' => '4.1',
                'image' => 'https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=900&q=80',
                'slug' => 'international-journal-of-plant-animal-and-environmental-sciences',
            ],
            [
                'title' => 'Archives of Veterinary Science and Medicine',
                'issn' => '2689-2308',
                'if' => '1.1',
                'image' => 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=900&q=80',
                'slug' => 'archives-of-veterinary-science-and-medicine',
            ],
        ];

        return view('journals', compact('journals'));
    }

    public function journalDetails($slug)
    {
        return view('journal-details', compact('slug'));
    }

    public function submit()
    {
        return view('submit-manuscript');
    }

   public function apc()
{
    $apcCards = [
        [
            'title' => 'No Submission Fees',
            'icon' => '✅',
            'description' => 'APC is charged only upon acceptance — submitting your manuscript is completely free of charge.',
        ],
        [
            'title' => 'Income-Based Discounts',
            'icon' => '🌍',
            'description' => 'Tiered APC pricing for authors from middle and low-income countries per World Bank classification.',
        ],
        [
            'title' => 'CC BY 4.0 License',
            'icon' => '📋',
            'description' => 'All articles published under Creative Commons Attribution License — free sharing and reuse with proper attribution.',
        ],
        [
            'title' => 'Discounts Available',
            'icon' => '💵',
            'description' => 'Authors from low and middle-income countries may be eligible for a partial APC discount. Contact us before submitting your manuscript.',
        ],
    ];

    $apcRows = [
        ['journal' => 'Anesthesia and Critical Care', 'issn' => '2687-7996', 'high' => '€2,300', 'middle' => '€1,380', 'low' => '€828'],
        ['journal' => 'Archives of Clinical and Biomedical Research', 'issn' => '2572-5017', 'high' => '€1,840', 'middle' => '€1,104', 'low' => '€828'],
        ['journal' => 'Archives of Clinical and Medical Case Reports', 'issn' => '2575-9655', 'high' => '€2,300', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Archives of Internal Medicine Research', 'issn' => '2688-5654', 'high' => '€2,300', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Archives of Microbiology & Immunology', 'issn' => '2572-9365', 'high' => '€1,380', 'middle' => '€828', 'low' => '€276'],
        ['journal' => 'Archives of Nephrology and Urology', 'issn' => '2644-2833', 'high' => '€1,380', 'middle' => '€828', 'low' => '€276'],
        ['journal' => 'Archives of Physiotherapy and Rehabilitation', 'issn' => '3067-932X', 'high' => '€920', 'middle' => '€460', 'low' => '€276'],
        ['journal' => 'Archives of Veterinary Science and Medicine', 'issn' => '2689-2308', 'high' => '€920', 'middle' => '€460', 'low' => '€276'],
        ['journal' => 'Cardiology and Cardiovascular Medicine', 'issn' => '2572-9292', 'high' => '€2,300', 'middle' => '€1,380', 'low' => '€460'],
        ['journal' => 'Dental Research and Oral Health', 'issn' => '2641-7413', 'high' => '€1,840', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Fortune Journal of Health Sciences', 'issn' => '2644-2906', 'high' => '€2,760', 'middle' => '€1,380', 'low' => '€920'],
        ['journal' => 'International Journal of Applied Biology and Pharmaceutical Technology', 'issn' => '0976-4550', 'high' => '€1,380', 'middle' => '€690', 'low' => '€276'],
        ['journal' => 'International Journal of Plant, Animal and Environmental Sciences', 'issn' => '2231-4490', 'high' => '€1,380', 'middle' => '€828', 'low' => '€460'],
        ['journal' => 'Journal of Analytical Techniques and Research', 'issn' => '2687-8038', 'high' => '€920', 'middle' => '€460', 'low' => '€276'],
        ['journal' => 'Journal of Food Science and Nutrition Research', 'issn' => '2642-1100', 'high' => '€1,840', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Journal of Ophthalmology and Research', 'issn' => '2644-0024', 'high' => '€920', 'middle' => '€460', 'low' => '€276'],
        ['journal' => 'Journal of Orthopaedics and Sports Medicine', 'issn' => '2688-5115', 'high' => '€2,300', 'middle' => '€1,380', 'low' => '€828'],
        ['journal' => 'Journal of Pediatrics, Perinatology and Child Health', 'issn' => '2641-7405', 'high' => '€2,760', 'middle' => '€2,300', 'low' => '€920'],
        ['journal' => 'Journal of Pharmacy and Pharmacology Research', 'issn' => '2578-1553', 'high' => '€1,380', 'middle' => '€690', 'low' => '€276'],
        ['journal' => 'Journal of Psychiatry and Psychiatric Disorders', 'issn' => '2572-519X', 'high' => '€1,840', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Journal of Radiology and Clinical Imaging', 'issn' => '2644-2809', 'high' => '€1,840', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Journal of Spine Research and Surgery', 'issn' => '2687-8046', 'high' => '€1,380', 'middle' => '€828', 'low' => '€460'],
        ['journal' => 'Journal of Surgery and Research', 'issn' => '2640-1002', 'high' => '€1,840', 'middle' => '€920', 'low' => '€460'],
        ['journal' => 'Journal of Womens Health and Development', 'issn' => '2644-2884', 'high' => '€2,760', 'middle' => '€1,380', 'low' => '€276'],
        ['journal' => 'Obstetrics and Gynecology Research', 'issn' => '2637-4560', 'high' => '€2,300', 'middle' => '€920', 'low' => '€460'],
    ];

    return view('apc', compact('apcCards', 'apcRows'));
}

    public function editorial()
    {
        return view('editorial-process');
    }

    public function membership()
    {
        return view('membership');
    }

    public function guidelines()
    {
        return view('guidelines');
    }

    public function contact()
    {
        return view('contact');
    }
}
