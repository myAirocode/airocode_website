<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap for website';

    public function handle()
    {
        $urls = [
            '/',
            '/about-us',
            '/courses',
            '/contact-us',
            '/privacy-policy',
            '/terms-of-service',
            '/infrastructure',
            '/success-stories',
            '/faculty',
            '/enrollment',
            '/fee-structure',
            '/blog',
            '/faq',
            '/gallery',
            '/placements',
            '/training',
            '/training/2-months',
            '/training/3-months',
            '/training/6-months',
            '/internship',
            '/internship/1-month',
            '/internship/2-months',
            '/internship/3-months',
            '/internship/6-months',
            '/testimonial',
            '/courses/application-full-stack-development',
            '/courses/python-full-stack-development',
            '/courses/web-full-stack-development',
            '/courses/java-full-stack-development',
            '/courses/mern-stack-development',
            '/courses/mean-stack-development',
            '/courses/ai-ml-stack-development',
            '/courses/data-science-stack-development',
            '/services',
            '/services/web-development',
            '/services/software-development',
            '/services/mobile-app-development',
            '/services/ecommerce-development',
            '/services/digital-marketing',
        ];

        // Create XML using DOMDocument for pretty print
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        $urlset = $dom->createElement('urlset');
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $dom->appendChild($urlset);

        foreach ($urls as $url) {
            $urlNode = $dom->createElement('url');
            $loc = $dom->createElement('loc', url($url));
            $urlNode->appendChild($loc);
            $urlset->appendChild($urlNode);
        }

        // Save formatted XML
        $dom->save(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully in proper format!');
    }
}
