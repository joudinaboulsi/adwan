<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Mail;
use GuzzleHttp;

class PagesController extends Controller
{
    //Home page
    public function home()
    {
        $news = DB::table('news')->orderByDesc('date')->limit(3)->get();
        return view('home', compact('news'));
    }

    //about page
    public function about()
    {
        return view('about');
    }
    
    //projects page
    public function projects()
    {
        return view('projects');
    }
    
    //azure page
    public function azure()
    {
        return view('azure');
    }
    
    // send azure email
    public function getAzureForm(Request $request)
    {
      
        $name = $request->input('name');
        $email = $request->input('email');
        $project = "Azure";
        $brochure = url('/emails/Azure-PriceList.pdf');

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.azure', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate');
                $message->to($email)->subject($project.' - Brochure');
                $message->attach($brochure);
            });

            Mail::send('emails.projectAdmin', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Brochure Request from Website');
            });

            \Session::flash('msg', 'Request Successfully Sent!');
            return redirect()->back();
        }
    }
    
    // send azure inquire email
    public function getAzureInquireForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "Azure";

        // if form is full
        if (! empty($_POST))
        {
            $client = new GuzzleHttp\Client();

            $response = $client->request('POST', 'https://adwanrealestate.us12.list-manage.com/subscribe/post?u=f22378c1e9fac78a1e2309663&amp;id=17955f50a0&amp;f_id=00bfb4e0f0', [ 
                'form_params' => [ 
                    'EMAIL' => $email, 
                    'group[54072][1]' => '1'
                ] 
            ]);

            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }

    //downtown page
    public function downtown()
    {
        return view('downtown');
    }
    
    // send downtown email
    public function getDowntownForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $project = "Down Town Views";
        $brochurePath = public_path('img/down/brochure.pdf');
        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.downtown', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate')
                ->to($email)->subject($project.' - Brochure Request from Website')
                  ->attach($brochurePath, ['as' => 'brochure.pdf']);
                
            });

            Mail::send('emails.projectAdmin', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Brochure Request from Website');
            });

            \Session::flash('msg', 'Request Successfully Sent!');
            return redirect()->back();
        }
    }
    
    // send downtown inquire email
    public function getDowntownInquireForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "Down Town Views";

        // if form is full
        if (! empty($_POST))
        {
            $client = new GuzzleHttp\Client();

            $response = $client->request('POST', 'https://adwanrealestate.us12.list-manage.com/subscribe/post?u=f22378c1e9fac78a1e2309663&amp;id=17955f50a0&amp;f_id=00bfb4e0f0', [ 
                'form_params' => [ 
                    'EMAIL' => $email, 
                    'group[54072][1]' => '1'
                ] 
            ]);

            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }
    
    //bluhorizon page
    public function bluHorizon()
    {
        return view('bluhorizon');
    }
    
    // send bluhorizon email
    public function getBluHorizonForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $project = "Blu Horizon";
        $brochure = url('/emails/BluHorizon-PriceList.pdf');

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.bluHorizon', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate');
                $message->to($email)->subject($project.' - Brochure');
                $message->attach($brochure);
            });

            Mail::send('emails.projectAdmin', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Brochure Request from Website');
            });

            \Session::flash('msg', 'Request Successfully Sent!');
            return redirect()->back();
        }
    }
    
    // send bluhorizon inquire email
    public function getBluHorizonInquireForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "BluHorizon";

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }
    
    //illido page
    public function illido()
    {
        return view('illido');
    }
    
    // send illido email
    public function getIlLidoForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $project = "Il Lido";
        $brochure = url('/emails/IlLido-PriceList.pdf');

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.ilLido', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate');
                $message->to($email)->subject($project.' - Brochure');
                $message->attach($brochure);
            });

            Mail::send('emails.projectAdmin', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Brochure Request from Website');
            });

            \Session::flash('msg', 'Request Successfully Sent!');
            return redirect()->back();
        }
    }
    
    // send illido inquire email
    public function getIlLidoInquireForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "IlLido";

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }
    
    //Iliados page
    public function Iliados()
    {
        return view('iliados');
    }

    
    // send Iliados email
    public function getIliadosForm(Request $request)
    {   dd($request);
     
        $name = $request->input('name');
        $email = $request->input('email');
        $project = "Iliados 3";

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.Iliados', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate');
                $message->to($email)->subject($project.' - Brochure');
            });

            Mail::send('emails.projectAdmin', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Brochure Request from Website');
            });

            \Session::flash('msg', 'Request Successfully Sent!');
            return redirect()->back();
        }
    }
    
    // send Iliados inquire email
    public function getIliadosInquireForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "Iliados 3";

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.Iliados', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate');
                $message->to($email)->subject($project.' - Inquired');
            });

            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }
    
    //news page
    public function news()
    {
        $news = DB::table('news')->orderByDesc('date')->get();
        return view('news', compact('news'));
    }
    
    //news details page
    public function newsDetails($news_id)
    {
        $news = DB::table('news')->where('id',$news_id)->get();
        $otherNews = DB::table('news')->whereNotIn('id',[$news_id])->orderByDesc('date')->limit(5)->get();
        $previous = DB::table('news')->where('id',$news_id+1)->get();
        $next = DB::table('news')->where('id',$news_id-1)->get();
        return view('news-details', compact('news', 'otherNews', 'previous', 'next'));
    }
    
    //contact page
    public function contact()
    {
        return view('contact');
    }

    //Get the contact form details and send the mail
    public function getContactForm(Request $request)
    {
        $name = $request->input('name');
        $email_client = $request->input('email');
        $phone = $request->input('phone');
        $msg_client = $request->input('message');
        
        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.contact', array('name' => $name, 'email_client' => $email_client, 'phone' => $phone, 'msg_client' => $msg_client), function($message) use ($email_client, $name)
            {
                $message->from($email_client, $name);
                $message->to('marc@adwanrealestate.com')->subject('Message from Website');
            });

            \Session::flash('msg', 'Message Successfully Sent!' );
            return redirect()->back();
        }
    }
    
    //work page
    public function work()
    {
        return view('work');
    }

    //Get the work form details and send the mail
    public function getWorkForm(Request $request)
    {
        $name = $request->input('name');
        $email_client = $request->input('email');
        $phone = $request->input('phone');
        $files = $request->file('file');
        $msg_client = $request->input('message');
        
        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.work', array('name' => $name, 'email_client' => $email_client, 'phone' => $phone, 'msg_client' => $msg_client), function($message) use ($email_client, $name, $files)
            {
                $message->from($email_client, $name);
                $message->to('marc@adwanrealestate.com')->subject('Careers Request from Website');
                if($files != NULL)
                    $message->attach($files->getRealPath(), array('as' => 'attachment.'.$files->getClientOriginalExtension(), 'mime' => $files->getMimeType()));
            });

            \Session::flash('msg', 'Message Successfully Sent!' );
            return redirect()->back();
        }
    }

    public function damareos(){
        return view('damareaos');
    }

    public function getDamareosForm(Request $request){
     
        $brochurePath = public_path('img/danareos/brochure.pdf');
        $name = $request->input('name');
        $email = $request->input('email');
        $project = "Damareos 59";
      

          Mail::send('emails.damareos', array('name' => $name, 'email' => $email, 'project' => $project), function($message) use ($email, $project, $brochure)
            {
                $message->from('marc@adwanrealestate.com', 'Adwan Real Estate')
                ->to($email)->subject($project)
                ->attach($brochurePath, ['as' => 'brochure.pdf']);
            });

            \Session::flash('msg', 'Request Successfully Sent!');
            return redirect()->back();
       
    }


    public function damagitou(){
        return view('damagitou');
    }
        
    // send azure inquire email
    public function getDamagitouInquireForm(Request $request)
    {
        // dd($request);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "Damagitou 5";

        // if form is full
        if (! empty($_POST))
        {
            $client = new GuzzleHttp\Client();

            $response = $client->request('POST', 'https://adwanrealestate.us12.list-manage.com/subscribe/post?u=f22378c1e9fac78a1e2309663&amp;id=17955f50a0&amp;f_id=00bfb4e0f0', [ 
                'form_params' => [ 
                    'EMAIL' => $email, 
                    'group[54072][1]' => '1'
                ] 
            ]);

            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }


        // frinis page
    public function frinis(){
        return view('frinis38');
    }

       public function getFrinidInquireForm(Request $request)
    {
        // dd($request);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $project = "Frinid 38";

        // if form is full
        if (! empty($_POST))
        {
            $client = new GuzzleHttp\Client();

            $response = $client->request('POST', 'https://adwanrealestate.us12.list-manage.com/subscribe/post?u=f22378c1e9fac78a1e2309663&amp;id=17955f50a0&amp;f_id=00bfb4e0f0', [ 
                'form_params' => [ 
                    'EMAIL' => $email, 
                    'group[54072][1]' => '1'
                ] 
            ]);

            Mail::send('emails.projectInquireAdmin', array('name' => $name, 'email' => $email, 'phone' => $phone, 'project' => $project), function($message) use ($email, $name, $project)
            {
               $message->from($email, $name);
               $message->to('marc@adwanrealestate.com')->subject($project.' - Inquire Request from Website');
            });

            \Session::flash('msg', 'Thank you, a member of our sales team will contact you very shortly.');
            return redirect()->back();
        }
    }


}
