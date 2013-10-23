<?php

namespace Acme\GuestBookBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/guest_book');
// response status
//        $this->assertEquals(200,  $client->getResponse()->getStatusCode());


//// Возвращает значение атрибута для первого узла
//        echo $crawler->attr('class');
//// Возвращает значение узла для первого узла
//        echo $crawler->text();

//        $btn = $crawler->selectButton("sendMessage");
//        var_dump($crawler);
//        echo $crawler->filter('a')->count();
//
//        $this->assertTrue($crawler->filter('html:contains("Все сообщения")')->count() == 0);

// Утверждает что статус-код ответа 2xx
//        $this->assertTrue($client->getResponse()->isSuccessful());

        $form = $crawler->selectButton('sendMessage')->form();
// устанавливает какие-нибудь значения
        $form['post[username]'] = 'Lucas';
        $form['post[email]'] = 'xxx@xzx.com';
        $form['post[message]'] = '111';
// отправляет форму
        for ($i = 0; $i < 5; $i++) {
            $xz = $client->submit($form);
        }
    }
}
