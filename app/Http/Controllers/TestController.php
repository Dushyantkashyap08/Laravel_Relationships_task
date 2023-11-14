<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Category;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //one-to-one-relationship
    public function UsertoContacts(){
        // $user = User::first();
        $user = User::with('contact')->first();
        // return $user->all();
        // return $user->contact;
        dd($user->toArray());//this is dd dump and die method 
    }

    public function ContactToUsers(){
       $contact = Contact::with('user')->first();
       dd($contact->toArray());
    }

    //one-to-many relationship
    public function UserToPost(){
       $user = User::with(['contact','posts'])->find(1);
       dd($user->toArray());
    }

    public function PostToUser(){
        $post = Post::with(['user'])->find(1);
        dd($post->toArray());
     }

     //many-to-many relationship
     public function PosttoCategories(){
        $categories = Category::all();
        $post = Post::with(['categories'])->first();
        $post->categories()->sync([1,2]);// selecting only particular categories
        // $post->categories()->attach([1,2]);// selecting only particular categories
        // $post->categories()->detach([1,2]);// selecting only particular categories
        dd($post->toArray());
     }

   //   has-one-through relationship

   //   public function hasOneThrough(){
   //      $user = User::with('contact.contactinformation')->get();//this will lead us to contactinformation through contacts table
   //      return $user->all();
   //   }
     public function hasOneThrough(){
        $user = User::with('contactContactinformation')->first();//this will lead us directly to contactinformation without indirectly going to contact
        return $user;
     }


      //  has-many-through relationship

   //   public function hasManyThrough(){
   //      $country = Country::with('states.cities')->first();
   //      return $country;
   //   }

   public function hasManyThrough(){
      $country = Country::with('statecity')->first();
      // return $country;
      dd($country->toArray());
   }

}
