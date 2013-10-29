<?php

namespace Acme\GuestBookBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Acme\GuestBookBundle\AcmeGuestBookBundle;

class DefaultControllerTest extends WebTestCase
{

//================================================================
    public function guestBookData()
    {
        return array(
            array(array('user', 'email', 'text')),
            array(array('user1', 'email@mail.ru', 'text1')),
            array(array('user2', 'email1@mail.ru', '')),
            array(array('user3', 'email2@mail.ru', 'text3')),
            array(array(1, 2, 3)),
        );
    }

//================================================================
//Тест ответа главной страницы гостевой
//    public function testRequestGuestBook() {
//        $client = static::createClient();
//
//        $crawler = $client->request('GET', '/guest_book');
//// Утверждает что статус-код ответа 2xx
//        $this->assertTrue($client->getResponse()->isSuccessful());
//
//// response status
////        $this->assertEquals(200,  $client->getResponse()->getStatusCode());
//    }

//================================================================
//Тест если нет сообщений на странице, должен быть текст "Нет записей"
//    public function testExistMessages() {
//        $client = static::createClient();
//
//        $crawler = $client->request('GET', '/guest_book');
//        $message_count = $crawler->filter('.post_body')->count();
//        if ($message_count == 0) {
////            $this->assertTrue($crawler->filter('.not_message')->text() == 'Нет записей');
//            $this->assertEquals('Нет записей', $crawler->filter('.not_message')->text());
//        }
//        else {
//            $this->assertTrue($message_count > 0);
//        }
//
//    }

//================================================================
//Редирект после отправки формы
//    public function testRedirectAfterFormSubmit() {
//        $client = static::createClient();
//        $crawler = $client->request('GET', '/guest_book');
//
//        $form = $crawler->selectButton('sendMessage')->form();
//// устанавливает какие-нибудь значения
//        $form['post[username]'] = 'Lucas';
//        $form['post[email]'] = 'xxx@xzx.com';
//        $form['post[message]'] = '111';
//// отправляет форму
//        $form_submit = $client->submit($form);
//// Утверждает что ответ - это перенаправление на /guest_book
//        $this->assertTrue($client->getResponse()->isRedirect('/guest_book'));
//
//    }


//================================================================
//Редирект после отправки формы
//    /**
//     * @dataProvider guestBookData
//     */
//    public function testFormSubmit($data) {
//
//    }


//================================================================
//Удаление сообщения
    public function testDelElement() {
        $xz = new AcmeGuestBookBundle();
        $guestBookMock = $this->getMockBuilder('Acme\GuestBookBundle\Controller')
            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock()
        ;

        $result = $guestBookMock->delAction(21);
        var_dump($result);
    }


//================================================================
//Отправка формы используя моки

//================================================================
//Тест сервиса Randomer
    public function testRandomer() {
        $randomer = $this->getMockBuilder('Acme\GuestBookBundle\Randomer')
//            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock()
        ;

        $result = $randomer->generateRandomString();
        $this->assertTrue($result != '' && strlen($result) == 10);
    }


//    public function testIndex()
//    {
//        $client = static::createClient();
//
//        $crawler = $client->request('GET', '/guest_book');
//
//
////// Возвращает значение атрибута для первого узла
////        echo $crawler->attr('class');
////// Возвращает значение узла для первого узла
////        echo $crawler->text();
//
////        $btn = $crawler->selectButton("sendMessage");
////        var_dump($crawler);
////        echo $crawler->filter('a')->count();
////
////        $this->assertTrue($crawler->filter('html:contains("Все сообщения")')->count() == 0);
//
//
//        $form = $crawler->selectButton('sendMessage')->form();
//// устанавливает какие-нибудь значения
//        $form['post[username]'] = 'Lucas';
//        $form['post[email]'] = 'xxx@xzx.com';
//        $form['post[message]'] = '111';
//// отправляет форму
//        for ($i = 0; $i < 5; $i++) {
//            $xz = $client->submit($form);
//        }
//    }
}
