<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
        return view('pages.main');
    }

    public function newcompany()
    {
        return view('pages.add-companies');
    }

    public function savecompany(Request $request)
    {
        $data = $request->validate([
        'title' => 'required',
        'address' => 'required',
        'boss' => 'required',
        'desc' => 'required'
    ]);

        $newcompany = new Models\Company([
            'title' => $request->post('title'),
            'address' => $request->post('address'),
            'boss' => $request->post('boss'),
            'desc' => $request->post('desc')
        ]);

        $newcompany->save();

        return redirect("imoniu-sarasas");
    }

    public function companylist()
    {
        $companies = DB::table('company_table')->get();

        return view('pages.companies-list')->with('companies', $companies);
    }

    public function deletecompany($id)
    {
        $company = DB::table('company_table')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function editcompany($id)
    {
        $company = DB::table('company_table')->where('id', $id)->get();

        return view('pages.edit-company')->with('company', $company);
    }

    public function saveeditcompany(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'boss' => 'required',
            'desc' => 'required'
        ]);

        $newcompany = new Models\Company([
            'title' => $request->post('title'),
            'address' => $request->post('address'),
            'boss' => $request->post('boss'),
            'desc' => $request->post('desc')
        ]);

        $company = DB::table('company_table')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                'address' => $request->address,
                'boss' => $request->boss,
                'desc' => $request->desc
            ]);

        return redirect('imoniu-sarasas');
    }
}
