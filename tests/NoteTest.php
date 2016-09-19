<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = App\User::first();
        $this->be($user);

        $this->visit('note/create')
            ->type('test', 'title')
            ->type('test', 'description')
            ->attach('tests/6.jpg', 'img')
            ->press('Сохранить')
            ->see('My Application');

        $note = App\Note::orderBy('created_at', 'desc')->first();
        $this->visit('note/'.$note->id.'/edit')
            ->type('test', 'title')
            ->type('test', 'description')
            ->attach('tests/6.jpg', 'img')
            ->press('Изменить')
            ->see('My Application');

        $this->visit('note/'.$note->id)
        ->see('My Application');

    }
}
