<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    //Configuration du favicon
    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addHtmlContentToHead('<link rel="shortcut icon" type="image/png" href="/assets/images/favicon-BO.svg">');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lastname'),
            TextField::new('firstname'),
            TextField::new('message'),
            EmailField::new('email'),
        ];
    }
}
