<?php

use Illuminate\Database\Seeder;
use App\Resource;
use App\Type;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resource::create([
            'ResourceName' => 'The Name App',
            'slug' => 'The_Name_App',
            'Type' => 'Tool',
            'Img' => 'The-Name-App.png',
            'MoreInfo' => 'To have a unique and easy to remember business name is important for brand recall. This particular tool saves you the struggle of finding the right domain name for your startup.',
            'Link' => 'https://thenameapp.com/',      
        ])->types()->attach(1);


		Resource::create([
            'ResourceName' => 'Amazon Web Services',
            'slug' => 'Amazon_Web_Services',
            'Type' => 'Tool',
            'Img' => 'Amazon-Web-Service.png',
            'MoreInfo' => 'Amazon Web Services, commonly known as AWS, is a web hosting service offered by the ecommerce mogul Amazon. AWS is scalable, flexible and currently offers over 90 services including database storage, content delivery, and other features & functionalities.',
            'Link' => 'https://aws.amazon.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'MailChimp',
            'slug' => 'MailChimp',
            'Type' => 'Tool',
            'Img' => 'Mailchimp.png',
            'MoreInfo' => 'To run a successful email marketing campaign and to keep your audience updated about offers, you need an efficient newsletter service. This is where MailChimp comes into the picture. MailChimp offers a free startup package with all the basics features. Paid services begin from $10 per month.',
            'Link' => 'https://mailchimp.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Glasshat',
            'slug' => 'Glasshat',
            'Type' => 'Tool',
            'Img' => 'GlassHat.png',
            'MoreInfo' => 'Glasshat comes across as a super-efficient SEO tool that helps startup owners in planning their SEO and other digital marketing activities. This tool prepares a list of activities and also educates new entrepreneurs why a particular activity is important for their startup.',
            'Link' => 'http://www.glasshat.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Asana',
            'slug' => 'Asana',
            'Type' => 'Tool',
            'Img' => 'Asana.png',
            'MoreInfo' => 'Asana is a web & mobile based project management tool that was built for improving workflow at Facebook. Eventually, and inevitably, the efficiency of Asana made it a prominent name among almost all startup owners across the world. This project management software allows users to assign tasks as per their status, add assignees & get activity feed, view log reports, and a lot more.',
            'Link' => 'https://asana.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'StockSnap.io',
            'slug' => 'StockSnap',
            'Type' => 'Tool',
            'Img' => 'Stocksnap.png',
            'MoreInfo' => 'A picture is worth a thousand words, and this is why all businesses know the importance of using high quality images to create better engagement. StockSnap is a website from where you can get high resolution stock images. The website offers all these images absolutely free of cost.',
            'Link' => 'https://stocksnap.io/',      
        ])->types()->attach(1); 
               
		Resource::create([
            'ResourceName' => 'Wave',
            'slug' => 'Wave',
            'Type' => 'Tool',
            'Img' => 'Wave.png',
            'MoreInfo' => 'Wave is a free online accounting tool for startups and small businesses. The website helps you track all your expenses and incomes, and also helps you with your taxes when the time comes – thus, can help you save a lot of time & effort, usually involved in these procedures.',
            'Link' => 'https://www.waveapps.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Aytm',
            'slug' => 'Aytm',
            'Type' => 'Tool',
            'Img' => 'Aytm.png',
            'MoreInfo' => 'There are plenty of survey tools available in the market today. What sets Aytm apart from all those tools is the fact that it not only helps you in creating a survey form, but also helps you in reaching out to the right audience that will be interested in taking these surveys.',
            'Link' => 'http://aytm.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Recruiterflow',
            'slug' => 'Recruiterflow',
            'Type' => 'Tool',
            'Img' => 'Recruiterflow.png',
            'MoreInfo' => 'Whether you designate people for human resources, or you decide to handle it on your own, you want the whole process to be easily manageable. Recruiterflow is efficient recruiting software to help startups manage all their activities and planning revolving around the human resource department.',
            'Link' => 'https://recruiterflow.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Freshdesk',
            'slug' => 'Freshdesk',
            'Type' => 'Tool',
            'Img' => 'Freshdesk.png',
            'MoreInfo' => 'Freshdesk is the answer to all your questions pertaining to customer support. From ticketing to tracking to FAQs, Freshdesk can help you sail through the ocean of customer support without breaking a sweat.',
            'Link' => 'https://freshdesk.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Hootsuite',
            'slug' => 'Hootsuite',
            'Type' => 'Tool',
            'Img' => 'Hootsuite.png',
            'MoreInfo' => 'Hootsuite, the most popular social media marketing management tool among startups. This nifty tool can help you manage over 35 most popular social media networks from just one dashboard. With Hootsuite included in your social media marketing mix, there’s no more clutter and missed out opportunities from social networks. Hootsuite saves the day, everyday.',
            'Link' => 'https://hootsuite.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Optimizely',
            'slug' => 'Optimizely',
            'Type' => 'Tool',
            'Img' => 'Optimizely.png',
            'MoreInfo' => 'Conversion Rate is one aspect that each and every business depends on. We all know how important A/B testing is to ensure your ecommerce startup (or any business for that matter) is able to covert efficiently, and hence, Optimizely. The name is synonymous to A/B testing in the business world and helps you in fine tuning your webpages to ensure high conversion rate.',
            'Link' => 'https://www.optimizely.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'BetaList',
            'slug' => 'BetaList',
            'Type' => 'Tool',
            'Img' => 'BataList.png',
            'MoreInfo' => 'Beta List is a prelaunch traction system that lets you list your startup before launching it, absolutely free of cost. Free submission entails a waiting period of two months after submission. The prime benefit of this platform is that you get to showcase your startup idea in the community of business enthusiasts and get valuable feedback from them.',
            'Link' => 'https://betalist.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'SemRush',
            'slug' => 'SemRush',
            'Type' => 'Tool',
            'Img' => 'SemRush.png',
            'MoreInfo' => 'SemRush is an all in one marketing toolkit that helps startup owners in carrying out their competitor research easily and effectively. SemRush’s other prominent services include technical SEO audit of your website, semantic core collection, ideas for generating organic traffic, and so on.',
            'Link' => 'https://www.semrush.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'AngelList',
            'slug' => 'AngelList',
            'Type' => 'Tool',
            'Img' => 'AngelList.png',
            'MoreInfo' => 'AngelList is a platform that every startup must know about. Not only does it help startups connecting with potential investors, but also helps them find experienced professionals who would be interested in working for them.On AngelList, professionals & startups require no middle man to connect.',
            'Link' => 'https://angel.co/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Google Docs/Sheets/Slides/Forms',
            'slug' => 'GoogleDocs/Sheets/Slides/Forms',
            'Type' => 'Tool',
            'Img' => 'Googledocs.png',
            'MoreInfo' => 'A Free alternative to the MS Office suite, the office tools offered by Google help startup owners to create and share word documents, excel sheets, presentations and forms, and share them with their team members without having to send the edited files again and again. Its accessibility options further ensure only selected people can view the files.',
            'Link' => 'https://www.google.com/docs/about/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Hemingway',
            'slug' => 'Hemingway',
            'Type' => 'Tool',
            'Img' => 'Hemingway.png',
            'MoreInfo' => 'Hemingway is an online word editor that lets you analyze the readability of your content. It also tells you the changes you should make to your content to make it more readable by telling you which sentence needs what kind of fix.',
            'Link' => 'http://hemingwayapp.com/',      
        ])->types()->attach(1);

		Resource::create([
            'ResourceName' => 'Canva',
            'slug' => 'Canva',
            'Type' => 'Tool',
            'Img' => 'Canva.png',
            'MoreInfo' => 'Canva is an online graphic design tool used for generating social posts, blog graphics, Twitter headers, Facebook ads and the likes. The website holds a library of around a million fonts, photos, as well as icons. Users can select a design template or opt to create one from scratch using drag-and-drop features. Uploading, adding and creating images is quite an easy task with Canva.',
            'Link' => 'https://www.canva.com/',      
        ])->types()->attach(1);

        Resource::create([
            'ResourceName' => 'Global Accelerator Network',
            'slug' => 'Gan',
            'Type' => 'Tool',
            'Img' => 'Gan.png',
            'MoreInfo' => 'Gan.co, or GAN, is an incredible resource for startups comprised of more than 70 accelerators across six continents and 100 cities. GAN offers a way for startups to benefit from short-term, mentorship-based programs that help them launch in a smart, strategic way.',
            'Link' => 'https://www.gan.co/',      
        ])->types()->attach(1);

        Resource::create([
            'ResourceName' => 'Startup Grind',
            'slug' => 'StartupGrind',
            'Type' => 'Tool',
            'Img' => 'StartupGrind.png',
            'MoreInfo' => 'Billed as one of the largest startup communities in the world, Startup Grind brings together more than 400,000 entrepreneurs in 85 countries and 200 cities. The community offers a network of resources, which include events, partnerships with organizations like Google for Entrepreneurs and media opportunities.',
            'Link' => 'https://www.startupgrind.com/',      
        ])->types()->attach(1);

        Resource::create([
            'ResourceName' => 'Young Entrepreneur\'s Council',
            'slug' => 'Yec',
            'Type' => 'Tool',
            'Img' => 'Yec.png',
            'MoreInfo' => 'Young Entrepreneur Council, created by entrepreneurs is an application-only resource that offers startups considerable support and resources. For marketing, YEC offers a free website, numerous opportunities for media exposure, tools for brand-building and invitations to special events and conferences.',
            'Link' => 'http://www.yec.co/',      
        ])->types()->attach(1);

        Resource::create([
            'ResourceName' => 'How to Become a Millionaire by Age 30',
            'slug' => 'MillionaireByAge30',
            'Type' => 'Article',
            'Img' => '100000.jpeg',
            'MoreInfo' => 'Getting rich and becoming a millionaire is a taboo topic. And saying it can be done by the age of 30 seems like a fantasy. Well, it shouldn’t be taboo and it is possible. At the age of 21, I got out of college, broke and in debt. And by the time I was 30, I was a millionaire.',
            'Link' => 'https://www.entrepreneur.com/slideshow/299322',      
        ])->types()->attach(3);

        Resource::create([
            'ResourceName' => 'Essentials of Entrepreneurship: Thinking & Action',
            'slug' => 'Essentials_of_Entrepreneurship',
            'Type' => 'Course',
            'Img' => 'coursera.png',
            'MoreInfo' => 'Success in business can be greatly enhanced with an understanding of key entrepreneurial characteristics and competencies solutions. This interactive course provides potential entrepreneurs with the knowledge of succeeding in an entrepreneurial opportunity.',
            'Link' => 'https://www.coursera.org/learn/entrepreneurial-thinking?ranMID=40328&ranEAID=*GqSdLGGurk&ranSiteID=.GqSdLGGurk-fssu5Xg72KSBySCYFwnRSw&siteID=.GqSdLGGurk-fssu5Xg72KSBySCYFwnRSw&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=*GqSdLGGur',      
        ])->types()->attach(2);
    }
}
