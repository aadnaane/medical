@extends("extes")

@section("source")

<?php

    class first {
        public $fname;
        public $lname;
    }


    $foo = new first();
    $foo->fname = "adnane";
    $foo->lname = "achahbar";
    print_r($foo);
?>

@endsection

