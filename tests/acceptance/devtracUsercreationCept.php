<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create users with different roles');
$I->amOnPage('/');
$I->click('Sign in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter your Devtrac Test username');
$I->see('Enter the password that accompanies your username.');
$I->fillField('name','admin');
$I->fillField('pass','admin');
$I->click('Log in');
$I->dontsee('Sorry, unrecognized username or password');
$I->dontseeLink('Have you forgotten your password?');
$I->see('Welcome, admin');
$I->amGoingTo('Add a field worker user');
$I->amOnPage('admin/people/create');
$I->see('This web page allows administrators to register new users. Users');
$I->fillField('name','fieldworker');
$I->fillField('mail','fieldworker@devtrac.com');
$I->fillField('pass[pass1]','fieldworker');
$I->fillField('pass[pass2]','fieldworker');
$I->fillField('taxonomy_vocabulary_5[und]',9);
$I->fillField('field_user_superior[und][0][target_id]','admin');
$I->selectOption('taxonomy_vocabulary_4[und]','Education');
$I->fillField('field_user_firstname[und][0][value]','fieldworker');
$I->fillField('field_user_surname[und][0][value]','fieldworker');
$I->fillField('field_user_aboutme[und][0][value]','Am just a dummy fieldworker inteded for testing purposees only thank you.');
$I->click('Create new account');
$I->click('Sign out');
$I->seeLink('Sign in');