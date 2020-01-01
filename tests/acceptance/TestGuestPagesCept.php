<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/Join/Login pages');
$I->amOnPage('/');
$I->see('Wellcome', 'h1');
$I->seeLink('Join', '/user/join');
$I->seeLink('Login', '/user/login');

$I->amOnPage('/user/join');
$I->see('Join us', 'h1');

$I->amOnPage('/user/login');
$I->see('Log in', 'h1');