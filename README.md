Contacts Module
========================

Technologies & versions:
- Magento 2.1.3
        
Content
========================
Build a first Magento Module

- Créer un Controller et ses actions
- Créer une vue pour son module
- Créer un bloc
- Installer et Upgrader son module
- Créer une interface d'administration
- Créer un model, la base de données
- Créer une grille (uiComponent listing) dans l'administration
- Les formulaire (uiComponent form) du backend et le CRUD dans l'administration
- Afficher notre collection dans notre template de bloc magento 2
- Surcharger une classe native magento 2 (Model, Block, Helper, Action...)
- Les mécanisme d'Event Observer sous Magento2
- Les helpers
- Ajouter un champs de configuration dans l'administration
- Les traductions statiques et dynamiques
- La sécurité : Comment restreindre l'accés à son module via les ACLs
- Les cookies, les sessions et le registre
- Ajouter une étape dans le checkout

Install
========================
- Download project https://github.com/molodoi/Contacts.git
- Extract archive and copy all directories from Contacts to app/code/Ticme/Contact
- php bin/magento setup:upgrade
- rm -rf pub/static/* 
- rm -rf var/*
- php bin/magento setup:static-content:deploy