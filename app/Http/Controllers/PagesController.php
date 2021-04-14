<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       // return 'INDEX';
       // return view('pages.index');
       // there are two method to pass the title 
       // return view('pages.index')->with('title',$title);
        $title = 'Welcome to Bootstrap index page!';
        return view ('pages.index', compact('title'));
    }

   public function login(){
      
          $title = 'this is a login form page';
          return view ('pages.login', compact('title'));
         
    }
    public function signup(){
      
      $title = 'this is a login form page';
      return view ('pages.signup', compact('title'));
     
    }



    public function img1(){
      
       $title = 'this is a login form page';
      return view ('pages.img1', compact('title'));
     
     }
     public function img2(){
      
      $title = 'this is a login form page';
     return view ('pages.img2', compact('title'));
    
    }
    public function img3(){
      
      $title = 'this is a login form page';
     return view ('pages.img3', compact('title'));
    
    }
    public function img4(){
      
      $title = 'this is a login form page';
     return view ('pages.img4', compact('title'));
    
    }
    // public function services(){

      //  $title = 'this is the services page';
       // return view('pages.services')->with('title',$title);
    
      //   $data =array(
        //     'title' =>'services',
          //   'services' =>['web design', 'programming', 'machine learning']
            
         //);
         //return view('pages.services')->with($data);
      
      
 }
      
      
     

