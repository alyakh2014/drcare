<?php

class ContactFormCest 
{
    public function _before(\FunctionalTester $I)
    {
        $I->amOnPage(['/site/contacts']);
    }

    public function openContactPage(\FunctionalTester $I)
    {
        $I->see('Контакты', 'h1');
    }

//    public function submitEmptyForm(\FunctionalTester $I)
//    {
//        $I->submitForm('#contact-form', []);
//        $I->expectTo('see validations errors');
//        $I->see('Контакты', 'h1');
//        $I->see('Значение поля "Имя" не может быть пустым');
//        $I->see('Значение поля "Email" не может быть пустым');
//        $I->see('Значение поля "Тема сообщения" не может быть пустым');
//        $I->see('Значение поля "Сообщение" не может быть пустым');
//        $I->see('Вы ввели не верный код');
//    }
//
//    public function submitFormWithIncorrectEmail(\FunctionalTester $I)
//    {
//        $I->submitForm('#contact-form', [
//            'ContactForm[name]' => 'tester',
//            'ContactForm[email]' => 'tester.email',
//            'ContactForm[subject]' => 'test subject',
//            'ContactForm[body]' => 'test content',
//            'ContactForm[verifyCode]' => 'testme',
//        ]);
//        $I->expectTo('see that email address is wrong');
//        $I->dontSee('Name cannot be blank', '.help-inline');
//        $I->see('Не верный формат email');
//        $I->dontSee('Subject cannot be blank', '.help-inline');
//        $I->dontSee('Body cannot be blank', '.help-inline');
//        $I->dontSee('The verification code is incorrect', '.help-inline');
//    }
//
//    public function submitFormSuccessfully(\FunctionalTester $I)
//    {
//        $I->submitForm('#contact-form', [
//            'ContactForm[name]' => 'tester',
//            'ContactForm[email]' => 'tester@example.com',
//            'ContactForm[subject]' => 'test subject',
//            'ContactForm[body]' => 'test content',
//            'ContactForm[verifyCode]' => 'testme',
//        ]);
//        $I->seeEmailIsSent();
//        $I->dontSeeElement('#contact-form');
//        $I->see('Ваше сообщение успешно отправлено!!!');
//    }
}
