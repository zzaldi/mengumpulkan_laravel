<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk respons");
    }
    public function responseHeader()
    {
        $bodyResponse = [
            'name' => 'Zaldi',
            'school' => 'smk ti bazma'
        ];
        return response(json_encode($bodyResponse), 200)
            ->header('Content-type', "Application/Json")
            ->withHeaders([
                'App' => 'Zaldi',
                'classes' => "XI",
                'web' => 'laravel'
            ]);
    }

    public function ecryptionData()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt,  $decrypt);
    }

    public function redirectTo()
    {
        return "redirect to";
    }

    public function redirectfrom()
    {
        return redirect("/redirect/to");
    }

    public function redirectToNamedRoute()
    {
        return "redirect to with named route";
    }
    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.to"));
    }
}
