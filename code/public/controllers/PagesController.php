<?php

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $company = 'Your Company';

        return view('aboutus', ['company' => $company]);
    }

    public function contact()
    {
        return view('contacts');
    }
}
