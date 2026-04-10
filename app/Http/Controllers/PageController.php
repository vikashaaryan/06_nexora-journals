<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                'USA', 'Brazil', 'Canada', 'Mexico'
            ],
            'Asia-Pacific & Middle East' => [
                'Australia', 'China', 'Hong Kong', 'India', 'Indonesia', 'Japan', 'Malaysia',
                'Philippines', 'Singapore', 'South Korea', 'Taiwan', 'Thailand', 'UAE'
            ],
            'Europe' => [
                'Austria', 'Denmark', 'Finland', 'France', 'Germany', 'Italy', 'Netherlands',
                'Norway', 'Poland', 'Romania', 'South Africa', 'Spain', 'Switzerland',
                'Turkey', 'UK', 'Ukraine'
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
        return view('journals');
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
        return view('apc');
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