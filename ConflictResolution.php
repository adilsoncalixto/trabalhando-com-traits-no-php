<?php

//fonte: http://php.net/manual/pt_BR/language.oop5.traits.php

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

/*$talker = new Talker;
$talker->smallTalk();
$talker->bigTalk();*/

$talker = new Aliased_Talker;
$talker->smallTalk();
$talker->bigTalk();
$talker->talk();
