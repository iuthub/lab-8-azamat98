<?php
namespace App;
use Illuminate \ Session \ Store ;
class Post
{
private $session ;
// asking session variable from Dep Inj .
public function __construct ( Store $session ){
$this -> session = $session ;
$this -> createDummyData ();
}
public function getPosts ()
{
return $this -> session -> get ('posts');
}
public function getPost ($id)
{
return $this -> session -> get ('posts')[ $id ];
}
public function addPost ($title , $content )
{
$posts = $this -> session -> get ('posts');
array_push ($posts , ['title' => $title , 'body' => $content ]);
$this -> session -> put('posts', $posts );
}
public function editPost ($id , $title , $content )
{
$posts = $this -> session -> get ('posts');
$posts [ $id ] = ['title' => $title , 'body' => $content ];
$this -> session -> put('posts', $posts );
}
private function createDummyData ()
{
$posts = [
[
'title' => 'Learning Laravel ','body' => 'This blog post will get you right on track with Laravel !'
],
[
'title' => 'Something else ',
'body' => 'Some other content '
]
];
$this -> session -> put('posts', $posts );
}
}