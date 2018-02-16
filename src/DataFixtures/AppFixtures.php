<?php

namespace App\DataFixtures;

use App\Entity\Company;
use App\Entity\Entry;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $companies = [];
        $types = [];

        // Create companies
        for ($i = 1; $i <= 3; $i++) {
            $letter = $this->getLetter($i);
            $company = $this->createCompany('Company ' . $letter, str_repeat($letter, 3));
            $manager->persist($company);
            $companies[] = $company;
        }

        // Create news types
        $type = $this->createType('RNS', '#rns');
        $manager->persist($type);
        $types[] = $type;

        $type = $this->createType('Press releases', '#press');
        $manager->persist($type);
        $types[] = $type;

        // Create news entries
        $entry = $this->createEntry($companies[0], $types[0], 'Google', 'https://www.google.co.uk/');
        $manager->persist($entry);

        $entry = $this->createEntry($companies[0], $types[1], 'Amazon', 'https://www.amazon.co.uk/');
        $manager->persist($entry);

        $entry = $this->createEntry($companies[1], $types[0], 'Bing', 'https://www.bing.com/');
        $manager->persist($entry);

        $entry = $this->createEntry($companies[1], $types[1], 'Design Portfolio', 'https://www.design-portfolio.co.uk/');
        $manager->persist($entry);

        // Save all to DB
        $manager->flush();
    }

    private function createCompany($name, $code)
    {
        $company = new Company();
        $company->setName($name);
        $company->setCode($code);

        return $company;
    }

    private function createType($name, $hashtags)
    {
        $type = new Type();
        $type->setType($name);
        $type->setHashtags($hashtags);

        return $type;
    }

    private function createEntry($company, $type, $title, $url)
    {
        $entry = new Entry();
        $entry->setCompany($company);
        $entry->setType($type);
        $entry->setTitle($title);
        $entry->setUrl($url);

        return $entry;
    }

    private function getLetter($i)
    {
        return base_convert($i + 9, 10, 36);
    }
}
